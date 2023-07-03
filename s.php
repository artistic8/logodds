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
    $winnersIntersection = array_intersect($winners1, $winners2, $winners3);
    $winnersUnion = array_values(array_unique(array_merge($winners1, $winners2, $winners3)));
    sort($winnersIntersection);
    sort($winnersUnion);
    
    $S1 = $raceProbas1['S'];
    $S1 = explode(", ", $S1);
    $S2 = $probas2[$raceNumber]['S'];
    $S2 = explode(", ", $S2);
    $S3 = $probas3[$raceNumber]['S'];
    $S3 = explode(", ", $S3);
    $SIntersection = array_intersect($S1, $S2, $S3);
    $SUnion = array_values(array_unique(array_merge($S1, $S2, $S3)));
    sort($SIntersection);
    sort($SUnion);

    $I1 = $raceProbas1['I'];
    $I1 = explode(", ", $I1);
    $I2 = $probas2[$raceNumber]['I'];
    $I2 = explode(", ", $I2);
    $I3 = $probas3[$raceNumber]['I'];
    $I3 = explode(", ", $I3);
    $IIntersection = array_intersect($I1, $I2, $I3);
    $IUnion = array_values(array_unique(array_merge($I1, $I2, $I3)));
    sort($IIntersection);
    sort($IUnion);

    $A1 = $raceProbas1['all'];
    $A1 = explode(", ", $A1);
    $A2 = $probas2[$raceNumber]['all'];
    $A2 = explode(", ", $A2);
    $A3 = $probas3[$raceNumber]['all'];
    $A3 = explode(", ", $A3);
    $AIntersection = array_intersect($A1, $A2, $A3);
    $AUnion = array_values(array_unique(array_merge($A1, $A2, $A3)));
    sort($AIntersection);
    sort($AUnion);

    $racetext = "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'WIN' => [\n\t\t\t 'X' => '" . implode(", ", $winnersIntersection). "',\n\t\t\t 'U' => '"
                 . implode(", ", $winnersUnion) . "'\n\t\t\t],\n";
    $racetext .= "\t\t'I' => [\n\t\t\t 'X' => '" . implode(", ", $IIntersection). "',\n\t\t\t 'U' => '"
                 . implode(", ", $IUnion) . "'\n\t\t\t],\n";
    $racetext .= "\t\t'S' => [\n\t\t\t 'X' => '" . implode(", ", $SIntersection). "',\n\t\t\t 'U' => '"
                 . implode(", ", $SUnion) . "'\n\t\t\t],\n";
    $racetext .= "\t\t'A' => [\n\t\t\t 'X' => '" . implode(", ", $AIntersection). "',\n\t\t\t 'U' => '"
                 . implode(", ", $AUnion) . "'\n\t\t\t],\n";
    $racetext .= "\t],\n";

    $outtext .= $racetext;
    
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>