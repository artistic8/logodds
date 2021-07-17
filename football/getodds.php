<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "odds.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$oddsJSON = file_get_contents("https://bet.hkjc.com/football/getJSON.aspx?jsontype=odds_crs.aspx");

$odds = json_decode($oddsJSON, true);
$odds = $odds[1];
$matches = $odds["matches"];

foreach($matches as $match){
    $homeTeam = $match["homeTeam"]["teamNameEN"];
    $awayTeam = $match["awayTeam"]["teamNameEN"];
    $matchLabel = $homeTeam . " vs " . $awayTeam;

    $outtext .= "\t$matchLabel => [\n";    

    $crsOdds = $match["crsodds"];

    var_dump($crsOdds); die();

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


