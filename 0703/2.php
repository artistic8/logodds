<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1, 3], [3]] ,
		'qpl/trio' =>  [[1, 3, 4, 11, 13], [3, 7, 4, 11, 13], [1, 3, 2, 4, 11], [1, 7, 2, 4, 11]] ,
		'inters' =>  [[1, 3, 4, 11, 13], [4, 11, 13], [4, 7, 11, 13], [1, 2, 3, 4, 11], [1, 2, 4, 7, 11]] ,
		'WIN' =>  '',
		'I' =>  '2, 4, 7, 11, 13',
		'S' =>  '2, 4, 11',
		'all' =>  '2, 4, 7, 11, 13',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [2, 4]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'inters' =>  [[1, 3, 4, 6], [1, 2, 3, 4, 6], [1, 3, 6]] ,
		'WIN' =>  '2',
		'I' =>  '1, 3, 6',
		'S' =>  '1, 2, 3, 6',
		'all' =>  '1, 2, 3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[1]] ,
		'qpl/trio' =>  [[1, 7, 2, 4, 10], [1, 7, 9, 2, 4]] ,
		'inters' =>  [[1, 2, 4, 7, 10], [2, 4, 7, 9], [2, 4, 7, 10]] ,
		'WIN' =>  '1',
		'I' =>  '2, 4, 7, 10',
		'S' =>  '1, 2, 4, 7, 10',
		'all' =>  '1, 2, 4, 7, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2, 9], [9], [2]] ,
		'qpl/trio' =>  [[1, 3, 9, 2, 6]] ,
		'inters' =>  [[1, 3, 6], [1, 2, 3, 6], [1, 3, 6, 9]] ,
		'WIN' =>  '2, 9',
		'I' =>  '1, 3, 6',
		'S' =>  '1, 2, 3, 6, 9',
		'all' =>  '1, 2, 3, 6, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio' =>  [[1, 3, 12, 4, 6]] ,
		'inters' =>  [[1, 3, 6, 12], [1, 3, 4, 6, 12]] ,
		'WIN' =>  '4',
		'I' =>  '1, 3, 6, 12',
		'S' =>  '1, 3, 4, 6, 12',
		'all' =>  '1, 3, 4, 6, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[5], [4, 5, 11], [4, 5], [4, 5, 6]] ,
		'qpl/trio' =>  [[3, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'inters' =>  [[3, 4, 6, 11], [3, 6], [1, 3, 6], [3, 12], [3, 11]] ,
		'WIN' =>  '4, 5',
		'I' =>  '3',
		'S' =>  '3, 4, 5',
		'all' =>  '3, 4, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [3], [2, 3, 10], [10]] ,
		'qpl/trio' =>  [[3, 5, 2, 4, 10], [3, 5, 7, 4, 10], [1, 3, 5, 4, 10], [3, 5, 7, 2, 10]] ,
		'inters' =>  [[2, 3, 4, 10], [2, 4, 5, 10], [4, 5], [3, 4, 5, 7], [1, 3, 4, 5], [2, 3, 5, 7, 10], [3, 4, 5, 7, 10]] ,
		'WIN' =>  '',
		'I' =>  '4, 7',
		'S' =>  '7',
		'all' =>  '4, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [11]] ,
		'qpl/trio' =>  [[5, 7, 4, 6, 11], [5, 7, 6, 11, 13], [1, 5, 7, 6, 11], [3, 5, 7, 6, 11]] ,
		'inters' =>  [[4, 6, 7, 11], [6, 7, 11, 13], [1, 5, 6, 7], [3, 5, 6, 7]] ,
		'WIN' =>  '',
		'I' =>  '6, 7',
		'S' =>  '6, 7',
		'all' =>  '6, 7',
	],
];
