<?php
/**
small values: 1, 3, 4, 5, 6, 8, 9
medium values: 1, 2, 3, 4, 5, 6, 10, 11, 12, 13
inter values: 1, 3, 4, 5, 6, count(interValues) = 5
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [2, 1, 3]] ,
		'qpl/trio'       =>  [[2, 4, 10, 7, 1], [2, 4, 10, 7, 3], [2, 4, 6, 7, 1], [4, 6, 2, 1, 3]] ,
		'All QPL values'    =>  '4, 2, 1, 3, 7, 6, 10',
		'favorite' =>  4 ,
		'all wins values'  =>  '2, 1, 3 //count wins: 3',
		'for reference  '  =>  '4, 7, 6, 10 //count ref: 4',
		'weird values   '  =>  '5, 9, 8',
		'small set  '  =>  '4',
		'medium set '  =>  '',
		'big set    '  =>  '7, 6, 10',
		'Qqpl' =>  '4, 7, 6, 10',
		'Qin/Trio' =>  '4, 7, 6, 10',
		'Place' =>  '4',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[10]] ,
		'qpl/trio'       =>  [[3, 1, 6, 5, 4], [3, 1, 6, 5, 8], [1, 3, 5, 6, 10]] ,
		'All QPL values'    =>  '1, 6, 3, 5, 4, 8, 10',
		'favorite' =>  1 ,
		'all wins values'  =>  '10 //count wins: 1',
		'for reference  '  =>  '1, 6, 3, 5, 4, 8 //count ref: 6',
		'weird values   '  =>  '9, 2, 7, 11',
		'small set  '  =>  '1, 6, 3, 5, 4, 8',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 6, 3, 5, 4, 8',
		'Qin/Trio' =>  '1, 6, 3, 5, 4, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 7], [7, 1, 3, 4, 8]] ,
		'All QPL values'    =>  '1, 7, 8, 3, 6, 4',
		'favorite' =>  1 ,
		'all wins values'  =>  '7 //count wins: 1',
		'for reference  '  =>  '1, 8, 3, 6, 4 //count ref: 5',
		'weird values   '  =>  '9, 10, 12, 2, 5',
		'small set  '  =>  '1',
		'medium set '  =>  '',
		'big set    '  =>  '8, 3, 6, 4',
		'Qqpl' =>  '1, 8, 3, 6, 4',
		'Qin/Trio' =>  '1, 8, 3, 6, 4',
		'Place' =>  '1',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 1, 10], [9, 7, 8], [9, 11], [9, 7], [9], [9, 8], [9, 1]] ,
		'qpl/trio'       =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1]] ,
		'All QPL values'    =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 11, 8, 1, 7, 10 //count wins: 6',
		'for reference  '  =>  '5, 12, 3, 4, 6 //count ref: 5',
		'weird values   '  =>  '2',
		'small set  '  =>  '',
		'medium set '  =>  '5, 12, 3, 4',
		'big set    '  =>  '6',
		'Qqpl' =>  '5, 12, 3, 4, 6',
		'Qin/Trio' =>  '5, 12, 3, 4, 6',
		'Tce' =>  '9, 11, 8, 1, 5, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio'       =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'All QPL values'    =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'favorite' =>  4 ,
		'all wins values'  =>  '8, 9, 2, 7 //count wins: 4',
		'for reference  '  =>  '4, 1, 13, 3, 12, 5 //count ref: 6',
		'weird values   '  =>  '11, 6, 10, 14',
		'small set  '  =>  '4',
		'medium set '  =>  '1, 13, 3',
		'big set    '  =>  '5',
		'Qqpl' =>  '4, 1, 13, 3, 12, 5',
		'Qin/Trio' =>  '4, 1, 13, 3, 12, 5',
		'Place' =>  '4',
		'Tce' =>  '4, 8, 1, 9, 13, 2',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 9, 1, 4, 2], [3, 9, 2, 1, 10], [9, 3, 1, 10, 4]] ,
		'All QPL values'    =>  '3, 9, 4, 1, 10, 2',
		'favorite' =>  3 ,
		'all wins values'  =>  '4 //count wins: 1',
		'for reference  '  =>  '3, 9, 1, 10, 2 //count ref: 5',
		'weird values   '  =>  '5, 7, 6, 8',
		'small set  '  =>  '3, 9',
		'medium set '  =>  '',
		'big set    '  =>  '1, 10, 2',
		'Qqpl' =>  '3, 9, 1, 10, 2',
		'Qin/Trio' =>  '3, 9, 1, 10, 2',
		'Place' =>  '3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 8], [7, 11], [8], [7], [1, 7], [1, 7, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 11, 7, 8], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [5, 12, 2, 11, 1]] ,
		'All QPL values'    =>  '1, 2, 5, 12, 7, 11, 8',
		'favorite' =>  1 ,
		'all wins values'  =>  '1, 7, 11, 8 //count wins: 4',
		'for reference  '  =>  '2, 5, 12 //count ref: 3',
		'weird values   '  =>  '4, 3, 14, 9, 10, 13',
		'small set  '  =>  '',
		'medium set '  =>  '2, 5, 12',
		'big set    '  =>  '',
		'Qqpl' =>  '2, 5, 12',
		'Tce' =>  '1, 2, 5, 12, 7, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[1], [8, 1], [8], [8, 9]] ,
		'qpl/trio'       =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 4, 11, 5, 3], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'All QPL values'    =>  '8, 10, 5, 11, 9, 1, 4, 3',
		'favorite' =>  8 ,
		'all wins values'  =>  '8, 9, 1 //count wins: 3',
		'for reference  '  =>  '10, 5, 11, 4, 3 //count ref: 5',
		'weird values   '  =>  '6, 2, 7, 12',
		'small set  '  =>  '',
		'medium set '  =>  '10, 5, 11',
		'big set    '  =>  '4, 3',
		'Qqpl' =>  '10, 5, 11, 4, 3',
		'Qin/Trio' =>  '10, 5, 11, 4, 3',
		'Tce' =>  '8, 10, 5, 11, 9, 1',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2], [9], [8, 9], [2, 9], [2, 4, 10], [2, 4]] ,
		'qpl/trio'       =>  [[4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [1, 3, 2, 4, 9], [2, 4, 6, 1, 3], [2, 4, 3, 8, 9]] ,
		'All QPL values'    =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 4, 10, 8, 9 //count wins: 5',
		'for reference  '  =>  '3, 6, 1 //count ref: 3',
		'weird values   '  =>  '12, 5, 7, 11',
		'small set  '  =>  '',
		'medium set '  =>  '3, 6, 1',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 6, 1',
		'Tce' =>  '2, 3, 4, 6, 10, 1',
	],
];
