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
        if($iterations == $precision) {
            $failed = [];
            foreach($odds as $key => $value) $failed[$key] = -1;
            return $failed;
        }
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "winbets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$winsFile = include($currentDir . DIRECTORY_SEPARATOR . "win.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

$totalRaces = count($allWinOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;
    $racetext = "";
    $set1 = explode(", ", $winsFile[$raceNumber]['Set 1']);
    $set2 = explode(", ", $winsFile[$raceNumber]['Set 2']);
    $weights1 = [];
    $weights2 = [];
    foreach($set1 as $winner){
        if(!empty($winner)) $weights1[$winner] = $allWinOdds[$raceNumber][$winner];
    }
    $bets1 = getWeights($weights1, 1);
    foreach($set2 as $winner){
        if(!empty($winner)) $weights2[$winner] = $allWinOdds[$raceNumber][$winner];
    }
    $bets2 = getWeights($weights2, 1);
   
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $racetext .= "\t\t'Set 1 Win Bets'  =>  [\n";
    $total = 0;
    foreach($bets1 as $horse => $bet){
        $racetext .= "\t\t\t'$horse' => '" . 10 * $bet . " HKD',\n"  ;
        $total += 10 * $bet;
    }
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t'Total Bets set 1'  =>  '$total HKD',\n";
    $racetext .= "\t\t'Set 2 Win Bets'  =>  [\n";
    $total = 0;
    foreach($bets2 as $horse => $bet){
        $racetext .= "\t\t\t'$horse' => '" . 10 * $bet . " HKD',\n"  ;
        $total += 10 * $bet;
    }
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t'Total Bets set 2'  =>  '$total HKD'\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);