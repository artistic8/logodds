<?php

return [
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[1], [8], [8, 9]] ,
		'qpl/trio'       =>  [[8, 2, 11, 3, 1], [4, 2, 3, 7, 8], [4, 2, 3, 8, 9], [4, 11, 3, 5, 8], [8, 4, 11, 3, 1], [3, 1, 5, 8, 4], [3, 1, 5, 8, 11], [8, 2, 11, 3, 5]] ,
		'new 2 qpl/trio' =>  [[4, 2, 3, 8, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 3, 2, 11, 4, 5, 1, 7, 9',
		'New 2 QPL values'  =>  '8, 3, 2, 4, 9',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 2, 11, 5, 7',
		'tce' =>  '2, 3, 4, 5, 8, 11',
		'For reference  ' =>  '3, 2, 11, 4, 5, 7',//number of primes: 5
		'All wins values' =>  '1, 8, 9',//number of primes: 0
		'Remaining' =>  '6, 10, 12'//number of primes: 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[6, 7], [7, 9, 6], [7], [6]] ,
		'qpl/trio'       =>  [[10, 8, 3, 6, 7], [3, 10, 7, 9, 6], [3, 1, 10, 7, 6], [3, 1, 10, 8, 7]] ,
		'new 2 qpl/trio' =>  [[10, 8, 3, 6, 7], [3, 10, 7, 9, 6], [3, 1, 10, 7, 6]] ,
		'new 3 qpl/trio' =>  [[3, 10, 7, 9, 6]] ,
		'All QPL values'    =>  '3, 6, 10, 7, 1, 8, 9',
		'New 2 QPL values'  =>  '3, 6, 10, 7, 1, 8, 9',
		'New 3 QPL values'  =>  '3, 6, 10, 7, 9',
		'tce' =>  '1, 3, 6, 7, 8, 10',
		'For reference  ' =>  '3, 10, 1, 8',//number of primes: 1
		'All wins values' =>  '6, 7, 9',//number of primes: 1
		'Remaining' =>  '4, 2, 5, 12, 11'//number of primes: 3,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7, 8], [7], [7, 9, 8], [9]] ,
		'qpl/trio'       =>  [[1, 3, 2, 7, 8], [1, 5, 2, 7, 8], [1, 2, 7, 9, 8], [1, 3, 8, 2, 9], [1, 3, 8, 9, 10], [1, 3, 8, 7, 10]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 7, 8], [1, 5, 2, 7, 8], [1, 2, 7, 9, 8], [1, 3, 8, 7, 10]] ,
		'new 3 qpl/trio' =>  [[1, 2, 7, 9, 8]] ,
		'All QPL values'    =>  '1, 8, 3, 10, 7, 9, 2',
		'New 2 QPL values'  =>  '1, 8, 3, 10, 7, 9, 2',
		'New 3 QPL values'  =>  '1, 8, 7, 9, 2',
		'tce' =>  '1, 3, 7, 8, 9, 10',
		'For reference  ' =>  '1, 3, 10, 2',//number of primes: 2
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '11, 6, 12, 4'//number of primes: 1,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[10], [5], [5, 4]] ,
		'qpl/trio'       =>  [[5, 1, 9, 6, 10], [5, 3, 9, 6, 10], [9, 3, 6, 4, 5], [1, 3, 4, 6, 5]] ,
		'new 2 qpl/trio' =>  [[9, 3, 6, 4, 5], [1, 3, 4, 6, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 4, 6, 10, 1, 3, 9',
		'New 2 QPL values'  =>  '5, 4, 6, 1, 3, 9',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 4, 5, 6, 10',
		'For reference  ' =>  '6, 1, 3, 9',//number of primes: 1
		'All wins values' =>  '4, 5, 10',//number of primes: 1
		'Remaining' =>  '2, 7, 8'//number of primes: 2,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[10, 2, 8, 1, 7], [10, 2, 6, 1, 7], [10, 2, 4, 1, 7]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '10, 1, 7, 2, 4, 6, 8',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 4, 6, 7, 10',
		'For reference  ' =>  '10, 1, 2, 4, 6, 8',//number of primes: 1
		'All wins values' =>  '7',//number of primes: 1
		'Remaining' =>  '3, 9, 5, 11'//number of primes: 3,
	],
];
