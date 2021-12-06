<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    foreach($odds as $i => $oddsI){
            $proba[$i] = 100 * (log($oddsI) / $oddsI) / exp(1);
            $sum += $proba[$i];
            }
    foreach($odds as  $i => $oddsI){
        //adjust to 100 percentage
        $proba[$i] = round( $proba[$i] * 100 / $sum, 2);
    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) <= 8) continue;

    $missing = $runners;
    
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";

    $values = array_values($tmpArray);

    $first4 = array_slice($runners, 0, 4);
    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
       
    $first1 = $runners[0];

    if(in_array($first1, $blacks)){
       $favorites = $sBlacks;
       $others = $sReds;
    }
    else{
       $favorites = $sReds;
       $others =$sBlacks;
    }

    $outtext .= "\t\t'F: " . implode(", ", $favorites) . "',\n";
    $outtext .= "\t\t'O: " . implode(", ", $others) . "',\n";

    $qpls = [];
    
    $qpls[]= $favorites[1] . ' X ' . $favorites[0];
    $qpls[]= $favorites[1] . ' X ' . $others[0];
    $qpls[]= $favorites[1] . ' X ' . $others[1];
    $qpls[]= $favorites[1] . ' X ' . $others[2];
    $qpls[]= $favorites[2] . ' X ' . $others[3];

    $qpls[]= $others[0] . ' X ' . $favorites[0];
    $qpls[]= $others[0] . ' X ' . $others[3];

    $qpls[]= $others[2] . ' X ' . $others[0];
    $qpls[]= $others[2] . ' X ' . $favorites[1];

    if(isset($favorites[4])) $qpls[] = $favorites[4] . ' X ' . $favorites[0];
    if(isset($others[4])) $qpls[] = $others[4] . ' X ' . $others[1];

    $trio1 = $favorites[0] . '-' . $favorites[1] . '-' . $others[0];
    $trio2 = $others[0] . '-' . $others[1] . '-' . $favorites[0];

    $outtext .= "\t\t'QQpl' => ";
    foreach($qpls as $oneQpl){
        $outtext .= "'" . $oneQpl . "'" . ", ";
    }
    $outtext .= "\n";
    $outtext .= "\t\t'Trio' => " . "'" . $trio1 . "'" . ", ";
    $outtext .= "'" . $trio2 . "'" . "\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
