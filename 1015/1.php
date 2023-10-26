<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[7, 5, 3, 11, 2], [7, 3, 5, 11, 4], [4, 11, 8, 5, 3]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 4, 11, 7, 8, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '3, 5, 4, 11, 7, 8, 2',
		'For reference' =>  '3, 5, 4, 11, 8, 2',
		//Sum lack wins  : 0
		//Sum red wins  : 7
		//Sum black shish  : 25
		//Sum red shish  : 8
		//Sum red QPl values  : 15
		//Sum black QPl values: 25
		//Sum red oth values  : 36
		//Sum black oth values: 29
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[8], [9], [5], [7]] ,
		'qpl/trio'       =>  [[5, 7, 1, 4, 8], [5, 7, 1, 4, 2], [5, 7, 4, 2, 9], [1, 7, 2, 6, 5], [5, 1, 8, 2, 7]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 8, 2, 7, 1, 6, 9, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '5, 8, 2, 7, 1, 6, 9, 4',
		'For reference' =>  '2, 1, 6, 4',
		//Sum lack wins  : 8
		//Sum red wins  : 21
		//Sum black shish  : 12
		//Sum red shish  : 1
		//Sum red QPl values  : 22
		//Sum black QPl values: 20
		//Sum red oth values  : 29
		//Sum black oth values: 34
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 4, 6], [5, 1, 4, 13, 9], [5, 1, 4, 2, 9], [5, 1, 3, 4, 2], [1, 4, 6, 9, 5]] ,
		'new 2 qpl/trio' =>  [[5, 1, 4, 13, 9], [5, 1, 4, 2, 9], [1, 4, 6, 9, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 9, 5, 4, 6, 3, 13, 2',
		'New 2 QPL values'  =>  '1, 9, 5, 4, 6, 13, 2',
		'New 3 QPL values'  =>  '',
		'Win' =>  '3, 5',
		'QQPL' =>  '9, 5',
		'Tce' =>  '1, 3, 4, 5, 6, 9',
		'win' =>  '1, 9, 5, 4, 6, 3, 13, 2',
		'For reference' =>  '1, 4, 6, 3, 13, 2',
		//Sum lack wins  : 0
		//Sum red wins  : 14
		//Sum black shish  : 25
		//Sum red shish  : 4
		//Sum red QPl values  : 18
		//Sum black QPl values: 25
		//Sum red oth values  : 33
		//Sum black oth values: 29
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[8, 9], [9, 1], [8, 9, 1], [9]] ,
		'qpl/trio'       =>  [[13, 2, 3, 8, 9], [13, 11, 3, 8, 9], [13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'new 2 qpl/trio' =>  [[13, 2, 3, 8, 9], [13, 11, 3, 8, 9], [13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'new 3 qpl/trio' =>  [[13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'All QPL values'    =>  '13, 9, 8, 11, 2, 3, 1',
		'New 2 QPL values'  =>  '13, 9, 8, 11, 2, 3, 1',
		'New 3 QPL values'  =>  '13, 9, 8, 11, 2, 1',
		'Win' =>  '3, 8, 9',
		'QQPL' =>  '9, 8',
		'Tce' =>  '2, 3, 8, 9, 11, 13',
		'win' =>  '13, 9, 8, 11, 2, 3, 1',
		'For reference' =>  '13, 11, 2, 3',
		//Sum lack wins  : 8
		//Sum red wins  : 10
		//Sum black shish  : 26
		//Sum red shish  : 3
		//Sum red QPl values  : 13
		//Sum black QPl values: 34
		//Sum red oth values  : 38
		//Sum black oth values: 16
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[11, 2], [2], [11, 2, 1], [1], [9], [7]] ,
		'qpl/trio'       =>  [[6, 12, 3, 11, 2], [12, 3, 1, 6, 2], [6, 12, 1, 11, 2], [6, 11, 2, 12, 9], [12, 1, 6, 11, 7]] ,
		'new 2 qpl/trio' =>  [[6, 12, 3, 11, 2], [6, 12, 1, 11, 2], [6, 11, 2, 12, 9]] ,
		'new 3 qpl/trio' =>  [[6, 12, 1, 11, 2]] ,
		'All QPL values'    =>  '12, 6, 11, 1, 7, 9, 2, 3',
		'New 2 QPL values'  =>  '12, 6, 11, 1, 9, 2, 3',
		'New 3 QPL values'  =>  '12, 6, 1, 11, 2',
		'Win' =>  '1, 7, 9, 11',
		'QQPL' =>  '11, 1, 9',
		'Trio' =>  '11, 1, 9',
		'Tce' =>  '1, 6, 7, 9, 11, 12',
		//either
		'tce' =>  '1, 6, 7, 9, 11, 12',
		//or some weird shit
		'win/qin/tce' =>  '4, 10, 5, 14, 8, 13',
		//Sum lack wins  : 13
		//Sum red wins  : 17
		//Sum black shish  : 6
		//Sum red shish  : 15
		//Sum red QPl values  : 32
		//Sum black QPl values: 19
		//Sum red oth values  : 19
		//Sum black oth values: 35
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[1, 5, 7, 8, 4], [1, 3, 5, 4, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 1, 8, 5, 7, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '3, 1, 8, 5, 7, 4',
		'For reference' =>  '3, 1, 8, 5, 7, 4',
		//Sum lack wins  : 0
		//Sum red wins  : 0
		//Sum black shish  : 12
		//Sum red shish  : 16
		//Sum red QPl values  : 16
		//Sum black QPl values: 12
		//Sum red oth values  : 9
		//Sum black oth values: 18
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 9], [8, 7, 9], [8, 9], [9]] ,
		'qpl/trio'       =>  [[2, 11, 10, 7, 9], [2, 11, 13, 7, 9], [2, 11, 8, 7, 9], [2, 13, 7, 8, 9], [2, 13, 1, 8, 9], [2, 10, 8, 14, 9]] ,
		'new 2 qpl/trio' =>  [[2, 11, 10, 7, 9], [2, 11, 13, 7, 9], [2, 11, 8, 7, 9], [2, 13, 7, 8, 9], [2, 13, 1, 8, 9], [2, 10, 8, 14, 9]] ,
		'new 3 qpl/trio' =>  [[2, 11, 8, 7, 9], [2, 13, 7, 8, 9]] ,
		'All QPL values'    =>  '2, 9, 14, 10, 8, 7, 1, 13, 11',
		'New 2 QPL values'  =>  '2, 9, 14, 10, 8, 7, 1, 13, 11',
		'New 3 QPL values'  =>  '2, 9, 8, 7, 13, 11',
		'Win' =>  '7, 8, 9',
		'QQPL' =>  '9, 8',
		'Tce' =>  '2, 7, 8, 9, 10, 14',
		//either
		'tce' =>  '2, 7, 8, 9, 10, 14',
		//or some weird shit
		'win/qin/tce' =>  '6, 12, 5, 4, 3',
		//Sum lack wins  : 8
		//Sum red wins  : 16
		//Sum black shish  : 36
		//Sum red shish  : 15
		//Sum red QPl values  : 31
		//Sum black QPl values: 44
		//Sum red oth values  : 20
		//Sum black oth values: 10
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2, 11]] ,
		'qpl/trio'       =>  [[6, 1, 3, 2, 11], [6, 1, 12, 2, 11], [6, 12, 3, 2, 11]] ,
		'new 2 qpl/trio' =>  [[6, 1, 3, 2, 11], [6, 1, 12, 2, 11], [6, 12, 3, 2, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 2, 3, 11, 12, 1',
		'New 2 QPL values'  =>  '6, 2, 3, 11, 12, 1',
		'New 3 QPL values'  =>  '',
		'Win' =>  '1, 2, 11',
		'QQPL' =>  '2, 11',
		'Tce' =>  '1, 2, 3, 6, 11, 12',
		'win' =>  '6, 2, 3, 11, 12, 1',
		'For reference' =>  '6, 3, 12, 1',
		//Sum lack wins  : 13
		//Sum red wins  : 0
		//Sum black shish  : 6
		//Sum red shish  : 16
		//Sum red QPl values  : 16
		//Sum black QPl values: 19
		//Sum red oth values  : 35
		//Sum black oth values: 35
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2, 10], [2], [8, 2]] ,
		'qpl/trio'       =>  [[3, 1, 9, 2, 10], [3, 12, 1, 2, 10], [3, 12, 1, 8, 2]] ,
		'new 2 qpl/trio' =>  [[3, 1, 9, 2, 10], [3, 12, 1, 2, 10], [3, 12, 1, 8, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 2, 8, 12, 1, 9, 10',
		'New 2 QPL values'  =>  '3, 2, 8, 12, 1, 9, 10',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 8, 9',
		'QQPL' =>  '2, 8',
		'Tce' =>  '1, 2, 3, 8, 9, 12',
		'win' =>  '3, 2, 8, 12, 1, 9, 10',
		'For reference' =>  '3, 12, 1, 9',
		//Sum lack wins  : 20
		//Sum red wins  : 0
		//Sum black shish  : 0
		//Sum red shish  : 25
		//Sum red QPl values  : 25
		//Sum black QPl values: 20
		//Sum red oth values  : 26
		//Sum black oth values: 34
	],
];
