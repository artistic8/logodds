<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

function isPrime($x){
    return in_array($x, [2, 3, 5, 7, 11, 13, 17, 19, 23]);
}

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    for($i=1; $i <= count($odds); $i++){
        if(isset($odds[$i])) {
            $proba[$i] = 100 * (log($odds[$i]) / $odds[$i]) / exp(1);
            $sum += $proba[$i];
        }
    }
    for($i=1; $i <= count($odds); $i++){
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
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpArray = $probas[$raceNumber];
    $tmpSum = 0;
    $oddN = 0;
    $evenN = 0;
    $primeN = 0;
    foreach ($tmpArray as $i => $val){
        $outtext .= "\t\t$i => $val,\n";
        if($i % 2 === 0) $evenN += $val;
        else $oddN += $val;
        if(isPrime($i)) $primeN += $val;
        $tmpSum += $val;
    }
    $outtext .= "\t\t'Primes' => $primeN,\n";
    $outtext .= "\t\t'Odds' => $oddN,\n";
    $outtext .= "\t\t'Evens' => $evenN,\n";
    $outtext .= "\t\t'Sum' => $tmpSum,\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
