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
            if(isset($oldRaceData['places'])) $historicPlaces = $oldRaceData['places'];
            if(isset($oldRaceData['inters'])) $oldINTERS = $oldRaceData['inters'];
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

    // $racetext .= "\t\t'F: " . implode(", ", $favorites) . "',\n";
    // $racetext .= "\t\t'O: " . implode(", ", $others) . "',\n";
    
    if(isset($oldWINS)) $wins = $oldWINS;
    else $wins = [];

    if(isset($historicPlaces)) $places = $historicPlaces;
    else $places = [];

    if(isset($oldINTERS)) $inters = $oldINTERS;
    else $inters = [];

    if(isset($oldQPLTrio)) $qplTrios = $oldQPLTrio;
    else $qplTrios = [];
    
    if(!empty($difference)) {
        if(!in_my_array($difference, $wins)) $wins[] = $difference;
    } 

    if(!in_my_array($intersection, $inters)) $inters[] = $intersection;

    $qplTrio = array_values(array_unique(array_merge($intersection, $difference)));
    if(!in_my_array($qplTrio, $qplTrios)) $qplTrios[] = $qplTrio;
        
    $allWinsValues = [];
    $qqpls = [];
    $WINSText = "[";
    $someCounter = 0;
    $someLength = count($wins);
    foreach($wins as $winsItem){
        if(count($winsItem) == 2) {
            $qqpls[] = $winsItem;
        }
        $allWinsValues = array_values(array_unique(array_merge($allWinsValues, $winsItem)));
        $WINSText .= "[" . implode(", ", $winsItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $WINSText .= ", ";
    }
    $WINSText .= "]";
    $NOPLACE = count($qqpls) == 0 || count($qqpls) > 2 ;

    //1. Sort allWinsValues by odds
    $winssOdds = [];
    foreach($allWinsValues as $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $winssOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
    }
    asort($winssOdds);
    $allWinsValues = array_keys($winssOdds);

    $allIntersValues = [];
    $INTERSText = "[";
    $someCounter = 0;
    $someLength = count($inters);
    foreach($inters as $intersItem){
        $allIntersValues = array_values(array_unique(array_merge($allIntersValues, $intersItem)));
        $INTERSText .= "[" . implode(", ", $intersItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $INTERSText .= ", ";
    }
    $INTERSText .= "]";

    $allQplValues = [];
    $QPLText = "[";
    $someCounter = 0;
    $someLength = count($qplTrios);
    $firstQpl = array_values($qplTrios)[0];
    $interQPL = $firstQpl;
    foreach($qplTrios as $qplItem){
        $allQplValues = array_values(array_unique(array_merge($allQplValues, $qplItem)));
        $interQPL = array_intersect($interQPL, $qplItem);
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

    $redQplValues = array_intersect($allQplValues, $reds);
    $blackQplValues = array_intersect($allQplValues, $blacks);

    $placeValues = array_diff($allQplValues, $allWinsValues);

    $place = array_intersect($placeValues, $blackQplValues, $interQPL);

    //$place must be of the same color of the favorite but must be different than the favorite
    foreach($place as $key => $candidate){
        if($candidate == $first1) unset($place[$key]);
        if(in_array($candidate, $blacks) && in_array($first1, $reds)) unset($place[$key]);
        if(in_array($candidate, $reds) && in_array($first1, $blacks)) unset($place[$key]);
    }

    $surePlace = array_intersect($interQPL, $blacks);
    $surePlace = array_diff($surePlace, $allWinsValues);
    $surePlace = array_diff($surePlace, $places);

    $diff1 = array_diff($allWinsValues, $interQPL);
    $diff2 = array_diff($interQPL, $allWinsValues);

    $set1 = array_intersect(array_diff($redQplValues, $allWinsValues), $interQPL);
    $set2 = array_intersect(array_diff($allWinsValues, $redQplValues), $interQPL);
    $set3 = array_intersect($redQplValues, $allWinsValues, $interQPL);
    
    $set4 = array_intersect(array_diff($blackQplValues, $allWinsValues), $interQPL);
    $set5 = array_intersect(array_diff($allWinsValues, $blackQplValues), $interQPL);
    $set6 = array_intersect($blackQplValues, $allWinsValues, $interQPL);
    
    
    $racetext .= "\t\t'wins' =>  $WINSText ,\n";
    $racetext .= "\t\t'qpl/trio' =>  $QPLText ,\n";
    $racetext .= "\t\t'inters' =>  $INTERSText ,\n";
    $racetext .= "\t\t'Favorite' =>  '" . $first1. "',\n";
    $showPlace = !empty($surePlace) && (count($allWinsValues) > 1) && !empty($set1);
    if($showPlace){
        if(in_array($first1, $surePlace)) $surePlace = [$first1];
        $racetext .= "\t\t'Sure Place'    =>  '" . implode(", ", $surePlace). "',\n";
    }
    if(!$NOPLACE && !empty($place)){
        $racetext .= "\t\t'Place'    =>  '" . implode(", ", $place). "',\n";
        $racetext .= "\t\t'QQPL'      =>  '" . implode(", ", $qqpls[0]). "',\n";
        if(isset($qqpls[1])){
            $racetext .= "\t\t'QQPL'      =>  '" . implode(", ", $qqpls[1]). "',\n";
        }
        foreach($place as $key => $candidate){
            if(!in_array($candidate, $places)) $places[] = $candidate;
        }
    }
    if(!empty($places)){
        $racetext .= "\t\t'places'    =>  [" . implode(", ", $places). "],\n";
    }
    $racetext .= "\t\t'Red QPL values'      =>  '" . implode(", ", $redQplValues). "',\n";
    $racetext .= "\t\t'Black QPL values'    =>  '" . implode(", ", $blackQplValues). "',\n";
    $racetext .= "\t\t'All QPL values'      =>  '" . implode(", ", $allQplValues). "',\n";
    $racetext .= "\t\t'place values'        =>  '" . implode(", ", $placeValues). "',\n";
    $BET = array_unique(array_values(array_merge(
        array_slice($redQplValues, 0, 2),
        array_slice($blackQplValues, 0, 2),
        array_slice($allQplValues, 0, 2),
        array_slice($placeValues, 0, 2),
    )));
    sort($BET);
    if(count($BET) === 5){
        $racetext .= "\t\t'TRIO'        =>  '" . implode(", ", $BET). "',\n";
    }
    $racetext .= "\t\t'Inter QPL' =>  '" . implode(", ", $interQPL). "',\n";
    $racetext .= "\t\t'Diff1' =>  '" . implode(", ", $diff1). "',\n";
    $racetext .= "\t\t'Diff2' =>  '" . implode(", ", $diff2). "',\n";
    $racetext .= "\t\t'Set1' =>  '" . implode(", ", $set1). "',\n";
    $racetext .= "\t\t'Set2' =>  '" . implode(", ", $set2). "',\n";
    $racetext .= "\t\t'Set3' =>  '" . implode(", ", $set3). "',\n";
    $racetext .= "\t\t'Set4' =>  '" . implode(", ", $set4). "',\n";
    $racetext .= "\t\t'Set5' =>  '" . implode(", ", $set5). "',\n";
    $racetext .= "\t\t'Set6' =>  '" . implode(", ", $set6). "',\n";

    $racetext .= "\t],\n";
    unset($oldWINS);
    unset($oldQPLTrio);
    unset($oldINTERS);
    unset($NOPLACE);
    unset($historicPlaces);
    unset($place);
    unset($surePlace);
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);