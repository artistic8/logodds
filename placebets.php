<?php

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
        if($iterations == $precision) return array_fill(1, count($odds), -1);
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "bets.php";

$totalRaces = count($allOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($allOdds as $raceNumber => $probas) {
    $racetext = "";
    $showRace = true;
    asort($probas);
    $runners = array_keys($probas);
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $first1 = $runners[0];

    $favKeys = array_slice($runners, 0, 10);
    $favOdds = [];
    foreach($favKeys as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $favOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    $weights = getWeights($favOdds, 0, 10);
    while(in_array(-1, $weights)){
        $favOdds = array_slice($favOdds, 0, -1, true);
        $weights = getWeights($favOdds, 2, 10);
    }
    
    $totalBets = 0;
    foreach($weights as $runner => $value){
        $bet = 10 * $weights[$runner];
        $totalBets += $bet;
        $racetext .= "\t\t'PLACE ". $runner ."' =>  '" . $bet . "',\n";
    }
    if(30 * $weights[$first1] >= $totalBets) $showRace = false;
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
