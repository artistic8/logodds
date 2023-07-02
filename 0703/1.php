<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 11], [3, 7, 2, 4, 11], [3, 7, 4, 11, 13], [3, 5, 4, 11, 13]] ,
		'inters' =>  [[1, 2, 3, 4, 11], [2, 3, 4, 7, 11], [3, 4, 7, 11, 13], [3, 4, 5, 11, 13]] ,
		'WIN' =>  '',
		'I' =>  '2, 3, 4, 7, 11, 13',
		'S' =>  '',
		'X' =>  '',//TO AVOID?
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'inters' =>  [[1, 3, 4, 6], [1, 2, 3, 4, 6]] ,
		'WIN' =>  '2',
		'I' =>  '1, 3, 4, 6',
		'S' =>  '2',
		'X' =>  '',//TO AVOID?
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[3], [1]] ,
		'qpl/trio' =>  [[3, 7, 2, 4, 11], [1, 7, 2, 4, 11], [1, 7, 2, 4, 10]] ,
		'inters' =>  [[2, 4, 7, 11], [1, 2, 4, 7, 11], [1, 2, 4, 7, 10], [2, 4, 7, 10]] ,
		'WIN' =>  '1, 3',
		'I' =>  '1, 2, 4, 7, 10, 11',
		'S' =>  '1',
		'X' =>  '1',//TO AVOID?
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [5], [2, 4, 5], [2, 11]] ,
		'qpl/trio' =>  [[1, 9, 2, 4, 6], [1, 5, 2, 6, 11], [1, 5, 2, 4, 6], [1, 3, 2, 6, 11]] ,
		'inters' =>  [[1, 2, 4, 6], [1, 2, 5, 6, 11], [1, 6], [1, 3, 6]] ,
		'WIN' =>  '2, 4, 5, 9, 11',
		'I' =>  '1, 2, 6',
		'S' =>  '2, 11',
		'X' =>  '2',//TO AVOID?
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 6], [4, 11], [4]] ,
		'qpl/trio' =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'inters' =>  [[3, 11, 12], [3, 6, 12], [1, 3, 6, 12]] ,
		'WIN' =>  '4, 6, 11',
		'I' =>  '3, 6, 12',
		'S' =>  '4, 6',
		'X' =>  '6',//TO AVOID?
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5], [4, 5, 6], [5, 6], [4, 5, 11]] ,
		'qpl/trio' =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11]] ,
		'inters' =>  [[3, 7, 11], [3, 11], [4, 7, 11], [7, 11], [3, 6]] ,
		'WIN' =>  '4, 5, 6, 11',
		'I' =>  '3, 7, 11',
		'S' =>  '4, 5, 6, 11',
		'X' =>  '11',//TO AVOID?
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2, 10], [10]] ,
		'qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10]] ,
		'inters' =>  [[2, 3, 5, 7, 10], [3, 5, 7], [3, 4, 5, 7]] ,
		'WIN' =>  '2, 10',
		'I' =>  '3, 5, 7',
		'S' =>  '10',
		'X' =>  '',//TO AVOID?
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5]] ,
		'qpl/trio' =>  [[5, 7, 6, 11, 13], [3, 7, 6, 11, 13], [3, 5, 7, 6, 13]] ,
		'inters' =>  [[6, 7, 11, 13], [3, 6, 7, 11, 13], [3, 5, 6, 7, 13]] ,
		'WIN' =>  '5',
		'I' =>  '3, 6, 7, 11, 13',
		'S' =>  '5',
		'X' =>  '',//TO AVOID?
	],
];
