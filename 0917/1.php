<?php
/**
small values: 1, 2, 3, 8, 11, 13
medium values: 1, 2, 3, 4, 5, 7, 8, 10, 12
inter values: 1, 2, 3, 8, count(interValues) = 4
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [5], [6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 14, 6, 8], [6, 8, 5, 1, 2], [6, 8, 2, 12, 5], [6, 8, 2, 1, 12], [5, 12, 1, 6, 8]] ,
		'All QPL values'    =>  '6, 12, 5, 8, 1, 2, 14',
		'All Runners   '    =>  '6, 12, 5, 8, 1, 2, 4, 14, 9, 3, 7, 13, 10',
		'favorite' =>  6 ,
		'all wins values'  =>  '6, 5, 2 //count wins: 3',
		'for reference  '  =>  '12, 8, 1, 14 //count ref: 4',
		'weird values   '  =>  '4, 9, 3, 7, 13, 10',
		'small set  '  =>  '',
		'medium set '  =>  '12, 8, 1',
		'big set    '  =>  '14',
		'Qqpl' =>  '12, 8, 1, 14',
		'For reference' =>  '12, 8, 1, 14',
		'Tce' =>  '6, 12, 5, 8, 1, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[8], [9], [9, 13], [13], [5, 14], [14]] ,
		'qpl/trio'       =>  [[3, 14, 7, 2, 8], [3, 9, 14, 2, 11], [3, 9, 14, 2, 13], [3, 14, 2, 8, 9], [3, 14, 5, 2, 13], [3, 2, 4, 5, 14]] ,
		'All QPL values'    =>  '3, 14, 9, 2, 5, 13, 7, 4, 8, 11',
		'All Runners   '    =>  '3, 14, 9, 2, 5, 13, 4, 7, 8, 11, 6, 10, 1, 12',
		'favorite' =>  3 ,
		'all wins values'  =>  '14, 9, 5, 13, 8 //count wins: 5',
		'for reference  '  =>  '3, 2, 7, 4, 11 //count ref: 5',
		'weird values   '  =>  '6, 10, 1, 12',
		'small set  '  =>  '3',
		'medium set '  =>  '2, 7, 4',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 2, 7, 4, 11',
		'For reference' =>  '3, 2, 7, 4, 11',
		'Place' =>  '3',
		'Qin' =>  '2, 7, 4',
		'Tce' =>  '3, 14, 9, 2, 5, 13',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[7, 6], [6], [7], [5, 6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7], [2, 8, 1, 5, 6], [1, 5, 2, 8, 7], [1, 5, 7, 2, 4], [1, 5, 2, 11, 7]] ,
		'All QPL values'    =>  '1, 2, 11, 8, 5, 7, 4, 6',
		'All Runners   '    =>  '1, 2, 11, 8, 5, 7, 4, 3, 6, 12, 10, 9',
		'favorite' =>  1 ,
		'all wins values'  =>  '5, 7, 6 //count wins: 3',
		'for reference  '  =>  '1, 2, 11, 8, 4 //count ref: 5',
		'weird values   '  =>  '3, 12, 10, 9',
		'small set  '  =>  '1, 2, 11, 8',
		'medium set '  =>  '4',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 2, 11, 8, 4',
		'For reference' =>  '1, 2, 11, 8, 4',
		'Tce' =>  '1, 2, 11, 8, 5, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[3], [2, 11], [3, 12, 2, 11], [7, 2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 11, 3], [7, 3, 12, 2, 11]] ,
		'All QPL values'    =>  '7, 2, 3, 5, 11, 12',
		'All Runners   '    =>  '7, 2, 3, 5, 11, 12, 10, 8, 1, 6, 4, 9',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 2, 3, 11, 12 //count wins: 5',
		'for reference  '  =>  '5 //count ref: 1',
		'weird values   '  =>  '10, 8, 1, 6, 4, 9',
		'small set  '  =>  '',
		'medium set '  =>  '5',
		'big set    '  =>  '',
		'Tce' =>  '7, 2, 3, 5, 11, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[2, 5], [5], [10]] ,
		'qpl/trio'       =>  [[8, 13, 2, 3, 5], [8, 13, 3, 1, 10], [8, 13, 4, 3, 1], [8, 13, 6, 3, 1]] ,
		'All QPL values'    =>  '8, 13, 3, 1, 10, 6, 4, 2, 5',
		'All Runners   '    =>  '8, 13, 3, 1, 6, 10, 4, 2, 5, 9, 11, 7, 12, 14',
		'favorite' =>  8 ,
		'all wins values'  =>  '10, 2, 5 //count wins: 3',
		'for reference  '  =>  '8, 13, 3, 1, 6, 4 //count ref: 6',
		'weird values   '  =>  '9, 11, 7, 12, 14',
		'small set  '  =>  '8, 13, 3, 1',
		'medium set '  =>  '4',
		'big set    '  =>  '',
		'Qqpl' =>  '8, 13, 3, 1, 6, 4',
		'For reference' =>  '8, 13, 3, 1, 6, 4',
		'Tce' =>  '8, 13, 3, 1, 10, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [5], [5, 14], [5, 9], [5, 14, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 6, 2, 9], [1, 6, 2, 5, 14], [1, 6, 8, 5, 9], [6, 2, 8, 1, 5], [6, 2, 4, 1, 5], [1, 5, 14, 6, 4], [1, 9, 6, 4, 5]] ,
		'All QPL values'    =>  '1, 6, 5, 2, 4, 9, 8, 14',
		'All Runners   '    =>  '1, 6, 5, 2, 4, 9, 8, 10, 14, 13, 11, 3, 12, 7',
		'favorite' =>  1 ,
		'all wins values'  =>  '6, 5, 9, 14 //count wins: 4',
		'for reference  '  =>  '1, 2, 4, 8 //count ref: 4',
		'weird values   '  =>  '10, 13, 11, 3, 12, 7',
		'small set  '  =>  '1',
		'medium set '  =>  '2, 4, 8',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 2, 4, 8',
		'For reference' =>  '1, 2, 4, 8',
		'Tce' =>  '1, 6, 5, 2, 4, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[4, 5], [9], [8, 9], [5], [8], [12]] ,
		'qpl/trio'       =>  [[10, 2, 9, 4, 5], [2, 10, 4, 12, 9], [2, 10, 5, 8, 9], [2, 10, 7, 8, 9], [2, 10, 8, 3, 9], [2, 10, 8, 3, 5], [2, 10, 8, 5, 12], [2, 10, 11, 5, 12], [2, 10, 11, 9, 5]] ,
		'All QPL values'    =>  '2, 9, 10, 5, 12, 8, 3, 4, 7, 11',
		'All Runners   '    =>  '2, 9, 10, 5, 8, 12, 3, 1, 6, 4, 7, 11',
		'favorite' =>  2 ,
		'all wins values'  =>  '9, 5, 8, 12, 4 //count wins: 5',
		'for reference  '  =>  '2, 10, 3, 7, 11 //count ref: 5',
		'weird values   '  =>  '1, 6',
		'small set  '  =>  '2',
		'medium set '  =>  '10, 3',
		'big set    '  =>  '7, 11',
		'Qqpl' =>  '2, 10, 3, 7, 11',
		'For reference' =>  '2, 10, 3, 7, 11',
		'Place' =>  '2',
		'Qin' =>  '10, 3, 7',
		'Tce' =>  '2, 9, 10, 5, 12, 8',
	],
];
