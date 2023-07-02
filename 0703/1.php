<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 11]] ,
		'inters' =>  [[1, 2, 3, 4, 11]] ,
		'WIN' =>  '',
		'S' =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'inters' =>  [[1, 2, 3, 4, 6]] ,
		'WIN' =>  '',
		'S' =>  '',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[1], [3]] ,
		'qpl/trio' =>  [[1, 7, 2, 4, 11], [3, 7, 2, 4, 11]] ,
		'inters' =>  [[2, 4, 7, 11]] ,
		'WIN' =>  '1, 3',
		'S' =>  '3',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2], [2, 9]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6], [1, 3, 9, 2, 6]] ,
		'inters' =>  [[1, 3, 4, 6], [1, 3, 6]] ,
		'WIN' =>  '1, 2, 3, 6, 9',
		'S' =>  '1, 2, 3, 6, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 13], [4, 6]] ,
		'qpl/trio' =>  [[3, 12, 4, 6, 13], [3, 7, 12, 4, 6]] ,
		'inters' =>  [[3, 6, 12], [3, 7, 12]] ,
		'WIN' =>  '3, 4, 6, 12, 13',
		'S' =>  '3, 4, 6, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4]] ,
		'qpl/trio' =>  [[3, 5, 7, 4, 11], [1, 3, 5, 4, 11]] ,
		'inters' =>  [[3, 5, 7, 11], [1, 3, 4, 5, 11]] ,
		'WIN' =>  '3, 4, 5, 11',
		'S' =>  '3, 4, 5, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[4]] ,
		'qpl/trio' =>  [[3, 5, 7, 4, 10], [3, 5, 7, 2, 10]] ,
		'inters' =>  [[3, 5, 7, 10], [2, 3, 5, 7, 10]] ,
		'WIN' =>  '3, 4, 5, 7, 10',
		'S' =>  '3, 5, 7, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5]] ,
		'qpl/trio' =>  [[5, 7, 6, 11, 13]] ,
		'inters' =>  [[6, 7, 11, 13]] ,
		'WIN' =>  '5',
		'S' =>  '5',
	],
];
