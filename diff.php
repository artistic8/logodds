<?php
if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$file1 = $currentDir . DIRECTORY_SEPARATOR . "1.php";
$file2 = $currentDir . DIRECTORY_SEPARATOR . "win1.php";
$outFile = $currentDir . DIRECTORY_SEPARATOR . "diff.php";

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
    $pivot = array_diff($runners1, $runners2);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    if(!empty($pivot)){
        $racetext .= "\t\t'Pivot' => '" . implode(", ", $pivot) . "'\n";
    }
    else $showRace = false;
    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
