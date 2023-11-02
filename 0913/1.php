<?php
/**
small values: 1, 2, 4, 5, 6, 7, 10
medium values: 1, 2, 3, 5, 6, 8, 10
inter values: 1, 2, 5, 6, 10
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[2, 8, 4, 3, 9], [3, 7, 2, 8, 9], [3, 5, 2, 9, 8], [2, 8, 6, 3, 9]] ,
		'All QPL values'    =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'favorite' =>  2 ,
		'all wins values'  =>  '9, 8 //count wins: 2',
		'for reference  '  =>  '2, 3, 5, 7, 6, 4 //count ref: 6',
		'weird values   '  =>  '10, 1',
		'small set  '  =>  '2',
		'medium set '  =>  '3, 5',
		'big set    '  =>  '7, 6, 4',
		'Qqpl' =>  '2, 3, 5, 7, 6, 4',
		'Qin/Trio' =>  '2, 3, 5, 7, 6, 4',
		'Place' =>  '2',
		'Tce' =>  '2, 9, 3, 5, 8, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[6], [4, 5], [5, 6], [5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 8, 6], [6, 8, 3, 4, 5], [6, 2, 3, 4, 5], [1, 5, 3, 2, 6], [1, 3, 4, 5, 6], [6, 4, 2, 1, 5]] ,
		'All QPL values'    =>  '6, 5, 1, 2, 4, 3, 8',
		'favorite' =>  6 ,
		'all wins values'  =>  '6, 5, 4 //count wins: 3',
		'for reference  '  =>  '1, 2, 3, 8 //count ref: 4',
		'weird values   '  =>  '7, 10, 9',
		'small set  '  =>  '',
		'medium set '  =>  '1, 2',
		'big set    '  =>  '3, 8',
		'Qqpl' =>  '1, 2, 3, 8',
		'Qin/Trio' =>  '1, 2, 3, 8',
		'Tce' =>  '6, 5, 1, 2, 4, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5], [1], [9]] ,
		'qpl/trio'       =>  [[4, 2, 10, 1, 5], [4, 2, 6, 9, 1]] ,
		'All QPL values'    =>  '4, 2, 1, 9, 6, 10, 5',
		'favorite' =>  4 ,
		'all wins values'  =>  '1, 9, 5 //count wins: 3',
		'for reference  '  =>  '4, 2, 6, 10 //count ref: 4',
		'weird values   '  =>  '3, 8, 7',
		'small set  '  =>  '4, 2',
		'medium set '  =>  '6, 10',
		'big set    '  =>  '',
		'Qqpl' =>  '4, 2, 6, 10',
		'Qin/Trio' =>  '4, 2, 6, 10',
		'Place' =>  '4',
		'Tce' =>  '4, 2, 1, 9, 6, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[7, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 5, 1, 6], [2, 8, 1, 6, 7]] ,
		'All QPL values'    =>  '2, 5, 1, 6, 8, 7',
		'favorite' =>  2 ,
		'all wins values'  =>  '6, 7 //count wins: 2',
		'for reference  '  =>  '2, 5, 1, 8 //count ref: 4',
		'weird values   '  =>  '9, 4, 10, 12, 3, 11',
		'small set  '  =>  '2, 5, 1',
		'medium set '  =>  '8',
		'big set    '  =>  '',
		'Qqpl' =>  '2, 5, 1, 8',
		'Qin/Trio' =>  '2, 5, 1, 8',
		'Tce' =>  '2, 5, 1, 6, 8, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [5, 2], [4, 5]] ,
		'qpl/trio'       =>  [[6, 2, 4, 9, 5], [9, 3, 2, 6, 5], [6, 2, 3, 4, 5]] ,
		'All QPL values'    =>  '6, 2, 5, 4, 3, 9',
		'favorite' =>  6 ,
		'all wins values'  =>  '2, 5, 4 //count wins: 3',
		'for reference  '  =>  '6, 3, 9 //count ref: 3',
		'weird values   '  =>  '1, 8, 7, 11, 10',
		'small set  '  =>  '6',
		'medium set '  =>  '',
		'big set    '  =>  '3, 9',
		'Qqpl' =>  '6, 3, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[1]] ,
		'qpl/trio'       =>  [[10, 4, 11, 7, 5], [10, 4, 11, 7, 1], [10, 4, 2, 7, 1], [10, 11, 2, 7, 1], [10, 11, 2, 7, 5], [7, 5, 1, 10, 11]] ,
		'All QPL values'    =>  '10, 7, 5, 1, 11, 4, 2',
		'favorite' =>  10 ,
		'all wins values'  =>  '1 //count wins: 1',
		'for reference  '  =>  '10, 7, 5, 11, 4, 2 //count ref: 6',
		'weird values   '  =>  '8, 3, 9, 6',
		'small set  '  =>  '10, 7, 5',
		'medium set '  =>  '',
		'big set    '  =>  '11, 4, 2',
		'Qqpl' =>  '10, 7, 5, 11, 4, 2',
		'Qin/Trio' =>  '10, 7, 5, 11, 4, 2',
	],
];
