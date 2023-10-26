<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5, 6], [5, 4], [5, 4, 6]] ,
		'qpl/trio'       =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'new 2 qpl/trio' =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'All QPL values'    =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'New 2 QPL values'  =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'New 3 QPL values'  =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'Win' =>  '2, 4, 5',
		'QQPL' =>  '4, 5, 6',
		'Trio' =>  '4, 5, 6',
		'Tce' =>  '1, 2, 3, 4, 5, 6',
		'win' =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'For reference' =>  '3, 1, 2, 7, 8',
		//Sum lack wins  : 10
		//Sum red wins  : 5
		//Sum black shish  : 10
		//Sum red shish  : 11
		//Sum red QPl values  : 16
		//Sum black QPl values: 20
		//Sum red oth values  : 9
		//Sum black oth values: 10
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5, 6], [1, 11], [6], [11]] ,
		'qpl/trio'       =>  [[3, 7, 11, 5, 6], [3, 7, 6, 1, 11], [3, 7, 5, 2, 6]] ,
		'new 2 qpl/trio' =>  [[3, 7, 11, 5, 6], [3, 7, 5, 2, 6], [3, 7, 6, 1, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 6, 11, 7, 5, 2, 1',
		'New 2 QPL values'  =>  '3, 6, 11, 7, 5, 2, 1',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 5, 6',
		'QQPL' =>  '6, 11, 5',
		'Trio' =>  '6, 11, 5',
		'Tce' =>  '2, 3, 5, 6, 7, 11',
		'win' =>  '3, 6, 11, 7, 5, 2, 1',
		'For reference' =>  '3, 7, 2',
		//Sum lack wins  : 17
		//Sum red wins  : 6
		//Sum black shish  : 2
		//Sum red shish  : 10
		//Sum red QPl values  : 16
		//Sum black QPl values: 19
		//Sum red oth values  : 21
		//Sum black oth values: 22
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[4, 8, 2, 1, 9], [4, 8, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 9, 1, 5, 8, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '4, 9, 1, 5, 8, 2',
		'For reference' =>  '4, 1, 5, 8, 2',
		//Sum lack wins  : 0
		//Sum red wins  : 9
		//Sum black shish  : 14
		//Sum red shish  : 6
		//Sum red QPl values  : 15
		//Sum black QPl values: 14
		//Sum red oth values  : 10
		//Sum black oth values: 16
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2], [9], [5, 2], [9, 6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 2, 6, 9], [5, 1, 2, 9, 6], [5, 12, 11, 6, 9]] ,
		'new 2 qpl/trio' =>  [[5, 12, 1, 6, 2], [5, 12, 2, 6, 9], [5, 1, 2, 9, 6], [5, 12, 11, 6, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 6, 2, 11, 12, 9, 1',
		'New 2 QPL values'  =>  '5, 6, 2, 11, 12, 9, 1',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 5, 6, 9',
		'QQPL' =>  '5, 6, 2',
		'Trio' =>  '5, 6, 2',
		'Tce' =>  '2, 5, 6, 9, 11, 12',
		//either
		'tce' =>  '2, 5, 6, 9, 11, 12',
		//or some weird shit
		'win/qin/tce' =>  '4, 7, 10, 8, 3',
		//Sum lack wins  : 8
		//Sum red wins  : 14
		//Sum black shish  : 11
		//Sum red shish  : 13
		//Sum red QPl values  : 27
		//Sum black QPl values: 19
		//Sum red oth values  : 10
		//Sum black oth values: 22
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[6], [6, 7], [6, 5], [6, 8, 7], [6, 7, 5], [6, 8, 7, 5]] ,
		'qpl/trio'       =>  [[2, 11, 4, 5, 1], [2, 11, 5, 1, 6], [2, 11, 4, 5, 7], [11, 2, 5, 6, 7], [11, 2, 8, 5, 7], [11, 4, 7, 6, 5], [11, 8, 5, 6, 7]] ,
		'new 2 qpl/trio' =>  [[11, 2, 5, 6, 7], [11, 4, 7, 6, 5], [11, 8, 5, 6, 7], [2, 11, 5, 1, 6]] ,
		'new 3 qpl/trio' =>  [[11, 8, 5, 6, 7], [11, 2, 5, 6, 7], [11, 4, 7, 6, 5]] ,
		'All QPL values'    =>  '6, 11, 8, 4, 7, 5, 2, 1',
		'New 2 QPL values'  =>  '6, 11, 8, 4, 7, 5, 2, 1',
		'New 3 QPL values'  =>  '6, 11, 8, 4, 7, 5, 2',
		'Win' =>  '5, 6, 7, 8',
		'QQPL' =>  '6, 8, 7',
		'Trio' =>  '6, 8, 7',
		'Tce' =>  '4, 5, 6, 7, 8, 11',
		//either
		'tce' =>  '4, 5, 6, 7, 8, 11',
		//or some weird shit
		'win/qin/tce' =>  '10, 12, 3, 9',
		//Sum lack wins  : 14
		//Sum red wins  : 12
		//Sum black shish  : 17
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
		'wins' =>  [[3], [6]] ,
		'qpl/trio'       =>  [[4, 11, 10, 3, 9], [4, 11, 3, 7, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 11, 3, 6, 7, 9, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '4, 11, 3, 6, 7, 9, 10',
		'For reference' =>  '4, 11, 7, 9, 10',
		//Sum lack wins  : 6
		//Sum red wins  : 3
		//Sum black shish  : 25
		//Sum red shish  : 16
		//Sum red QPl values  : 19
		//Sum black QPl values: 31
		//Sum red oth values  : 18
		//Sum black oth values: 10
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7, 2], [7, 2, 10], [7], [1], [2, 10]] ,
		'qpl/trio'       =>  [[1, 12, 6, 7, 2], [1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'new 2 qpl/trio' =>  [[1, 12, 6, 7, 2], [1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'new 3 qpl/trio' =>  [[1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'All QPL values'    =>  '1, 2, 10, 7, 12, 3, 6',
		'New 2 QPL values'  =>  '1, 2, 10, 7, 12, 3, 6',
		'New 3 QPL values'  =>  '1, 2, 10, 7, 12, 3, 6',
		'Win' =>  '1, 2, 3, 7, 10',
		'QQPL' =>  '1, 2, 10, 7',
		'Trio' =>  '1, 2, 10, 7',
		'Tce' =>  '1, 2, 3, 7, 10, 12',
		'win' =>  '1, 2, 10, 7, 12, 3, 6',
		'For reference' =>  '12, 3, 6',
		//Sum lack wins  : 12
		//Sum red wins  : 8
		//Sum black shish  : 6
		//Sum red shish  : 15
		//Sum red QPl values  : 23
		//Sum black QPl values: 18
		//Sum red oth values  : 14
		//Sum black oth values: 23
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 6], [7, 5, 6], [7, 6], [7], [7, 5]] ,
		'qpl/trio'       =>  [[7, 3, 10, 5, 6], [5, 3, 10, 8, 7]] ,
		'new 2 qpl/trio' =>  [[7, 3, 10, 5, 6], [5, 3, 10, 8, 7]] ,
		'new 3 qpl/trio' =>  [[7, 3, 10, 5, 6]] ,
		'All QPL values'    =>  '7, 3, 10, 5, 8, 6',
		'New 2 QPL values'  =>  '7, 3, 10, 5, 8, 6',
		'New 3 QPL values'  =>  '7, 3, 10, 5, 6',
		'Win' =>  '5, 6, 7',
		'QQPL' =>  '7, 5',
		'Tce' =>  '3, 5, 6, 7, 8, 10',
		//either
		'tce' =>  '3, 5, 6, 7, 8, 10',
		//or some weird shit
		'win/qin/tce' =>  '4, 2, 12, 1, 11, 9',
		//Sum lack wins  : 6
		//Sum red wins  : 12
		//Sum black shish  : 18
		//Sum red shish  : 3
		//Sum red QPl values  : 15
		//Sum black QPl values: 24
		//Sum red oth values  : 22
		//Sum black oth values: 17
	],
];
