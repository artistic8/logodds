<?php
/**
small values: 1, 4, 6, 8
medium values: 2, 3, 7, 11
inter values: , count(interValues) = 0
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 4, 1, 5]] ,
		'All QPL values'    =>  '6, 4, 8, 5, 1',
		'All Runners   '    =>  '6, 4, 8, 5, 1, 11, 2, 3, 10, 7, 9',
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
		'All Runners   '    =>  '9, 11, 1, 7, 2, 3, 8, 12, 10, 4, 5, 6',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 11, 1, 7, 2, 12 //count wins: 6',
		'for reference  '  =>  '3 //count ref: 1',
		'weird values   '  =>  '8, 10, 4, 5, 6',
		'small set  '  =>  '',
		'medium set '  =>  '3',
		'big set    '  =>  '',
		'Tce' =>  '9, 11, 1, 7, 2, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [4], [6]] ,
		'qpl/trio'       =>  [[2, 8, 10, 7, 3], [2, 8, 4, 7, 1], [2, 8, 6, 1, 7], [7, 1, 3, 2, 8], [7, 3, 1, 2, 4], [1, 7, 3, 2, 6]] ,
		'All QPL values'    =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'All Runners   '    =>  '1, 7, 3, 2, 5, 4, 6, 8, 10, 11, 9',
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
		'All Runners   '    =>  '6, 11, 7, 1, 4, 10, 2, 3, 9, 5, 8, 12',
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
