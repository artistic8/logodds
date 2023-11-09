<?php

$totalOccurences = 0;
$occurences = [];
$percentages = [];

for($i = 1; $i < 15; $i++){
    $occurences[$i] = 0;
    $percentages[$i] = 0;
}

$outFile = "favwinqin.php";
$data = include($outFile);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($data as $favorite => $datum){
    $racetext = "\t" . $favorite . " => [\n";
    $winsData = $datum['wins'];
    $qinsData = $datum['qins'];
    foreach($qinsData as $qinItem){
        $values = array_values($qinItem);
        if(!isset($values[1])){
            var_dump($qinItem); die();
        }
        $occurences[$values[0]] ++;
        $occurences[$values[1]] ++;
        $totalOccurences ++;
    }
    $racetext .= "\t\t/** Percentages */\n";
    foreach($occurences as $runner => $occurence){
        $percentages[$runner] = ($occurence / $totalOccurences) * 100;
    }
    arsort($percentages);
    foreach($percentages as $runner => $percentage){
        $racetext .= "\t\t\t//\t" . $runner . " : " . floor($percentage) . "%,\n";
    }
    $racetext .= "\t\t'wins' =>  [" . implode(", ", $winsData) . "],\n";
    $QINSText = "[";
    $first = 0;
    foreach($qinsData as $qinItem){
        if($qinItem[0] != $first) $QINSText .= "\n\t\t\t";
        $first = $qinItem[0];
        // $second = $qinItem[1];
        // $occurences[$first] ++;
        // $occurences[$second] ++;
        $QINSText .= "[" . implode(", ", $qinItem) . "], ";
    }
    $QINSText .= "\n\t\t]";
    $racetext .= "\t\t'qins' =>  $QINSText ,\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";
file_put_contents($outFile, $outtext);


?>