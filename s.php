<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";

$probas1 = include($currentDir . DIRECTORY_SEPARATOR . "1.php");
$probas2 = include($currentDir . DIRECTORY_SEPARATOR . "2.php");
$probas3 = include($currentDir . DIRECTORY_SEPARATOR . "3.php");

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($probas1 as $raceNumber => $raceProbas1){
    $winners1 = $raceProbas1['WIN'];
    $winners1 = explode(", ", $winners1);
    $winners2 = $probas2[$raceNumber]['WIN'];
    $winners2 = explode(", ", $winners2);
    $winners3 = $probas3[$raceNumber]['WIN'];
    $winners3 = explode(", ", $winners3);
    $winners = array_intersect($winners1, $winners2, $winners3);
    
    $S1 = $raceProbas1['S'];
    $S1 = explode(", ", $S1);
    $S2 = $probas2[$raceNumber]['S'];
    $S2 = explode(", ", $S2);
    $S3 = $probas3[$raceNumber]['S'];
    $S3 = explode(", ", $S3);
    $S = array_intersect($S1, $S2, $S3);

    $I1 = $raceProbas1['I'];
    $I1 = explode(", ", $I1);
    $I2 = $probas2[$raceNumber]['I'];
    $I2 = explode(", ", $I2);
    $I3 = $probas3[$raceNumber]['I'];
    $I3 = explode(", ", $I3);
    $I = array_intersect($I1, $I2, $I3);

    $racetext = "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'WIN' =>  '" . implode(", ", $winners). "',\n";
    $racetext .= "\t\t'S' =>  '" . implode(", ", $S). "',\n";
    $racetext .= "\t\t'I' =>  '" . implode(", ", $I). "',\n";
    $racetext .= "\t\t'X' =>  '" . implode(", ", $X). "',\n";
    $racetext .= "\t],\n";

    $outtext .= $racetext;
    
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>