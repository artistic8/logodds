<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[10, 2], [10, 2, 1], [10, 11]] ,
		'qpl/trio'       =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11], [8, 2, 11, 3, 5]] ,
		'new 2 qpl/trio' =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11]] ,
		'new 3 qpl/trio' =>  [[8, 3, 1, 10, 2]] ,
		'All QPL values'    =>  '8, 2, 11, 10, 3, 5, 1',
		'New 2 QPL values'  =>  '8, 2, 11, 10, 3, 1',
		'New 3 QPL values'  =>  '8, 2, 10, 3, 1',
		'Win' =>  '2, 5, 10',
		'QQPL' =>  '2, 11, 10',
		'Trio' =>  '2, 11, 10',
		'Tce' =>  '2, 3, 5, 8, 10, 11',
		'win' =>  '8, 2, 11, 10, 3, 5, 1',
		'For reference' =>  '8, 3, 5',
		//Sum lack wins  : 23
		//Sum red wins  : 1
		//Sum black shish  : 8
		//Sum red shish  : 8
		//Sum red QPl values  : 9
		//Sum black QPl values: 31
		//Sum red oth values  : 16
		//Sum black oth values: 10
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[14], [7], [7, 6], [11], [14, 6], [7, 11]] ,
		'qpl/trio'       =>  [[7, 3, 4, 11, 14], [3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6]] ,
		'new 2 qpl/trio' =>  [[3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6], [7, 3, 4, 11, 14]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'New 2 QPL values'  =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'New 3 QPL values'  =>  '',
		'Win' =>  '6, 7, 11',
		'QQPL' =>  '7, 11, 6',
		'Trio' =>  '7, 11, 6',
		'Tce' =>  '3, 5, 6, 7, 11, 14',
		//either
		'tce' =>  '3, 5, 6, 7, 11, 14',
		//or some weird shit
		'win/qin/tce' =>  '13, 8, 9, 2',
		//Sum lack wins  : 17
		//Sum red wins  : 21
		//Sum black shish  : 14
		//Sum red shish  : 21
		//Sum red QPl values  : 42
		//Sum black QPl values: 31
		//Sum red oth values  : 9
		//Sum black oth values: 23
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4], [4, 10], [10, 1, 3], [3]] ,
		'qpl/trio'       =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [1, 3, 7, 8, 4], [4, 8, 10, 1, 3]] ,
		'new 2 qpl/trio' =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [4, 8, 10, 1, 3]] ,
		'new 3 qpl/trio' =>  [[3, 7, 1, 10, 4], [4, 8, 10, 1, 3]] ,
		'All QPL values'    =>  '4, 3, 7, 10, 8, 1',
		'New 2 QPL values'  =>  '4, 3, 7, 10, 8, 1',
		'New 3 QPL values'  =>  '4, 3, 7, 10, 8, 1',
		'Win' =>  '1, 3, 4',
		'QQPL' =>  '4, 3, 10',
		'Trio' =>  '4, 3, 10',
		'Tce' =>  '1, 3, 4, 7, 8, 10',
		//either
		'tce' =>  '1, 3, 4, 7, 8, 10',
		//or some weird shit
		'win/qin/tce' =>  '5, 2, 9, 6',
		//Sum lack wins  : 14
		//Sum red wins  : 4
		//Sum black shish  : 8
		//Sum red shish  : 7
		//Sum red QPl values  : 11
		//Sum black QPl values: 22
		//Sum red oth values  : 14
		//Sum black oth values: 8
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [2], [7], [8]] ,
		'qpl/trio'       =>  [[8, 6, 1, 2, 3], [8, 6, 2, 1, 5], [8, 2, 4, 1, 7], [7, 1, 5, 4, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 7, 1, 4, 2, 5, 6, 3',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '8, 7, 1, 4, 2, 5, 6, 3',
		'For reference' =>  '1, 4, 6, 3',
		//Sum lack wins  : 10
		//Sum red wins  : 12
		//Sum black shish  : 10
		//Sum red shish  : 4
		//Sum red QPl values  : 16
		//Sum black QPl values: 20
		//Sum red oth values  : 9
		//Sum black oth values: 10
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [8]] ,
		'qpl/trio'       =>  [[10, 8, 4, 5, 1], [10, 8, 4, 5, 3], [10, 8, 2, 3, 5], [10, 8, 11, 1, 5], [5, 1, 3, 10, 8], [8, 10, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 5, 10, 1, 11, 4, 3, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '8, 5, 10, 1, 11, 4, 3, 2',
		'For reference' =>  '10, 1, 11, 4, 3, 2',
		//Sum lack wins  : 8
		//Sum red wins  : 5
		//Sum black shish  : 27
		//Sum red shish  : 4
		//Sum red QPl values  : 9
		//Sum black QPl values: 35
		//Sum red oth values  : 21
		//Sum black oth values: 0
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[1], [2]] ,
		'qpl/trio'       =>  [[6, 10, 4, 7, 1], [6, 10, 2, 7, 1], [6, 1, 10, 3, 2], [1, 7, 3, 6, 2]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 1, 2, 10, 7, 3, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '6, 1, 2, 10, 7, 3, 4',
		'For reference' =>  '6, 10, 7, 3, 4',
		//Sum lack wins  : 2
		//Sum red wins  : 1
		//Sum black shish  : 20
		//Sum red shish  : 10
		//Sum red QPl values  : 11
		//Sum black QPl values: 22
		//Sum red oth values  : 14
		//Sum black oth values: 8
	],
];
