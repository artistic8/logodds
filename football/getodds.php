<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "odds.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$oddsJSON = file_get_contents("https://bet.hkjc.com/football/getJSON.aspx?jsontype=odds_crs.aspx");

$odds = json_decode($oddsJSON, true);
$odds = $odds[1];
$matches = $odds["matches"];
$matches = [ $matches[0] ];

foreach($matches as $match){
    $homeTeam = $match["homeTeam"]["teamNameEN"];
    $awayTeam = $match["awayTeam"]["teamNameEN"];
    $matchLabel = $homeTeam . " vs " . $awayTeam;

    $outtext .= "\t\"$matchLabel\" => [\n";    

    $crsOdds = $match["crsodds"];

    $matchOdds = [];
    
    $matchOdds[1] = $crsOdds["S0100"]; //Home wins 1-0
    $matchOdds[3] = $crsOdds["S0200"]; //Homw wins 2-0
    $matchOdds[5] = $crsOdds["S0201"]; //Homw wins 2-1
    $matchOdds[7] = $crsOdds["S0300"]; //Homw wins 3-0
    $matchOdds[9] = $crsOdds["S0301"]; //Homw wins 3-1
    $matchOdds[12] = $crsOdds["S0302"]; //Homw wins 3-2
    $matchOdds[14] = $crsOdds["S0400"]; //Homw wins 4-0
    $matchOdds[16] = $crsOdds["S0401"]; //Homw wins 4-1
    $matchOdds[18] = $crsOdds["S0402"]; //Homw wins 4-2

    for($k = 1; $k <= count($matchOdds); $k++) {
        if(isset($matchOdds[$k])){
            $outtext .= "\t\t$k => $matchOdds[$k],\n";
        }
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);


