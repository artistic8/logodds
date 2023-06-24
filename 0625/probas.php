<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win' =>  '3',
		'wins' =>  [[3]] ,
		'inters' =>  [[2, 10, 13, 14]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '',
		'iInter-diff' =>  '',
		'qin' =>  '2, 10, 13, 14 X 3',
		'qpl/trio' =>  [[3, 14, 2, 10, 13]] ,
		'diff' =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win' =>  '6, 7',
		'wins' =>  [[6, 7]] ,
		'inters' =>  [[3, 5, 6, 8, 10], [3, 5, 8]] ,
		'dInter' =>  '6',
		'dInter-diff' =>  '6',
		'iInter' =>  '3, 5, 8',
		'iInter-diff' =>  '3, 5, 8',
		'qin' =>  '3, 5, 8 X 6, 7',
		'qpl/trio' =>  [[3, 5, 6, 8, 10], [3, 5, 7, 6, 8]] ,
		'diff' =>  '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win' =>  '5, 6, 14',
		'wins' =>  [[5, 6, 14]] ,
		'inters' =>  [[2, 7]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '',
		'iInter-diff' =>  '',
		'qin' =>  '2, 7 X 5, 6, 14',
		'qpl/trio' =>  [[5, 7, 14, 2, 6]] ,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win' =>  '8, 9',
		'wins' =>  [[8, 9]] ,
		'inters' =>  [[3, 5, 11]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '',
		'iInter-diff' =>  '',
		'qin' =>  '3, 5, 11 X 8, 9',
		'qpl/trio' =>  [[3, 5, 9, 8, 11]] ,
		'diff' =>  '',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8]] ,
		'inters' =>  [[1, 3, 4, 12], [1, 3, 4, 8, 12]] ,
		'dInter' =>  '8',
		'dInter-diff' =>  '8',
		'iInter' =>  '1, 3, 4, 12',
		'iInter-diff' =>  '1, 3, 4, 12',
		'qin' =>  '1, 3, 4, 8, 12',
		'qpl/trio' =>  [[1, 3, 12, 4, 8]] ,
		'diff' =>  '',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [] ,
		'inters' =>  [[2, 6, 7, 9, 10]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '',
		'iInter-diff' =>  '',
		'qin' =>  '2, 6, 7, 9, 10',
		'qpl/trio' =>  [[7, 9, 2, 6, 10]] ,
		'diff' =>  '',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[6, 7, 9]] ,
		'inters' =>  [[3, 4], [3, 4, 6, 7, 12], [3, 4, 6, 7, 9]] ,
		'dInter' =>  '6, 7, 9',
		'dInter-diff' =>  '6, 7',
		'iInter' =>  '3, 4, 6, 7',
		'iInter-diff' =>  '3, 4, 6, 7',
		'qin' =>  '3, 4, 6, 7, 9',
		'qpl/trio' =>  [[3, 7, 9, 4, 6], [3, 7, 12, 4, 6]] ,
		'diff' =>  '9, 12',
	],
];
