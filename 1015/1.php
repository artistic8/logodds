<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[7, 5, 3, 11, 2], [7, 3, 5, 11, 4], [4, 11, 8, 5, 3]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 4, 11, 7, 8, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 5, 11, 7, 2',
		'tce' =>  '3, 4, 5, 7, 8, 11',
		'For reference  ' =>  '3, 5, 4, 11, 8, 2',//number of primes: 4
		'All wins values' =>  '7',//number of primes: 1
		'Remaining' =>  '9, 14, 13, 1, 6, 10, 12'//number of primes: 1,
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[8], [9], [5], [7]] ,
		'qpl/trio'       =>  [[5, 7, 1, 4, 8], [5, 7, 1, 4, 2], [5, 7, 4, 2, 9], [1, 7, 2, 6, 5], [5, 1, 8, 2, 7]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 8, 2, 7, 1, 6, 9, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 5, 6, 7, 8',
		'For reference  ' =>  '2, 1, 6, 4',//number of primes: 1
		'All wins values' =>  '5, 7, 8, 9',//number of primes: 2
		'Remaining' =>  '14, 12, 3, 11, 13, 10'//number of primes: 3,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 4, 6], [5, 1, 4, 13, 9], [5, 1, 4, 2, 9], [5, 1, 3, 4, 2], [1, 4, 6, 9, 5]] ,
		'new 2 qpl/trio' =>  [[5, 1, 4, 13, 9], [5, 1, 4, 2, 9], [1, 4, 6, 9, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 9, 5, 4, 6, 3, 13, 2',
		'New 2 QPL values'  =>  '1, 9, 5, 4, 6, 13, 2',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 4, 5, 6, 9',
		'For reference  ' =>  '1, 4, 6, 3, 13, 2',//number of primes: 3
		'All wins values' =>  '5, 9',//number of primes: 1
		'Remaining' =>  '14, 10, 8, 11, 7, 12'//number of primes: 2,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[8, 9], [9, 1], [8, 9, 1], [9]] ,
		'qpl/trio'       =>  [[13, 2, 3, 8, 9], [13, 11, 3, 8, 9], [13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'new 2 qpl/trio' =>  [[13, 2, 3, 8, 9], [13, 11, 3, 8, 9], [13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'new 3 qpl/trio' =>  [[13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'All QPL values'    =>  '13, 9, 8, 11, 2, 3, 1',
		'New 2 QPL values'  =>  '13, 9, 8, 11, 2, 3, 1',
		'New 3 QPL values'  =>  '13, 9, 8, 11, 2, 1',
		//Primes majority,
		'primes' =>  '13, 11, 2, 3',
		'tce' =>  '2, 3, 8, 9, 11, 13',
		'For reference  ' =>  '13, 11, 2, 3',//number of primes: 4
		'All wins values' =>  '1, 8, 9',//number of primes: 0
		'Remaining' =>  '10, 6, 5, 7, 14, 12'//number of primes: 2,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[11, 2], [2], [11, 2, 1], [1], [9], [7]] ,
		'qpl/trio'       =>  [[6, 12, 3, 11, 2], [12, 3, 1, 6, 2], [6, 12, 1, 11, 2], [6, 11, 2, 12, 9], [12, 1, 6, 11, 7]] ,
		'new 2 qpl/trio' =>  [[6, 12, 3, 11, 2], [6, 12, 1, 11, 2], [6, 11, 2, 12, 9]] ,
		'new 3 qpl/trio' =>  [[6, 12, 1, 11, 2]] ,
		'All QPL values'    =>  '12, 6, 11, 1, 7, 9, 2, 3',
		'New 2 QPL values'  =>  '12, 6, 11, 1, 9, 2, 3',
		'New 3 QPL values'  =>  '12, 6, 1, 11, 2',
		'tce' =>  '1, 6, 7, 9, 11, 12',
		'For reference  ' =>  '12, 6, 3',//number of primes: 1
		'All wins values' =>  '1, 2, 7, 9, 11',//number of primes: 3
		'Remaining' =>  '4, 10, 5, 14, 8, 13'//number of primes: 2,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[1, 5, 7, 8, 4], [1, 3, 5, 4, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 1, 8, 5, 7, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 4, 5, 7, 8',
		'For reference  ' =>  '3, 1, 8, 5, 7, 4',//number of primes: 3
		'All wins values' =>  '',//number of primes: 0
		'Remaining' =>  '9, 2, 10, 6'//number of primes: 1,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 9], [8, 7, 9], [8, 9], [9]] ,
		'qpl/trio'       =>  [[2, 11, 10, 7, 9], [2, 11, 13, 7, 9], [2, 11, 8, 7, 9], [2, 13, 7, 8, 9], [2, 13, 1, 8, 9], [2, 10, 8, 14, 9]] ,
		'new 2 qpl/trio' =>  [[2, 11, 10, 7, 9], [2, 11, 13, 7, 9], [2, 11, 8, 7, 9], [2, 13, 7, 8, 9], [2, 13, 1, 8, 9], [2, 10, 8, 14, 9]] ,
		'new 3 qpl/trio' =>  [[2, 11, 8, 7, 9], [2, 13, 7, 8, 9]] ,
		'All QPL values'    =>  '2, 9, 14, 10, 8, 7, 1, 13, 11',
		'New 2 QPL values'  =>  '2, 9, 14, 10, 8, 7, 1, 13, 11',
		'New 3 QPL values'  =>  '2, 9, 8, 7, 13, 11',
		'tce' =>  '2, 7, 8, 9, 10, 14',
		'For reference  ' =>  '2, 14, 10, 1, 13, 11',//number of primes: 3
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '6, 12, 5, 4, 3'//number of primes: 2,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2, 11]] ,
		'qpl/trio'       =>  [[6, 1, 3, 2, 11], [6, 1, 12, 2, 11], [6, 12, 3, 2, 11]] ,
		'new 2 qpl/trio' =>  [[6, 1, 3, 2, 11], [6, 1, 12, 2, 11], [6, 12, 3, 2, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 2, 3, 11, 12, 1',
		'New 2 QPL values'  =>  '6, 2, 3, 11, 12, 1',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 3, 6, 11, 12',
		'For reference  ' =>  '6, 3, 12, 1',//number of primes: 1
		'All wins values' =>  '2, 11',//number of primes: 2
		'Remaining' =>  '4, 8, 13, 7, 5, 14, 10, 9'//number of primes: 3,
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2, 10], [2], [8, 2]] ,
		'qpl/trio'       =>  [[3, 1, 9, 2, 10], [3, 12, 1, 2, 10], [3, 12, 1, 8, 2]] ,
		'new 2 qpl/trio' =>  [[3, 1, 9, 2, 10], [3, 12, 1, 2, 10], [3, 12, 1, 8, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 2, 8, 12, 1, 9, 10',
		'New 2 QPL values'  =>  '3, 2, 8, 12, 1, 9, 10',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 3, 8, 9, 12',
		'For reference  ' =>  '3, 12, 1, 9',//number of primes: 1
		'All wins values' =>  '2, 8, 10',//number of primes: 1
		'Remaining' =>  '4, 6, 14, 5, 7, 11, 13'//number of primes: 4,
	],
];
