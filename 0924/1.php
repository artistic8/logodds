<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [2, 1, 3]] ,
		'qpl/trio'       =>  [[2, 4, 10, 7, 1], [2, 4, 10, 7, 3], [2, 4, 6, 7, 1], [4, 6, 2, 1, 3]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[4, 6, 2, 1, 3]] ,
		'All QPL values'    =>  '4, 2, 1, 3, 7, 6, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '4, 2, 1, 3, 6',
		'For reference  ' =>  '4, 7, 6, 10',//number of primes: 1
		'All wins values' =>  '1, 2, 3',//number of primes: 2
		'Remaining' =>  '5, 9, 8'//number of primes: 1,
		'tce' =>  '1, 2, 3, 4, 6, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[10]] ,
		'qpl/trio'       =>  [[3, 1, 6, 5, 4], [3, 1, 6, 5, 8], [1, 3, 5, 6, 10]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 6, 3, 5, 4, 8, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 6, 3, 5, 4, 8',//number of primes: 2
		'All wins values' =>  '10',//number of primes: 0
		'Remaining' =>  '9, 2, 7, 11'//number of primes: 3,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 7], [7, 1, 3, 4, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 7, 8, 3, 6, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 8, 3, 6, 4',//number of primes: 1
		'All wins values' =>  '7',//number of primes: 1
		'Remaining' =>  '9, 10, 12, 2, 5'//number of primes: 2,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 1, 10], [9, 7, 8], [9, 11], [9, 7], [9], [9, 8], [9, 1]] ,
		'qpl/trio'       =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1]] ,
		'new 2 qpl/trio' =>  [[3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1], [3, 10, 9, 7, 8], [3, 8, 9, 1, 10]] ,
		'new 3 qpl/trio' =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 11, 9, 7, 8]] ,
		'All QPL values'    =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'New 2 QPL values'  =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'New 3 QPL values'  =>  '9, 11, 8, 1, 3, 7, 10',
		'For reference  ' =>  '5, 12, 3, 4, 6',//number of primes: 2
		'All wins values' =>  '1, 7, 8, 9, 10, 11',//number of primes: 2
		'Remaining' =>  '2'//number of primes: 1,
		'tce' =>  '1, 5, 8, 9, 11, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio'       =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'new 2 qpl/trio' =>  [[8, 4, 12, 2, 9], [7, 12, 4, 9, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [4, 8, 13, 1, 9], [8, 4, 2, 12, 5], [4, 2, 7, 12, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1]] ,
		'new 3 qpl/trio' =>  [[7, 12, 4, 9, 8], [13, 4, 8, 9, 7]] ,
		'All QPL values'    =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'New 2 QPL values'  =>  '4, 8, 1, 9, 13, 2, 12, 7, 5',
		'New 3 QPL values'  =>  '4, 8, 9, 13, 7, 12',
		'For reference  ' =>  '4, 1, 13, 3, 12, 5',//number of primes: 3
		'All wins values' =>  '2, 7, 8, 9',//number of primes: 2
		'Remaining' =>  '11, 6, 10, 14'//number of primes: 1,
		'tce' =>  '1, 2, 4, 8, 9, 13',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 9, 1, 4, 2], [3, 9, 2, 1, 10], [9, 3, 1, 10, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 9, 4, 1, 10, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 9, 1, 10, 2',//number of primes: 2
		'All wins values' =>  '4',//number of primes: 0
		'Remaining' =>  '5, 7, 6, 8'//number of primes: 2,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 8], [7, 11], [8], [7], [1, 7], [1, 7, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 11, 7, 8], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [5, 12, 2, 11, 1]] ,
		'new 2 qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2]] ,
		'new 3 qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7]] ,
		'All QPL values'    =>  '1, 2, 5, 12, 7, 11, 8',
		'New 2 QPL values'  =>  '1, 2, 5, 12, 7, 11, 8',
		'New 3 QPL values'  =>  '1, 2, 5, 12, 7, 11, 8',
		//Primes majority,
		'primes' =>  '2, 5, 7, 11',
		'For reference  ' =>  '2, 5, 12',//number of primes: 2
		'All wins values' =>  '1, 7, 8, 11',//number of primes: 2
		'Remaining' =>  '4, 3, 14, 9, 10, 13'//number of primes: 2,
		'tce' =>  '1, 2, 5, 7, 11, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[1], [8, 1], [8], [8, 9]] ,
		'qpl/trio'       =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 4, 11, 5, 3], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'new 2 qpl/trio' =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 10, 5, 11, 9, 1, 4, 3',
		'New 2 QPL values'  =>  '8, 10, 5, 11, 9, 1, 4',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '10, 5, 11, 4, 3',//number of primes: 3
		'All wins values' =>  '1, 8, 9',//number of primes: 0
		'Remaining' =>  '6, 2, 7, 12'//number of primes: 2,
		'tce' =>  '1, 5, 8, 9, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2], [9], [8, 9], [2, 9], [2, 4, 10], [2, 4]] ,
		'qpl/trio'       =>  [[4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [1, 3, 2, 4, 9], [2, 4, 6, 1, 3], [2, 4, 3, 8, 9]] ,
		'new 2 qpl/trio' =>  [[2, 4, 3, 8, 9], [1, 3, 2, 4, 9], [4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [2, 4, 6, 1, 3]] ,
		'new 3 qpl/trio' =>  [[2, 4, 10, 3, 1]] ,
		'All QPL values'    =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'New 2 QPL values'  =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'New 3 QPL values'  =>  '2, 3, 4, 10, 1',
		'For reference  ' =>  '3, 6, 1',//number of primes: 1
		'All wins values' =>  '2, 4, 8, 9, 10',//number of primes: 1
		'Remaining' =>  '12, 5, 7, 11'//number of primes: 3,
		'tce' =>  '1, 2, 3, 4, 6, 10',
	],
];
