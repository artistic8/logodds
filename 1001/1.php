<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[7, 5, 1, 2, 6], [7, 1, 5, 10, 6]] ,
		'All Runners   '  =>  '7, 2, 6, 1, 8, 5, 4, 9, 10, 3',
		'All QPL values'  =>  '7, 2, 6, 1, 5, 10',
		'All Wins'        =>  '6',
		//Count(Wins)     =  1,
		//Count(QPL/Trio) =  2,
		'diff1' =>  '',
		'diff2' =>  '7, 2, 1, 5, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1, 10, 2], [1, 10], [10, 2], [10], [2], [1, 2], [7]] ,
		'qpl/trio'       =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2], [3, 1, 7, 6, 4]] ,
		'All Runners   '  =>  '3, 6, 4, 8, 2, 10, 1, 7, 13, 11, 14, 9, 12, 5',
		'All QPL values'  =>  '3, 6, 4, 2, 10, 1, 7',
		'All Wins'        =>  '2, 10, 1, 7',
		//Count(Wins)     =  7,
		//Count(QPL/Trio) =  5,
		'diff1' =>  '7',
		'diff2' =>  '3, 6, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 6], [8], [6]] ,
		'qpl/trio'       =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 8], [5, 7, 1, 2, 6]] ,
		'All Runners   '  =>  '5, 1, 7, 2, 9, 3, 8, 6, 4, 10',
		'All QPL values'  =>  '5, 1, 7, 2, 9, 8, 6',
		'All Wins'        =>  '7, 8, 6',
		//Count(Wins)     =  3,
		//Count(QPL/Trio) =  3,
		'WP' =>  '5',
		'diff1' =>  '6',
		'diff2' =>  '5, 1, 2, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[12, 1], [2], [1, 12, 2]] ,
		'qpl/trio'       =>  [[7, 1, 12, 4, 2]] ,
		'All Runners   '  =>  '7, 4, 1, 12, 5, 2, 11, 3, 9, 10, 6, 8',
		'All QPL values'  =>  '7, 4, 1, 12, 2',
		'All Wins'        =>  '1, 12, 2',
		//Count(Wins)     =  3,
		//Count(QPL/Trio) =  1,
		'diff1' =>  '',
		'diff2' =>  '7, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'All Runners   '  =>  '1, 8, 9, 6, 3, 10, 2, 7, 4, 5',
		'All QPL values'  =>  '8, 1, 9, 6, 3, 10, 4',
		'All Wins'        =>  '8, 9',
		//Count(Wins)     =  2,
		//Count(QPL/Trio) =  3,
		'diff1' =>  '',
		'diff2' =>  '1, 6, 3, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14, 5], [4], [5, 14, 4], [9], [9, 4]] ,
		'qpl/trio'       =>  [[9, 5, 14, 4, 2]] ,
		'All Runners   '  =>  '9, 2, 5, 14, 4, 13, 1, 10, 12, 3, 6, 8, 11, 7',
		'All QPL values'  =>  '9, 2, 5, 14, 4',
		'All Wins'        =>  '9, 5, 14, 4',
		//Count(Wins)     =  5,
		//Count(QPL/Trio) =  1,
		'diff1' =>  '',
		'diff2' =>  '2',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2], [7, 6]] ,
		'qpl/trio'       =>  [[1, 7, 5, 8, 2], [1, 7, 3, 8, 2], [1, 3, 8, 7, 6]] ,
		'All Runners   '  =>  '1, 8, 7, 2, 5, 6, 3, 4, 9, 10',
		'All QPL values'  =>  '1, 8, 7, 2, 5, 6, 3',
		'All Wins'        =>  '7, 2, 6',
		//Count(Wins)     =  2,
		//Count(QPL/Trio) =  3,
		'diff1' =>  '',
		'diff2' =>  '1, 8, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[8], [8, 9], [9], [5, 9]] ,
		'qpl/trio'       =>  [[6, 4, 5, 1, 8], [6, 8, 2, 5, 3], [6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [5, 1, 6, 8, 9], [5, 1, 3, 6, 8], [1, 5, 6, 2, 9]] ,
		'All Runners   '  =>  '1, 9, 5, 6, 3, 2, 8, 12, 4, 7, 14, 10, 11, 13',
		'All QPL values'  =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'All Wins'        =>  '9, 5, 8',
		//Count(Wins)     =  4,
		//Count(QPL/Trio) =  9,
		'diff1' =>  '8',
		'diff2' =>  '1, 6, 3, 2',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8], [9], [2, 4], [2]] ,
		'qpl/trio'       =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'All Runners   '  =>  '8, 4, 2, 1, 6, 12, 7, 5, 3, 11, 9, 10',
		'All QPL values'  =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'All Wins'        =>  '8, 4, 2, 9',
		//Count(Wins)     =  4,
		//Count(QPL/Trio) =  8,
		'diff1' =>  '9',
		'diff2' =>  '1, 12, 7',
	],
];
