<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 4, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 4, 8, 5, 1',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '6, 4, 8, 5, 1',
		'For reference' =>  '6, 4, 8, 1',
		//Sum lack wins  : 0
		//Sum red wins  : 5
		//Sum black shish  : 18
		//Sum red shish  : 1
		//Sum red QPl values  : 6
		//Sum black QPl values: 18
		//Sum red oth values  : 19
		//Sum black oth values: 23
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[1, 12], [9, 1], [9, 1, 11, 2], [9, 7], [9]] ,
		'qpl/trio'       =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'new 2 qpl/trio' =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 11, 1, 7, 2, 3, 12',
		'New 2 QPL values'  =>  '9, 11, 1, 7, 2, 3, 12',
		'New 3 QPL values'  =>  '',
		'Win' =>  '1, 2, 3, 7, 9',
		'QQPL' =>  '9, 11, 1, 7, 2',
		'Trio' =>  '9, 11, 1, 7, 2',
		'Tce' =>  '1, 2, 3, 7, 9, 11',
		'win' =>  '9, 11, 1, 7, 2, 3, 12',
		'For reference' =>  '3',
		//Sum lack wins  : 13
		//Sum red wins  : 29
		//Sum black shish  : 0
		//Sum red shish  : 3
		//Sum red QPl values  : 32
		//Sum black QPl values: 13
		//Sum red oth values  : 5
		//Sum black oth values: 28
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 7, 5, 2, 4], [3, 9, 7, 2, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 7, 2, 5, 9, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '3, 7, 2, 5, 9, 4',
		'For reference' =>  '3, 7, 2, 5, 9',
		//Sum lack wins  : 4
		//Sum red wins  : 0
		//Sum black shish  : 2
		//Sum red shish  : 24
		//Sum red QPl values  : 24
		//Sum black QPl values: 6
		//Sum red oth values  : 1
		//Sum black oth values: 24
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9, 8], [8, 9, 7], [9], [9, 2]] ,
		'qpl/trio'       =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'new 2 qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'new 3 qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7]] ,
		'All QPL values'    =>  '9, 2, 3, 1, 7, 8, 4',
		'New 2 QPL values'  =>  '9, 2, 3, 1, 7, 8, 4',
		'New 3 QPL values'  =>  '9, 2, 3, 1, 7, 8, 4',
		'Win' =>  '2, 7, 8',
		'QQPL' =>  '9, 2, 7',
		'Trio' =>  '9, 2, 7',
		'Tce' =>  '1, 2, 3, 7, 8, 9',
		//either
		'tce' =>  '1, 2, 3, 7, 8, 9',
		//or some weird shit
		'win/qin/tce' =>  '5, 6, 10',
		//Sum lack wins  : 10
		//Sum red wins  : 16
		//Sum black shish  : 4
		//Sum red shish  : 4
		//Sum red QPl values  : 20
		//Sum black QPl values: 14
		//Sum red oth values  : 5
		//Sum black oth values: 16
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [4], [6]] ,
		'qpl/trio'       =>  [[2, 8, 10, 7, 3], [2, 8, 4, 7, 1], [2, 8, 6, 1, 7], [7, 1, 3, 2, 8], [7, 3, 1, 2, 4], [1, 7, 3, 2, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'win' =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'For reference' =>  '1, 3, 2, 8, 10',
		//Sum lack wins  : 10
		//Sum red wins  : 7
		//Sum black shish  : 20
		//Sum red shish  : 4
		//Sum red QPl values  : 11
		//Sum black QPl values: 30
		//Sum red oth values  : 14
		//Sum black oth values: 11
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [6, 1]] ,
		'qpl/trio'       =>  [[6, 11, 10, 7, 9], [11, 10, 3, 7, 6], [11, 4, 3, 7, 6], [11, 4, 7, 9, 6], [11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'new 2 qpl/trio' =>  [[11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'New 2 QPL values'  =>  '6, 11, 7, 1, 4, 2',
		'New 3 QPL values'  =>  '',
		'Win' =>  '1, 6, 10',
		'QQPL' =>  '6, 1',
		'Tce' =>  '1, 4, 6, 7, 10, 11',
		'win' =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'For reference' =>  '11, 7, 4, 10, 9, 3, 2',
		//Sum lack wins  : 6
		//Sum red wins  : 1
		//Sum black shish  : 27
		//Sum red shish  : 19
		//Sum red QPl values  : 20
		//Sum black QPl values: 33
		//Sum red oth values  : 17
		//Sum black oth values: 8
	],
];
