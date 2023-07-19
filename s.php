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
    $favorite = $raceProbas1['Favorite'];

    $I1 = $raceProbas1['I'];
    $I1 = explode(", ", $I1);
    $PLACE = $raceProbas1['PLACE'];
    if($PLACE == "NO") $qplMin = 100;
    else $qplMin = 50;
    $qplMsg = "//If qpl payout > $qplMin HKD.";
    $I2 = $probas2[$raceNumber]['I'];
    $I2 = explode(", ", $I2);
    $I3 = $probas3[$raceNumber]['I'];
    $I3 = explode(", ", $I3);
    $IUnion = array_filter(array_values(array_unique(array_merge($I1, $I2, $I3))));
    sort($IUnion);

    $qplRightSide = array_diff($IUnion, [$favorite]);

    $qpl = "'" . $favorite . " X " . implode(", ", $qplRightSide) . "'";

    $racetext = "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    
    $racetext .= "\t\t'qpl' => $qpl,\n";
    $racetext .= "\t\t" . $qplMsg . "\n";
    $racetext .= "\t],\n";

    $outtext .= $racetext;
    
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>
