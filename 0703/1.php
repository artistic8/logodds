<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [3], [1, 3]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 11], [3, 7, 2, 4, 11], [3, 7, 4, 11, 13], [3, 5, 4, 11, 13], [1, 3, 4, 11, 13], [1, 7, 2, 4, 11], [3, 5, 2, 4, 11], [3, 14, 2, 4, 11]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 4, 11], [1, 3, 4, 11, 13]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '11, 4, 14, 2, 3, 7, 1, 13, 5',
		'New 2 QPL values'  =>  '11, 4, 2, 3, 1, 13',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '11, 2, 3, 7, 13, 5',
		'tce' =>  '2, 3, 4, 7, 11, 14',
		'For reference  ' =>  '11, 4, 14, 2, 7, 13',//number of primes: 4
		'All wins values' =>  '1, 3, 5',//number of primes: 2
		'Remaining' =>  '9, 6, 10, 8, 12'//number of primes: 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [2, 4]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 1, 4, 6, 9, 3',
		'New 2 QPL values'  =>  '2, 1, 4, 6, 9, 3',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 2, 3, 4, 6, 9',
		'For reference  ' =>  '1, 6, 9, 3',//number of primes: 1
		'All wins values' =>  '2, 4',//number of primes: 1
		'Remaining' =>  '10, 5, 11, 12, 7, 8'//number of primes: 3,
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[3], [1], [6, 7], [6]] ,
		'qpl/trio'       =>  [[3, 7, 2, 4, 11], [1, 7, 2, 4, 11], [1, 7, 2, 4, 10], [1, 7, 2, 4, 6], [1, 7, 9, 2, 4], [3, 7, 4, 6, 10]] ,
		'new 2 qpl/trio' =>  [[1, 7, 2, 4, 6], [3, 7, 4, 6, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 7, 3, 1, 9, 10, 6, 2, 11',
		'New 2 QPL values'  =>  '4, 7, 3, 1, 10, 6, 2',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 4, 7, 9, 10',
		'For reference  ' =>  '4, 9, 10, 2, 11',//number of primes: 2
		'All wins values' =>  '1, 3, 6, 7',//number of primes: 2
		'Remaining' =>  '8, 5, 12'//number of primes: 1,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [5], [2, 4, 5], [2, 11], [2, 9, 11], [2, 9], [2]] ,
		'qpl/trio'       =>  [[1, 9, 2, 4, 6], [1, 5, 2, 6, 11], [1, 5, 2, 4, 6], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 3, 9, 2, 6]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 6, 11], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 9, 2, 4, 6], [1, 3, 9, 2, 6]] ,
		'new 3 qpl/trio' =>  [[1, 5, 2, 4, 6], [1, 9, 2, 6, 11]] ,
		'All QPL values'    =>  '2, 1, 6, 3, 9, 11, 4, 5',
		'New 2 QPL values'  =>  '2, 1, 6, 3, 9, 11, 4, 5',
		'New 3 QPL values'  =>  '2, 1, 6, 9, 11, 4, 5',
		'tce' =>  '1, 2, 3, 6, 9, 11',
		'For reference  ' =>  '1, 6, 3',//number of primes: 1
		'All wins values' =>  '2, 4, 5, 9, 11',//number of primes: 3
		'Remaining' =>  '8, 12, 7, 10'//number of primes: 1,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 6], [4, 11], [4]] ,
		'qpl/trio'       =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'new 2 qpl/trio' =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 6, 4, 1, 11, 12',
		'New 2 QPL values'  =>  '3, 6, 4, 1, 11, 12',
		'New 3 QPL values'  =>  '',
		'tce' =>  '1, 3, 4, 6, 11, 12',
		'For reference  ' =>  '3, 1, 12',//number of primes: 1
		'All wins values' =>  '4, 6, 11',//number of primes: 1
		'Remaining' =>  '9, 2, 7, 13, 10, 5, 8'//number of primes: 4,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5], [4, 5, 6], [5, 6], [4, 5, 11], [5]] ,
		'qpl/trio'       =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'new 2 qpl/trio' =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'new 3 qpl/trio' =>  [[3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6], [3, 5, 7, 4, 11]] ,
		'All QPL values'    =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'New 2 QPL values'  =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'New 3 QPL values'  =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'tce' =>  '3, 4, 5, 6, 11, 12',
		'For reference  ' =>  '3, 12, 1, 7',//number of primes: 2
		'All wins values' =>  '4, 5, 6, 11',//number of primes: 2
		'Remaining' =>  '8, 2, 9, 10'//number of primes: 1,
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2, 10], [10], [3], [5], [2, 3, 10]] ,
		'qpl/trio'       =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10], [3, 5, 2, 4, 10], [1, 3, 5, 4, 10]] ,
		'new 2 qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 2, 4, 10]] ,
		'new 3 qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 2, 4, 10]] ,
		'All QPL values'    =>  '3, 5, 2, 10, 7, 1, 4',
		'New 2 QPL values'  =>  '3, 5, 2, 10, 7, 4',
		'New 3 QPL values'  =>  '3, 5, 2, 10, 7, 4',
		//Primes majority,
		'primes' =>  '3, 5, 2, 7',
		'tce' =>  '1, 2, 3, 5, 7, 10',
		'For reference  ' =>  '7, 1, 4',//number of primes: 1
		'All wins values' =>  '2, 3, 5, 10',//number of primes: 3
		'Remaining' =>  '11, 6, 13, 14, 8, 9, 12'//number of primes: 2,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [11]] ,
		'qpl/trio'       =>  [[5, 7, 6, 11, 13], [3, 7, 6, 11, 13], [3, 5, 7, 6, 13], [5, 7, 4, 11, 13], [5, 7, 4, 6, 13], [5, 7, 4, 6, 11], [1, 5, 7, 6, 11], [3, 5, 7, 6, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 5, 11, 4, 13, 7, 3, 1',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '5, 11, 13, 7, 3',
		'tce' =>  '4, 5, 6, 7, 11, 13',
		'For reference  ' =>  '6, 4, 13, 7, 3, 1',//number of primes: 3
		'All wins values' =>  '5, 11',//number of primes: 2
		'Remaining' =>  '12, 9, 8, 10, 2, 14'//number of primes: 1,
	],
];
