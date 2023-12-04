<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "history";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$plaOddsFile = $currentDir . DIRECTORY_SEPARATOR . "placeodds.php";
if(file_exists($plaOddsFile)){
    $allPlaOdds = include($plaOddsFile);
}
$winPositionDifferences = [];
foreach($allWinOdds as $raceNumber => $runners){
    $winPositionDifferences[$raceNumber] = [];
    foreach($runners as $runner){
        $winPositionDifferences[$raceNumber][$runner] = 0;
    }
}
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
//Get win odds (getodds.php) and place odds(placeodds.php) fromthe previous git commit
$output = array();
$history = array();
chdir($currentDir);
exec("git log",$output);
foreach($output as $line){
    if(strpos($line, 'commit')===0){
        $history[]   = substr($line, strlen('commit'));
    }
}
//limit search to last 50 commits
$history = array_slice($history, 0, 50);
exec("git config --global advice.detachedHead false");
for($count = count($history); $count > 1; $count --){
    $oldVersion = $history[$count - 1];
    $newVersion = $history[$count - 2];
    exec("git checkout $oldVersion");
    $oldContents = include("$currentDir/1.php");
    exec("git checkout master");
    exec("git checkout $newVersion");
    $newContents = include("$currentDir/1.php");
    exec("git checkout master");
    foreach($allWinOdds as $raceNumber => $runners){
        foreach($runners as $runner => $whatever){
            $oldOdds = explode(", ", $oldContents[$raceNumber]['Win Odds']);
            $oldRunnerPosition = array_search($runner, $oldOdds);
            $newOdds = explode(", ", $newContents[$raceNumber]['Win Odds']);
            $newRunnerPosition = array_search($runner, $newOdds);
            $winOddsPositionDiff = $newRunnerPosition - $oldRunnerPosition;
            $winPositionDifferences[$raceNumber][$runner] += $winOddsPositionDiff;
        }
    }
   
}

var_dump($winPositionDifferences); die();

die();
if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allWinOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;

    if(isset($oldData)){
        if(isset($oldData[$raceNumber])){
            $oldRaceData = $oldData[$raceNumber];
            if(isset($oldRaceData['history w'])) $historyWs = $oldRaceData['history w'];
            if(isset($oldRaceData['history p'])) $historyPs = $oldRaceData['history p'];
        }
    }

    if(isset($historyWs)) $historyW = explode(", ", $historyWs);
    else $historyW = [];

    if(isset($historyPs)) $historyP = explode(", ", $historyPs);
    else $historyP = [];

    $racetext = "";
    $winsArray = $allWinOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    if(isset($allPlaOdds)){
        $plaArray = $allPlaOdds[$raceNumber];
        asort($plaArray);
        $placers = array_keys($plaArray);
    }
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $racetext .= "\t\t'Win Odds'  =>  '" . implode(", ", $runners).  "',\n";
    if(isset($placers)){
        $racetext .= "\t\t'Pla Odds'  =>  '" . implode(", ", $placers).  "',\n";
    }
    $racetext .= "\t\t'Total Runners '  =>  " . count($runners).  ",\n";

    $size = count($runners);
    $racetext .= "\t\t/** Based on win odds */\n";
    $first = $runners[0];
    $first3 = array_slice($runners, 0, 3);
    $pos = array_search($size, $runners);
    for($k = $size; $k > floor($size / 2); $k --)
    {
        $historyWIsNew = true;
        $posK = array_search($k, $runners);
        if($posK + 1 == $k && isset($runners[$size - 1 - $posK])){
           $candidate = $runners[$size - 1 - $posK];
           if($historyWIsNew && in_array($candidate, $blacks) && !in_array($candidate, $historyW)){
                $historyW[] = $candidate;
                $historyWIsNew = false;
           }
           $racetext .= "\t\t'win odds candidate(". "k = $k)" . "' => '" . $candidate .  "',\n";
        }
    }
    //1. Sort  historyW by odds
    $qplsOdds = [];
    foreach($historyW as $iIndex){
        if(isset($allWinOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allWinOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $historyW = array_keys($qplsOdds);
    if(!empty($historyW)){
        $racetext .= "\t\t/** Black selection */\n";
        $racetext .= "\t\t'history w' => '" . implode(", ", $historyW).  "',\n";
        $sureWinPlace = array_intersect($historyW, $first3);
        if(!empty($sureWinPlace)){
            $racetext .= "\t\t'SURE PLACE' => '" . implode(", ", $sureWinPlace).  "',\n";
        }
    }
    if(isset($placers)){
        $racetext .= "\t\t/** Based on pla odds */\n";
        $first = $placers[0];
        $pos = array_search($size, $placers);
        for($k = $size; $k > floor($size / 2); $k --)
        {
            $posK = array_search($k, $placers);
            if($posK + 1 == $k && isset($placers[$size - 1 - $posK])){
                $candidate = $placers[$size - 1 - $posK];
                if(in_array($candidate, $blacks) && !in_array($candidate, $historyP)){
                        $historyP[] = $candidate;
                }
                $racetext .= "\t\t'pla odds candidate(". "k = $k)" . "' => '" . $candidate .  "',\n";
            }
        }
        //1. Sort  historyP by odds
        $qplsOdds = [];
        foreach($historyP as $iIndex){
            if(isset($allPlaOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allPlaOdds[$raceNumber][$iIndex];
        }
        asort($qplsOdds);
        $historyP = array_keys($qplsOdds);
        if(!empty($historyP)){
            $racetext .= "\t\t'history p' => '" . implode(", ", $historyP).  "',\n";
            $sureWinPlace = array_intersect($historyP, $first3);
            if(!empty($sureWinPlace)){
                $racetext .= "\t\t'SURE PLACE' => '" . implode(", ", $sureWinPlace).  "',\n";
            }
        }
    }
    $racetext .= "\t],\n";
    unset($historyPs);
    unset($historyP);
    unset($historyWs);
    unset($historyW);
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
