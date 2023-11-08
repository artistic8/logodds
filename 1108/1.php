<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6, 7, 5], [8, 6, 7, 5], [7, 5, 9, 8]] ,
		'qpl/trio'       =>  [[8, 2, 6, 7, 5], [2, 7, 5, 9, 8]] ,
		'All Runners   '  =>  '7, 8, 5, 2, 6, 11, 9, 1, 4, 3, 12, 10',
		'All QPL values'  =>  '8, 7, 5, 2, 6, 9',
		'All Wins'        =>  '7, 8, 5, 6, 9',
		'Reference'        =>  '2',
		'favorite' =>  '7',
		'favorite' =>  '8',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[3], [1]] ,
		'qpl/trio'       =>  [[2, 11, 10, 5, 3], [2, 11, 10, 5, 1]] ,
		'All Runners   '  =>  '2, 11, 5, 1, 3, 10, 9, 7, 8, 12, 4, 6',
		'All QPL values'  =>  '2, 11, 5, 1, 3, 10',
		//All wins contains 3
		'All Wins'        =>  '1, 3',
		'Reference'        =>  '2, 11, 5, 10',
		'favorite' =>  '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[1, 2]] ,
		'qpl/trio'       =>  [[3, 12, 8, 1, 2]] ,
		'All Runners   '  =>  '3, 8, 2, 1, 12, 9, 10, 6, 11, 7, 5, 4',
		'All QPL values'  =>  '3, 8, 2, 1, 12',
		'All Wins'        =>  '2, 1',
		//Reference contains 3
		'Reference'        =>  '3, 8, 12',
		'favorite' =>  '3',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[1, 12, 4, 6, 9], [1, 9, 12, 4, 11]] ,
		'All Runners   '  =>  '1, 9, 4, 11, 6, 8, 2, 12, 3, 5, 7, 10',
		'All QPL values'  =>  '1, 9, 4, 11, 6, 12',
		'All Wins'        =>  '9',
		'Reference'        =>  '1, 4, 11, 6, 12',
		'favorite' =>  '1',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[6, 7], [8, 7]] ,
		'qpl/trio'       =>  [[8, 2, 12, 6, 7]] ,
		'All Runners   '  =>  '8, 12, 7, 9, 2, 5, 6, 11, 3, 1, 4, 10',
		'All QPL values'  =>  '8, 12, 7, 2, 6',
		'All Wins'        =>  '8, 7, 6',
		'Reference'        =>  '12, 2',
		'favorite' =>  '8',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1, 12]] ,
		'qpl/trio'       =>  [[7, 4, 2, 1, 12]] ,
		'All Runners   '  =>  '1, 12, 7, 4, 2, 5, 9, 11, 8, 3, 10, 6',
		'All QPL values'  =>  '1, 12, 7, 4, 2',
		'All Wins'        =>  '1, 12',
		'Reference'        =>  '7, 4, 2',
		'favorite' =>  '1',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[8, 7], [7]] ,
		'qpl/trio'       =>  [[4, 10, 1, 8, 7]] ,
		'All Runners   '  =>  '4, 10, 8, 7, 1, 11, 3, 6, 5, 9, 2, 12',
		'All QPL values'  =>  '4, 10, 8, 7, 1',
		'All Wins'        =>  '8, 7',
		'Reference'        =>  '4, 10, 1',
		'favorite' =>  '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[1, 7, 9, 2, 6]] ,
		'All Runners   '  =>  '1, 7, 6, 2, 4, 9, 11, 10, 5, 8, 12, 3',
		'All QPL values'  =>  '1, 7, 6, 2, 9',
		'All Wins'        =>  '',
		'Reference'        =>  '1, 7, 6, 2, 9',
		'favorite' =>  '1',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[1], [3, 1]] ,
		'qpl/trio'       =>  [[10, 11, 8, 3, 1], [11, 10, 4, 3, 1]] ,
		'All Runners   '  =>  '11, 10, 3, 1, 8, 4, 5, 12, 2, 6, 7, 9',
		'All QPL values'  =>  '11, 10, 3, 1, 8, 4',
		//All wins contains 3
		'All Wins'        =>  '3, 1',
		'Reference'        =>  '11, 10, 8, 4',
		'favorite' =>  '11',
	],
];
