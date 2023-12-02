<?php

$blacks = [2, 4, 6, 8, 10, 11, 13];
$reds = [1, 3, 5, 7, 9, 12, 14];

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 2;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$plaOddsFile = $currentDir . DIRECTORY_SEPARATOR . "placeodds.php";
if(file_exists($plaOddsFile)){
    $allPlaOdds = include($plaOddsFile);
}
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

$totalRaces = count($allWinOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;

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

   
    
    if(
        (in_array($runners[0], $blacks) && in_array($runners[1], $blacks))
        ||
        (in_array($runners[0], $reds) && in_array($runners[1], $reds))
    ){
        $racetext .= "\t\t'Win' => '$runners[0], $runners[1] ' \n";
    }
    
    $racetext .= "\t],\n";
   
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
