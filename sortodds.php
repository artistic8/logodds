<?php

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}
/**
 * Returns true if two dimentional array $needle is already contained in $haystack 
 */
function in_my_array($needle, $haystack){
    foreach($haystack as $comparedTo){
        $shit1 = array_values($needle);
        $shit2 = array_values($comparedTo);
        if($shit1[0] == $shit2[0] && $shit1[1] == $shit2[1]) return true;
    }
    return false;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";
if(file_exists($outFile)){
    $oldData = include($outFile);
}
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


$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    if(isset($oldData)){
        if(isset($oldData[$raceNumber])){
            $oldRaceData = $oldData[$raceNumber];
            if(isset($oldRaceData['fqqpl'])) $oldFQQPL = $oldRaceData['fqqpl'];
        }
    }

    $racetext = "";

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) < 11) continue;
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $values = array_values($tmpArray);

    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
       
    $first1 = $runners[0];

    if(in_array($first1, $blacks)){
       $favorites = $sBlacks;
       $others = $sReds;
    }
    else{
       $favorites = $sReds;
       $others =$sBlacks;
    }

    $trio = array_merge(array_slice($favorites, 0, 3), array_slice($others, 0, 2));

    $qplLeftSide = [$favorites[0], $favorites[1], $favorites[2], $others[0], $others[1]];
    $qplRightSide = [ $others[3], $favorites[count($favorites) - 3], $others[count($others) - 3], end($favorites), end($others) ];
    $toWin = [];
    for($indexL = 0; $indexL < count($qplLeftSide); $indexL++) {
        for($indexR = 0; $indexR < count($qplRightSide); $indexR++) {
            $left = $qplLeftSide[$indexL];
            $right = $qplRightSide[$indexR];
            if( 
                (abs(numericalValue($left) - numericalValue($right)) <= 2)
                &&
                (
                    (in_array($left, $sReds) && in_array($right, $sBlacks))
                    || (in_array($left, $sBlacks) && in_array($right, $sReds))
                )
            ){
                if(!in_array($left, $toWin)) $toWin[] = $left;
                if(!in_array($right, $toWin)) $toWin[] = $right;
            }
        }
    }
    $difference1 = array_diff($toWin, $trio);
    $difference2 = array_diff($trio, $toWin);
    $intersection = array_intersect($toWin, $trio);

    // $racetext .= "\t\t'F: " . implode(", ", $favorites) . "',\n";
    // $racetext .= "\t\t'O: " . implode(", ", $others) . "',\n";

    if(isset($oldFQQPL)) $fQQPL = $oldFQQPL;
    else $fQQPL = [];
    if(isset(array_values($intersection)[0]) && isset(array_values($difference1)[0])){
        $firstValue = array_values($intersection)[0];
        $secondValue = array_values($difference1)[0];
        if(!empty($firstValue) && !empty($secondValue)){
            $toAddToQQPL = [$firstValue, $secondValue];
            if(!in_my_array($toAddToQQPL, $fQQPL)) $fQQPL[] = $toAddToQQPL;
        }
    }

    if(isset(array_values($difference1)[0]) && isset(array_values($difference2)[0])){
        $firstValue = array_values($difference1)[0];
        $secondValue = array_values($difference2)[0];
        if(!empty($firstValue) && !empty($secondValue)){
            $toAddToQQPL = [$firstValue, $secondValue];
            if(!in_my_array($toAddToQQPL, $fQQPL)) $fQQPL[] = $toAddToQQPL;
        }
    }

    if(count($difference1) == 2) {
        $racetext .= "\t\t'Win' =>  '" . implode(", ", $difference1) . "',\n";
        if(!in_my_array($difference1, $fQQPL)) $fQQPL[] = $difference1;
    }
    if(count($difference2) == 2) {
        $racetext .= "\t\t'Win' =>  '" . implode(", ", $difference2) . "',\n";
        if(!in_my_array($difference2, $fQQPL)) $fQQPL[] = $difference2;
    }
    if(count($intersection) == 2) {
        $racetext .= "\t\t'Win' =>  '" . implode(", ", $intersection) . "',\n";
        if(!in_my_array($intersection, $fQQPL)) $fQQPL[] = $intersection;
    }

    if(!empty($difference2)) 
    {
        $qin1 = implode(", ", $intersection) . ' X ' . implode(", ", $difference1) . ', ' . implode(", ", $difference2);
        if(count($difference1) > 1 && count($difference2) > 1) $qin2 = implode(", ", $difference1) . ' X ' . implode(", ", $difference2);
    }
    else{
        $qin1 = implode(", ", $intersection);
        $qin2 = implode(", ", $intersection) . ' X ' . implode(", ", $difference1);
    }  
    $fQQPLText = "[";
    $someCounter = 0;
    $someLength = count($fQQPL);
    foreach($fQQPL as $fQQPLItem){
        $fQQPLText .= "[" . implode(", ", $fQQPLItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $fQQPLText .= ",";
    }
   
    $fQQPLText .= "]";
    $racetext .= "\t\t'fqqpl' =>  $fQQPLText ,\n";
    
    if(!isset($qin2)){
        $racetext .= "\t\t'Qin' =>  '" . $qin1 . "',\n";
    }
    else{
        $racetext .= "\t\t'Qin1' =>  '" . $qin1 . "',\n";
        $racetext .= "\t\t'Qin2' =>  '" . $qin2 . "',\n";
    }
    $racetext .= "\t],\n";
    unset($qin1);
    unset($qin2);

    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
