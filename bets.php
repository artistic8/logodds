<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oneFile = $currentDir . DIRECTORY_SEPARATOR . "1.php";

if(!file_exists($oneFile)){
    exit("No input files!");
}
$oneData = include($oneFile);

$outFile = $currentDir . DIRECTORY_SEPARATOR . "bets.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($oneData as $raceNumber => $oneRaceDate){
    if(isset($oneRaceDate["WP"])){
        $wp = explode(", ", $oneRaceDate["WP"]);
        $racetext = "\t'$raceNumber' => [\n";
        $racetext .= "\t\t/**\n";
        $racetext .= "\t\tRace $raceNumber\n";
        $racetext .= "\t\t*/\n";
        $racetext .= "\t\t'Win(10/20)' =>  '" . implode(", ", $wp) . "',\n";
        $racetext .= "\t\t'Place(50/100)' =>  '" . implode(", ", $wp) . "',\n";
        $racetext .= "\t],\n";
        $outtext .= $racetext;
    }
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>
