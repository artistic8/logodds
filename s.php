<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$probas1 = include($currentDir . DIRECTORY_SEPARATOR . "1.php");
$probas2 = include($currentDir . DIRECTORY_SEPARATOR . "2.php");
$probas3 = include($currentDir . DIRECTORY_SEPARATOR . "3.php");

$totalRaces = count($probas1);

foreach($probas1 as $raceNumber => $raceProbas1){
    var_dump($raceNumber); 
    $winners1 = $raceProbas1['WIN'];
    $S1 = $raceProbas1['S'];

    var_dump($winners1); 
    var_dump($S1); 
    die();
}

?>