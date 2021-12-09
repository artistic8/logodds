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

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);
    
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";

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
    $trioExpression = implode(", ", $trio);

    $qplLeftSide = [$favorites[0], $favorites[1], $favorites[2], $others[0], $others[1]];
    $qplRightSide = [ $favorites[3], $others[3], end($favorites), end($others) ];
    $qpls = [];
    for($indexL = 0; $indexL < count($qplLeftSide); $indexL++) {
        for($indexR = 0; $indexR < count($qplRightSide); $indexR++) {
            $left = $qplLeftSide[$indexL];
            $right = $qplRightSide[$indexR];
            if( 
                (in_array($left, $sReds) && in_array($right, $sBlacks))
                || (in_array($left, $sBlacks) && in_array($right, $sReds))
            ){
                $qpls[] = $left ."-" .  $right;
            }
        }
    }
    
    $outtext .= "\t\t'F: " . implode(", ", $favorites) . "',\n";
    $outtext .= "\t\t'O: " . implode(", ", $others) . "',\n";
    $outtext .= "\t\t'------------------------',\n";
    $outtext .= "\t\t'Trio' => '" . $trioExpression . "',\n";
    $outtext .= "\t\t'F4' => '" . $trioExpression . "',\n";
    $outtext .= "\t\t'------------------------',\n";
    $outtext .= "\t\t'QQpl' => '";
    $linesCounter = 0;
    foreach($qpls as $oneQpl){
        if($linesCounter < 2) {
            $outtext .= "$oneQpl, ";
            $linesCounter++;
        }
        else{
            $outtext .= "$oneQpl, \n\t\t\t";
            $linesCounter = 0;
        }
    }
    $outtext .= "'\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
