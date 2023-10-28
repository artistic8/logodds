<?php

return [
	'1' => [
		/**
		Race 1
		*/
		//Total runners: 11
		'wins' =>  [[11], [2], [11, 2]] ,
		'qpl/trio'       =>  [[1, 3, 6, 7, 8], [3, 1, 7, 6, 11], [1, 3, 7, 6, 2], [3, 1, 6, 7, 4], [3, 1, 7, 11, 2]] ,
		'new 2 qpl/trio' =>  [[3, 1, 7, 11, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 1, 11, 7, 2, 8, 6, 4',
		'New 2 QPL values'  =>  '3, 1, 11, 7, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 1, 7, 8, 6, 4',//total: 6
		'All wins values' =>  '2, 11',//total: 2
		'Remaining' =>  '9, 5, 10',
		'diff' =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		//Total runners: 12
		'wins' =>  [[7, 8], [8]] ,
		'qpl/trio'       =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8], [10, 2, 3, 5, 8]] ,
		'new 2 qpl/trio' =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 8, 10, 5, 2, 7, 1',
		'New 2 QPL values'  =>  '3, 8, 10, 5, 7, 1',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 5, 2, 7',
		'For reference  ' =>  '3, 10, 5, 2, 1',//total: 5
		'All wins values' =>  '7, 8',//total: 2
		'Remaining' =>  '9, 6, 11, 4, 12',
		'diff' =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		//Total runners: 11
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[2, 6, 11, 3, 5], [2, 6, 8, 3, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 3, 6, 8, 5, 11',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '2, 3, 5, 11',
		'For reference  ' =>  '2, 3, 6, 8, 11',//total: 5
		'All wins values' =>  '5',//total: 1
		'Remaining' =>  '7, 9, 1, 4, 10',
		'diff' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		//Total runners: 12
		'wins' =>  [[8], [7, 5, 8], [1, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 7, 10, 4], [1, 5, 7, 10, 8]] ,
		'new 2 qpl/trio' =>  [[1, 5, 7, 10, 8]] ,
		'new 3 qpl/trio' =>  [[1, 5, 7, 10, 8]] ,
		'All QPL values'    =>  '1, 5, 7, 10, 8, 4',
		'New 2 QPL values'  =>  '1, 5, 7, 10, 8',
		'New 3 QPL values'  =>  '1, 5, 7, 10, 8',
		'For reference  ' =>  '10, 4',//total: 2
		'All wins values' =>  '1, 5, 7, 8',//total: 4
		'Remaining' =>  '3, 12, 2, 9, 11, 6',
		'diff' =>  '',
	],
	'7' => [
		/**
		Race 7
		*/
		//Total runners: 12
		'wins' =>  [[11, 2], [11], [4, 11]] ,
		'qpl/trio'       =>  [[4, 1, 3, 11, 2], [1, 3, 7, 4, 11], [1, 3, 12, 4, 11], [1, 3, 7, 2, 4]] ,
		'new 2 qpl/trio' =>  [[4, 1, 3, 11, 2], [1, 3, 7, 4, 11], [1, 3, 12, 4, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 11, 3, 2, 7, 12',
		'New 2 QPL values'  =>  '1, 4, 11, 3, 2, 7, 12',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '11, 3, 2, 7',
		'For reference  ' =>  '1, 3, 7, 12',//total: 4
		'All wins values' =>  '2, 4, 11',//total: 3
		'Remaining' =>  '10, 5, 9, 6, 8',
		'diff' =>  '',
		'WIN' =>  '2, 4, 11',
		'tce??' =>  '1, 2, 3, 4, 7, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		//Total runners: 11
		'wins' =>  [[9], [9, 8], [9, 5, 8], [9, 5, 6], [8], [5, 6], [5, 8]] ,
		'qpl/trio'       =>  [[1, 12, 4, 8, 9], [1, 12, 4, 6, 9], [1, 4, 9, 5, 8], [1, 4, 9, 5, 6], [12, 1, 4, 5, 6], [12, 1, 4, 5, 8]] ,
		'new 2 qpl/trio' =>  [[1, 12, 4, 8, 9], [1, 4, 9, 5, 8], [1, 4, 9, 5, 6], [12, 1, 4, 5, 6], [12, 1, 4, 5, 8]] ,
		'new 3 qpl/trio' =>  [[1, 4, 9, 5, 8], [1, 4, 9, 5, 6]] ,
		'All QPL values'    =>  '12, 5, 4, 1, 8, 6',
		'New 2 QPL values'  =>  '12, 5, 4, 1, 8, 6',
		'New 3 QPL values'  =>  '5, 4, 1, 8, 6',
		'For reference  ' =>  '12, 4, 1',//total: 3
		'All wins values' =>  '5, 6, 8, 9',//total: 4
		'Remaining' =>  '7, 2, 10, 3, 11',
		'diff' =>  '',
	],
];
