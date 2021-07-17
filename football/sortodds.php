<?php

$allOdds = include(__DIR__ . DIRECTORY_SEPARATOR . "odds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$allMatches = array_keys($allOdds);

$designations = [
    1 => "1-0",
    3 => "2-0",
    5 => "2-1",
    7 => "3-0",
    9 => "3-1",
    12 => "3-2",
    14 => "4-0",
    16 => "4-1",
    18 => "4-2",
    19 => "5-0",
    21 => "5-1",
    23 => "5-2",
    2 => "0-1",
    4 => "0-2",
    6 => "1-2",
    8 => "0-3",
    10 => "1-3",
    11 => "2-3",
    13 => "0-4",
    15 => "1-4",
    17 => "2-4",
    20 => "0-5",
    22 => "1-5",
    24 => "2-5"
];

foreach($allOdds as $r => $odds){
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

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($probas as $raceNumber => $tmpArray) {
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpSum = 0;

    $indicators = [ 'B' => 0, 'R' => 0 ];

    $lineCount = 0;
    
    foreach ($tmpArray as $i => $val){
        if($lineCount < 6){
            $outtext .= "\t\t$i ";
            $outtext .= "/*" . $designations[$i] . "*/";
            $outtext .= " => $val,\n";
            $lineCount ++;
        }
        if(in_array($i, $blacks)) {
            $indicators['B'] += $val;
        }
        elseif(in_array($i, $reds)) {
            $indicators['R'] += $val;
        }
        $tmpSum += $val;
    }

    arsort($indicators);

    $indicators2 = ['R (O) position' => 0, 'B (E) position' => 0];

    $values = array_values($tmpArray);
    for($j = 0; $j < count($values); $j ++)
    {
        if(in_array($j + 1, [1, 3, 5, 7])) $indicators2['R (O) position'] += $values[$j];
        elseif(in_array($j + 1, [2, 4, 6, 8, 10])) $indicators2['B (E) position'] += $values[$j];
    }

    if(abs($indicators2['R (O) position'] - $indicators2['B (E) position']) < 0.9) {
        $indicators2 = ['Equal positions R(O) and B(E)' => 'true'];
    }

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
