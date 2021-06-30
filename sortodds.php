<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

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
        else $proba[$i] = 0;
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
    $indicators = ['Odds' => 0, 'Evens' => 0, 
                   'Blacks' =>0, 'Reds' => 0, 'Greens' => 0
    ];
    $numberOfBlackOdds = 0;
    $numberOfBlackEvens = 0;
    $numberOfRedOdds = 0;
    $numberOfRedEvens = 0;

    $numberOfEvens = 0;
    $numberOfOdds = 0;
    $numberOfBlacks = 0;
    $numberOfReds = 0;
    
    foreach ($tmpArray as $i => $val){
        $outtext .= "\t\t$i => $val,\n";
        if($i % 2 === 0) {
            if(in_array($i, $blacks)) $numberOfBlackEvens ++;
            elseif(in_array($i, $reds)) $numberOfRedEvens ++;
            $numberOfEvens ++;
            $indicators['Evens'] += $val;
        }
        else {
            if(in_array($i, $blacks)) $numberOfBlackOdds ++;
            elseif(in_array($i, $reds)) $numberOfRedOdds ++;
            $numberOfOdds ++;
            $indicators['Odds'] += $val;
        }
        if(in_array($i, $blacks)) {
            $numberOfBlacks ++;
            $indicators['Blacks'] += $val;
        }
        elseif(in_array($i, $reds)) {
            $numberOfReds ++;
            $indicators['Reds'] += $val;
        }
        else  $indicators['Greens'] += $val;
        $tmpSum += $val;
    }

    $actualProbabilities = [];
    $actualProbabilities['Black and Odd'] = ($numberOfBlackOdds / $numberOfOdds) * $indicators['Odds'];
    $actualProbabilities['Black and Even'] = ($numberOfBlackEvens / $numberOfEvens) * $indicators['Evens'];
    $actualProbabilities['Red and Odd'] = ($numberOfRedOdds / $numberOfOdds) * $indicators['Odds'];
    $actualProbabilities['Red and Even'] = ($numberOfRedEvens / $numberOfEvens) * $indicators['Evens'];
    $indicators['Actual Blacks'] = $actualProbabilities['Black and Odd'] + $actualProbabilities['Black and Even'];
    $indicators['Actual Reds'] = $actualProbabilities['Red and Odd'] + $actualProbabilities['Red and Even'];

    $actualProbabilities['Odd and Black'] = ($numberOfBlackOdds / $numberOfBlacks) * $indicators['Blacks'];
    $actualProbabilities['Odd and Red'] = ($numberOfRedOdds / $numberOfReds) * $indicators['Reds'];
    $actualProbabilities['Even and Red'] = ($numberOfRedEvens / $numberOfReds) * $indicators['Reds'];
    $actualProbabilities['Even and Black'] = ($numberOfBlackEvens / $numberOfBlacks) * $indicators['Blacks'];
    
    $indicators['Actual Evens'] = $actualProbabilities['Even and Red'] + $actualProbabilities['Even and Black'];
    $indicators['Actual Odds'] = $actualProbabilities['Odd and Red'] + $actualProbabilities['Odd and Black'];
    $indicators2 = [];
    $labels1 = ['Blacks', 'Reds'];
    $labels2 = ['Evens', 'Odds'];
    foreach($labels1 as $label1){
        foreach($labels2 as $label2){
                $indicators2["$label1 and Actual $label2"] = $indicators[$label1] + $indicators[$label2];
        }
    }
    arsort($indicators);
    arsort($indicators2);
    foreach($indicators2 as $label => $indicator) {
        $outtext .= "\t\t'$label' => $indicator,\n";
    }
    foreach($indicators as $label => $indicator) {
        $outtext .= "\t\t'$label' => $indicator,\n";
    }
   
    $outtext .= "\t\t'Sum' => $tmpSum,\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
