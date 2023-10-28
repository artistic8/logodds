<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 4, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 4, 8, 5, 1',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '6, 4, 8, 1',//number of primes: 0
		'All wins values' =>  '5',//number of primes: 1
		'Remaining' =>  '11, 2, 3, 10, 7, 9'//number of primes: 4,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[1, 12], [9, 1], [9, 1, 11, 2], [9, 7], [9]] ,
		'qpl/trio'       =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'new 2 qpl/trio' =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 11, 1, 7, 2, 3, 12',
		'New 2 QPL values'  =>  '9, 11, 1, 7, 2, 3, 12',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '11, 7, 2, 3',
		'For reference  ' =>  '3',//number of primes: 1
		'All wins values' =>  '1, 2, 7, 9, 11, 12',//number of primes: 3
		'Remaining' =>  '8, 10, 4, 5, 6'//number of primes: 1,
		'tce' =>  '1, 2, 3, 7, 9, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 7, 5, 2, 4], [3, 9, 7, 2, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 7, 2, 5, 9, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 7, 2, 5',
		'For reference  ' =>  '3, 7, 2, 5, 9',//number of primes: 4
		'All wins values' =>  '4',//number of primes: 0
		'Remaining' =>  '6, 1, 8, 10'//number of primes: 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9, 8], [8, 9, 7], [9], [9, 2]] ,
		'qpl/trio'       =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'new 2 qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'new 3 qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7]] ,
		'All QPL values'    =>  '9, 2, 3, 1, 7, 8, 4',
		'New 2 QPL values'  =>  '9, 2, 3, 1, 7, 8, 4',
		'New 3 QPL values'  =>  '9, 2, 3, 1, 7, 8, 4',
		'For reference  ' =>  '3, 1, 4',//number of primes: 1
		'All wins values' =>  '2, 7, 8, 9',//number of primes: 2
		'Remaining' =>  '5, 6, 10'//number of primes: 1,
		'tce' =>  '1, 2, 3, 7, 8, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [4], [6]] ,
		'qpl/trio'       =>  [[2, 8, 10, 7, 3], [2, 8, 4, 7, 1], [2, 8, 6, 1, 7], [7, 1, 3, 2, 8], [7, 3, 1, 2, 4], [1, 7, 3, 2, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 3, 2, 8, 10',//number of primes: 2
		'All wins values' =>  '4, 6, 7',//number of primes: 1
		'Remaining' =>  '5, 11, 9'//number of primes: 2,
		'tce' =>  '1, 2, 3, 4, 6, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [6, 1]] ,
		'qpl/trio'       =>  [[6, 11, 10, 7, 9], [11, 10, 3, 7, 6], [11, 4, 3, 7, 6], [11, 4, 7, 9, 6], [11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'new 2 qpl/trio' =>  [[11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'New 2 QPL values'  =>  '6, 11, 7, 1, 4, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '11, 7, 4, 10, 9, 3, 2',//number of primes: 4
		'All wins values' =>  '1, 6',//number of primes: 0
		'Remaining' =>  '5, 8, 12'//number of primes: 1,
	],
];
