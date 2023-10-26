<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[2, 8, 4, 3, 9], [3, 7, 2, 8, 9], [3, 5, 2, 9, 8], [2, 8, 6, 3, 9]] ,
		'new 2 qpl/trio' =>  [[2, 8, 4, 3, 9], [3, 7, 2, 8, 9], [3, 5, 2, 9, 8], [2, 8, 6, 3, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'New 2 QPL values'  =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'New 3 QPL values'  =>  '',
		'Win' =>  '7, 8',
		'QQPL' =>  '9, 8',
		'Tce' =>  '2, 3, 5, 7, 8, 9',
		'win' =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'For reference' =>  '2, 3, 5, 7, 6, 4',
		//Sum lack wins  : 8
		//Sum red wins  : 9
		//Sum black shish  : 12
		//Sum red shish  : 15
		//Sum red QPl values  : 24
		//Sum black QPl values: 20
		//Sum red oth values  : 1
		//Sum black oth values: 10
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[6], [4, 5], [5, 6], [5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 8, 6], [6, 8, 3, 4, 5], [6, 2, 3, 4, 5], [1, 5, 3, 2, 6], [1, 3, 4, 5, 6], [6, 4, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [[6, 8, 3, 4, 5], [6, 2, 3, 4, 5], [1, 3, 4, 5, 6], [6, 4, 2, 1, 5], [5, 1, 3, 8, 6], [1, 5, 3, 2, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 5, 1, 2, 4, 3, 8',
		'New 2 QPL values'  =>  '6, 5, 1, 2, 4, 3, 8',
		'New 3 QPL values'  =>  '',
		'Win' =>  '3, 4, 5',
		'QQPL' =>  '6, 5, 4',
		'Trio' =>  '6, 5, 4',
		'Tce' =>  '1, 2, 3, 4, 5, 6',
		'win' =>  '6, 5, 1, 2, 4, 3, 8',
		'For reference' =>  '1, 2, 3, 8',
		//Sum lack wins  : 10
		//Sum red wins  : 5
		//Sum black shish  : 10
		//Sum red shish  : 4
		//Sum red QPl values  : 9
		//Sum black QPl values: 20
		//Sum red oth values  : 16
		//Sum black oth values: 10
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5], [1], [9]] ,
		'qpl/trio'       =>  [[4, 2, 10, 1, 5], [4, 2, 6, 9, 1]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 2, 1, 9, 6, 10, 5',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '4, 2, 1, 9, 6, 10, 5',
		'For reference' =>  '4, 2, 6, 10',
		//Sum lack wins  : 0
		//Sum red wins  : 15
		//Sum black shish  : 22
		//Sum red shish  : 0
		//Sum red QPl values  : 15
		//Sum black QPl values: 22
		//Sum red oth values  : 10
		//Sum black oth values: 8
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[7, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 5, 1, 6], [2, 8, 1, 6, 7]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 5, 1, 6, 8, 7',
		'New 2 QPL values'  =>  '2, 5, 1, 6, 8, 7',
		'New 3 QPL values'  =>  '',
		'Win' =>  '6, 7',
		'QQPL' =>  '6',
		'Tce' =>  '1, 2, 5, 6, 7, 8',
		//either
		'tce' =>  '1, 2, 5, 6, 7, 8',
		//or some weird shit
		'win/qin/tce' =>  '9, 4, 10, 12, 3, 11',
		//Sum lack wins  : 6
		//Sum red wins  : 7
		//Sum black shish  : 10
		//Sum red shish  : 6
		//Sum red QPl values  : 13
		//Sum black QPl values: 16
		//Sum red oth values  : 24
		//Sum black oth values: 25
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [5, 2], [4, 5]] ,
		'qpl/trio'       =>  [[6, 2, 4, 9, 5], [9, 3, 2, 6, 5], [6, 2, 3, 4, 5]] ,
		'new 2 qpl/trio' =>  [[6, 2, 4, 9, 5], [9, 3, 2, 6, 5], [6, 2, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 2, 5, 4, 3, 9',
		'New 2 QPL values'  =>  '6, 2, 5, 4, 3, 9',
		'New 3 QPL values'  =>  '',
		'Win' =>  '2, 4, 5',
		'QQPL' =>  '2, 5, 4',
		'Trio' =>  '2, 5, 4',
		'Tce' =>  '2, 3, 4, 5, 6, 9',
		//either
		'tce' =>  '2, 3, 4, 5, 6, 9',
		//or some weird shit
		'win/qin/tce' =>  '1, 8, 7, 11, 10',
		//Sum lack wins  : 6
		//Sum red wins  : 5
		//Sum black shish  : 6
		//Sum red shish  : 12
		//Sum red QPl values  : 17
		//Sum black QPl values: 12
		//Sum red oth values  : 8
		//Sum black oth values: 29
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[1]] ,
		'qpl/trio'       =>  [[10, 4, 11, 7, 5], [10, 4, 11, 7, 1], [10, 4, 2, 7, 1], [10, 11, 2, 7, 1], [10, 11, 2, 7, 5], [7, 5, 1, 10, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '10, 7, 5, 1, 11, 4, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '10, 7, 5, 1, 11, 4, 2',
		'For reference' =>  '10, 7, 5, 11, 4, 2',
		//Sum lack wins  : 0
		//Sum red wins  : 1
		//Sum black shish  : 27
		//Sum red shish  : 12
		//Sum red QPl values  : 13
		//Sum black QPl values: 27
		//Sum red oth values  : 12
		//Sum black oth values: 14
	],
];
