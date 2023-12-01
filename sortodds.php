<?php

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20];

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$plaOddsFile = $currentDir . DIRECTORY_SEPARATOR . "placeodds.php";
if(file_exists($plaOddsFile)){
    $allPlaOdds = include($plaOddsFile);
}
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

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
            if(isset($oldRaceData['black win odds candidates'])) $oldBlackWinCandidates = $oldRaceData['black win odds candidates'];
            if(isset($oldRaceData['black pla odds candidates'])) $oldBlackPlaCandidates = $oldRaceData['black pla odds candidates'];
        }
    }

    if(isset($oldBlackWinCandidates)) $blackWinCandidates = explode(", ", $oldBlackWinCandidates);
    else $blackWinCandidates = [];

    if(isset($oldBlackPlaCandidates)) $blackPlaCandidates = explode(", ", $oldBlackPlaCandidates);
    else $blackPlaCandidates = [];

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
    $numberOfWinCandidates = 0;
    $numberOfPlaCandidates = 0;
    $first = $runners[0];
    $first3 = array_slice($runners, 0, 3);
    $pos = array_search($size, $runners);
    if($pos == count($runners) - 1){
        $racetext .= "\t\t'WP' => '" . $first .  "',\n";
    }
    for($k = $size; $k > floor($size / 2); $k --)
    {
        $posK = array_search($k, $runners);
        if($posK + 1 == $k && isset($runners[$size - 1 - $posK])){
           $candidate = $runners[$size - 1 - $posK];
           if(in_array($candidate, $blacks) && !in_array($candidate, $blackWinCandidates)){
                $blackWinCandidates[] = $candidate;
           }
           $racetext .= "\t\t'win odds candidate(". "k = $k)" . "' => '" . $candidate .  "',\n";
           $numberOfWinCandidates ++;
        }
    }
    if($numberOfWinCandidates == 0){
        $racetext .= "\t\t//No win candidates(Place bet: $first)\n";
    }
    else{
        if(!empty($blackWinCandidates)){
            $racetext .= "\t\t/** Black selection */\n";
            $racetext .= "\t\t'black win odds candidates' => '" . implode(", ", $blackWinCandidates).  "',\n";
            $sureWinPlace = array_intersect($blackWinCandidates, $first3);
            if(!empty($sureWinPlace)){
                $racetext .= "\t\t'SURE PLACE' => '" . implode(", ", $sureWinPlace).  "',\n";
            }
        }
    }
    if(isset($placers)){
        $racetext .= "\t\t/** Based on pla odds */\n";
        $first = $placers[0];
        $pos = array_search($size, $placers);
        if($pos == count($placers) - 1){
            $racetext .= "\t\t'WP' => '" . $first .  "',\n";
        }
        for($k = $size; $k > floor($size / 2); $k --)
        {
            $posK = array_search($k, $placers);
            if($posK + 1 == $k && isset($placers[$size - 1 - $posK])){
                $candidate = $placers[$size - 1 - $posK];
                if(in_array($candidate, $blacks) && !in_array($candidate, $blackPlaCandidates)){
                        $blackPlaCandidates[] = $candidate;
                }
                $racetext .= "\t\t'pla odds candidate(". "k = $k)" . "' => '" . $candidate .  "',\n";
                $numberOfPlaCandidates ++;
            }
        }
        if($numberOfPlaCandidates == 0){
            $racetext .= "\t\t//No pla candidates(Place bet: $first <== focus on this one for now)\n";
        }
        if(!empty($blackPlaCandidates)){
            $racetext .= "\t\t'black pla odds candidates' => '" . implode(", ", $blackPlaCandidates).  "',\n";
            $sureWinPlace = array_intersect($blackPlaCandidates, $first3);
            if(!empty($sureWinPlace)){
                $racetext .= "\t\t'SURE PLACE' => '" . implode(", ", $sureWinPlace).  "',\n";
            }
        }
    }
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
