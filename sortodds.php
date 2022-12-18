<?php

function highestOccurence($myArray){
    $occurences = [];
    foreach($myArray as $myValue){
        if(!isset($occurences[$myValue])) $occurences[$myValue] = 1;
        else $occurences[$myValue] += 1;
    }
    arsort($occurences);
    $targetKeys = array_keys($occurences);
    $occurenceText = "<?php\n\n";
    if( $occurences[$targetKeys[0]] >= 2 ){
        $occurenceText .= "/**\tMost Common Occurence */\t\n";
        $occurenceText .= "/**\tNumber " . $targetKeys[0] . " shows " . $occurences[$targetKeys[0]] . " Times */\n";
        $occurenceText .= "/**\tTo bet QPL in races where */\n/**\tit's suggested as WIN or PLACE */\n";
        $occurenceText .= "\n/**\tSecond Most Common Occurence */\n";
        $occurenceText .= "/**\tNumber " . $targetKeys[1] . " shows " . $occurences[$targetKeys[1]] . " Times */\n\n";
        // $occurenceText .= "/**\tTo bet WIN in races where */\n/**\tMost Common Occurence is suggested as WIN */\n\n";
    }
    else {
        $occurenceText .= "/**\tNO BETS !! */\t\n\n";
    }
    return $occurenceText;
}

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}

function determinePlace($tmpArray, $blacks, $reds){
    $runners = array_keys($tmpArray);
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
    $S1 = array_intersect($toWin, $runners);
    return reset($S1);   
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$winProbas = [];
$placeProbas = [];

$winners = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $tmpOdds = $allOdds[$r];
    $winProba = [];
    $plaProba = [];
    $winSum = 0;
    $plaSum = 0;
    foreach($tmpOdds as $i => $oddsTmp){
            $oddsW = $oddsTmp['WIN'];
            $oddsP = $oddsTmp['PLA'];
            $winProba[$i] = 100 * (log($oddsW) / $oddsW) / exp(1);
            $winSum += $winProba[$i];
            $plaProba[$i] = 100 / $oddsP;
            $plaSum += $plaProba[$i];
        }
    foreach($tmpOdds as  $i => $oddsTmp){
        $oddsW = $oddsTmp['WIN'];
        $oddsP = $oddsTmp['PLA'];
        $winProba[$i] = round( $winProba[$i] * 100 / $winSum, 2);
        $plaProba[$i] = round( $plaProba[$i] * 100 / $plaSum, 2);
    }
    arsort($winProba);
    $winProbas[$r] = $winProba;
    arsort($plaProba);
    $placeProbas[$r] = $plaProba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "$raceDate.php";


$outtext = "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($winProbas[$raceNumber])) continue;
    if( count($winProbas[$raceNumber]) < 11 ) continue;
    $racetext = "";

    $winArray = $winProbas[$raceNumber];
    $plaArray = $placeProbas[$raceNumber];

    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $win = determinePlace($winArray, $blacks, $reds);
    $racetext .= "\t\t'Win' =>  '" . $win . "',\n"; 

    $winners[] = $win;

    $Place = determinePlace($plaArray, $blacks, $reds);
    $racetext .= "\t\t'Place 1' =>  '" . $Place . "',\n"; 

    unset($plaArray[$Place]);
    $Place = determinePlace($plaArray, $blacks, $reds);
    $racetext .= "\t\t'Place 2' =>  '" . $Place . "',\n";

    unset($plaArray[$Place]);
    $Place = determinePlace($plaArray, $blacks, $reds);
    $racetext .= "\t\t'Place 3' =>  '" . $Place . "',\n";

    $racetext .= "\t],\n";
    $outtext .= $racetext;  
    
}

$occurenceText = highestOccurence($winners);

$outtext = $occurenceText . $outtext;

$outtext .= "];\n\n";

$outtext .= "?>\n";

file_put_contents($outFile, $outtext);
