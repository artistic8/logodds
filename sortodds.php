<?php

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}
/**
 * Returns true if array $needle is contained in array of arrays $haystack 
 */
function in_my_array($needle, $haystack){
    foreach($haystack as $comparedTo){
        $shit1 = array_values($needle);
        $shit2 = array_values($comparedTo);
        sort($shit1); 
        sort($shit2);
        $count1 = count($shit1);
        $count2 = count($shit2);
        if($count1 == $count2){
            $coincidences = 0;
            for($compt = 0; $compt < $count1; $compt++) {
                if($shit1[$compt] == $shit2[$compt]) $coincidences++;
            }
            if($coincidences == $count1) return true;
        }
    }
    return false;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
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
            if(isset($oldRaceData['wins'])) $oldWINS = $oldRaceData['wins'];
            if(isset($oldRaceData['qpl/trio'])) $oldQPLTrio = $oldRaceData['qpl/trio'];
        }
    }
    $racetext = "";

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) < 10) continue;
    
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
    $difference = array_values(array_unique(array_diff($trio, $toWin)));
    $intersection = array_Values(array_unique(array_intersect($toWin, $trio)));

    if(isset($oldWINS)) $wins = $oldWINS;
    else $wins = [];

    if(isset($oldQPLTrio)) $qplTrios = $oldQPLTrio;
    else $qplTrios = [];
    
    if(!empty($difference)) {
        if(!in_my_array($difference, $wins)) $wins[] = $difference;
    } 

    $qplTrio = array_values(array_unique(array_merge($intersection, $difference)));
    if(!in_my_array($qplTrio, $qplTrios)) $qplTrios[] = $qplTrio;
        
    $WINSText = "[";
    $allWinsValues = [];
    $someCounter = 0;
    $someLength = count($wins);
    foreach($wins as $winsItem){
        $allWinsValues = array_values(array_unique(array_merge($allWinsValues, $winsItem)));
        $WINSText .= "[" . implode(", ", $winsItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $WINSText .= ", ";
    }
    $WINSText .= "]";

    $allQplValues = [];
    $QPLText = "[";
    $someCounter = 0;
    $someLength = count($qplTrios);
    foreach($qplTrios as $qplItem){
        $allQplValues = array_values(array_unique(array_merge($allQplValues, $qplItem)));
        $QPLText .= "[" . implode(", ", $qplItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $QPLText .= ", ";
    }
    $QPLText .= "]";

    //1. Sort  qplValues by odds
    $qplsOdds = [];
    foreach($allQplValues as $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allQplValues = array_keys($qplsOdds);
    $first1 = $allQplValues[0];

    //keep only the trios that contain wins containing exactly two elements
    $new2Trios = [];
    $new3Trios = [];
    foreach($wins as $winsItem){
        if(count($winsItem) == 2){
            $itemValues = array_values($winsItem);
            foreach($qplTrios as $qplItem){
                if(in_array($itemValues[0], $qplItem) && in_array($itemValues[1], $qplItem)){
                    if(!in_my_array($qplItem, $new2Trios)){
                        $new2Trios[] = $qplItem;
                    }
                }
            }
        }
        if(count($winsItem) == 3){
            $itemValues = array_values($winsItem);
            foreach($qplTrios as $qplItem){
                if(in_array($itemValues[0], $qplItem) && in_array($itemValues[1], $qplItem) && in_array($itemValues[2], $qplItem)){
                    if(!in_my_array($qplItem, $new3Trios)){
                        $new3Trios[] = $qplItem;
                    }
                }
            }
        }
    }

    $showRace = true;

    //Sort  allWinsValues by odds
    $qplsOdds = [];
    foreach($allWinsValues as $iKey => $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
        else $showRace = false;
    }
    asort($qplsOdds);
    $allWinsValues = array_keys($qplsOdds);

    $racetext .= "\t\t'wins' =>  $WINSText ,\n";
    $racetext .= "\t\t'qpl/trio'       =>  $QPLText ,\n";
    $racetext .= "\t\t'All QPL values'    =>  '" . implode(", ", $allQplValues).  "',\n";
    $racetext .= "\t\t'All Runners   '    =>  '" . implode(", ", $runners).  "',\n";

    $tce = array_slice($runners, 0, 6);
    $whatever = array_slice($allQplValues, 0, 6);
    $diff1 = array_diff($tce, $whatever);
    $diff2 = array_diff($whatever, $tce);

    $forReference = array_diff($allQplValues, $allWinsValues);
    $weird = array_diff($runners, $allQplValues);
    $weird = array_values($weird);
    //1. Find those in allQplValues that have lower odds than weird[0]
    if(!empty($weird)){
        $mySet1 = [];
        foreach($allQplValues as $value){
            if($allOdds[$raceNumber][$value] >= $allOdds[$raceNumber][$weird[0]]){
                $mySet1[] = $value;
            }
        }
        if(!empty(array_intersect($mySet1, $forReference)) 
            && !in_array(1, $forReference)
            && count($forReference) > 3 
            && in_array($first1, $forReference) 
            && $first1 != 1)
        {
                $WP = $first1;
        }
    }
    //2. Find those in weird that have better odds than end($allQplValues)
    $mySet2 = [];
    foreach($weird as $value){
        if($allOdds[$raceNumber][$value] <= $allOdds[$raceNumber][end($allQplValues)]){
            $mySet2[] = $value;
        }
    }
    
    if(!empty($allWinsValues)){
        $lowerBound = $allWinsValues[0];
        $higherBound = $allWinsValues[count($allWinsValues) - 1];
        $smallSet = [];
        $mediumSet= [];
        $bigSet = [];

        foreach($allQplValues as $putain){
            if($allOdds[$raceNumber][$putain] < $allOdds[$raceNumber][$lowerBound]) $smallSet[] = $putain;
            if($allOdds[$raceNumber][$putain] > $allOdds[$raceNumber][$lowerBound] 
                && $allOdds[$raceNumber][$putain] < $allOdds[$raceNumber][$higherBound]
                && !in_array($putain, $allWinsValues)) {
                    $mediumSet[] = $putain;
                }
            if($allOdds[$raceNumber][$putain] > $allOdds[$raceNumber][$higherBound]) $bigSet[] = $putain;
        }

        if(count($forReference) >= 4 ){
            if($first1 != 1 && in_array($first1, $forReference) && count($smallSet) < 3 && !empty($allWinsValues))
            {
                $Place = $first1;
            }
        }
        if(!empty($diff1) && (isset($WP) || isset($Place))){
            if(empty(array_diff($diff1, [1]))){
                $racetext .= "\t\t'WP' =>  '1',\n";
            }
            else{
                $racetext .= "\t\t'WP' =>  '" . $first1 . "',\n";
            }
            $racetext .= "\t\t'diff1' =>  '" . implode(", ", $diff1) . "',\n";
            $racetext .= "\t\t'diff2' =>  '" . implode(", ", $diff2) . "',\n";
            $racetext .= "\t\t'Tce' =>  '" . implode(", ", $tce) . "',\n";
        }
    }
    $racetext .= "\t],\n";
    unset($oldWINS);
    unset($oldQPLTrio);
    unset($WP);
    unset($Place);
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);