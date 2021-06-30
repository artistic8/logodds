<?php

if(isset($argv[1])) $totalRaces = trim($argv[1]);
else $totalRaces = 10;

for($r = 1; $r <= $totalRaces; $r++){

    $oddsJSON = file_get_contents("https://bet.hkjc.com/racing/getJSON.aspx?type=winplaodds&date=2021-07-01&venue=ST&start=$r&end=$r");

    $odds = json_decode($oddsJSON, true);
    $odds = $odds["OUT"];

    $pos = strpos($odds, "#PLA");
    $odds = substr($odds, 0, $pos);

    $odds = explode(";",$odds);

    for($k = 1; $k < count($odds); $k++) {
        var_dump($odds[$k]);
    }
    die();

}
