<?php
/**
small values: 1, 2, 3, 6, 8, 12
medium values: 1, 2, 3, 4, 5, 7, 10
inter values: 1, 2, 3, count(interValues) = 3
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[11], [2], [11, 2]] ,
		'qpl/trio'       =>  [[1, 3, 6, 7, 8], [3, 1, 7, 6, 11], [1, 3, 7, 6, 2], [3, 1, 6, 7, 4], [3, 1, 7, 11, 2]] ,
		'All QPL values'    =>  '3, 1, 11, 7, 2, 8, 6, 4',
		'All Runners   '    =>  '1, 3, 11, 7, 2, 9, 8, 6, 5, 4, 10',
		'favorite' =>  3 ,
		'all wins values'  =>  '11, 2 //count wins: 2',
		'for reference  '  =>  '3, 1, 7, 8, 6, 4 //count ref: 6',
		'weird values   '  =>  '9, 5, 10',
		'small set  '  =>  '3, 1',
		'medium set '  =>  '7',
		'big set    '  =>  '8, 6, 4',
		'Qqpl' =>  '3, 1, 7, 8, 6, 4',
		'For reference' =>  '3, 1, 7, 8, 6, 4',
		'Place' =>  '3',
		'Qin' =>  '1, 7, 8',
		'Tce' =>  '3, 1, 11, 7, 2, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7, 8], [8]] ,
		'qpl/trio'       =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8], [10, 2, 3, 5, 8]] ,
		'All QPL values'    =>  '3, 8, 10, 5, 2, 7, 1',
		'All Runners   '    =>  '3, 8, 10, 5, 2, 7, 9, 6, 11, 1, 4, 12',
		'favorite' =>  3 ,
		'all wins values'  =>  '8, 7 //count wins: 2',
		'for reference  '  =>  '3, 10, 5, 2, 1 //count ref: 5',
		'weird values   '  =>  '9, 6, 11, 4, 12',
		'small set  '  =>  '3',
		'medium set '  =>  '10, 5, 2',
		'big set    '  =>  '1',
		'Qqpl' =>  '3, 10, 5, 2, 1',
		'For reference' =>  '3, 10, 5, 2, 1',
		'Place' =>  '3',
		'Qin' =>  '10, 5, 2',
		'Tce' =>  '3, 8, 10, 5, 2, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[2, 6, 11, 3, 5], [2, 6, 8, 3, 5]] ,
		'All QPL values'    =>  '2, 3, 6, 8, 5, 11',
		'All Runners   '    =>  '2, 3, 6, 8, 5, 7, 11, 9, 1, 4, 10',
		'favorite' =>  2 ,
		'all wins values'  =>  '5 //count wins: 1',
		'for reference  '  =>  '2, 3, 6, 8, 11 //count ref: 5',
		'weird values   '  =>  '7, 9, 1, 4, 10',
		'small set  '  =>  '2, 3, 6, 8',
		'medium set '  =>  '',
		'big set    '  =>  '11',
		'Qqpl' =>  '2, 3, 6, 8, 11',
		'For reference' =>  '2, 3, 6, 8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[8], [7, 5, 8], [1, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 7, 10, 4], [1, 5, 7, 10, 8]] ,
		'All QPL values'    =>  '1, 5, 7, 10, 8, 4',
		'All Runners   '    =>  '1, 5, 7, 10, 3, 12, 8, 4, 2, 9, 11, 6',
		'favorite' =>  1 ,
		'all wins values'  =>  '1, 7, 5, 8 //count wins: 4',
		'for reference  '  =>  '10, 4 //count ref: 2',
		'weird values   '  =>  '3, 12, 2, 9, 11, 6',
		'small set  '  =>  '',
		'medium set '  =>  '10',
		'big set    '  =>  '4',
		'Tce' =>  '1, 5, 7, 10, 8, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[11, 2], [11], [4, 11]] ,
		'qpl/trio'       =>  [[4, 1, 3, 11, 2], [1, 3, 7, 4, 11], [1, 3, 12, 4, 11], [1, 3, 7, 2, 4]] ,
		'All QPL values'    =>  '1, 4, 11, 3, 2, 7, 12',
		'All Runners   '    =>  '1, 4, 11, 3, 2, 7, 10, 5, 9, 12, 6, 8',
		'favorite' =>  1 ,
		'all wins values'  =>  '4, 11, 2 //count wins: 3',
		'for reference  '  =>  '1, 3, 7, 12 //count ref: 4',
		'weird values   '  =>  '10, 5, 9, 6, 8',
		'small set  '  =>  '1',
		'medium set '  =>  '3',
		'big set    '  =>  '7, 12',
		'Qqpl' =>  '1, 3, 7, 12',
		'For reference' =>  '1, 3, 7, 12',
		'Tce' =>  '1, 4, 11, 3, 2, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 8]] ,
		'qpl/trio'       =>  [[12, 1, 4, 5, 8]] ,
		'All QPL values'    =>  '12, 5, 4, 1, 8',
		'All Runners   '    =>  '12, 5, 4, 1, 7, 8, 6, 2, 10, 3, 11',
		'favorite' =>  12 ,
		'all wins values'  =>  '5, 8 //count wins: 2',
		'for reference  '  =>  '12, 4, 1 //count ref: 3',
		'weird values   '  =>  '7, 6, 2, 10, 3, 11',
		'small set  '  =>  '12',
		'medium set '  =>  '4, 1',
		'big set    '  =>  '',
		'Qqpl' =>  '12, 4, 1',
		'Tce' =>  '12, 5, 4, 1, 8',
	],
];
