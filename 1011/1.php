<?php
/**
small values: 3, 4, 11
medium values: 2, 3, 4, 7, 8, 10, 11
inter values: 3, 4, 11, count(interValues) = 3
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5, 6], [5, 4], [5, 4, 6]] ,
		'qpl/trio'       =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'All QPL values'    =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'favorite' =>  4 ,
		'all wins values'  =>  '4, 5, 6 //count wins: 3',
		'for reference  '  =>  '3, 1, 2, 7, 8 //count ref: 5',
		'weird values   '  =>  '9, 10',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '3, 1, 2, 7, 8',
		'Qqpl' =>  '3, 1, 2, 7, 8',
		'Qin/Trio' =>  '3, 1, 2, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5, 6], [1, 11], [6], [11]] ,
		'qpl/trio'       =>  [[3, 7, 11, 5, 6], [3, 7, 6, 1, 11], [3, 7, 5, 2, 6]] ,
		'All QPL values'    =>  '3, 6, 11, 7, 5, 2, 1',
		'favorite' =>  3 ,
		'all wins values'  =>  '6, 11, 5, 1 //count wins: 4',
		'for reference  '  =>  '3, 7, 2 //count ref: 3',
		'weird values   '  =>  '10, 12, 4, 9, 8',
		'small set  '  =>  '3',
		'medium set '  =>  '7, 2',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 7, 2',
		'Tce' =>  '3, 6, 11, 7, 5, 2',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[4, 8, 2, 1, 9], [4, 8, 2, 1, 5]] ,
		'All QPL values'    =>  '4, 9, 1, 5, 8, 2',
		'favorite' =>  4 ,
		'all wins values'  =>  '9 //count wins: 1',
		'for reference  '  =>  '4, 1, 5, 8, 2 //count ref: 5',
		'weird values   '  =>  '7, 6, 3, 10',
		'small set  '  =>  '4',
		'medium set '  =>  '',
		'big set    '  =>  '1, 5, 8, 2',
		'Qqpl' =>  '4, 1, 5, 8, 2',
		'Qin/Trio' =>  '4, 1, 5, 8, 2',
		'Place' =>  '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2], [9], [5, 2], [9, 6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 2, 6, 9], [5, 1, 2, 9, 6], [5, 12, 11, 6, 9]] ,
		'All QPL values'    =>  '5, 6, 2, 11, 12, 9, 1',
		'favorite' =>  5 ,
		'all wins values'  =>  '5, 6, 2, 9 //count wins: 4',
		'for reference  '  =>  '11, 12, 1 //count ref: 3',
		'weird values   '  =>  '4, 7, 10, 8, 3',
		'small set  '  =>  '',
		'medium set '  =>  '11',
		'big set    '  =>  '1',
		'Qqpl' =>  '11, 12, 1',
		'Tce' =>  '5, 6, 2, 11, 12, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[6], [6, 7], [6, 5], [6, 8, 7], [6, 7, 5], [6, 8, 7, 5]] ,
		'qpl/trio'       =>  [[2, 11, 4, 5, 1], [2, 11, 5, 1, 6], [2, 11, 4, 5, 7], [11, 2, 5, 6, 7], [11, 2, 8, 5, 7], [11, 4, 7, 6, 5], [11, 8, 5, 6, 7]] ,
		'All QPL values'    =>  '6, 11, 8, 4, 7, 5, 2, 1',
		'favorite' =>  6 ,
		'all wins values'  =>  '6, 8, 7, 5 //count wins: 4',
		'for reference  '  =>  '11, 4, 2, 1 //count ref: 4',
		'weird values   '  =>  '10, 12, 3, 9',
		'small set  '  =>  '',
		'medium set '  =>  '11, 4',
		'big set    '  =>  '2, 1',
		'Qqpl' =>  '11, 4, 2, 1',
		'Qin/Trio' =>  '11, 4, 2, 1',
		'Tce' =>  '6, 11, 8, 4, 7, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[3], [6]] ,
		'qpl/trio'       =>  [[4, 11, 10, 3, 9], [4, 11, 3, 7, 6]] ,
		'All QPL values'    =>  '4, 11, 3, 6, 7, 9, 10',
		'favorite' =>  4 ,
		'all wins values'  =>  '3, 6 //count wins: 2',
		'for reference  '  =>  '4, 11, 7, 9, 10 //count ref: 5',
		'weird values   '  =>  '1, 2, 5, 8, 12',
		'small set  '  =>  '4, 11',
		'medium set '  =>  '',
		'big set    '  =>  '7, 9, 10',
		'Qqpl' =>  '4, 11, 7, 9, 10',
		'Qin/Trio' =>  '4, 11, 7, 9, 10',
		'Place' =>  '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7, 2], [7, 2, 10], [7], [1], [2, 10]] ,
		'qpl/trio'       =>  [[1, 12, 6, 7, 2], [1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'All QPL values'    =>  '1, 2, 10, 7, 12, 3, 6',
		'favorite' =>  1 ,
		'all wins values'  =>  '1, 2, 10, 7 //count wins: 4',
		'for reference  '  =>  '12, 3, 6 //count ref: 3',
		'weird values   '  =>  '9, 8, 4, 11, 5',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '12, 3, 6',
		'Qqpl' =>  '12, 3, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 6], [7, 5, 6], [7, 6], [7], [7, 5]] ,
		'qpl/trio'       =>  [[7, 3, 10, 5, 6], [5, 3, 10, 8, 7]] ,
		'All QPL values'    =>  '7, 3, 10, 5, 8, 6',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 5, 6 //count wins: 3',
		'for reference  '  =>  '3, 10, 8 //count ref: 3',
		'weird values   '  =>  '4, 2, 12, 1, 11, 9',
		'small set  '  =>  '',
		'medium set '  =>  '3, 10, 8',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 10, 8',
		'Tce' =>  '7, 3, 10, 5, 8, 6',
	],
];
