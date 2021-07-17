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

    $outtext .= "\t\"$matchLabel\" => [\n";    

    $crsOdds = $match["crsodds"];

    $matchOdds = [];
    
    //Home win is red color
    $matchOdds[1] = str_replace('100@', "", $crsOdds["S0100"]); //Home wins 1-0
    $matchOdds[3] = str_replace('100@', "", $crsOdds["S0200"]); //Home wins 2-0
    $matchOdds[5] = str_replace('100@', "", $crsOdds["S0201"]); //Home wins 2-1
    $matchOdds[7] = str_replace('100@', "", $crsOdds["S0300"]); //Home wins 3-0
    $matchOdds[9] = str_replace('100@', "", $crsOdds["S0301"]); //Home wins 3-1
    $matchOdds[12] = str_replace('100@', "", $crsOdds["S0302"]); //Home wins 3-2
    $matchOdds[14] = str_replace('100@', "", $crsOdds["S0400"]); //Home wins 4-0
    $matchOdds[16] = str_replace('100@', "", $crsOdds["S0401"]); //Home wins 4-1
    $matchOdds[18] = str_replace('100@', "", $crsOdds["S0402"]); //Home wins 4-2
    $matchOdds[19] = str_replace('100@', "", $crsOdds["S0500"]); //Home wins 5-0
    $matchOdds[21] = str_replace('100@', "", $crsOdds["S0501"]); //Home wins 5-1
    $matchOdds[23] = str_replace('100@', "", $crsOdds["S0502"]); //Home wins 5-2

    //Away win is black color
    $matchOdds[2] = str_replace('100@', "", $crsOdds["S0001"]); //Away wins 1-0
    $matchOdds[4] = str_replace('100@', "", $crsOdds["S0002"]); //Away wins 2-0
    $matchOdds[6] = str_replace('100@', "", $crsOdds["S0102"]); //Away wins 2-1
    $matchOdds[8] = str_replace('100@', "", $crsOdds["S0003"]); //Away wins 3-0
    $matchOdds[10] = str_replace('100@', "", $crsOdds["S0103"]); //Away wins 3-1
    $matchOdds[11] = str_replace('100@', "", $crsOdds["S0203"]); //Away wins 3-2
    $matchOdds[13] = str_replace('100@', "", $crsOdds["S0004"]); //Away wins 4-0
    $matchOdds[15] = str_replace('100@', "", $crsOdds["S0104"]); //Away wins 4-1
    $matchOdds[17] = str_replace('100@', "", $crsOdds["S0204"]); //Away wins 4-2
    $matchOdds[20] = str_replace('100@', "", $crsOdds["S0005"]); //Away wins 5-0
    $matchOdds[22] = str_replace('100@', "", $crsOdds["S0105"]); //Away wins 5-1
    $matchOdds[24] = str_replace('100@', "", $crsOdds["S0205"]); //Away wins 5-2

    for($k = 1; $k <= count($matchOdds); $k++) {
        if(isset($matchOdds[$k])){
            $outtext .= "\t\t$k => $matchOdds[$k],\n";
        }
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);


