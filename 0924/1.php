<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [2, 1, 3]] ,
		'qpl/trio' =>  [[2, 4, 10, 7, 1], [2, 4, 10, 7, 3], [2, 4, 6, 7, 1], [4, 6, 2, 1, 3]] ,
		'All QPL values'      =>  '4, 2, 1, 3, 7, 6, 10',
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[4, 6, 2, 1, 3]] ,
		'New 2 QPL values' =>  '',
		'New 3 QPL values' =>  '1, 2, 3, 4, 6',
		'Tce'            =>  '1, 2, 3, 4, 6, 7',
		'diff1'          =>  '',
		'diff2'          =>  '1, 2, 3, 4, 6',
		'inter'          =>  '',
		'Win'          =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[10]] ,
		'qpl/trio' =>  [[3, 1, 6, 5, 4], [3, 1, 6, 5, 8], [1, 3, 5, 6, 10]] ,
		'All QPL values'      =>  '1, 6, 3, 5, 4, 8, 10',
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'New 2 QPL values' =>  '',
		'New 3 QPL values' =>  '',
		'Tce'            =>  '1, 3, 4, 5, 6, 8',
		'diff1'          =>  '',
		'diff2'          =>  '',
		'inter'          =>  '',
		'Win'          =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7]] ,
		'qpl/trio' =>  [[1, 3, 8, 6, 7], [7, 1, 3, 4, 8]] ,
		'All QPL values'      =>  '1, 7, 8, 3, 6, 4',
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'New 2 QPL values' =>  '',
		'New 3 QPL values' =>  '',
		'Tce'            =>  '1, 3, 4, 6, 7, 8',
		'diff1'          =>  '',
		'diff2'          =>  '',
		'inter'          =>  '',
		'Win'          =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 1, 10], [9, 7, 8], [9, 11], [9, 7], [9], [9, 8], [9, 1]] ,
		'qpl/trio' =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1]] ,
		'All QPL values'      =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'new 2 qpl/trio' =>  [[3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1], [3, 10, 9, 7, 8], [3, 8, 9, 1, 10]] ,
		'new 3 qpl/trio' =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 11, 9, 7, 8]] ,
		'New 2 QPL values' =>  '1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'New 3 QPL values' =>  '1, 3, 7, 8, 9, 10, 11',
		'Tce'            =>  '1, 5, 8, 9, 11, 12',
		'diff1'          =>  '4, 5, 6, 12',
		'diff2'          =>  '',
		'inter'          =>  '1, 3, 7, 8, 9, 10, 11',
		'Win'          =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio' =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'All QPL values'      =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'new 2 qpl/trio' =>  [[8, 4, 12, 2, 9], [7, 12, 4, 9, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [4, 8, 13, 1, 9], [8, 4, 2, 12, 5], [4, 2, 7, 12, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1]] ,
		'new 3 qpl/trio' =>  [[7, 12, 4, 9, 8], [13, 4, 8, 9, 7]] ,
		'New 2 QPL values' =>  '1, 2, 4, 5, 7, 8, 9, 12, 13',
		'New 3 QPL values' =>  '4, 7, 8, 9, 12, 13',
		'Tce'            =>  '1, 2, 4, 8, 9, 13',
		'diff1'          =>  '1, 2, 5',
		'diff2'          =>  '',
		'inter'          =>  '4, 7, 8, 9, 12, 13',
		'Win'          =>  '2',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[4]] ,
		'qpl/trio' =>  [[3, 9, 1, 4, 2], [3, 9, 2, 1, 10], [9, 3, 1, 10, 4]] ,
		'All QPL values'      =>  '3, 9, 4, 1, 10, 2',
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'New 2 QPL values' =>  '',
		'New 3 QPL values' =>  '',
		'Tce'            =>  '1, 2, 3, 4, 9, 10',
		'diff1'          =>  '',
		'diff2'          =>  '',
		'inter'          =>  '',
		'Win'          =>  '',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 8], [7, 11], [8], [7], [1, 7], [1, 7, 8], [1]] ,
		'qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [5, 12, 2, 11, 1]] ,
		'All QPL values'      =>  '1, 2, 5, 12, 7, 11, 8',
		'new 2 qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2]] ,
		'new 3 qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7]] ,
		'New 2 QPL values' =>  '1, 2, 5, 7, 8, 11, 12',
		'New 3 QPL values' =>  '1, 2, 5, 7, 8, 11, 12',
		'Tce'            =>  '1, 2, 5, 7, 11, 12',
		'diff1'          =>  '',
		'diff2'          =>  '',
		'inter'          =>  '1, 2, 5, 7, 8, 11, 12',
		'Win'          =>  '',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[1], [8, 1], [8], [8, 9]] ,
		'qpl/trio' =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 4, 11, 5, 3], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'All QPL values'      =>  '8, 10, 5, 11, 9, 1, 4, 3',
		'new 2 qpl/trio' =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'New 2 QPL values' =>  '1, 4, 5, 8, 9, 10, 11',
		'New 3 QPL values' =>  '',
		'Tce'            =>  '1, 5, 8, 9, 10, 11',
		'diff1'          =>  '1, 4, 5, 8, 9, 10, 11',
		'diff2'          =>  '',
		'inter'          =>  '',
		'Win'          =>  '1, 8, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2], [9], [8, 9], [2, 9], [2, 4, 10], [2, 4]] ,
		'qpl/trio' =>  [[4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [1, 3, 2, 4, 9], [2, 4, 6, 1, 3], [2, 4, 3, 8, 9]] ,
		'All QPL values'      =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'new 2 qpl/trio' =>  [[2, 4, 3, 8, 9], [1, 3, 2, 4, 9], [4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [2, 4, 6, 1, 3]] ,
		'new 3 qpl/trio' =>  [[2, 4, 10, 3, 1]] ,
		'New 2 QPL values' =>  '1, 2, 3, 4, 6, 8, 9, 10',
		'New 3 QPL values' =>  '1, 2, 3, 4, 10',
		'Tce'            =>  '1, 2, 3, 4, 6, 10',
		'diff1'          =>  '6, 8, 9',
		'diff2'          =>  '',
		'inter'          =>  '1, 2, 3, 4, 10',
		'Win'          =>  '8, 9',
	],
];
