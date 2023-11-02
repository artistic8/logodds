<?php
/**
small values: 1, 2, 4, 6, 10, 14
medium values: 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 14
inter values: 2, 4, 6, 10, 14, count(interValues) = 5
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [5, 6, 4], [5, 6, 13], [7], [7, 6, 13], [7, 8]] ,
		'qpl/trio'       =>  [[3, 5, 7, 4, 6], [3, 5, 7, 6, 13], [3, 5, 7, 6, 8]] ,
		'All QPL values'    =>  '5, 6, 3, 7, 13, 8, 4',
		'favorite' =>  5 ,
		'all wins values'  =>  '5, 6, 7, 13, 8, 4 //count wins: 6',
		'for reference  '  =>  '3 //count ref: 1',
		'weird values   '  =>  '2, 10, 14, 11, 9, 1',
		'small set  '  =>  '',
		'medium set '  =>  '3',
		'big set    '  =>  '',
		'Tce' =>  '5, 6, 3, 7, 13, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [8, 7], [8], [7], [8, 9], [9]] ,
		'qpl/trio'       =>  [[1, 5, 2, 8, 10], [5, 7, 2, 8, 10], [5, 7, 2, 8, 11], [5, 9, 2, 8, 10], [5, 9, 2, 10, 11]] ,
		'All QPL values'    =>  '2, 9, 5, 1, 11, 10, 8, 7',
		'favorite' =>  2 ,
		'all wins values'  =>  '9, 1, 8, 7 //count wins: 4',
		'for reference  '  =>  '2, 5, 11, 10 //count ref: 4',
		'weird values   '  =>  '12, 3, 4, 13, 6',
		'small set  '  =>  '2',
		'medium set '  =>  '5, 11, 10',
		'big set    '  =>  '',
		'Qqpl' =>  '2, 5, 11, 10',
		'Qin/Trio' =>  '2, 5, 11, 10',
		'Place' =>  '2',
		'Tce' =>  '2, 9, 5, 1, 11, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7], [7, 8], [8], [9]] ,
		'qpl/trio'       =>  [[1, 7, 12, 4, 8], [1, 5, 12, 6, 8], [1, 3, 12, 6, 8], [1, 7, 12, 6, 8], [1, 9, 12, 6, 8]] ,
		'All QPL values'    =>  '1, 8, 12, 6, 3, 7, 9, 4, 5',
		'favorite' =>  1 ,
		'all wins values'  =>  '8, 7, 9 //count wins: 3',
		'for reference  '  =>  '1, 12, 6, 3, 4, 5 //count ref: 6',
		'weird values   '  =>  '10, 14, 2, 11, 13',
		'small set  '  =>  '1',
		'medium set '  =>  '12, 6, 3',
		'big set    '  =>  '4, 5',
		'Qqpl' =>  '1, 12, 6, 3, 4, 5',
		'Qin/Trio' =>  '1, 12, 6, 3, 4, 5',
		'Tce' =>  '1, 8, 12, 6, 3, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7], [5]] ,
		'qpl/trio'       =>  [[1, 5, 2, 4, 10], [5, 7, 2, 4, 6], [1, 7, 2, 4, 10]] ,
		'All QPL values'    =>  '4, 10, 1, 2, 6, 5, 7',
		'favorite' =>  4 ,
		'all wins values'  =>  '7, 5 //count wins: 2',
		'for reference  '  =>  '4, 10, 1, 2, 6 //count ref: 5',
		'weird values   '  =>  '8, 13, 12, 3, 9, 14, 11',
		'small set  '  =>  '4, 10, 1, 2, 6',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '4, 10, 1, 2, 6',
		'Qin/Trio' =>  '4, 10, 1, 2, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 5], [8, 9], [9, 5, 8]] ,
		'qpl/trio'       =>  [[5, 9, 14, 4, 8], [5, 9, 2, 4, 8], [5, 7, 9, 4, 8], [3, 5, 9, 4, 8], [7, 9, 12, 4, 8], [5, 9, 12, 4, 8], [3, 9, 12, 4, 8]] ,
		'All QPL values'    =>  '9, 8, 4, 2, 3, 12, 7, 5, 14',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 8, 5 //count wins: 3',
		'for reference  '  =>  '4, 2, 3, 12, 7, 14 //count ref: 6',
		'weird values   '  =>  '1, 6, 13, 11, 10',
		'small set  '  =>  '',
		'medium set '  =>  '4, 2, 3, 12, 7',
		'big set    '  =>  '14',
		'Qqpl' =>  '4, 2, 3, 12, 7, 14',
		'Qin/Trio' =>  '4, 2, 3, 12, 7, 14',
		'Tce' =>  '9, 8, 4, 2, 3, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[6], [5, 6], [14, 6], [5]] ,
		'qpl/trio'       =>  [[1, 3, 14, 4, 6], [1, 3, 5, 4, 6], [1, 3, 5, 6, 11], [1, 3, 5, 6, 13], [1, 3, 5, 2, 6], [3, 5, 9, 2, 6], [1, 5, 9, 6, 13]] ,
		'All QPL values'    =>  '1, 5, 9, 3, 6, 14, 13, 11, 2, 4',
		'favorite' =>  1 ,
		'all wins values'  =>  '5, 6, 14 //count wins: 3',
		'for reference  '  =>  '1, 9, 3, 13, 11, 2, 4 //count ref: 7',
		'weird values   '  =>  '7, 8, 10, 12',
		'small set  '  =>  '1',
		'medium set '  =>  '9, 3',
		'big set    '  =>  '13, 11, 2, 4',
		'Qqpl' =>  '1, 9, 3, 13, 11, 2, 4',
		'Qin/Trio' =>  '1, 9, 3, 13, 11, 2, 4',
		'Tce' =>  '1, 5, 9, 3, 6, 14',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[1, 2], [7, 2], [7, 8], [7], [2], [8], [9, 2]] ,
		'qpl/trio'       =>  [[1, 7, 14, 2, 8], [7, 12, 14, 2, 8], [1, 12, 14, 2, 8], [1, 9, 14, 2, 8]] ,
		'All QPL values'    =>  '14, 2, 9, 1, 12, 8, 7',
		'favorite' =>  14 ,
		'all wins values'  =>  '2, 9, 1, 8, 7 //count wins: 5',
		'for reference  '  =>  '14, 12 //count ref: 2',
		'weird values   '  =>  '3, 6, 11, 5, 10, 13, 4',
		'small set  '  =>  '14',
		'medium set '  =>  '12',
		'big set    '  =>  '',
		'Tce' =>  '14, 2, 9, 1, 12, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [2], [2, 4], [4], [6, 8]] ,
		'qpl/trio'       =>  [[3, 5, 2, 4, 8], [1, 5, 2, 4, 8], [3, 5, 2, 6, 8]] ,
		'All QPL values'    =>  '2, 8, 6, 5, 4, 3, 1',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 8, 6, 4 //count wins: 4',
		'for reference  '  =>  '5, 3, 1 //count ref: 3',
		'weird values   '  =>  '11, 9, 10, 12, 7',
		'small set  '  =>  '',
		'medium set '  =>  '5',
		'big set    '  =>  '3, 1',
		'Qqpl' =>  '5, 3, 1',
		'Tce' =>  '2, 8, 6, 5, 4, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [9, 8], [9, 2], [9, 8, 2]] ,
		'qpl/trio'       =>  [[1, 9, 12, 2, 8]] ,
		'All QPL values'    =>  '1, 8, 2, 12, 9',
		'favorite' =>  1 ,
		'all wins values'  =>  '8, 2, 9 //count wins: 3',
		'for reference  '  =>  '1, 12 //count ref: 2',
		'weird values   '  =>  '6, 4, 7, 13, 5, 3, 14, 11, 10',
		'small set  '  =>  '1',
		'medium set '  =>  '12',
		'big set    '  =>  '',
		'Tce' =>  '1, 8, 2, 12, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[1], [11]] ,
		'qpl/trio'       =>  [[1, 9, 4, 6, 10], [1, 9, 4, 6, 11], [3, 9, 4, 6, 11], [1, 3, 9, 4, 6], [5, 9, 4, 6, 11], [9, 14, 4, 6, 11]] ,
		'All QPL values'    =>  '4, 6, 11, 9, 10, 3, 14, 5, 1',
		'favorite' =>  4 ,
		'all wins values'  =>  '11, 1 //count wins: 2',
		'for reference  '  =>  '4, 6, 9, 10, 3, 14, 5 //count ref: 7',
		'weird values   '  =>  '13, 2, 8, 7, 12',
		'small set  '  =>  '4, 6',
		'medium set '  =>  '9, 10, 3, 14, 5',
		'big set    '  =>  '',
		'Qqpl' =>  '4, 6, 9, 10, 3, 14, 5',
		'Qin/Trio' =>  '4, 6, 9, 10, 3, 14, 5',
		'Place' =>  '4',
		'Tce' =>  '4, 6, 11, 9, 10, 3',
	],
	'11' => [
		/**
		Race 11
		*/
		'wins' =>  [[5], [7], [8, 7], [8, 7, 5], [8]] ,
		'qpl/trio'       =>  [[5, 7, 2, 4, 13], [5, 7, 2, 4, 10], [7, 9, 2, 4, 13], [5, 7, 2, 4, 8]] ,
		'All QPL values'    =>  '2, 7, 5, 4, 8, 9, 13, 10',
		'favorite' =>  2 ,
		'all wins values'  =>  '7, 5, 8 //count wins: 3',
		'for reference  '  =>  '2, 4, 9, 13, 10 //count ref: 5',
		'weird values   '  =>  '1, 3, 6, 12, 11',
		'small set  '  =>  '2',
		'medium set '  =>  '4',
		'big set    '  =>  '9, 13, 10',
		'Qqpl' =>  '2, 4, 9, 13, 10',
		'Qin/Trio' =>  '2, 4, 9, 13, 10',
		'Place' =>  '2',
		'Tce' =>  '2, 7, 5, 4, 8, 9',
	],
];
