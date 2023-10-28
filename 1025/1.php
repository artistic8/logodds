<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[5, 3, 7, 11, 6], [5, 3, 7, 2, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 6, 2, 11, 7, 3',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '5, 2, 11, 7, 3',
		'For reference  ' =>  '5, 2, 11, 7, 3',//number of primes: 5
		'All wins values' =>  '6',//number of primes: 0
		'Remaining' =>  '12, 9, 8, 10, 4, 1'//number of primes: 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9, 8], [7, 9, 8]] ,
		'qpl/trio'       =>  [[7, 3, 11, 9, 8], [11, 6, 8, 7, 9]] ,
		'new 2 qpl/trio' =>  [[7, 3, 11, 9, 8], [11, 6, 8, 7, 9]] ,
		'new 3 qpl/trio' =>  [[7, 3, 11, 9, 8], [11, 6, 8, 7, 9]] ,
		'All QPL values'    =>  '11, 7, 8, 9, 3, 6',
		'New 2 QPL values'  =>  '11, 7, 8, 9, 3, 6',
		'New 3 QPL values'  =>  '11, 7, 8, 9, 3, 6',
		'For reference  ' =>  '11, 3, 6',//number of primes: 2
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '12, 2, 1, 10, 5, 4'//number of primes: 2,
		'tce' =>  '3, 6, 7, 8, 9, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 2], [7]] ,
		'qpl/trio'       =>  [[12, 1, 6, 7, 2], [12, 5, 6, 7, 2], [6, 2, 8, 12, 7]] ,
		'new 2 qpl/trio' =>  [[12, 1, 6, 7, 2], [12, 5, 6, 7, 2], [6, 2, 8, 12, 7]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 6, 12, 2, 5, 8, 1',
		'New 2 QPL values'  =>  '7, 6, 12, 2, 5, 8, 1',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '6, 12, 5, 8, 1',//number of primes: 1
		'All wins values' =>  '2, 7',//number of primes: 2
		'Remaining' =>  '10, 9, 11, 4, 3, 13, 14'//number of primes: 3,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[5], [8]] ,
		'qpl/trio'       =>  [[8, 4, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 4, 1, 2, 5',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 1, 2',//number of primes: 1
		'All wins values' =>  '5, 8',//number of primes: 1
		'Remaining' =>  '9, 10, 3, 11, 7, 6, 12'//number of primes: 3,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[1, 12, 6, 8, 9], [1, 3, 6, 8, 9], [1, 3, 6, 4, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 6, 1, 4, 8, 3, 12',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '6, 1, 4, 8, 3, 12',//number of primes: 1
		'All wins values' =>  '9',//number of primes: 0
		'Remaining' =>  '5, 10, 2, 11, 7'//number of primes: 4,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[11], [2]] ,
		'qpl/trio'       =>  [[3, 1, 12, 8, 4], [3, 1, 12, 8, 11], [3, 12, 14, 8, 4], [3, 12, 14, 8, 2], [3, 12, 14, 8, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 12, 8, 14, 11, 2, 1, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 12, 8, 14, 1, 4',//number of primes: 1
		'All wins values' =>  '2, 11',//number of primes: 2
		'Remaining' =>  '9, 7, 10, 5, 6, 13'//number of primes: 3,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9, 7, 8], [9]] ,
		'qpl/trio'       =>  [[5, 11, 9, 7, 8], [5, 12, 8, 11, 9], [5, 2, 9, 7, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[5, 11, 9, 7, 8], [5, 2, 9, 7, 8]] ,
		'All QPL values'    =>  '9, 5, 8, 11, 7, 2, 12',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '9, 5, 8, 11, 7, 2',
		//Primes majority,
		'primes' =>  '5, 11, 7, 2',
		'For reference  ' =>  '5, 11, 2, 12',//number of primes: 3
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '3, 4, 13, 1, 6, 10'//number of primes: 2,
		'tce' =>  '2, 5, 7, 8, 9, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [5, 6], [1, 12]] ,
		'qpl/trio'       =>  [[1, 12, 4, 6, 5], [1, 12, 4, 11, 5]] ,
		'new 2 qpl/trio' =>  [[1, 12, 4, 6, 5], [1, 12, 4, 11, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 4, 1, 12, 11, 6',
		'New 2 QPL values'  =>  '5, 4, 1, 12, 11, 6',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 11',//number of primes: 1
		'All wins values' =>  '1, 5, 6, 12',//number of primes: 1
		'Remaining' =>  '9, 2, 7, 3, 8, 10'//number of primes: 3,
		'tce' =>  '1, 4, 5, 6, 11, 12',
	],
];
