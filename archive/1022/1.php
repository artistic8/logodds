<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2], [9], [2, 10, 1]] ,
		'qpl/trio'       =>  [[3, 1, 5, 8, 2], [3, 1, 12, 8, 2], [3, 1, 14, 2, 8], [3, 1, 2, 8, 9], [8, 3, 2, 10, 1]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[8, 3, 2, 10, 1]] ,
		'All QPL values'    =>  '2, 3, 8, 10, 1, 12, 14, 9',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '2, 3, 8, 10, 1',
		'Tce'               =>  '1, 2, 3, 8, 10, 12',
		//Diff New2QplValues - allWinValues,
		'I' =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [1, 2, 11], [2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 6, 1], [7, 5, 2, 11, 1]] ,
		'new 2 qpl/trio' =>  [[7, 5, 2, 11, 1]] ,
		'new 3 qpl/trio' =>  [[7, 5, 2, 11, 1]] ,
		'All QPL values'    =>  '1, 5, 7, 2, 11, 6',
		'New 2 QPL values'  =>  '1, 5, 7, 2, 11',
		'New 3 QPL values'  =>  '1, 5, 7, 2, 11',
		'Tce'               =>  '1, 2, 5, 6, 7, 11',
		//Diff New2QplValues - allWinValues,
		'I' =>  '5, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2]] ,
		'qpl/trio'       =>  [[4, 13, 12, 1, 2], [4, 2, 13, 12, 5], [4, 2, 13, 12, 3], [4, 13, 3, 1, 2]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 3, 12, 1, 2, 5, 13',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 3, 4, 5, 12',
		//Diff New2QplValues - allWinValues,
		'I' =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[3, 14, 8, 10, 9], [14, 3, 8, 2, 9], [14, 5, 10, 9, 8], [1, 14, 10, 9, 8]] ,
		'new 2 qpl/trio' =>  [[3, 14, 8, 10, 9], [14, 3, 8, 2, 9], [14, 5, 10, 9, 8], [1, 14, 10, 9, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '14, 9, 1, 5, 8, 3, 10, 2',
		'New 2 QPL values'  =>  '14, 9, 1, 5, 8, 3, 10, 2',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 3, 5, 8, 9, 14',
		//Diff New2QplValues - allWinValues,
		'I' =>  '14, 1, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 7], [9]] ,
		'qpl/trio'       =>  [[4, 13, 2, 9, 7], [9, 7, 3, 4, 2], [5, 4, 2, 9, 7], [3, 5, 4, 2, 9]] ,
		'new 2 qpl/trio' =>  [[4, 13, 2, 9, 7], [9, 7, 3, 4, 2], [5, 4, 2, 9, 7]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 4, 7, 5, 3, 2, 13',
		'New 2 QPL values'  =>  '9, 4, 7, 5, 3, 2, 13',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '2, 3, 4, 5, 7, 9',
		//Diff New2QplValues - allWinValues,
		'I' =>  '4, 5, 3',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1], [7], [2], [2, 1]] ,
		'qpl/trio'       =>  [[2, 13, 6, 7, 1], [2, 13, 6, 3, 7], [2, 13, 6, 3, 1], [13, 6, 3, 12, 2], [13, 6, 12, 2, 1]] ,
		'new 2 qpl/trio' =>  [[2, 13, 6, 7, 1], [2, 13, 6, 3, 1], [13, 6, 12, 2, 1]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 1, 12, 7, 3, 13, 6',
		'New 2 QPL values'  =>  '2, 1, 12, 7, 3, 13, 6',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 3, 7, 12, 13',
		//Diff New2QplValues - allWinValues,
		'I' =>  '12, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[11, 2, 6, 3, 9], [11, 2, 6, 12, 9], [11, 2, 6, 14, 9], [11, 2, 6, 5, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '11, 2, 9, 5, 3, 12, 6, 14',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '2, 3, 5, 9, 11, 12',
		//Diff New2QplValues - allWinValues,
		'I' =>  '',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7, 9, 8], [7, 8], [7], [6, 7], [9, 8], [8]] ,
		'qpl/trio'       =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8], [1, 5, 13, 7, 8], [8, 13, 1, 6, 7], [8, 13, 10, 1, 7], [1, 7, 3, 13, 8]] ,
		'new 2 qpl/trio' =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8], [1, 5, 13, 7, 8], [8, 13, 1, 6, 7], [8, 13, 10, 1, 7], [1, 7, 3, 13, 8]] ,
		'new 3 qpl/trio' =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8]] ,
		'All QPL values'    =>  '1, 8, 7, 13, 9, 3, 5, 10, 6',
		'New 2 QPL values'  =>  '1, 8, 7, 13, 9, 3, 5, 10, 6',
		'New 3 QPL values'  =>  '1, 8, 7, 13, 9, 6',
		'Tce'               =>  '1, 3, 7, 8, 9, 13',
		//Diff New2QplValues - allWinValues,
		'I' =>  '1, 13',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[9, 8]] ,
		'qpl/trio'       =>  [[7, 14, 10, 9, 8], [10, 4, 7, 8, 9]] ,
		'new 2 qpl/trio' =>  [[7, 14, 10, 9, 8], [10, 4, 7, 8, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 9, 8, 14, 10, 4',
		'New 2 QPL values'  =>  '7, 9, 8, 14, 10, 4',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '4, 7, 8, 9, 10, 14',
		//Diff New2QplValues - allWinValues,
		'I' =>  '7, 14, 10',
	],
];