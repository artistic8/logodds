<?php
/**
small values: 2, 3, 4, 5, 6, 11, 12
medium values: 2, 3, 5, 11, 12
inter values: 2, 3, 5, 11, 12, count(interValues) = 5
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2], [6], [1, 2], [6, 1], [4, 12]] ,
		'qpl/trio'       =>  [[3, 12, 2, 4, 6], [3, 12, 2, 6, 11], [1, 3, 2, 4, 6], [3, 5, 2, 4, 6], [5, 12, 2, 4, 6]] ,
		'All QPL values'    =>  '2, 5, 4, 6, 12, 3, 11, 1',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 4, 6, 12, 1 //count wins: 5',
		'for reference  '  =>  '5, 3, 11 //count ref: 3',
		'weird values   '  =>  '7, 8, 9',
		'small set  '  =>  '',
		'medium set '  =>  '5, 3',
		'big set    '  =>  '',
		'Qqpl' =>  '5, 3, 11',
		'Tce' =>  '2, 5, 4, 6, 12, 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5, 6], [5, 6, 7]] ,
		'qpl/trio'       =>  [[5, 7, 2, 4, 6]] ,
		'All QPL values'    =>  '4, 2, 7, 6, 5',
		'favorite' =>  4 ,
		'all wins values'  =>  '7, 6, 5 //count wins: 3',
		'for reference  '  =>  '4, 2 //count ref: 2',
		'weird values   '  =>  '8, 10, 1, 11, 9, 3, 12',
		'small set  '  =>  '4, 2',
		'medium set '  =>  '',
		'big set    '  =>  '',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9], [8, 9]] ,
		'qpl/trio'       =>  [[5, 9, 12, 2, 8], [5, 9, 12, 8, 11], [5, 9, 12, 2, 11]] ,
		'All QPL values'    =>  '5, 11, 9, 2, 12, 8',
		'favorite' =>  5 ,
		'all wins values'  =>  '9, 8 //count wins: 2',
		'for reference  '  =>  '5, 11, 2, 12 //count ref: 4',
		'weird values   '  =>  '4, 1, 7, 3, 6, 10',
		'small set  '  =>  '5, 11',
		'medium set '  =>  '2, 12',
		'big set    '  =>  '',
		'Qqpl' =>  '5, 11, 2, 12',
		'For reference' =>  '5, 11, 2, 12',
		'Place' =>  '5',
		'Qin' =>  '11, 2, 12',
		'Tce' =>  '5, 11, 9, 2, 12, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4], [4, 9]] ,
		'qpl/trio'       =>  [[9, 12, 4, 6, 11], [9, 12, 2, 4, 6], [9, 12, 4, 6, 10]] ,
		'All QPL values'    =>  '6, 12, 4, 9, 10, 2, 11',
		'favorite' =>  6 ,
		'all wins values'  =>  '4, 9 //count wins: 2',
		'for reference  '  =>  '6, 12, 10, 2, 11 //count ref: 5',
		'weird values   '  =>  '3, 7, 8, 5, 1',
		'small set  '  =>  '6, 12',
		'medium set '  =>  '',
		'big set    '  =>  '10, 2, 11',
		'Qqpl' =>  '6, 12, 10, 2, 11',
		'For reference' =>  '6, 12, 10, 2, 11',
		'Place' =>  '6',
		'Qin' =>  '12, 10, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[4, 8, 12, 2, 3]] ,
		'All QPL values'    =>  '4, 12, 8, 2, 3',
		'favorite' =>  4 ,
		'all wins values'  =>  ' //count wins: 0',
		'for reference  '  =>  '4, 12, 8, 2, 3 //count ref: 5',
		'weird values   '  =>  '1, 7, 6, 9, 5, 10',
		'Qqpl' =>  '4, 12, 8, 2, 3',
		'For reference' =>  '4, 12, 8, 2, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5, 7, 9], [4], [9], [3, 4], [3]] ,
		'qpl/trio'       =>  [[5, 7, 9, 2, 4], [5, 7, 12, 4, 8], [5, 7, 12, 4, 11], [3, 5, 7, 4, 11], [5, 7, 9, 4, 11]] ,
		'All QPL values'    =>  '5, 7, 9, 4, 11, 3, 8, 12, 2',
		'favorite' =>  5 ,
		'all wins values'  =>  '5, 7, 9, 4, 3 //count wins: 5',
		'for reference  '  =>  '11, 8, 12, 2 //count ref: 4',
		'weird values   '  =>  '10, 1, 6',
		'small set  '  =>  '',
		'medium set '  =>  '11',
		'big set    '  =>  '8, 12, 2',
		'Qqpl' =>  '11, 8, 12, 2',
		'For reference' =>  '11, 8, 12, 2',
		'Tce' =>  '5, 7, 9, 4, 11, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8], [9, 8], [9]] ,
		'qpl/trio'       =>  [[3, 5, 2, 8, 11], [3, 5, 9, 8, 11], [3, 5, 9, 2, 8], [3, 5, 9, 2, 11]] ,
		'All QPL values'    =>  '2, 3, 11, 8, 5, 9',
		'favorite' =>  2 ,
		'all wins values'  =>  '8, 9 //count wins: 2',
		'for reference  '  =>  '2, 3, 11, 5 //count ref: 4',
		'weird values   '  =>  '4, 7, 1, 6, 10, 12',
		'small set  '  =>  '2, 3, 11',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '2, 3, 11, 5',
		'For reference' =>  '2, 3, 11, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [1, 8], [1], [1, 9], [8, 9], [7], [6, 7], [7, 9, 8]] ,
		'qpl/trio'       =>  [[1, 5, 9, 8, 11], [1, 5, 7, 8, 11], [5, 7, 9, 8, 11], [1, 5, 7, 2, 8], [1, 5, 7, 6, 8], [1, 5, 9, 6, 8]] ,
		'All QPL values'    =>  '5, 8, 6, 2, 9, 11, 1, 7',
		'favorite' =>  5 ,
		'all wins values'  =>  '8, 6, 9, 1, 7 //count wins: 5',
		'for reference  '  =>  '5, 2, 11 //count ref: 3',
		'weird values   '  =>  '3, 10, 12, 4',
		'small set  '  =>  '5',
		'medium set '  =>  '2, 11',
		'big set    '  =>  '',
		'Qqpl' =>  '5, 2, 11',
		'Tce' =>  '5, 8, 6, 2, 9, 11',
	],
];
