<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [5], [6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 14, 6, 8], [6, 8, 5, 1, 2], [6, 8, 2, 12, 5], [6, 8, 2, 1, 12], [5, 12, 1, 6, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 12, 5, 8, 1, 2, 14',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 5, 6, 8, 12',
		'For reference  ' =>  '12, 8, 1, 14',//number of primes: 0
		'All wins values' =>  '2, 5, 6',//number of primes: 2
		'Remaining' =>  '4, 9, 3, 7, 13, 10'//number of primes: 3,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[8], [9], [9, 13], [13], [5, 14], [14]] ,
		'qpl/trio'       =>  [[3, 14, 7, 2, 8], [3, 9, 14, 2, 11], [3, 9, 14, 2, 13], [3, 14, 2, 8, 9], [3, 14, 5, 2, 13], [3, 2, 4, 5, 14]] ,
		'new 2 qpl/trio' =>  [[3, 9, 14, 2, 13], [3, 14, 5, 2, 13], [3, 2, 4, 5, 14]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 14, 9, 2, 5, 13, 7, 4, 8, 11',
		'New 2 QPL values'  =>  '3, 14, 9, 2, 5, 13, 4',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 2, 5, 13, 7, 11',
		'tce' =>  '2, 3, 5, 9, 13, 14',
		'For reference  ' =>  '3, 2, 7, 4, 11',//number of primes: 4
		'All wins values' =>  '5, 8, 9, 13, 14',//number of primes: 2
		'Remaining' =>  '6, 10, 1, 12'//number of primes: 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[7, 6], [6], [7], [5, 6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7], [2, 8, 1, 5, 6], [1, 5, 2, 8, 7], [1, 5, 7, 2, 4], [1, 5, 2, 11, 7]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7], [2, 8, 1, 5, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 2, 11, 8, 5, 7, 4, 6',
		'New 2 QPL values'  =>  '1, 2, 8, 5, 7, 6',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 5, 7, 8, 11',
		'For reference  ' =>  '1, 2, 11, 8, 4',//number of primes: 2
		'All wins values' =>  '5, 6, 7',//number of primes: 2
		'Remaining' =>  '3, 12, 10, 9'//number of primes: 1,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[3], [2, 11], [3, 12, 2, 11], [7, 2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'new 2 qpl/trio' =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'new 3 qpl/trio' =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'All QPL values'    =>  '7, 2, 3, 5, 11, 12',
		'New 2 QPL values'  =>  '7, 2, 3, 5, 11, 12',
		'New 3 QPL values'  =>  '7, 2, 3, 5, 11, 12',
		//Primes majority,
		'primes' =>  '7, 2, 3, 5, 11',
		'tce' =>  '2, 3, 5, 7, 11, 12',
		'For reference  ' =>  '5',//number of primes: 1
		'All wins values' =>  '2, 3, 7, 11, 12',//number of primes: 4
		'Remaining' =>  '10, 8, 1, 6, 4, 9'//number of primes: 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[2, 5], [5], [10]] ,
		'qpl/trio'       =>  [[8, 13, 2, 3, 5], [8, 13, 3, 1, 10], [8, 13, 4, 3, 1], [8, 13, 6, 3, 1]] ,
		'new 2 qpl/trio' =>  [[8, 13, 2, 3, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 13, 3, 1, 10, 6, 4, 2, 5',
		'New 2 QPL values'  =>  '8, 13, 3, 2, 5',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 6, 8, 10, 13',
		'For reference  ' =>  '8, 13, 3, 1, 6, 4',//number of primes: 2
		'All wins values' =>  '2, 5, 10',//number of primes: 2
		'Remaining' =>  '9, 11, 7, 12, 14'//number of primes: 2,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [5], [5, 14], [5, 9], [5, 14, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 6, 2, 9], [1, 6, 2, 5, 14], [1, 6, 8, 5, 9], [6, 2, 8, 1, 5], [6, 2, 4, 1, 5], [1, 5, 14, 6, 4], [1, 9, 6, 4, 5]] ,
		'new 2 qpl/trio' =>  [[1, 6, 2, 5, 14], [1, 5, 14, 6, 4], [1, 5, 6, 2, 9], [1, 6, 8, 5, 9], [1, 9, 6, 4, 5]] ,
		'new 3 qpl/trio' =>  [[1, 6, 2, 5, 14], [1, 5, 14, 6, 4]] ,
		'All QPL values'    =>  '1, 6, 5, 2, 4, 9, 8, 14',
		'New 2 QPL values'  =>  '1, 6, 5, 2, 4, 9, 8, 14',
		'New 3 QPL values'  =>  '1, 6, 5, 2, 4, 14',
		'tce' =>  '1, 2, 4, 5, 6, 9',
		'For reference  ' =>  '1, 2, 4, 8',//number of primes: 1
		'All wins values' =>  '5, 6, 9, 14',//number of primes: 1
		'Remaining' =>  '10, 13, 11, 3, 12, 7'//number of primes: 4,
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[4, 5], [9], [8, 9], [5], [8], [12]] ,
		'qpl/trio'       =>  [[10, 2, 9, 4, 5], [2, 10, 4, 12, 9], [2, 10, 5, 8, 9], [2, 10, 7, 8, 9], [2, 10, 8, 3, 9], [2, 10, 8, 3, 5], [2, 10, 8, 5, 12], [2, 10, 11, 5, 12], [2, 10, 11, 9, 5]] ,
		'new 2 qpl/trio' =>  [[10, 2, 9, 4, 5], [2, 10, 5, 8, 9], [2, 10, 7, 8, 9], [2, 10, 8, 3, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 9, 10, 5, 12, 8, 3, 4, 7, 11',
		'New 2 QPL values'  =>  '2, 9, 10, 5, 8, 3, 4, 7',
		'New 3 QPL values'  =>  '',
		'tce' =>  '2, 5, 8, 9, 10, 12',
		'For reference  ' =>  '2, 10, 3, 7, 11',//number of primes: 4
		'All wins values' =>  '4, 5, 8, 9, 12',//number of primes: 1
		'Remaining' =>  '1, 6'//number of primes: 0,
	],
];