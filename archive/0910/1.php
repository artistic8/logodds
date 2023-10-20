<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[10, 2], [10, 2, 1], [10, 11]] ,
		'qpl/trio' =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11], [8, 2, 11, 3, 5]] ,
		'All QPL values'      =>  '8, 2, 11, 10, 3, 5, 1',
		'new qpl/trio' =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11]] ,
		'New QPL values' =>  '1, 2, 3, 8, 10, 11',
		'Tce'            =>  '2, 3, 5, 8, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[14], [7], [7, 6], [11], [14, 6], [7, 11]] ,
		'qpl/trio' =>  [[7, 3, 4, 11, 14], [3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6]] ,
		'All QPL values'      =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'new qpl/trio' =>  [[3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6], [7, 3, 4, 11, 14]] ,
		'New QPL values' =>  '1, 3, 4, 5, 6, 7, 10, 11, 12, 14',
		'Tce'            =>  '3, 5, 6, 7, 11, 14',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4], [4, 10], [10, 1, 3], [3]] ,
		'qpl/trio' =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [1, 3, 7, 8, 4], [4, 8, 10, 1, 3]] ,
		'All QPL values'      =>  '4, 3, 7, 10, 8, 1',
		'new qpl/trio' =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [4, 8, 10, 1, 3]] ,
		'New QPL values' =>  '1, 3, 4, 7, 8, 10',
		'Tce'            =>  '1, 3, 4, 7, 8, 10',
	],
];
