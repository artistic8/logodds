<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[3], [6], [5, 6], [5], [9]] ,
		'qpl/trio'       =>  [[3, 5, 9, 11, 2], [3, 9, 5, 11, 6], [9, 5, 11, 4, 3]] ,
		'new 2 qpl/trio' =>  [[3, 9, 5, 11, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 4, 9, 11, 6, 2',
		'New 2 QPL values'  =>  '3, 5, 9, 11, 6',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 5, 11, 2',
		'For reference  ' =>  '4, 11, 2',//number of primes: 2
		'All wins values' =>  '3, 5, 6, 9',//number of primes: 2
		'Remaining' =>  '10, 8, 1, 7, 12'//number of primes: 1,
		'tce' =>  '3, 4, 5, 6, 9, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[4, 6, 5], [5], [3, 1], [3], [4, 3], [2, 10, 3, 1], [2, 10, 3, 12], [2, 10], [5, 4]] ,
		'qpl/trio'       =>  [[2, 3, 4, 6, 5], [3, 1, 4, 2, 5], [4, 2, 10, 5, 3], [4, 2, 10, 3, 1], [4, 2, 10, 3, 12], [3, 12, 2, 5, 4]] ,
		'new 2 qpl/trio' =>  [[3, 1, 4, 2, 5], [4, 2, 10, 3, 1], [2, 3, 4, 6, 5], [4, 2, 10, 5, 3], [4, 2, 10, 3, 12], [3, 12, 2, 5, 4]] ,
		'new 3 qpl/trio' =>  [[2, 3, 4, 6, 5]] ,
		'All QPL values'    =>  '3, 4, 12, 5, 2, 1, 10, 6',
		'New 2 QPL values'  =>  '3, 4, 12, 5, 2, 1, 10, 6',
		'New 3 QPL values'  =>  '3, 4, 5, 2, 6',
		'For reference  ' =>  '',//number of primes: 0
		'All wins values' =>  '1, 2, 3, 4, 5, 6, 10, 12',//number of primes: 3
		'Remaining' =>  '9, 7, 11, 8'//number of primes: 2,
		'tce' =>  '1, 2, 3, 4, 5, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9], [9, 8], [5]] ,
		'qpl/trio'       =>  [[1, 5, 4, 2, 9], [1, 5, 2, 9, 8], [1, 5, 4, 9, 8]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 9, 8], [1, 5, 4, 9, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 8, 4, 2, 5, 9',
		'New 2 QPL values'  =>  '1, 8, 4, 2, 5, 9',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 4, 2',//number of primes: 1
		'All wins values' =>  '5, 8, 9',//number of primes: 1
		'Remaining' =>  '6, 3, 11, 10, 7, 12'//number of primes: 3,
		'tce' =>  '1, 2, 4, 5, 8, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[3], [6]] ,
		'qpl/trio'       =>  [[2, 4, 10, 3, 7], [2, 4, 11, 3, 7], [2, 4, 11, 7, 5], [2, 11, 3, 7, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 6, 3, 7, 11, 4, 5, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '2, 3, 7, 11, 5',
		'For reference  ' =>  '2, 7, 11, 4, 5, 10',//number of primes: 4
		'All wins values' =>  '3, 6',//number of primes: 1
		'Remaining' =>  '9, 1, 8, 12'//number of primes: 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5, 4], [4, 11], [11], [4], [9]] ,
		'qpl/trio'       =>  [[1, 12, 8, 5, 4], [4, 8, 2, 1, 12], [4, 8, 11, 1, 12], [8, 4, 11, 1, 9]] ,
		'new 2 qpl/trio' =>  [[1, 12, 8, 5, 4], [4, 8, 11, 1, 12], [8, 4, 11, 1, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 4, 1, 11, 9, 2, 5, 12',
		'New 2 QPL values'  =>  '8, 4, 1, 11, 9, 5, 12',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '8, 1, 2, 12',//number of primes: 1
		'All wins values' =>  '4, 5, 9, 11',//number of primes: 2
		'Remaining' =>  '3, 6, 7'//number of primes: 2,
		'tce' =>  '1, 2, 4, 8, 9, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[6, 11, 2, 3, 9], [6, 11, 2, 3, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 3, 11, 2, 5, 9',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 11, 2, 5',
		'For reference  ' =>  '6, 3, 11, 2, 5',//number of primes: 4
		'All wins values' =>  '9',//number of primes: 0
		'Remaining' =>  '8, 1, 10, 12, 4, 7'//number of primes: 1,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [12], [4, 5], [4]] ,
		'qpl/trio'       =>  [[2, 4, 10, 7, 3], [2, 4, 10, 7, 5], [2, 4, 10, 7, 12], [2, 4, 10, 12, 5], [2, 10, 3, 4, 5], [2, 10, 3, 12, 4]] ,
		'new 2 qpl/trio' =>  [[2, 4, 10, 7, 5], [2, 4, 10, 12, 5], [2, 10, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 4, 3, 12, 5, 10, 7',
		'New 2 QPL values'  =>  '2, 4, 3, 12, 5, 10, 7',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '2, 3, 5, 7',
		'For reference  ' =>  '2, 3, 10, 7',//number of primes: 3
		'All wins values' =>  '4, 5, 12',//number of primes: 1
		'Remaining' =>  '11, 9, 1, 6, 8'//number of primes: 1,
		'tce' =>  '2, 3, 4, 5, 10, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [1, 6]] ,
		'qpl/trio'       =>  [[3, 1, 7, 11, 6], [3, 1, 7, 6, 4]] ,
		'new 2 qpl/trio' =>  [[3, 1, 7, 11, 6], [3, 1, 7, 6, 4]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 6, 1, 7, 11, 4',
		'New 2 QPL values'  =>  '3, 6, 1, 7, 11, 4',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 7, 11, 4',//number of primes: 3
		'All wins values' =>  '1, 6',//number of primes: 0
		'Remaining' =>  '10, 2, 12, 8, 9, 5'//number of primes: 2,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[5], [9], [9, 6, 8], [5, 9], [5, 10], [5, 2], [1], [1, 9]] ,
		'qpl/trio'       =>  [[1, 3, 6, 8, 5], [1, 5, 6, 8, 9], [1, 6, 2, 5, 9], [1, 12, 6, 5, 10], [1, 12, 6, 5, 2], [1, 9, 10, 6, 5], [1, 5, 10, 8, 9]] ,
		'new 2 qpl/trio' =>  [[1, 5, 6, 8, 9], [1, 6, 2, 5, 9], [1, 9, 10, 6, 5], [1, 5, 10, 8, 9], [1, 12, 6, 5, 10], [1, 12, 6, 5, 2]] ,
		'new 3 qpl/trio' =>  [[1, 5, 6, 8, 9]] ,
		'All QPL values'    =>  '1, 10, 5, 8, 6, 9, 2, 3, 12',
		'New 2 QPL values'  =>  '1, 10, 5, 8, 6, 9, 2, 12',
		'New 3 QPL values'  =>  '1, 5, 8, 6, 9',
		'For reference  ' =>  '3, 12',//number of primes: 1
		'All wins values' =>  '1, 2, 5, 6, 8, 9, 10',//number of primes: 2
		'Remaining' =>  '7, 11, 4'//number of primes: 2,
		'tce' =>  '1, 5, 6, 8, 9, 10',
	],
];
