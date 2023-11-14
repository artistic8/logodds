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
        if($iterations == $precision) return array_fill(0, count($odds), -1);
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$file1 = $currentDir . DIRECTORY_SEPARATOR . "1.php";
$file2 = $currentDir . DIRECTORY_SEPARATOR . "win1.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "comb.php";

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");

$data1 = include($file1);
$data2 = include($file2);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($data1 as $raceNumber => $datum) {
    $showRace = true;
    $bets1 = $datum['WIN BETS'];
    $bets2 = $data2[$raceNumber]['WIN BETS'];
    $runners1 = array_keys($bets1);
    $runners2 = array_keys($bets2);
    $pivot = array_values(array_unique(array_merge($runners1, $runners2)));
    sort($pivot);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    if(!empty($pivot)){
        $favOdds = [];
        foreach($pivot as $horse){
            $favOdds[$horse] = $allOdds[$raceNumber][$horse];
        }
        $weights = getWeights($favOdds, 2, 10);
        while(in_array(-1, $weights)){
            $favOdds = array_slice($favOdds, 0, -1, true);
            $weights = getWeights($favOdds, 2, 10);
        }
        $racetext .= "\t\t'Pivot' => '" . implode(", ", $pivot) . "',\n";
        $racetext .= "\t\t'WIN BETS' => [\n";
        $totalBets = 0;
        arsort($weights);
        foreach($weights as $someKey => $someValue){
            $bet = 10 * $someValue;
            $totalBets += $bet;
            $racetext .= "\t\t\t". $someKey ." =>  " . $bet . ",\n";
        }
        $racetext .= "\t\t],\n";
        $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
        $racetext .= "\t\t//Count bets:" . count($weights) . "',\n";
    }
    else $showRace = false;
    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
