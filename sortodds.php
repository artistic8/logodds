<?php

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

    $size = count($runners);
    $racetext .= "\t\t//Based on win odds\n";
    $first = $runners[0];
    $pos = array_search($size, $runners);
    if($pos == count($runners) - 1){
        $racetext .= "\t\t'WP' => '" . $first .  "',\n";
    }
    for($k = $size; $k > floor($size / 2); $k --)
    {
        $posK = array_search($k, $runners);
        if($posK + 1 == $k && isset($runners[$size - 1 - $posK])){
           $racetext .= "\t\t'candidate(". "k = $k)" . "' => '" . $runners[$size - 1 - $posK] .  "',\n";
        }
    }
    if(isset($placers)){
        $racetext .= "\t\t//Based on pla odds\n";
        $first = $placers[0];
        $pos = array_search($size, $placers);
        if($pos == count($placers) - 1){
            $racetext .= "\t\t'WP' => '" . $first .  "',\n";
        }
        for($k = $size; $k > floor($size / 2); $k --)
        {
            $posK = array_search($k, $placers);
            if($posK + 1 == $k && isset($placers[$size - 1 - $posK])){
            $racetext .= "\t\t'candidate(". "k = $k)" . "' => '" . $placers[$size - 1 - $posK] .  "',\n";
            }
        }
    }
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
