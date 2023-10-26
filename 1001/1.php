<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[7, 5, 1, 2, 6], [7, 1, 5, 10, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 2, 6, 1, 5, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '7, 2, 6, 1, 5, 10',
		'For reference' =>  '7, 2, 1, 5, 10',
		//Sum lack wins  : 6
		//Sum red wins  : 0
		//Sum black shish  : 12
		//Sum red shish  : 13
		//Sum red QPl values  : 13
		//Sum black QPl values: 18
		//Sum red oth values  : 12
		//Sum black oth values: 12
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1, 10, 2], [1, 10], [10, 2], [10], [2], [1, 2], [7]] ,
		'qpl/trio'       =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2], [3, 1, 7, 6, 4]] ,
		'new 2 qpl/trio' =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2]] ,
		'new 3 qpl/trio' =>  [[3, 7, 1, 10, 2]] ,
		'All QPL values'    =>  '3, 6, 4, 2, 10, 1, 7',
		'New 2 QPL values'  =>  '3, 6, 4, 2, 10, 1, 7',
		'New 3 QPL values'  =>  '3, 2, 10, 1, 7',
		'Win' =>  '1, 2',
		'QQPL' =>  '2, 10',
		'Tce' =>  '1, 2, 3, 4, 6, 10',
		//either
		'tce' =>  '1, 2, 3, 4, 6, 10',
		//or some weird shit
		'win/qin/tce' =>  '8, 13, 11, 14, 9, 12, 5',
		//Sum lack wins  : 12
		//Sum red wins  : 8
		//Sum black shish  : 10
		//Sum red shish  : 3
		//Sum red QPl values  : 11
		//Sum black QPl values: 22
		//Sum red oth values  : 40
		//Sum black oth values: 32
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 6], [8], [6]] ,
		'qpl/trio'       =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 8], [5, 7, 1, 2, 6]] ,
		'new 2 qpl/trio' =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 1, 7, 2, 9, 8, 6',
		'New 2 QPL values'  =>  '5, 1, 7, 2, 9, 8, 6',
		'New 3 QPL values'  =>  '',
		'Win' =>  '7, 8',
		'QQPL' =>  '7',
		'Tce' =>  '1, 2, 5, 7, 8, 9',
		//either
		'tce' =>  '1, 2, 5, 7, 8, 9',
		//or some weird shit
		'win/qin/tce' =>  '3, 4, 10',
		//Sum lack wins  : 14
		//Sum red wins  : 7
		//Sum black shish  : 2
		//Sum red shish  : 15
		//Sum red QPl values  : 22
		//Sum black QPl values: 16
		//Sum red oth values  : 3
		//Sum black oth values: 14
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[12, 1], [2], [1, 12, 2]] ,
		'qpl/trio'       =>  [[7, 1, 12, 4, 2]] ,
		'new 2 qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'new 3 qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'All QPL values'    =>  '7, 4, 1, 12, 2',
		'New 2 QPL values'  =>  '7, 4, 1, 12, 2',
		'New 3 QPL values'  =>  '7, 4, 1, 12, 2',
		'Win' =>  '1, 2, 12',
		'QQPL' =>  '1, 12, 2',
		'Trio' =>  '1, 12, 2',
		'Tce' =>  '1, 2, 4, 7, 12',
		//either
		'tce' =>  '1, 2, 4, 7, 12',
		//or some weird shit
		'win/qin/tce' =>  '5, 11, 3, 9, 10, 6, 8',
		//Sum lack wins  : 2
		//Sum red wins  : 13
		//Sum black shish  : 4
		//Sum red shish  : 7
		//Sum red QPl values  : 20
		//Sum black QPl values: 6
		//Sum red oth values  : 17
		//Sum black oth values: 35
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'new 2 qpl/trio' =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 1, 9, 6, 3, 10, 4',
		'New 2 QPL values'  =>  '8, 1, 9, 6, 3, 10, 4',
		'New 3 QPL values'  =>  '',
		'Win' =>  '8, 9',
		'QQPL' =>  '8, 9',
		'Tce' =>  '1, 3, 6, 8, 9, 10',
		//either
		'tce' =>  '1, 3, 6, 8, 9, 10',
		//or some weird shit
		'win/qin/tce' =>  '2, 7, 5',
		//Sum lack wins  : 8
		//Sum red wins  : 9
		//Sum black shish  : 20
		//Sum red shish  : 4
		//Sum red QPl values  : 13
		//Sum black QPl values: 28
		//Sum red oth values  : 12
		//Sum black oth values: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14, 5], [4], [5, 14, 4], [9], [9, 4]] ,
		'qpl/trio'       =>  [[9, 5, 14, 4, 2]] ,
		'new 2 qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'new 3 qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'All QPL values'    =>  '9, 2, 5, 14, 4',
		'New 2 QPL values'  =>  '9, 2, 5, 14, 4',
		'New 3 QPL values'  =>  '9, 2, 5, 14, 4',
		'Win' =>  '4, 5, 9, 14',
		'QQPL' =>  '9, 5, 14, 4',
		'Trio' =>  '9, 5, 14, 4',
		'Tce' =>  '2, 4, 5, 9, 14',
		//either
		'tce' =>  '2, 4, 5, 9, 14',
		//or some weird shit
		'win/qin/tce' =>  '13, 1, 10, 12, 3, 6, 8, 11, 7',
		//Sum lack wins  : 4
		//Sum red wins  : 28
		//Sum black shish  : 2
		//Sum red shish  : 0
		//Sum red QPl values  : 28
		//Sum black QPl values: 6
		//Sum red oth values  : 23
		//Sum black oth values: 48
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2], [7, 6]] ,
		'qpl/trio'       =>  [[1, 7, 5, 8, 2], [1, 7, 3, 8, 2], [1, 3, 8, 7, 6]] ,
		'new 2 qpl/trio' =>  [[1, 3, 8, 7, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 8, 7, 2, 5, 6, 3',
		'New 2 QPL values'  =>  '1, 8, 7, 6, 3',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 5, 6, 7',
		'QQPL' =>  '7, 6, 3',
		'Trio' =>  '7, 6, 3',
		'Tce' =>  '1, 2, 5, 6, 7, 8',
		'win' =>  '1, 8, 7, 2, 5, 6, 3',
		'For reference' =>  '1, 8, 5, 3',
		//Sum lack wins  : 8
		//Sum red wins  : 7
		//Sum black shish  : 8
		//Sum red shish  : 9
		//Sum red QPl values  : 16
		//Sum black QPl values: 16
		//Sum red oth values  : 9
		//Sum black oth values: 14
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[8], [8, 9], [9], [5, 9]] ,
		'qpl/trio'       =>  [[6, 4, 5, 1, 8], [6, 8, 2, 5, 3], [6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [5, 1, 6, 8, 9], [5, 1, 3, 6, 8], [1, 5, 6, 2, 9]] ,
		'new 2 qpl/trio' =>  [[6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 1, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [1, 5, 6, 2, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'New 2 QPL values'  =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 5',
		'QQPL' =>  '9, 5',
		'Tce' =>  '1, 2, 3, 5, 6, 9',
		'win' =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'For reference' =>  '1, 6, 3, 2, 4',
		//Sum lack wins  : 8
		//Sum red wins  : 14
		//Sum black shish  : 12
		//Sum red shish  : 4
		//Sum red QPl values  : 18
		//Sum black QPl values: 20
		//Sum red oth values  : 33
		//Sum black oth values: 34
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8], [9], [2, 4], [2]] ,
		'qpl/trio'       =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'new 2 qpl/trio' =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'New 2 QPL values'  =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 4, 7, 8',
		'QQPL' =>  '8, 4, 2',
		'Trio' =>  '8, 4, 2',
		'Tce' =>  '1, 2, 4, 7, 8, 12',
		'win' =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'For reference' =>  '1, 12, 7, 5, 3',
		//Sum lack wins  : 14
		//Sum red wins  : 9
		//Sum black shish  : 0
		//Sum red shish  : 28
		//Sum red QPl values  : 37
		//Sum black QPl values: 14
		//Sum red oth values  : 0
		//Sum black oth values: 27
	],
];
