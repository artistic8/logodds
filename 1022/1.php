<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2], [9], [2, 10, 1]] ,
		'qpl/trio'       =>  [[3, 1, 5, 8, 2], [3, 1, 12, 8, 2], [3, 1, 14, 2, 8], [3, 1, 2, 8, 9], [8, 3, 2, 10, 1]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[8, 3, 2, 10, 1]] ,
		'All QPL values'    =>  '2, 3, 8, 10, 1, 12, 14, 9',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '2, 3, 8, 10, 1',
		'For reference  ' =>  '3, 8, 12, 14',//number of primes: 1
		'All wins values' =>  '1, 2, 9, 10',//number of primes: 1
		'Remaining' =>  '11, 13, 6, 7, 4',//number of primes: 3,
		'diff' =>  '',
		'WIN' =>  '1, 2, 9, 10',
		'tce??' =>  '1, 2, 3, 8, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [1, 2, 11], [2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 6, 1], [7, 5, 2, 11, 1]] ,
		'new 2 qpl/trio' =>  [[7, 5, 2, 11, 1]] ,
		'new 3 qpl/trio' =>  [[7, 5, 2, 11, 1]] ,
		'All QPL values'    =>  '1, 5, 7, 2, 11, 6',
		'New 2 QPL values'  =>  '1, 5, 7, 2, 11',
		'New 3 QPL values'  =>  '1, 5, 7, 2, 11',
		//Primes majority,
		'primes' =>  '5, 7, 2, 11',
		'For reference  ' =>  '5, 7, 6',//number of primes: 2
		'All wins values' =>  '1, 2, 11',//number of primes: 2
		'Remaining' =>  '9, 12, 8, 14, 13, 3, 4, 10',//number of primes: 2,
		'diff' =>  '',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2]] ,
		'qpl/trio'       =>  [[4, 13, 12, 1, 2], [4, 2, 13, 12, 5], [4, 2, 13, 12, 3], [4, 13, 3, 1, 2]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 3, 12, 1, 2, 5, 13',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 2, 5, 13',
		'For reference  ' =>  '4, 3, 12, 1, 5, 13',//number of primes: 3
		'All wins values' =>  '2',//number of primes: 1
		'Remaining' =>  '8, 6, 14, 9, 10, 7, 11',//number of primes: 2,
		'diff' =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[3, 14, 8, 10, 9], [14, 3, 8, 2, 9], [14, 5, 10, 9, 8], [1, 14, 10, 9, 8]] ,
		'new 2 qpl/trio' =>  [[3, 14, 8, 10, 9], [14, 3, 8, 2, 9], [14, 5, 10, 9, 8], [1, 14, 10, 9, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '14, 9, 1, 5, 8, 3, 10, 2',
		'New 2 QPL values'  =>  '14, 9, 1, 5, 8, 3, 10, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '14, 1, 5, 3, 10, 2',//number of primes: 3
		'All wins values' =>  '8, 9',//number of primes: 0
		'Remaining' =>  '7, 4, 12, 11, 6, 13',//number of primes: 3,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 7], [9]] ,
		'qpl/trio'       =>  [[4, 13, 2, 9, 7], [9, 7, 3, 4, 2], [5, 4, 2, 9, 7], [3, 5, 4, 2, 9]] ,
		'new 2 qpl/trio' =>  [[4, 13, 2, 9, 7], [9, 7, 3, 4, 2], [5, 4, 2, 9, 7]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 4, 7, 5, 3, 2, 13',
		'New 2 QPL values'  =>  '9, 4, 7, 5, 3, 2, 13',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '7, 5, 3, 2, 13',
		'For reference  ' =>  '4, 5, 3, 2, 13',//number of primes: 4
		'All wins values' =>  '7, 9',//number of primes: 1
		'Remaining' =>  '1, 8, 11, 6, 12, 10',//number of primes: 1,
		'diff' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1], [7], [2], [2, 1]] ,
		'qpl/trio'       =>  [[2, 13, 6, 7, 1], [2, 13, 6, 3, 7], [2, 13, 6, 3, 1], [13, 6, 3, 12, 2], [13, 6, 12, 2, 1]] ,
		'new 2 qpl/trio' =>  [[2, 13, 6, 7, 1], [2, 13, 6, 3, 1], [13, 6, 12, 2, 1]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 1, 12, 7, 3, 13, 6',
		'New 2 QPL values'  =>  '2, 1, 12, 7, 3, 13, 6',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '2, 7, 3, 13',
		'For reference  ' =>  '12, 3, 13, 6',//number of primes: 2
		'All wins values' =>  '1, 2, 7',//number of primes: 2
		'Remaining' =>  '5, 4, 10, 11, 8, 9, 14',//number of primes: 2,
		'diff' =>  '',
		'WIN' =>  '1, 2, 7',
		'tce??' =>  '1, 2, 3, 7, 12, 13',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[11, 2, 6, 3, 9], [11, 2, 6, 12, 9], [11, 2, 6, 14, 9], [11, 2, 6, 5, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '11, 2, 9, 5, 3, 12, 6, 14',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '11, 2, 5, 3, 12, 6, 14',//number of primes: 4
		'All wins values' =>  '9',//number of primes: 0
		'Remaining' =>  '1, 4, 13, 7, 8, 10',//number of primes: 2,
		'diff' =>  '',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7, 9, 8], [7, 8], [7], [6, 7], [9, 8], [8]] ,
		'qpl/trio'       =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8], [1, 5, 13, 7, 8], [8, 13, 1, 6, 7], [8, 13, 10, 1, 7], [1, 7, 3, 13, 8]] ,
		'new 2 qpl/trio' =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8], [1, 5, 13, 7, 8], [8, 13, 1, 6, 7], [8, 13, 10, 1, 7], [1, 7, 3, 13, 8]] ,
		'new 3 qpl/trio' =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8]] ,
		'All QPL values'    =>  '1, 8, 7, 13, 9, 3, 5, 10, 6',
		'New 2 QPL values'  =>  '1, 8, 7, 13, 9, 3, 5, 10, 6',
		'New 3 QPL values'  =>  '1, 8, 7, 13, 9, 6',
		'For reference  ' =>  '1, 13, 3, 5, 10',//number of primes: 3
		'All wins values' =>  '6, 7, 8, 9',//number of primes: 1
		'Remaining' =>  '4, 12, 2, 14, 11',//number of primes: 2,
		'diff' =>  '',
		'WIN' =>  '6, 7, 8, 9',
		'tce??' =>  '1, 3, 7, 8, 9, 13',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[9, 8]] ,
		'qpl/trio'       =>  [[7, 14, 10, 9, 8], [10, 4, 7, 8, 9]] ,
		'new 2 qpl/trio' =>  [[7, 14, 10, 9, 8], [10, 4, 7, 8, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 9, 8, 14, 10, 4',
		'New 2 QPL values'  =>  '7, 9, 8, 14, 10, 4',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '7, 14, 10, 4',//number of primes: 1
		'All wins values' =>  '8, 9',//number of primes: 0
		'Remaining' =>  '3, 12, 6, 2, 11, 1, 5, 13',//number of primes: 5,
		'diff' =>  '',
	],
];
