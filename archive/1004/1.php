<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[11], [2], [11, 2]] ,
		'qpl/trio'       =>  [[1, 3, 6, 7, 8], [3, 1, 7, 6, 11], [1, 3, 7, 6, 2], [3, 1, 6, 7, 4], [3, 1, 7, 11, 2]] ,
		'new 2 qpl/trio' =>  [[3, 1, 7, 11, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 1, 11, 7, 2, 8, 6, 4',
		'New 2 QPL values'  =>  '3, 1, 11, 7, 2',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 8',
		'QQPL' =>  '11, 2',
		'Tce' =>  '1, 2, 3, 7, 8, 11',
		'win' =>  '1, 2, 3, 7, 8, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7, 8], [8]] ,
		'qpl/trio'       =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8], [10, 2, 3, 5, 8]] ,
		'new 2 qpl/trio' =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 8, 10, 5, 2, 7, 1',
		'New 2 QPL values'  =>  '3, 8, 10, 5, 7, 1',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 7, 8',
		'QQPL' =>  '8, 7',
		'Tce' =>  '2, 3, 5, 7, 8, 10',
		'win' =>  '2, 3, 5, 7, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[2, 6, 11, 3, 5], [2, 6, 8, 3, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 3, 6, 8, 5, 11',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '2, 3, 5, 6, 8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[8], [7, 5, 8], [1, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 7, 10, 4], [1, 5, 7, 10, 8]] ,
		'new 2 qpl/trio' =>  [[1, 5, 7, 10, 8]] ,
		'new 3 qpl/trio' =>  [[1, 5, 7, 10, 8]] ,
		'All QPL values'    =>  '1, 5, 7, 10, 8, 4',
		'New 2 QPL values'  =>  '1, 5, 7, 10, 8',
		'New 3 QPL values'  =>  '1, 5, 7, 10, 8',
		'Win' =>  '1, 4, 5, 7, 8',
		'QQPL' =>  '1, 5, 7, 8',
		'Trio' =>  '1, 5, 7, 8',
		'Tce' =>  '1, 4, 5, 7, 8, 10',
		'win' =>  '4, 7, 8, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[11, 2], [11], [4, 11]] ,
		'qpl/trio'       =>  [[4, 1, 3, 11, 2], [1, 3, 7, 4, 11], [1, 3, 12, 4, 11], [1, 3, 7, 2, 4]] ,
		'new 2 qpl/trio' =>  [[4, 1, 3, 11, 2], [1, 3, 7, 4, 11], [1, 3, 12, 4, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 11, 3, 2, 7, 12',
		'New 2 QPL values'  =>  '1, 4, 11, 3, 2, 7, 12',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 4, 7',
		'QQPL' =>  '4, 11, 2',
		'Trio' =>  '4, 11, 2',
		'Tce' =>  '1, 2, 3, 4, 7, 11',
		'win' =>  '1, 2, 3, 7, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[9], [9, 8], [9, 5, 8], [9, 5, 6], [8], [5, 6], [5, 8]] ,
		'qpl/trio'       =>  [[1, 12, 4, 8, 9], [1, 12, 4, 6, 9], [1, 4, 9, 5, 8], [1, 4, 9, 5, 6], [12, 1, 4, 5, 6], [12, 1, 4, 5, 8]] ,
		'new 2 qpl/trio' =>  [[1, 12, 4, 8, 9], [1, 4, 9, 5, 8], [1, 4, 9, 5, 6], [12, 1, 4, 5, 6], [12, 1, 4, 5, 8]] ,
		'new 3 qpl/trio' =>  [[1, 4, 9, 5, 8], [1, 4, 9, 5, 6]] ,
		'All QPL values'    =>  '12, 5, 4, 1, 8, 6',
		'New 2 QPL values'  =>  '12, 5, 4, 1, 8, 6',
		'New 3 QPL values'  =>  '5, 4, 1, 8, 6',
		'Win' =>  '5, 6, 8',
		'QQPL' =>  '5, 8',
		'Tce' =>  '1, 4, 5, 6, 8, 12',
		'win' =>  '1, 4, 6, 8, 12',
	],
];
