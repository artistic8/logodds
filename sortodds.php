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

    $indicators = [ 'B' => 0, 'R' => 0 ];
    
    foreach ($tmpArray as $i => $val){
        if(in_array($i, $blacks)) {
            $indicators['B'] += $val;
        }
        elseif(in_array($i, $reds)) {
            $indicators['R'] += $val;
        }
    }

    arsort($indicators);

    $indicators2 = ['R (O) position' => 0, 'B (E) position' => 0];

    $values = array_values($tmpArray);
    for($j = 0; $j < count($values); $j ++)
    {
        if(($j + 1) % 2 === 1) $indicators2['R (O) position'] += $values[$j];
        else $indicators2['B (E) position'] += $values[$j];
    }

    if(abs($indicators2['R (O) position'] - $indicators2['B (E) position']) < 0.9) {
        $outtext .= "\t\t Equal positions. \n";
    }

    $runners = array_keys($tmpArray);
    $qin10 = array_slice($runners, 0, 4);
    $qpl30 = array_slice($runners, 0, 3);
    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
    if($indicators["B"] > $indicators["R"]){
        $firstBlack = $sBlacks[0];
        $secondBlack = $sBlacks[1];
        $lastThreeReds = array_slice($sReds, -3);
        $qpl20 = $firstBlack . " X "  . implode(", ", $lastThreeReds);
        $qpl10 = $secondBlack . " X "  . implode(", ", $lastThreeReds);
        if(!in_array(1, $lastThreeReds) && $firstBlack != 1 && $secondBlack != 1){
            $qplOthers = "1, " . implode(", ", $lastThreeReds);
        }
        else{
            $qplOthers = implode(", ", $lastThreeReds);
        }
    }
    else{
        $firstRed = $sReds[0];
        $secondRed = $sReds[1];
        $lastThreeBlacks = array_slice($sBlacks, -3);
        $qpl20 = $firstRed . " X "  . implode(", ", $lastThreeBlacks);
        $qpl10 = $secondRed . " X "  . implode(", ", $lastThreeBlacks);
        if(!in_array(1, $lastThreeBlacks) && $firstRed != 1 && $secondRed != 1){
            $qplOthers = "1, " . implode(", ", $lastThreeBlacks);
        }
        else{
            $qplOthers = implode(", ", $lastThreeBlacks);
        }
    }
    $outtext .= "\t\t'Qin 10' => " . implode(", ", $qin10) . ",\n";
    $outtext .= "\t\t'Qpl 30' => " . implode(", ", $qpl30) . ",\n";
    $outtext .= "\t\t'Qpl 20' => " . $qpl20 . ",\n";
    $outtext .= "\t\t'Qpl 10' => " . $qpl10 . ",\n";
    $outtext .= "\t\t'Qpl 10' => " . $qplOthers . ",\n";
   
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
