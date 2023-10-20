<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio' =>  [[7, 5, 1, 2, 6], [7, 1, 5, 10, 6]] ,
		'All QPL values'      =>  '7, 2, 6, 1, 5, 10',
		'new qpl/trio' =>  [] ,
		'New QPL values' =>  '',
		'Tce'            =>  '1, 2, 5, 6, 7, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1, 10, 2], [1, 10], [10, 2], [10], [2], [1, 2], [7]] ,
		'qpl/trio' =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2], [3, 1, 7, 6, 4]] ,
		'All QPL values'      =>  '3, 6, 4, 2, 10, 1, 7',
		'new qpl/trio' =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2]] ,
		'New QPL values' =>  '1, 2, 3, 4, 6, 7, 10',
		'Tce'            =>  '1, 2, 3, 4, 6, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 6], [8], [6]] ,
		'qpl/trio' =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 8], [5, 7, 1, 2, 6]] ,
		'All QPL values'      =>  '5, 1, 7, 2, 9, 8, 6',
		'new qpl/trio' =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 6]] ,
		'New QPL values' =>  '1, 2, 5, 6, 7, 8, 9',
		'Tce'            =>  '1, 2, 5, 7, 8, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[12, 1], [2], [1, 12, 2]] ,
		'qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'All QPL values'      =>  '7, 4, 1, 12, 2',
		'new qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'New QPL values' =>  '1, 2, 4, 7, 12',
		'Tce'            =>  '1, 2, 4, 7, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio' =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'All QPL values'      =>  '8, 1, 9, 6, 3, 10, 4',
		'new qpl/trio' =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'New QPL values' =>  '1, 3, 4, 6, 8, 9, 10',
		'Tce'            =>  '1, 3, 6, 8, 9, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14, 5], [4], [5, 14, 4], [9], [9, 4]] ,
		'qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'All QPL values'      =>  '9, 2, 5, 14, 4',
		'new qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'New QPL values' =>  '2, 4, 5, 9, 14',
		'Tce'            =>  '2, 4, 5, 9, 14',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2], [7, 6]] ,
		'qpl/trio' =>  [[1, 7, 5, 8, 2], [1, 7, 3, 8, 2], [1, 3, 8, 7, 6]] ,
		'All QPL values'      =>  '1, 8, 7, 2, 5, 6, 3',
		'new qpl/trio' =>  [[1, 3, 8, 7, 6]] ,
		'New QPL values' =>  '1, 3, 6, 7, 8',
		'Tce'            =>  '1, 2, 5, 6, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[8], [8, 9], [9], [5, 9]] ,
		'qpl/trio' =>  [[6, 4, 5, 1, 8], [6, 8, 2, 5, 3], [6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [5, 1, 6, 8, 9], [5, 1, 3, 6, 8], [1, 5, 6, 2, 9]] ,
		'All QPL values'      =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'new qpl/trio' =>  [[6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 1, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [1, 5, 6, 2, 9]] ,
		'New QPL values' =>  '1, 2, 3, 4, 5, 6, 8, 9',
		'Tce'            =>  '1, 2, 3, 5, 6, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8], [9], [2, 4], [2]] ,
		'qpl/trio' =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'All QPL values'      =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'new qpl/trio' =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'New QPL values' =>  '1, 2, 3, 4, 5, 7, 8, 9, 12',
		'Tce'            =>  '1, 2, 4, 7, 8, 12',
	],
];
