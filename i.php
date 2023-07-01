<?php

$date = "0701";

$url1 = "https://github.com/artistic3/logodds/blob/master/$date/probas.txt";
$url2 = "https://github.com/artistic7/logodds/blob/master/$date/probas.php";
$url3 = "https://github.com/artistic7/logodds/blob/master/$date/probas.php";

$probas1 = file_get_contents($url1);

var_dump($probas1); die();


?>