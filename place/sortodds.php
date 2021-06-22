<?php

$allOdds = include("getodds.php");
$probas = [];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    for($i=1; $i <= count($odds); $i++){
        if(isset($odds[$i])) {
            $proba[$i] = 100 * round((log($odds[$i]) / $odds[$i])  , 4);
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

$outFile = "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpArray = $probas[$raceNumber];
    $tmpSum = 0;
    $thirtyMarked = false;
    $sixtyMarked = false;
    foreach ($tmpArray as $i => $val){
        $outtext .= "\t\t$i => $val,\n";
        $tmpSum += $val;
        if($tmpSum > 33 && $thirtyMarked === false) {
            $outtext .= "\t\t'Sum' => $tmpSum,\n";
            $thirtyMarked = true;
        }
        if($tmpSum > 66 && $sixtyMarked === false) {
            $outtext .= "\t\t'Sum' => $tmpSum,\n";
            $sixtyMarked = true;
        }
    }
    $outtext .= "\t\t'Sum' => $tmpSum,\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
