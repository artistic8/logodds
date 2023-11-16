<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oneFile = $currentDir . DIRECTORY_SEPARATOR . "1.php";
$twoFile = $currentDir . DIRECTORY_SEPARATOR . "2.php";
if(!file_exists($oneFile) || !file_exists($twoFile)){
    exit("No input files!");
}
$oneData = include($oneFile);
$twoData = include($twoFile);

$outFile = $currentDir . DIRECTORY_SEPARATOR . "decision.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$selectedRaces = [];
foreach($oneData as $raceNumber => $oneRaceDate){
   if(isset($twoData[$raceNumber])) $selectedRaces[] = $raceNumber;
}
foreach($twoData as $raceNumber => $oneRaceDate){
    if(isset($oneData[$raceNumber]) && !in_array($raceNumber, $selectedRaces)) $selectedRaces[] = $raceNumber;
 }
 foreach($selectedRaces as $raceNumber){
    $bets1 = $oneData[$raceNumber]['WIN BETS'];
    $bets2 = $twoData[$raceNumber]['WIN BETS'];
    $keys1 = array_keys($bets1);
    $keys2 = array_keys($bets2);
    $diff1 = array_diff($keys1, $keys2);
    $diff2 = array_diff($keys2, $keys1);
    $place = array_merge($diff1, $diff2);
    $racetext = "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $showRace = false;
    if(!empty($place)){
        $racetext .= "\t\t'PLACE' => '" . implode(", ", $place) . "',\n";
        $showRace = true;
    }
    
    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
 }
$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>