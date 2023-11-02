<?php
/**
small values: 3, 5, 8, 11, 12, 14
medium values: 1, 2, 4, 5, 6, 11
inter values: 5, 11
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[5, 3, 7, 11, 6], [5, 3, 7, 2, 6]] ,
		'All QPL values'    =>  '5, 6, 2, 11, 7, 3',
		'favorite' =>  5 ,
		'all wins values'  =>  '6 //count wins: 1',
		'for reference  '  =>  '5, 2, 11, 7, 3 //count ref: 5',
		'weird values   '  =>  '12, 9, 8, 10, 4, 1',
		'small set  '  =>  '5',
		'medium set '  =>  '',
		'big set    '  =>  '2, 11, 7, 3',
		'Qqpl' =>  '5, 2, 11, 7, 3',
		'Qin/Trio' =>  '5, 2, 11, 7, 3',
		'Place' =>  '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9, 8], [7, 9, 8]] ,
		'qpl/trio'       =>  [[7, 3, 11, 9, 8], [11, 6, 8, 7, 9]] ,
		'All QPL values'    =>  '11, 7, 8, 9, 3, 6',
		'favorite' =>  11 ,
		'all wins values'  =>  '7, 8, 9 //count wins: 3',
		'for reference  '  =>  '11, 3, 6 //count ref: 3',
		'weird values   '  =>  '12, 2, 1, 10, 5, 4',
		'small set  '  =>  '11',
		'medium set '  =>  '',
		'big set    '  =>  '3, 6',
		'Qqpl' =>  '11, 3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 2], [7]] ,
		'qpl/trio'       =>  [[12, 1, 6, 7, 2], [12, 5, 6, 7, 2], [6, 2, 8, 12, 7]] ,
		'All QPL values'    =>  '7, 6, 12, 2, 5, 8, 1',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 2 //count wins: 2',
		'for reference  '  =>  '6, 12, 5, 8, 1 //count ref: 5',
		'weird values   '  =>  '10, 9, 11, 4, 3, 13, 14',
		'small set  '  =>  '',
		'medium set '  =>  '6',
		'big set    '  =>  '5, 8, 1',
		'Qqpl' =>  '6, 12, 5, 8, 1',
		'Qin/Trio' =>  '6, 12, 5, 8, 1',
		'Tce' =>  '7, 6, 12, 2, 5, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[5], [8]] ,
		'qpl/trio'       =>  [[8, 4, 2, 1, 5]] ,
		'All QPL values'    =>  '8, 4, 1, 2, 5',
		'favorite' =>  8 ,
		'all wins values'  =>  '8, 5 //count wins: 2',
		'for reference  '  =>  '4, 1, 2 //count ref: 3',
		'weird values   '  =>  '9, 10, 3, 11, 7, 6, 12',
		'small set  '  =>  '',
		'medium set '  =>  '4, 1, 2',
		'big set    '  =>  '',
		'Qqpl' =>  '4, 1, 2',
		'Tce' =>  '8, 4, 1, 2, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[1, 12, 6, 8, 9], [1, 3, 6, 8, 9], [1, 3, 6, 4, 9]] ,
		'All QPL values'    =>  '9, 6, 1, 4, 8, 3, 12',
		'favorite' =>  9 ,
		'all wins values'  =>  '9 //count wins: 1',
		'for reference  '  =>  '6, 1, 4, 8, 3, 12 //count ref: 6',
		'weird values   '  =>  '5, 10, 2, 11, 7',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '6, 1, 4, 8, 3, 12',
		'Qqpl' =>  '6, 1, 4, 8, 3, 12',
		'Qin/Trio' =>  '6, 1, 4, 8, 3, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[11], [2]] ,
		'qpl/trio'       =>  [[3, 1, 12, 8, 4], [3, 1, 12, 8, 11], [3, 12, 14, 8, 4], [3, 12, 14, 8, 2], [3, 12, 14, 8, 11]] ,
		'All QPL values'    =>  '3, 12, 8, 14, 11, 2, 1, 4',
		'favorite' =>  3 ,
		'all wins values'  =>  '11, 2 //count wins: 2',
		'for reference  '  =>  '3, 12, 8, 14, 1, 4 //count ref: 6',
		'weird values   '  =>  '9, 7, 10, 5, 6, 13',
		'small set  '  =>  '3, 12, 8, 14',
		'medium set '  =>  '',
		'big set    '  =>  '1, 4',
		'Qqpl' =>  '3, 12, 8, 14, 1, 4',
		'Qin/Trio' =>  '3, 12, 8, 14, 1, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9, 7, 8], [9]] ,
		'qpl/trio'       =>  [[5, 11, 9, 7, 8], [5, 12, 8, 11, 9], [5, 2, 9, 7, 8]] ,
		'All QPL values'    =>  '9, 5, 8, 11, 7, 2, 12',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 8, 7 //count wins: 3',
		'for reference  '  =>  '5, 11, 2, 12 //count ref: 4',
		'weird values   '  =>  '3, 4, 13, 1, 6, 10',
		'small set  '  =>  '',
		'medium set '  =>  '5',
		'big set    '  =>  '2, 12',
		'Qqpl' =>  '5, 11, 2, 12',
		'Qin/Trio' =>  '5, 11, 2, 12',
		'Tce' =>  '9, 5, 8, 11, 7, 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [5, 6], [1, 12]] ,
		'qpl/trio'       =>  [[1, 12, 4, 6, 5], [1, 12, 4, 11, 5]] ,
		'All QPL values'    =>  '5, 4, 1, 12, 11, 6',
		'favorite' =>  5 ,
		'all wins values'  =>  '5, 1, 12, 6 //count wins: 4',
		'for reference  '  =>  '4, 11 //count ref: 2',
		'weird values   '  =>  '9, 2, 7, 3, 8, 10',
		'small set  '  =>  '',
		'medium set '  =>  '4, 11',
		'big set    '  =>  '',
		'Tce' =>  '5, 4, 1, 12, 11, 6',
	],
];
