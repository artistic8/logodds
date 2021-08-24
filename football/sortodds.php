<?php

$currentDir = __DIR__;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$probas = [];

$reds = [1, 3, 5, 7];
$blacks = [0, 2, 4, 6];

$outFile = $currentDir . DIRECTORY_SEPARATOR . "TTGOALS.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($allOdds as $matchLabel => $odds){
    $selected = [];
    if($odds[0] <= $odds[1]) $selected[] = 0;
    if($odds[1] <= ($odds[0] + $odds[2]) / 2) $selected[] = 1;
    if($odds[2] <= ($odds[1] + $odds[3]) / 2) $selected[] = 2;
    if($odds[3] <= ($odds[2] + $odds[4]) / 2) $selected[] = 3;
    if($odds[4] <= ($odds[3] + $odds[5]) / 2) $selected[] = 4;
    if($odds[5] <= ($odds[4] + $odds[6]) / 2) $selected[] = 5;
    if($odds[6] <= ($odds[5] + $odds[7]) / 2) $selected[] = 6;
    if($odds[7] <= $odds[6]) $selected[] = 7;
    $totalBlack = 0;
    $totalRed = 0;
    
    foreach($selected as $s => $sOdd){
        if(in_array($sOdd, $blacks)) $totalBlack += $odds[$sOdd];
        elseif(in_array($sOdd, $reds)) $totalRed += $odds[$sOdd];
    }
    var_dump($totalBlack);
    var_dump($totalRed);
    die();
    if($totalRed < $totalBlack) {
        foreach($selected as $s => $sOdd) {
            if(in_array($s, $blacks)) unset($selected[$s]);
        }
    }
    else {
        foreach($selected as $s => $sOdd) {
            if(in_array($s, $reds)) unset($selected[$s]);
        }
    }
    $outtext .= "\t'$matchLabel' => [\n";
    foreach($selected as $s => $sOdd){
        $outtext .= "\t\t $sOdd => $odds[$sOdd],\n";
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
