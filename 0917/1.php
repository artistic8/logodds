<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [5], [6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 14, 6, 8], [6, 8, 5, 1, 2], [6, 8, 2, 12, 5], [6, 8, 2, 1, 12], [5, 12, 1, 6, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 12, 5, 8, 1, 2, 14',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '6, 12, 5, 8, 1, 2, 14',
		'For reference' =>  '12, 8, 1, 14',
		//Sum lack wins  : 8
		//Sum red wins  : 5
		//Sum black shish  : 8
		//Sum red shish  : 27
		//Sum red QPl values  : 32
		//Sum black QPl values: 16
		//Sum red oth values  : 19
		//Sum black oth values: 27
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[8], [9], [9, 13], [13], [5, 14], [14]] ,
		'qpl/trio'       =>  [[3, 14, 7, 2, 8], [3, 9, 14, 2, 11], [3, 9, 14, 2, 13], [3, 14, 2, 8, 9], [3, 14, 5, 2, 13], [3, 2, 4, 5, 14]] ,
		'new 2 qpl/trio' =>  [[3, 9, 14, 2, 13], [3, 14, 5, 2, 13], [3, 2, 4, 5, 14]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 14, 9, 2, 5, 13, 7, 4, 8, 11',
		'New 2 QPL values'  =>  '3, 14, 9, 2, 5, 13, 4',
		'New 3 QPL values'  =>  '',
		'Win' =>  '5, 9, 13',
		'QQPL' =>  '14, 9, 5',
		'Trio' =>  '14, 9, 5',
		'Tce' =>  '2, 3, 5, 9, 13, 14',
		//either
		'tce' =>  '2, 3, 5, 9, 13, 14',
		//or some weird shit
		'win/qin/tce' =>  '6, 10, 1, 12',
		//Sum lack wins  : 21
		//Sum red wins  : 28
		//Sum black shish  : 17
		//Sum red shish  : 10
		//Sum red QPl values  : 38
		//Sum black QPl values: 38
		//Sum red oth values  : 13
		//Sum black oth values: 16
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[7, 6], [6], [7], [5, 6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7], [2, 8, 1, 5, 6], [1, 5, 2, 8, 7], [1, 5, 7, 2, 4], [1, 5, 2, 11, 7]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7], [2, 8, 1, 5, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 2, 11, 8, 5, 7, 4, 6',
		'New 2 QPL values'  =>  '1, 2, 8, 5, 7, 6',
		'New 3 QPL values'  =>  '',
		'Win' =>  '5, 7',
		'QQPL' =>  '5, 7',
		'Tce' =>  '1, 2, 5, 7, 8, 11',
		//either
		'tce' =>  '1, 2, 5, 7, 8, 11',
		//or some weird shit
		'win/qin/tce' =>  '3, 12, 10, 9',
		//Sum lack wins  : 6
		//Sum red wins  : 12
		//Sum black shish  : 25
		//Sum red shish  : 1
		//Sum red QPl values  : 13
		//Sum black QPl values: 31
		//Sum red oth values  : 24
		//Sum black oth values: 10
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[3], [2, 11], [3, 12, 2, 11], [7, 2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'new 2 qpl/trio' =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'new 3 qpl/trio' =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'All QPL values'    =>  '7, 2, 3, 5, 11, 12',
		'New 2 QPL values'  =>  '7, 2, 3, 5, 11, 12',
		'New 3 QPL values'  =>  '7, 2, 3, 5, 11, 12',
		'Win' =>  '2, 3, 7, 11',
		'QQPL' =>  '7, 2, 3, 11',
		'Trio' =>  '7, 2, 3, 11',
		'Tce' =>  '2, 3, 5, 7, 11, 12',
		//either
		'tce' =>  '2, 3, 5, 7, 11, 12',
		//or some weird shit
		'win/qin/tce' =>  '10, 8, 1, 6, 4, 9',
		//Sum lack wins  : 13
		//Sum red wins  : 22
		//Sum black shish  : 0
		//Sum red shish  : 5
		//Sum red QPl values  : 27
		//Sum black QPl values: 13
		//Sum red oth values  : 10
		//Sum black oth values: 28
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[2, 5], [5], [10]] ,
		'qpl/trio'       =>  [[8, 13, 2, 3, 5], [8, 13, 3, 1, 10], [8, 13, 4, 3, 1], [8, 13, 6, 3, 1]] ,
		'new 2 qpl/trio' =>  [[8, 13, 2, 3, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 13, 3, 1, 10, 6, 4, 2, 5',
		'New 2 QPL values'  =>  '8, 13, 3, 2, 5',
		'New 3 QPL values'  =>  '',
		'Win' =>  '1, 6, 10',
		'QQPL' =>  '2, 5',
		'Tce' =>  '1, 3, 6, 8, 10, 13',
		'win' =>  '8, 13, 3, 1, 10, 6, 4, 2, 5',
		'For reference' =>  '8, 13, 3, 1, 6, 4',
		//Sum lack wins  : 12
		//Sum red wins  : 5
		//Sum black shish  : 31
		//Sum red shish  : 4
		//Sum red QPl values  : 9
		//Sum black QPl values: 43
		//Sum red oth values  : 42
		//Sum black oth values: 11
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [5], [5, 14], [5, 9], [5, 14, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 6, 2, 9], [1, 6, 2, 5, 14], [1, 6, 8, 5, 9], [6, 2, 8, 1, 5], [6, 2, 4, 1, 5], [1, 5, 14, 6, 4], [1, 9, 6, 4, 5]] ,
		'new 2 qpl/trio' =>  [[1, 6, 2, 5, 14], [1, 5, 14, 6, 4], [1, 5, 6, 2, 9], [1, 6, 8, 5, 9], [1, 9, 6, 4, 5]] ,
		'new 3 qpl/trio' =>  [[1, 6, 2, 5, 14], [1, 5, 14, 6, 4]] ,
		'All QPL values'    =>  '1, 6, 5, 2, 4, 9, 8, 14',
		'New 2 QPL values'  =>  '1, 6, 5, 2, 4, 9, 8, 14',
		'New 3 QPL values'  =>  '1, 6, 5, 2, 4, 14',
		'Win' =>  '5, 6',
		'QQPL' =>  '6, 5',
		'Tce' =>  '1, 2, 4, 5, 6, 9',
		//either
		'tce' =>  '1, 2, 4, 5, 6, 9',
		//or some weird shit
		'win/qin/tce' =>  '10, 13, 11, 3, 12, 7',
		//Sum lack wins  : 6
		//Sum red wins  : 28
		//Sum black shish  : 14
		//Sum red shish  : 1
		//Sum red QPl values  : 29
		//Sum black QPl values: 20
		//Sum red oth values  : 22
		//Sum black oth values: 34
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[4, 5], [9], [8, 9], [5], [8], [12]] ,
		'qpl/trio'       =>  [[10, 2, 9, 4, 5], [2, 10, 4, 12, 9], [2, 10, 5, 8, 9], [2, 10, 7, 8, 9], [2, 10, 8, 3, 9], [2, 10, 8, 3, 5], [2, 10, 8, 5, 12], [2, 10, 11, 5, 12], [2, 10, 11, 9, 5]] ,
		'new 2 qpl/trio' =>  [[10, 2, 9, 4, 5], [2, 10, 5, 8, 9], [2, 10, 7, 8, 9], [2, 10, 8, 3, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 9, 10, 5, 12, 8, 3, 4, 7, 11',
		'New 2 QPL values'  =>  '2, 9, 10, 5, 8, 3, 4, 7',
		'New 3 QPL values'  =>  '',
		'Win' =>  '5, 8, 9',
		'QQPL' =>  '9, 5, 8',
		'Trio' =>  '9, 5, 8',
		'Tce' =>  '2, 5, 8, 9, 10, 12',
		//either
		'tce' =>  '2, 5, 8, 9, 10, 12',
		//or some weird shit
		'win/qin/tce' =>  '1, 6',
		//Sum lack wins  : 12
		//Sum red wins  : 26
		//Sum black shish  : 23
		//Sum red shish  : 10
		//Sum red QPl values  : 36
		//Sum black QPl values: 35
		//Sum red oth values  : 1
		//Sum black oth values: 6
	],
];
