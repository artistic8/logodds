<?php

$odds = file_get_contents("https://bet.hkjc.com/racing/getJSON.aspx?type=winplaodds&date=2021-07-01&venue=ST&start=1&end=1");

var_dump($odds); die();