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

function getWeights($odds, $profit = 0, $precision = 10){
    $weights = [];
    $totalWeights = 0;
    foreach($odds as $key => $value){
        $weights[$key] = 1;
        $totalWeights += $weights[$key];
    }
    $criterion = true;
    foreach($odds as $key => $value){
        $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
    }
    $iterations = 0;
    while($criterion === false){
        $criterion = true;
        foreach($odds as $key => $value){
            if($weights[$key] * $odds[$key] < $totalWeights + $profit){
                $weights[$key] +=1;
                $totalWeights += 1;
            }
            $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
        }
        $iterations ++;
        if($iterations == $precision) return array_fill(0, count($odds), -1);
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$favFile = __DIR__ . DIRECTORY_SEPARATOR . "favwinqin.php";
$favData = include($favFile);

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

    $showRace = true;

    //Sort  allWinsValues by odds
    $qplsOdds = [];
    foreach($allWinsValues as $iKey => $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
        else $showRace = false;
    }
    asort($qplsOdds);
    $allWinsValues = array_keys($qplsOdds);
    $forReference = array_diff($allQplValues, $allWinsValues);

    //determine odds weights
    //1. gets first five candidates depening on favorite
    $favKeys = explode(", ", $favData[$first1]['fav']);
    $favOdds = [];
    foreach($favKeys as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $favOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    $weights = getWeights($favOdds, 3, 20);
    arsort($weights);
    $sortedRunners = array_keys($weights);

    $racetext .= "\t\t'wins' =>  $WINSText ,\n";
    $racetext .= "\t\t'qpl/trio'       =>  $QPLText ,\n";
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'All QPL values'  =>  '" . implode(", ", $allQplValues).  "',\n";
    if(in_array(3, $allWinsValues)) $racetext .= "\t\t//All wins contains 3\n";
    $racetext .= "\t\t'All Wins'        =>  '" . implode(", ", $allWinsValues).  "',\n";
    if(in_array(3, $forReference)) $racetext .= "\t\t//Reference contains 3\n";
    $racetext .= "\t\t'Reference'        =>  '" . implode(", ", $forReference).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $first1 . "',\n";
    $totalBets = 0;
    
    foreach($favKeys as $someKey){
        if(isset($weights[$someKey]) && $weights[$someKey] == -1){
            $racetext .= "\t\t'NO BETS!!',\n";
            break;
        }
        if(!isset($weights[$someKey])) continue;
        $bet = 10 * $weights[$someKey];
        $totalBets += $bet;
        $racetext .= "\t\t'WIN ". $someKey ."' =>  '" . $bet . "',\n";
    }
    
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t],\n";
    unset($oldWINS);
    unset($oldQPLTrio);
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);