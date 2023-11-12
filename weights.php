<?php
$odds = [
    2 => 10,
	3 => 2.9,
    6 => 19,
    9 => 24,
    12 => 13
];
$weights = [];
$totalWeights = 0;
foreach($odds as $key => $value){
    $weights[$key] = 1;
    $totalWeights += $weights[$key];
}
$criterion = true;
foreach($odds as $key => $value){
    $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights);
}
while($criterion === false){
    $criterion = true;
    foreach($odds as $key => $value){
        if($weights[$key] * $odds[$key] < $totalWeights){
            $weights[$key] +=1;
            $totalWeights += 1;
        }
        $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights);
    }
}
var_dump($weights);
var_dump($totalWeights); die();
?>