<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [3], [1, 3]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 11], [3, 7, 2, 4, 11], [3, 7, 4, 11, 13], [3, 5, 4, 11, 13], [1, 3, 4, 11, 13], [1, 7, 2, 4, 11], [3, 5, 2, 4, 11], [3, 14, 2, 4, 11]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 4, 11], [1, 3, 4, 11, 13]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '11, 4, 14, 2, 3, 7, 1, 13, 5',
		'New 2 QPL values'  =>  '11, 4, 2, 3, 1, 13',
		'New 3 QPL values'  =>  '',
		'Win' =>  '3, 7',
		'QQPL' =>  '3, 1',
		'Tce' =>  '2, 3, 4, 7, 11, 14',
		'???????' =>  '7',
		'win' =>  '11, 4, 14, 2, 3, 7, 1, 13, 5',
		'For reference' =>  '11, 4, 14, 2, 7, 13',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [2, 4]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 1, 4, 6, 9, 3',
		'New 2 QPL values'  =>  '2, 1, 4, 6, 9, 3',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 3, 4',
		'QQPL' =>  '2, 4',
		'Tce' =>  '1, 2, 3, 4, 6, 9',
		'???????' =>  '3',
		'win' =>  '2, 1, 4, 6, 9, 3',
		'For reference' =>  '1, 6, 9, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[3], [1], [6, 7], [6]] ,
		'qpl/trio'       =>  [[3, 7, 2, 4, 11], [1, 7, 2, 4, 11], [1, 7, 2, 4, 10], [1, 7, 2, 4, 6], [1, 7, 9, 2, 4], [3, 7, 4, 6, 10]] ,
		'new 2 qpl/trio' =>  [[1, 7, 2, 4, 6], [3, 7, 4, 6, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 7, 3, 1, 9, 10, 6, 2, 11',
		'New 2 QPL values'  =>  '4, 7, 3, 1, 10, 6, 2',
		'New 3 QPL values'  =>  '',
		'Win' =>  '1, 3, 7, 9',
		'QQPL' =>  '7, 3, 1, 10',
		'Trio' =>  '7, 3, 1, 10',
		'Tce' =>  '1, 3, 4, 7, 9, 10',
		'???????' =>  '9',
		'win' =>  '4, 7, 3, 1, 9, 10, 6, 2, 11',
		'For reference' =>  '4, 9, 10, 2, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [5], [2, 4, 5], [2, 11], [2, 9, 11], [2, 9], [2]] ,
		'qpl/trio'       =>  [[1, 9, 2, 4, 6], [1, 5, 2, 6, 11], [1, 5, 2, 4, 6], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 3, 9, 2, 6]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 6, 11], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 9, 2, 4, 6], [1, 3, 9, 2, 6]] ,
		'new 3 qpl/trio' =>  [[1, 5, 2, 4, 6], [1, 9, 2, 6, 11]] ,
		'All QPL values'    =>  '2, 1, 6, 3, 9, 11, 4, 5',
		'New 2 QPL values'  =>  '2, 1, 6, 3, 9, 11, 4, 5',
		'New 3 QPL values'  =>  '2, 1, 6, 9, 11, 4, 5',
		'Win' =>  '2, 9',
		'QQPL' =>  '2, 9',
		'Tce' =>  '1, 2, 3, 6, 9, 11',
		'???????' =>  '',
		//either
		'tce' =>  '1, 2, 3, 6, 9, 11',
		//or some weird shit
		'win/qin/tce' =>  '8, 12, 7, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 6], [4, 11], [4]] ,
		'qpl/trio'       =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'new 2 qpl/trio' =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 6, 4, 1, 11, 12',
		'New 2 QPL values'  =>  '3, 6, 4, 1, 11, 12',
		'New 3 QPL values'  =>  '',
		'Win' =>  '4, 6, 11',
		'QQPL' =>  '6, 4, 11',
		'Trio' =>  '6, 4, 11',
		'Tce' =>  '1, 3, 4, 6, 11, 12',
		'???????' =>  '',
		//either
		'tce' =>  '1, 3, 4, 6, 11, 12',
		//or some weird shit
		'win/qin/tce' =>  '9, 2, 7, 13, 10, 5, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5], [4, 5, 6], [5, 6], [4, 5, 11], [5]] ,
		'qpl/trio'       =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'new 2 qpl/trio' =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'new 3 qpl/trio' =>  [[3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6], [3, 5, 7, 4, 11]] ,
		'All QPL values'    =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'New 2 QPL values'  =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'New 3 QPL values'  =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'Win' =>  '4, 5, 6, 11',
		'QQPL' =>  '4, 5, 11, 6',
		'Trio' =>  '4, 5, 11, 6',
		'Tce' =>  '3, 4, 5, 6, 11, 12',
		'???????' =>  '',
		//either
		'tce' =>  '3, 4, 5, 6, 11, 12',
		//or some weird shit
		'win/qin/tce' =>  '8, 2, 9, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2, 10], [10], [3], [5], [2, 3, 10]] ,
		'qpl/trio'       =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10], [3, 5, 2, 4, 10], [1, 3, 5, 4, 10]] ,
		'new 2 qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 2, 4, 10]] ,
		'new 3 qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 2, 4, 10]] ,
		'All QPL values'    =>  '3, 5, 2, 10, 7, 1, 4',
		'New 2 QPL values'  =>  '3, 5, 2, 10, 7, 4',
		'New 3 QPL values'  =>  '3, 5, 2, 10, 7, 4',
		'Win' =>  '1, 2, 3, 5',
		'QQPL' =>  '3, 5, 2, 10',
		'Trio' =>  '3, 5, 2, 10',
		'Tce' =>  '1, 2, 3, 5, 7, 10',
		'???????' =>  '1',
		'win' =>  '3, 5, 2, 10, 7, 1, 4',
		'For reference' =>  '7, 1, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [11]] ,
		'qpl/trio'       =>  [[5, 7, 6, 11, 13], [3, 7, 6, 11, 13], [3, 5, 7, 6, 13], [5, 7, 4, 11, 13], [5, 7, 4, 6, 13], [5, 7, 4, 6, 11], [1, 5, 7, 6, 11], [3, 5, 7, 6, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 5, 11, 4, 13, 7, 3, 1',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'???????' =>  '4, 6, 7',
		'win' =>  '6, 5, 11, 4, 13, 7, 3, 1',
		'For reference' =>  '6, 4, 13, 7, 3, 1',
	],
];
