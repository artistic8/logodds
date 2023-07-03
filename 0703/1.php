<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [3], [1, 3]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 11], [3, 7, 2, 4, 11], [3, 7, 4, 11, 13], [3, 5, 4, 11, 13], [1, 3, 4, 11, 13], [1, 7, 2, 4, 11], [3, 5, 2, 4, 11], [3, 14, 2, 4, 11]] ,
		'inters' =>  [[1, 2, 3, 4, 11], [2, 3, 4, 7, 11], [3, 4, 7, 11, 13], [3, 4, 5, 11, 13], [3, 4, 11, 13], [4, 5, 11, 13], [1, 3, 4, 11, 13], [4, 11, 13], [4, 7, 11, 13], [1, 2, 4, 7, 11], [2, 4, 11], [2, 4, 5, 11], [2, 4, 11, 14]] ,
		'WIN' =>  '1, 5',
		'I' =>  '1, 2, 4, 5, 7, 11, 13',
		'S' =>  '2, 4, 11',
		'all' =>  '1, 2, 4, 5, 7, 11, 13',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [2, 4]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'inters' =>  [[1, 3, 4, 6], [1, 2, 3, 4, 6], [1, 3, 6], [1, 4, 6, 9]] ,
		'WIN' =>  '2',
		'I' =>  '1, 3, 6',
		'S' =>  '1, 2, 6',
		'all' =>  '1, 2, 3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[3], [1], [6, 7], [6]] ,
		'qpl/trio' =>  [[3, 7, 2, 4, 11], [1, 7, 2, 4, 11], [1, 7, 2, 4, 10], [1, 7, 2, 4, 6], [1, 7, 9, 2, 4], [3, 7, 4, 6, 10]] ,
		'inters' =>  [[2, 4, 7, 11], [1, 2, 4, 7, 11], [1, 2, 4, 7, 10], [2, 4, 7, 10], [1, 2, 4], [1, 2, 4, 7], [2, 4, 7, 9], [3, 4, 7, 10]] ,
		'WIN' =>  '1, 3, 6',
		'I' =>  '1, 2, 4, 10, 11',
		'S' =>  '3, 4, 6, 10',
		'all' =>  '1, 2, 3, 4, 6, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [5], [2, 4, 5], [2, 11], [2, 9, 11], [2, 9], [2]] ,
		'qpl/trio' =>  [[1, 9, 2, 4, 6], [1, 5, 2, 6, 11], [1, 5, 2, 4, 6], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 3, 9, 2, 6]] ,
		'inters' =>  [[1, 2, 4, 6], [1, 2, 5, 6, 11], [1, 6], [1, 3, 6], [1, 2, 3, 6], [1, 3, 6, 9], [1, 2, 3, 6, 9], [1, 2, 3, 6, 11]] ,
		'WIN' =>  '4, 5, 9',
		'I' =>  '1, 3, 6, 9',
		'S' =>  '1, 3, 6',
		'all' =>  '1, 3, 4, 5, 6, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 6], [4, 11], [4]] ,
		'qpl/trio' =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'inters' =>  [[3, 11, 12], [3, 6, 12], [1, 3, 6, 12], [1, 3, 4, 6, 12]] ,
		'WIN' =>  '4, 11',
		'I' =>  '1, 3, 12',
		'S' =>  '1, 3, 4, 12',
		'all' =>  '1, 3, 4, 11, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5], [4, 5, 6], [5, 6], [4, 5, 11], [5]] ,
		'qpl/trio' =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'inters' =>  [[3, 7, 11], [3, 11], [4, 7, 11], [7, 11], [3, 6], [3, 4, 11], [3, 4, 6, 11], [1, 4, 6, 11], [1, 3, 6], [3, 12]] ,
		'WIN' =>  '5',
		'I' =>  '1, 3, 7',
		'S' =>  '3, 5',
		'all' =>  '1, 3, 5, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2, 10], [10], [3], [5], [2, 3, 10]] ,
		'qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10], [3, 5, 2, 4, 10], [1, 3, 5, 4, 10]] ,
		'inters' =>  [[2, 3, 5, 7, 10], [3, 5, 7], [3, 4, 5, 7], [2, 4, 5, 10], [2, 3, 4, 10], [4, 5], [1, 3, 4, 5], [3, 4, 5, 7, 10]] ,
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
		'qpl/trio' =>  [[5, 7, 6, 11, 13], [3, 7, 6, 11, 13], [3, 5, 7, 6, 13], [5, 7, 4, 11, 13], [5, 7, 4, 6, 13], [5, 7, 4, 6, 11], [1, 5, 7, 6, 11], [3, 5, 7, 6, 11]] ,
		'inters' =>  [[6, 7, 11, 13], [3, 6, 7, 11, 13], [3, 5, 6, 7, 13], [4, 7, 11, 13], [4, 6, 7, 13], [4, 6, 7, 11], [1, 5, 6, 7], [3, 5, 6, 7], [3, 5, 6, 7, 11]] ,
		'WIN' =>  '',
		'I' =>  '3, 4, 6, 7, 13',
		'S' =>  '4, 6, 7',
		'all' =>  '3, 4, 6, 7, 13',
	],
];
