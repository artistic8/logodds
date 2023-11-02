<?php
/**
small values: 1, 2, 3, 4, 5, 6, 7, 8, 9
medium values: 1, 2, 3, 7, 11
inter values: 1, 2, 3, 7, count(interValues) = 4
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 4, 1, 5]] ,
		'All QPL values'    =>  '6, 4, 8, 5, 1',
		'favorite' =>  6 ,
		'all wins values'  =>  '5 //count wins: 1',
		'for reference  '  =>  '6, 4, 8, 1 //count ref: 4',
		'weird values   '  =>  '11, 2, 3, 10, 7, 9',
		'small set  '  =>  '6, 4, 8',
		'medium set '  =>  '',
		'big set    '  =>  '1',
		'Qqpl' =>  '6, 4, 8, 1',
		'For reference' =>  '6, 4, 8, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[1, 12], [9, 1], [9, 1, 11, 2], [9, 7], [9]] ,
		'qpl/trio'       =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'All QPL values'    =>  '9, 11, 1, 7, 2, 3, 12',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 11, 1, 7, 2, 12 //count wins: 6',
		'for reference  '  =>  '3 //count ref: 1',
		'weird values   '  =>  '8, 10, 4, 5, 6',
		'small set  '  =>  '',
		'medium set '  =>  '3',
		'big set    '  =>  '',
		'Tce' =>  '9, 11, 1, 7, 2, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 7, 5, 2, 4], [3, 9, 7, 2, 4]] ,
		'All QPL values'    =>  '3, 7, 2, 5, 9, 4',
		'favorite' =>  3 ,
		'all wins values'  =>  '4 //count wins: 1',
		'for reference  '  =>  '3, 7, 2, 5, 9 //count ref: 5',
		'weird values   '  =>  '6, 1, 8, 10',
		'small set  '  =>  '3, 7, 2, 5, 9',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 7, 2, 5, 9',
		'For reference' =>  '3, 7, 2, 5, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9, 8], [8, 9, 7], [9], [9, 2]] ,
		'qpl/trio'       =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'All QPL values'    =>  '9, 2, 3, 1, 7, 8, 4',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 2, 7, 8 //count wins: 4',
		'for reference  '  =>  '3, 1, 4 //count ref: 3',
		'weird values   '  =>  '5, 6, 10',
		'small set  '  =>  '',
		'medium set '  =>  '3, 1',
		'big set    '  =>  '4',
		'Qqpl' =>  '3, 1, 4',
		'Tce' =>  '9, 2, 3, 1, 7, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [4], [6]] ,
		'qpl/trio'       =>  [[2, 8, 10, 7, 3], [2, 8, 4, 7, 1], [2, 8, 6, 1, 7], [7, 1, 3, 2, 8], [7, 3, 1, 2, 4], [1, 7, 3, 2, 6]] ,
		'All QPL values'    =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'favorite' =>  1 ,
		'all wins values'  =>  '7, 4, 6 //count wins: 3',
		'for reference  '  =>  '1, 3, 2, 8, 10 //count ref: 5',
		'weird values   '  =>  '5, 11, 9',
		'small set  '  =>  '1',
		'medium set '  =>  '3, 2',
		'big set    '  =>  '8, 10',
		'Qqpl' =>  '1, 3, 2, 8, 10',
		'For reference' =>  '1, 3, 2, 8, 10',
		'Tce' =>  '1, 7, 3, 2, 4, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [6, 1]] ,
		'qpl/trio'       =>  [[6, 11, 10, 7, 9], [11, 10, 3, 7, 6], [11, 4, 3, 7, 6], [11, 4, 7, 9, 6], [11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'All QPL values'    =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'favorite' =>  6 ,
		'all wins values'  =>  '6, 1 //count wins: 2',
		'for reference  '  =>  '11, 7, 4, 10, 9, 3, 2 //count ref: 7',
		'weird values   '  =>  '5, 8, 12',
		'small set  '  =>  '',
		'medium set '  =>  '11, 7',
		'big set    '  =>  '4, 10, 9, 3, 2',
		'Qqpl' =>  '11, 7, 4, 10, 9, 3, 2',
		'For reference' =>  '11, 7, 4, 10, 9, 3, 2',
		'Tce' =>  '6, 11, 7, 1, 4, 10',
	],
];
