<?php
/**
small values: 1, 2, 5, 6, 7, 10
medium values: 8
inter values: , count(interValues) = 0
*/

return [
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
		'For reference' =>  '2, 5, 1, 8',
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
		'For reference' =>  '10, 7, 5, 11, 4, 2',
	],
];
