<?php

$outDir = __DIR__;

$outFile =$outDir . DIRECTORY_SEPARATOR . "odds.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$matchesJSON = file_get_contents("https://bet.hkjc.com/football/getJSON.aspx?jsontype=odds_ttg.aspx");
$matches = json_decode($matchesJSON, true);
if(isset($matches[1]["matches"])) $matches = $matches[1]["matches"];
$totalMatches = count($matches);

for($k = 0; $k < $totalMatches ; $k++){
    $matchLabel = $matches[$k]["matchDay"] . $matches[$k]["matchNum"];
    $ttgodds = $matches[$k]["ttgodds"];
    $ttgodds = [
        0 => str_replace("100@", "", $ttgodds["P0"]),
        1 => str_replace("100@", "", $ttgodds["P1"]),
        2 => str_replace("100@", "", $ttgodds["P2"]),
        3 => str_replace("100@", "", $ttgodds["P3"]),
        4 => str_replace("100@", "", $ttgodds["P4"]),
        5 => str_replace("100@", "", $ttgodds["P5"]),
        6 => str_replace("100@", "", $ttgodds["P6"]),
        7 => str_replace("100@", "", $ttgodds["M7"]),
    ];
    $outtext .= "\t$matchLabel => [\n";

    for($tg = 0; $tg <= 7; $tg++) {
        $outtext .= "\t\t$tg => $ttgodds[$tg],\n";
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);


