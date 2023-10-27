<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[7, 5, 1, 2, 6], [7, 1, 5, 10, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 2, 6, 1, 5, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 5, 6, 7, 10',
		'For reference  ' =>  '7, 2, 1, 5, 10',//number of primes: 3
		'All wins values' =>  '6',//number of primes: 0
		'Remaining' =>  '8, 4, 9, 3'//number of primes: 1,
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1, 10, 2], [1, 10], [10, 2], [10], [2], [1, 2], [7]] ,
		'qpl/trio'       =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2], [3, 1, 7, 6, 4]] ,
		'new 2 qpl/trio' =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2]] ,
		'new 3 qpl/trio' =>  [[3, 7, 1, 10, 2]] ,
		'All QPL values'    =>  '3, 6, 4, 2, 10, 1, 7',
		'New 2 QPL values'  =>  '3, 6, 4, 2, 10, 1, 7',
		'New 3 QPL values'  =>  '3, 2, 10, 1, 7',
		'tce' =>  '1, 2, 3, 4, 6, 10',
		'For reference  ' =>  '3, 6, 4',//number of primes: 1
		'All wins values' =>  '1, 2, 7, 10',//number of primes: 2
		'Remaining' =>  '8, 13, 11, 14, 9, 12, 5'//number of primes: 3,
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 6], [8], [6]] ,
		'qpl/trio'       =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 8], [5, 7, 1, 2, 6]] ,
		'new 2 qpl/trio' =>  [[5, 8, 9, 7, 6], [5, 7, 1, 2, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 1, 7, 2, 9, 8, 6',
		'New 2 QPL values'  =>  '5, 1, 7, 2, 9, 8, 6',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 5, 7, 8, 9',
		'For reference  ' =>  '5, 1, 2, 9',//number of primes: 2
		'All wins values' =>  '6, 7, 8',//number of primes: 1
		'Remaining' =>  '3, 4, 10'//number of primes: 1,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[12, 1], [2], [1, 12, 2]] ,
		'qpl/trio'       =>  [[7, 1, 12, 4, 2]] ,
		'new 2 qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'new 3 qpl/trio' =>  [[7, 1, 12, 4, 2]] ,
		'All QPL values'    =>  '7, 4, 1, 12, 2',
		'New 2 QPL values'  =>  '7, 4, 1, 12, 2',
		'New 3 QPL values'  =>  '7, 4, 1, 12, 2',
		'tce' =>  '1, 2, 4, 7, 12',
		'For reference  ' =>  '7, 4',//number of primes: 1
		'All wins values' =>  '1, 2, 12',//number of primes: 1
		'Remaining' =>  '5, 11, 3, 9, 10, 6, 8'//number of primes: 3,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'new 2 qpl/trio' =>  [[1, 3, 8, 6, 9], [8, 6, 4, 1, 9], [8, 6, 10, 1, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 1, 9, 6, 3, 10, 4',
		'New 2 QPL values'  =>  '8, 1, 9, 6, 3, 10, 4',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 6, 8, 9, 10',
		'For reference  ' =>  '1, 6, 3, 10, 4',//number of primes: 1
		'All wins values' =>  '8, 9',//number of primes: 0
		'Remaining' =>  '2, 7, 5'//number of primes: 3,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14, 5], [4], [5, 14, 4], [9], [9, 4]] ,
		'qpl/trio'       =>  [[9, 5, 14, 4, 2]] ,
		'new 2 qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'new 3 qpl/trio' =>  [[9, 5, 14, 4, 2]] ,
		'All QPL values'    =>  '9, 2, 5, 14, 4',
		'New 2 QPL values'  =>  '9, 2, 5, 14, 4',
		'New 3 QPL values'  =>  '9, 2, 5, 14, 4',
		'tce' =>  '2, 4, 5, 9, 14',
		'For reference  ' =>  '2',//number of primes: 1
		'All wins values' =>  '4, 5, 9, 14',//number of primes: 1
		'Remaining' =>  '13, 1, 10, 12, 3, 6, 8, 11, 7'//number of primes: 4,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2], [7, 6]] ,
		'qpl/trio'       =>  [[1, 7, 5, 8, 2], [1, 7, 3, 8, 2], [1, 3, 8, 7, 6]] ,
		'new 2 qpl/trio' =>  [[1, 3, 8, 7, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 8, 7, 2, 5, 6, 3',
		'New 2 QPL values'  =>  '1, 8, 7, 6, 3',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '7, 2, 5, 3',
		'tce' =>  '1, 2, 5, 6, 7, 8',
		'For reference  ' =>  '1, 8, 5, 3',//number of primes: 2
		'All wins values' =>  '2, 6, 7',//number of primes: 2
		'Remaining' =>  '4, 9, 10'//number of primes: 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[8], [8, 9], [9], [5, 9]] ,
		'qpl/trio'       =>  [[6, 4, 5, 1, 8], [6, 8, 2, 5, 3], [6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [5, 1, 6, 8, 9], [5, 1, 3, 6, 8], [1, 5, 6, 2, 9]] ,
		'new 2 qpl/trio' =>  [[6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 1, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [1, 5, 6, 2, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'New 2 QPL values'  =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 3, 5, 6, 9',
		'For reference  ' =>  '1, 6, 3, 2, 4',//number of primes: 2
		'All wins values' =>  '5, 8, 9',//number of primes: 1
		'Remaining' =>  '12, 7, 14, 10, 11, 13'//number of primes: 3,
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8], [9], [2, 4], [2]] ,
		'qpl/trio'       =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'new 2 qpl/trio' =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'New 2 QPL values'  =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 4, 7, 8, 12',
		'For reference  ' =>  '1, 12, 7, 5, 3',//number of primes: 3
		'All wins values' =>  '2, 4, 8, 9',//number of primes: 1
		'Remaining' =>  '6, 11, 10'//number of primes: 1,
	],
];
