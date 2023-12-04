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
    foreach($runners as $runner => $omg){
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
// for($count = count($history); $count > 1; $count --){
    // $oldVersion = $history[$count - 1];
    $oldVersion = "30217ffa664eabedbcf626fc5133bd071d65fd00";
    // $newVersion = $history[$count - 2];
    $newVersion = "76936eef584ca934e2e9241e68d8465bf54ffcfc";
    exec("git checkout $oldVersion");
    $oldContents = include("$currentDir/1.php");
    exec("git checkout master");
    exec("git checkout $newVersion");
    $newContents = include("$currentDir/1.php");
    exec("git checkout master");
    var_dump($oldContents[1]['Win Odds']);
    var_dump($newContents[1]['Win Odds']); die();
    $oldOdds = explode(", ", $oldContents[$raceNumber]['Win Odds']);
    $oldRunnerPosition = array_search(11, $oldOdds);
    var_dump($oldRunnerPosition);
    $newOdds = explode(", ", $newContents[$raceNumber]['Win Odds']);
    $newRunnerPosition = array_search(11, $newOdds);
    var_dump($newRunnerPosition); die();
    $winOddsPositionDiff = $newRunnerPosition - $oldRunnerPosition;
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
// }
var_dump($winPositionDifferences[1]); die();
$outtext = "<?php\n\n";
$outtext .= "return [\n";
$totalRaces= count($allWinOdds);
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;

    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $runnersPositions = $winPositionDifferences[$raceNumber];
    arsort($runnersPositions);
    $runners = array_keys($runnersPositions);

    $racetext .= "\t\t'Runners by odds mvnt'  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
