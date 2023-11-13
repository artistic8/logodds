<?php
$odds = [
    1 => 16,
    2 => 15,
    3 => 2.2,
    4 => 15,
    5 => 26,
    6 => 8.8,
    7 => 30,
    8 => 25,
    9 => 24,
    10 => 17,
    11 => 12,
    12 => 31,
    13 => 65,
    14 => 8.7,
];
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
arsort($odds);
$odds = array_slice($odds, 0, -1, true);
$weights = getWeights($odds, 0, 10);
var_dump($weights);
die();
?>