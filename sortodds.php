<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    foreach($odds as $i => $oddsI){
            $proba[$i] = 100 * (log($oddsI) / $oddsI) / exp(1);
            $sum += $proba[$i];
            }
    foreach($odds as  $i => $oddsI){
        //adjust to 100 percentage
        $proba[$i] = round( $proba[$i] * 100 / $sum, 2);
    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpArray = $probas[$raceNumber];

    $indicators = ['R (O) position' => 0, 'B (E) position' => 0];

    $values = array_values($tmpArray);
    for($j = 0; $j < count($values); $j ++)
    {
        if(($j + 1) % 2 === 1) $indicators['R (O) position'] += $values[$j];
        else $indicators['B (E) position'] += $values[$j];
    }

    if(abs($indicators['R (O) position'] - $indicators['B (E) position']) < 0.9) {
        $outtext .= "\t\t'Equal positions.' \n";
    }

    $runners = array_keys($tmpArray);
    $outtext .= "\t\t'" . implode(", ", $runners) . "',\n";
    $first4 = array_slice($runners, 0, 4);
    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));

    if(in_array($runners[0], $blacks)){
        $firstThree = array_slice($sBlacks, 0, 3);
        $firstThreeReds = array_slice($sReds, 0, 3);
        $lastThreeReds = array_slice($sReds, -3);
        $fct = implode(", ", $firstThree) . " X "  . implode(", ", $firstThreeReds);
        $qpl = implode(", ", $firstThree) . " X "  . implode(", ", $lastThreeReds);
    }
    else{
        $firstThree = array_slice($sReds, 0, 3);
        $firstThreeBlacks = array_slice($sBlacks, 0, 3);
        $lastThreeBlacks = array_slice($sBlacks, -3);
        $fct = implode(", ", $firstThree) . " X "  . implode(", ", $firstThreeBlacks);
        $qpl = implode(", ", $firstThree) . " X "  . implode(", ", $lastThreeBlacks);
    }

    $place = array_diff($first4, $firstThree);

    $outtext .= "\t\t'PLA' => " . "'" . implode(", ", $place) . "'" . ",\n";
    $outtext .= "\t\t'WIN' => " . "'" . implode(", ", $firstThree) . "'" . ",\n";
    $outtext .= "\t\t'FCT' => " . "'" . $fct . "'" . ",\n";
    $outtext .= "\t\t'QPL' => " . "'" . $qpl . "'" . ",\n";
   
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
