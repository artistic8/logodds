<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2, 9], [9, 10], [2, 10], [10], [10, 11], [4, 10], [2], [9]] ,
		'qpl/trio' =>  [[1, 3, 9, 2, 4], [1, 3, 9, 4, 10], [1, 3, 12, 2, 10], [1, 3, 12, 4, 10], [1, 9, 12, 4, 10], [1, 3, 12, 10, 11], [1, 3, 12, 2, 4]] ,
		'inters' =>  [[1, 3, 4], [1, 3, 12], [1, 3, 4, 12], [1, 4, 9, 12], [1, 3, 4, 10]] ,
		'WIN' =>  '1, 2, 4, 9, 10, 11',
		'S' =>  '1, 4, 9, 10',
		'SS' =>  [[2, 9], [9, 10], [1, 2, 3, 10], [1, 3, 10], [1, 9, 10], [1, 10, 11], [1, 4, 10], [1, 2, 4], [1, 4, 9, 10]] ,
		'win bet?' =>  '11',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5], [5, 7], [7], [6]] ,
		'qpl/trio' =>  [[5, 7, 4, 11, 13], [5, 7, 2, 4, 13], [3, 7, 4, 6, 13], [3, 7, 2, 4, 13]] ,
		'inters' =>  [[4, 7, 11, 13], [4, 5, 7, 11, 13], [2, 4, 5, 7, 13], [2, 4, 13], [3, 4, 6, 13], [3, 4, 6, 7, 13], [3, 4, 7, 13], [2, 3, 4, 7, 13]] ,
		'WIN' =>  '4, 5, 6, 7, 11, 13',
		'S' =>  '4, 7, 13',
		'SS' =>  [[5], [4, 5, 7, 11, 13], [4, 5, 7, 13], [4, 7, 13], [4, 6, 7, 13]] ,
		'win bet?' =>  '6, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[6, 7], [7], [7, 11], [11]] ,
		'qpl/trio' =>  [[1, 5, 7, 6, 13], [1, 5, 7, 11, 13], [1, 3, 7, 6, 13], [1, 3, 7, 11, 13]] ,
		'inters' =>  [[1, 5, 13], [1, 5, 6, 13], [1, 3, 6, 7, 13], [1, 3, 7, 13], [1, 3, 7, 11, 13]] ,
		'WIN' =>  '1, 5, 6, 7, 11, 13',
		'S' =>  '1, 7, 11, 13',
		'SS' =>  [[6, 7], [1, 5, 6, 7, 13], [1, 5, 7, 11, 13], [1, 6, 7, 13], [1, 7, 11, 13]] ,
		'win bet?' =>  '',
		'pla bet?' =>  '1, 5, 6, 11, 13',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7, 9], [9]] ,
		'qpl/trio' =>  [[3, 7, 9, 4, 13], [3, 7, 2, 4, 13], [1, 3, 7, 4, 13]] ,
		'inters' =>  [[3, 4, 13], [2, 3, 4, 7, 13], [1, 3, 4, 7, 13], [3, 4, 7, 9, 13], [3, 4, 7, 13]] ,
		'WIN' =>  '3, 4, 7, 9, 13',
		'S' =>  '3, 4, 7, 9, 13',
		'SS' =>  [[7, 9], [3, 4, 7, 13], [3, 4, 7, 9, 13]] ,
		'win bet?' =>  '',
		'pla bet?' =>  '3, 4, 9, 13',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5], [5, 6], [6]] ,
		'qpl/trio' =>  [[1, 5, 4, 6, 11], [1, 7, 4, 6, 10], [1, 5, 6, 10, 11], [1, 5, 4, 6, 10]] ,
		'inters' =>  [[1, 4, 6, 11], [1, 4, 11], [1, 4, 6, 7, 10], [1, 4, 7, 10], [1, 4, 5, 6, 11], [1, 6, 10, 11], [1, 4, 5, 6, 10], [1, 4, 5, 10]] ,
		'WIN' =>  '1, 5, 6',
		'S' =>  '1, 5, 6',
		'SS' =>  [[5], [1, 4, 5, 6, 11], [1, 4, 6], [1, 4, 5, 6], [1, 5, 6]] ,
		'win bet?' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14], [2]] ,
		'qpl/trio' =>  [[1, 7, 14, 4, 13], [3, 7, 14, 4, 13], [7, 9, 14, 4, 13], [1, 3, 7, 2, 4]] ,
		'inters' =>  [[1, 4, 7, 13, 14], [3, 4, 7, 13, 14], [4, 7, 9, 13], [4, 7, 9, 13, 14], [1, 3, 4, 7]] ,
		'WIN' =>  '2, 4, 7, 13, 14',
		'S' =>  '2, 4, 7',
		'SS' =>  [[4, 7, 13, 14], [2, 4, 7]] ,
		'win bet?' =>  '2, 13, 14',
		'pla bet?' =>  '2, 13, 14',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [5]] ,
		'qpl/trio' =>  [[5, 7, 2, 4, 8], [1, 7, 2, 4, 8], [5, 7, 2, 4, 10], [5, 7, 2, 4, 6]] ,
		'inters' =>  [[2, 4, 5, 7, 8], [1, 2, 4, 7, 8], [2, 4, 5, 8], [2, 4, 5, 7, 10], [2, 4, 7, 10], [2, 4, 5, 10], [2, 4, 6, 7]] ,
		'WIN' =>  '2, 4, 5, 7, 8',
		'S' =>  '2, 4, 5, 7',
		'SS' =>  [[2, 4, 7, 8], [2, 4, 7], [2, 4, 5, 7]] ,
		'win bet?' =>  '5, 8',
		'pla bet?' =>  '5, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [2], [5, 10], [2, 10]] ,
		'qpl/trio' =>  [[3, 5, 2, 6, 8], [1, 3, 2, 6, 8], [3, 5, 6, 8, 10], [1, 3, 2, 6, 10], [1, 5, 2, 6, 10]] ,
		'inters' =>  [[2, 3, 5, 8], [1, 3, 6, 8], [3, 5, 6, 8], [3, 6, 8], [1, 3, 6], [1, 5, 6]] ,
		'WIN' =>  '2, 3, 5, 6, 8, 10',
		'S' =>  '2, 5, 6, 10',
		'SS' =>  [[6], [2, 3, 6, 8], [3, 5, 6, 8, 10], [2, 3, 5, 6, 8], [2, 3, 6, 10], [2, 5, 6, 10]] ,
		'win bet?' =>  '',
		'pla bet?' =>  '2, 3, 5, 8, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2], [2, 7, 11], [7]] ,
		'qpl/trio' =>  [[3, 7, 12, 2, 6], [7, 12, 2, 6, 11]] ,
		'inters' =>  [[3, 6, 7, 12], [6, 12], [2, 6, 11, 12], [2, 6, 7, 11, 12]] ,
		'WIN' =>  '2, 6, 7, 11, 12',
		'S' =>  '2, 6, 7, 11, 12',
		'SS' =>  [[2], [2, 6, 7, 11, 12]] ,
		'win bet?' =>  '6, 7, 11, 12',
		'pla bet?' =>  '6, 7, 11, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[5, 7], [5], [7], [6, 7]] ,
		'qpl/trio' =>  [[5, 7, 4, 6, 8], [5, 7, 6, 8, 13], [3, 5, 6, 8, 13]] ,
		'inters' =>  [[4, 6, 8], [6, 8, 13], [3, 6, 8, 13], [5, 6, 8, 13], [5, 8, 13]] ,
		'WIN' =>  '5, 6, 7, 8',
		'S' =>  '5, 6, 7, 8',
		'SS' =>  [[5, 7], [5, 6, 7, 8], [5, 6, 8]] ,
		'win bet?' =>  '',
		'pla bet?' =>  '6, 7, 8',
	],
];