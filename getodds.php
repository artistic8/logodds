<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$outDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
$outFile =$outDir . DIRECTORY_SEPARATOR . "getodds.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

if(isset($argv[2])) $totalRaces = trim($argv[2]);
else $totalRaces = 10;

for($r = 1; $r <= $totalRaces; $r++){

    $outtext .= "\t$r => [\n";

    $oddsJSON = file_get_contents("https://bet.hkjc.com/racing/getJSON.aspx?type=winplaodds&date=2021-07-01&venue=ST&start=$r&end=$r");

    $odds = json_decode($oddsJSON, true);
    $odds = $odds["OUT"];

    $pos = strpos($odds, "#PLA");
    $odds = substr($odds, 0, $pos);

    $odds = explode(";",$odds);

    for($k = 1; $k < count($odds); $k++) {
        $lineParts = explode("=", $odds[$k]);
        $runner = $lineParts[0];
        $currentOdds = $lineParts[1];
        if($currentOdds !== "SCR"){
            $outtext .= "\t\t$runner => $currentOdds,\n";
        }
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);


