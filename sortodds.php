<?php

$allOdds = include("getodds.php");
$probas = [];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    $odds = $allOdds[$r];
    $proba = [];
    for($i=1; $i <= count($odds); $i++){
        if(isset($odds[$i])) {
            $proba[$i] = 100 * round((log($odds[$i]) / $odds[$i]) / exp(1) , 4);
        }
    }
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
    for($i = 1; $i <= count($probas[$raceNumber]); $i++) {
        $x = $probas[$raceNumber][$i];
        $outtext .= "\t\t$i => $x,\n";
    }
    
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
