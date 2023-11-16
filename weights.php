<?php
$odds = [
    1 => 12,
		2 => 9.1,
		3 => 9.7,
		4 => 6.2,
		5 => 13,
		6 => 34,
		7 => 9.9,
		8 => 56,
		9 => 31,
		10 => 35,
		12 => 80,
		13 => 12,
		14 => 7.5,
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
asort($odds);
// $odds = array_slice($odds, 0, -8, true);
$weights = getWeights($odds, 0, 10);
var_dump($weights);
die();
?>