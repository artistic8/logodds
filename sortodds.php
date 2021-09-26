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
        $firstTwo = array_slice($sBlacks, 0, 2);
        $lastThreeReds = array_slice($sReds, -3);
        $qpl = implode(", ", $firstTwo) . " X "  . implode(", ", $lastThreeReds);
    }
    else{
        $firstTwo = array_slice($sReds, 0, 2);
        $lastThreeBlacks = array_slice($sBlacks, -3);
        $qpl = implode(", ", $firstTwo) . " X "  . implode(", ", $lastThreeBlacks);
    }

    $outtext .= "\t\t'Qin(opt $20)' => " . "'" . implode(", ", $first4) . "'" . ",\n";
    $outtext .= "\t\t'QPL' => " . "'" . $qpl . "'" . ",\n";
   
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
