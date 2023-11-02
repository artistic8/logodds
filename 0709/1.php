<?php
/**
small values: 1, 2, 3, 4, 5, 7, 10, 11, 12
medium values: 2, 3, 4, 6, 10, 11, 13
inter values: 2, 3, 4, 10, 11, count(interValues) = 5
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5, 6], [5]] ,
		'qpl/trio'       =>  [[1, 3, 9, 2, 6], [1, 3, 5, 2, 6], [1, 3, 5, 2, 10], [3, 5, 2, 6, 10], [1, 3, 2, 6, 10]] ,
		'All QPL values'    =>  '3, 10, 2, 1, 5, 6, 9',
		'favorite' =>  3 ,
		'all wins values'  =>  '5, 6 //count wins: 2',
		'for reference  '  =>  '3, 10, 2, 1, 9 //count ref: 5',
		'weird values   '  =>  '7, 11, 4, 8, 12',
		'small set  '  =>  '3, 10, 2, 1',
		'medium set '  =>  '',
		'big set    '  =>  '9',
		'Qqpl' =>  '3, 10, 2, 1, 9',
		'For reference' =>  '3, 10, 2, 1, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2], [2, 5], [5], [4, 5, 13], [4, 5]] ,
		'qpl/trio'       =>  [[1, 3, 5, 2, 4], [3, 5, 2, 4, 13], [3, 5, 2, 4, 6], [3, 5, 2, 4, 10]] ,
		'All QPL values'    =>  '2, 10, 4, 5, 6, 3, 13, 1',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 4, 5, 13 //count wins: 4',
		'for reference  '  =>  '10, 6, 3, 1 //count ref: 4',
		'weird values   '  =>  '11, 9, 12, 8, 14, 7',
		'small set  '  =>  '',
		'medium set '  =>  '10, 6, 3',
		'big set    '  =>  '1',
		'Qqpl' =>  '10, 6, 3, 1',
		'For reference' =>  '10, 6, 3, 1',
		'Tce' =>  '2, 10, 4, 5, 6, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[8]] ,
		'qpl/trio'       =>  [[3, 7, 2, 8, 11], [3, 12, 2, 8, 11], [7, 12, 2, 8, 11], [5, 7, 2, 8, 11]] ,
		'All QPL values'    =>  '2, 11, 8, 7, 5, 12, 3',
		'favorite' =>  2 ,
		'all wins values'  =>  '8 //count wins: 1',
		'for reference  '  =>  '2, 11, 7, 5, 12, 3 //count ref: 6',
		'weird values   '  =>  '10, 4, 6, 1, 9',
		'small set  '  =>  '2, 11',
		'medium set '  =>  '',
		'big set    '  =>  '7, 5, 12, 3',
		'Qqpl' =>  '2, 11, 7, 5, 12, 3',
		'For reference' =>  '2, 11, 7, 5, 12, 3',
		'Place' =>  '2',
		'Qin' =>  '11, 7, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5, 6], [6, 7, 9], [6], [7, 8, 9]] ,
		'qpl/trio'       =>  [[1, 3, 7, 2, 6], [1, 5, 7, 2, 6], [5, 7, 9, 2, 6], [1, 7, 9, 2, 6], [5, 7, 9, 6, 11], [3, 7, 9, 6, 11], [3, 7, 9, 6, 8]] ,
		'All QPL values'    =>  '7, 3, 9, 6, 8, 5, 11, 1',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 9, 6, 8, 5 //count wins: 5',
		'for reference  '  =>  '3, 11, 1 //count ref: 3',
		'weird values   '  =>  '4, 10, 12',
		'small set  '  =>  '',
		'medium set '  =>  '3',
		'big set    '  =>  '11, 1',
		'Qqpl' =>  '3, 11, 1',
		'Tce' =>  '7, 3, 9, 6, 8, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 6]] ,
		'qpl/trio'       =>  [[3, 7, 2, 4, 6], [3, 7, 2, 6, 11]] ,
		'All QPL values'    =>  '2, 7, 6, 3, 11, 4',
		'favorite' =>  2 ,
		'all wins values'  =>  '6, 4 //count wins: 2',
		'for reference  '  =>  '2, 7, 3, 11 //count ref: 4',
		'weird values   '  =>  '9, 1, 12, 10, 5, 8',
		'small set  '  =>  '2, 7',
		'medium set '  =>  '3, 11',
		'big set    '  =>  '',
		'Qqpl' =>  '2, 7, 3, 11',
		'For reference' =>  '2, 7, 3, 11',
		'Place' =>  '2',
		'Qin' =>  '7, 3, 11',
		'Tce' =>  '2, 7, 6, 3, 11, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9, 14], [9], [8, 9, 14], [6, 8, 9, 14], [6, 8, 9], [6, 14]] ,
		'qpl/trio'       =>  [[9, 14, 2, 4, 6], [9, 14, 4, 6, 8]] ,
		'All QPL values'    =>  '4, 9, 6, 2, 14, 8',
		'favorite' =>  4 ,
		'all wins values'  =>  '9, 6, 14, 8 //count wins: 4',
		'for reference  '  =>  '4, 2 //count ref: 2',
		'weird values   '  =>  '10, 7, 1, 13, 11, 5, 12',
		'small set  '  =>  '4',
		'medium set '  =>  '2',
		'big set    '  =>  '',
		'Tce' =>  '4, 9, 6, 2, 14, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6, 7, 8], [7, 8], [1, 8], [6, 7]] ,
		'qpl/trio'       =>  [[1, 7, 6, 8, 10], [1, 7, 8, 10, 11]] ,
		'All QPL values'    =>  '10, 7, 8, 6, 1, 11',
		'favorite' =>  10 ,
		'all wins values'  =>  '7, 8, 6, 1 //count wins: 4',
		'for reference  '  =>  '10, 11 //count ref: 2',
		'weird values   '  =>  '2, 5, 9, 3, 4, 12',
		'small set  '  =>  '10',
		'medium set '  =>  '',
		'big set    '  =>  '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[3, 5, 14, 2, 8], [3, 5, 14, 2, 6], [1, 3, 5, 2, 6], [3, 5, 14, 6, 11], [3, 5, 14, 2, 11]] ,
		'All QPL values'    =>  '3, 5, 11, 2, 14, 6, 1, 8',
		'favorite' =>  3 ,
		'all wins values'  =>  '6 //count wins: 1',
		'for reference  '  =>  '3, 5, 11, 2, 14, 1, 8 //count ref: 7',
		'weird values   '  =>  '7, 10, 9, 4, 13, 12',
		'small set  '  =>  '3, 5, 11, 2',
		'medium set '  =>  '',
		'big set    '  =>  '1, 8',
		'Qqpl' =>  '3, 5, 11, 2, 14, 1, 8',
		'For reference' =>  '3, 5, 11, 2, 14, 1, 8',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[4, 5, 9], [5], [4], [4, 5], [10]] ,
		'qpl/trio'       =>  [[3, 5, 9, 4, 6], [1, 3, 5, 4, 6], [1, 3, 12, 4, 6], [1, 3, 12, 4, 8], [3, 5, 12, 4, 8], [1, 5, 12, 4, 8], [1, 3, 12, 4, 10]] ,
		'All QPL values'    =>  '1, 3, 12, 5, 9, 4, 10, 8, 6',
		'favorite' =>  1 ,
		'all wins values'  =>  '5, 9, 4, 10 //count wins: 4',
		'for reference  '  =>  '1, 3, 12, 8, 6 //count ref: 5',
		'weird values   '  =>  '7, 2, 11',
		'small set  '  =>  '1, 3, 12',
		'medium set '  =>  '',
		'big set    '  =>  '8, 6',
		'Qqpl' =>  '1, 3, 12, 8, 6',
		'For reference' =>  '1, 3, 12, 8, 6',
	],
	'11' => [
		/**
		Race 11
		*/
		'wins' =>  [[7, 14], [7], [8, 9], [7, 8], [6, 8, 9, 14], [6, 8, 9], [8, 9, 14]] ,
		'qpl/trio'       =>  [[1, 3, 14, 4, 13], [1, 7, 14, 8, 13], [3, 7, 14, 8, 13], [7, 14, 4, 8, 13], [7, 14, 8, 11, 13], [7, 14, 6, 8, 13], [9, 14, 6, 8, 13], [3, 14, 6, 8, 13], [3, 9, 14, 8, 13], [3, 9, 14, 6, 8]] ,
		'All QPL values'    =>  '14, 8, 13, 6, 3, 9, 4, 11, 7, 1',
		'favorite' =>  14 ,
		'all wins values'  =>  '14, 8, 6, 9, 7 //count wins: 5',
		'for reference  '  =>  '13, 3, 4, 11, 1 //count ref: 5',
		'weird values   '  =>  '10, 2, 5, 12',
		'small set  '  =>  '',
		'medium set '  =>  '13, 3, 4, 11',
		'big set    '  =>  '1',
		'Qqpl' =>  '13, 3, 4, 11, 1',
		'For reference' =>  '13, 3, 4, 11, 1',
		'Tce' =>  '14, 8, 13, 6, 3, 9',
	],
];
