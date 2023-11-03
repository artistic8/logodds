<?php
/**
small values: 1, 2, 3, 4, 5, 6, 11, 12, 13
medium values: 1, 2, 3, 6, 9, 10, 11, 12, 14
inter values: 1, 2, 3, 6, 11, 12, count(interValues) = 6
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[7, 5, 3, 11, 2], [7, 3, 5, 11, 4], [4, 11, 8, 5, 3]] ,
		'All QPL values'    =>  '3, 5, 4, 11, 7, 8, 2',
		'All Runners   '    =>  '3, 5, 4, 11, 7, 8, 9, 14, 2, 13, 1, 6, 10, 12',
		'favorite' =>  3 ,
		'Set 1'  =>  '2',
		'WP'  =>  '3',
		'Set 2'  =>  '9, 14',
		'all wins values'  =>  '7 //count wins: 1',
		'for reference  '  =>  '3, 5, 4, 11, 8, 2 //count ref: 6',
		'weird values   '  =>  '9, 14, 13, 1, 6, 10, 12',
		'small set  '  =>  '3, 5, 4, 11',
		'medium set '  =>  '',
		'big set    '  =>  '2',
		'Qqpl' =>  '3, 5, 4, 11, 8, 2',
		'For reference' =>  '3, 5, 4, 11, 8, 2',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[8], [9], [5], [7]] ,
		'qpl/trio'       =>  [[5, 7, 1, 4, 8], [5, 7, 1, 4, 2], [5, 7, 4, 2, 9], [1, 7, 2, 6, 5], [5, 1, 8, 2, 7]] ,
		'All QPL values'    =>  '5, 8, 2, 7, 1, 6, 9, 4',
		'All Runners   '    =>  '5, 8, 2, 7, 1, 6, 14, 9, 4, 12, 3, 11, 13, 10',
		'favorite' =>  5 ,
		'Set 1'  =>  '9, 4',
		'Set 2'  =>  '14',
		'all wins values'  =>  '5, 8, 7, 9 //count wins: 4',
		'for reference  '  =>  '2, 1, 6, 4 //count ref: 4',
		'weird values   '  =>  '14, 12, 3, 11, 13, 10',
		'small set  '  =>  '',
		'medium set '  =>  '2, 1, 6',
		'big set    '  =>  '4',
		'Qqpl' =>  '2, 1, 6, 4',
		'For reference' =>  '2, 1, 6, 4',
		'Tce' =>  '5, 8, 2, 7, 1, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 4, 6], [5, 1, 4, 13, 9], [5, 1, 4, 2, 9], [5, 1, 3, 4, 2], [1, 4, 6, 9, 5]] ,
		'All QPL values'    =>  '1, 9, 5, 4, 6, 3, 13, 2',
		'All Runners   '    =>  '1, 9, 5, 4, 6, 3, 13, 2, 14, 10, 8, 11, 7, 12',
		'favorite' =>  1 ,
		'all wins values'  =>  '9, 5 //count wins: 2',
		'for reference  '  =>  '1, 4, 6, 3, 13, 2 //count ref: 6',
		'weird values   '  =>  '14, 10, 8, 11, 7, 12',
		'small set  '  =>  '1',
		'medium set '  =>  '',
		'big set    '  =>  '4, 6, 3, 13, 2',
		'Qqpl' =>  '1, 4, 6, 3, 13, 2',
		'For reference' =>  '1, 4, 6, 3, 13, 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[8, 9], [9, 1], [8, 9, 1], [9]] ,
		'qpl/trio'       =>  [[13, 2, 3, 8, 9], [13, 11, 3, 8, 9], [13, 8, 2, 9, 1], [13, 11, 8, 9, 1]] ,
		'All QPL values'    =>  '13, 9, 8, 11, 2, 3, 1',
		'All Runners   '    =>  '13, 9, 8, 11, 2, 10, 6, 3, 1, 5, 7, 14, 12',
		'favorite' =>  13 ,
		'Set 1'  =>  '3, 1',
		'WP'  =>  '13',
		'Set 2'  =>  '10, 6, 5',
		'all wins values'  =>  '9, 8, 1 //count wins: 3',
		'for reference  '  =>  '13, 11, 2, 3 //count ref: 4',
		'weird values   '  =>  '10, 6, 5, 7, 14, 12',
		'small set  '  =>  '13',
		'medium set '  =>  '11, 2, 3',
		'big set    '  =>  '',
		'Qqpl' =>  '13, 11, 2, 3',
		'For reference' =>  '13, 11, 2, 3',
		'Place' =>  '13',
		'Qin' =>  '11, 2, 3',
		'Tce' =>  '13, 9, 8, 11, 2, 3',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[11, 2], [2], [11, 2, 1], [1], [9], [7]] ,
		'qpl/trio'       =>  [[6, 12, 3, 11, 2], [12, 3, 1, 6, 2], [6, 12, 1, 11, 2], [6, 11, 2, 12, 9], [12, 1, 6, 11, 7]] ,
		'All QPL values'    =>  '12, 6, 11, 1, 7, 9, 2, 3',
		'All Runners   '    =>  '12, 6, 1, 11, 7, 9, 2, 4, 3, 10, 5, 14, 8, 13',
		'favorite' =>  12 ,
		'Set 1'  =>  '3',
		'WP'  =>  '12',
		'Set 2'  =>  '4, 10',
		'all wins values'  =>  '11, 1, 7, 9, 2 //count wins: 5',
		'for reference  '  =>  '12, 6, 3 //count ref: 3',
		'weird values   '  =>  '4, 10, 5, 14, 8, 13',
		'small set  '  =>  '12, 6',
		'medium set '  =>  '',
		'big set    '  =>  '3',
		'Qqpl' =>  '12, 6, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 9], [8, 7, 9], [8, 9], [9]] ,
		'qpl/trio'       =>  [[2, 11, 10, 7, 9], [2, 11, 13, 7, 9], [2, 11, 8, 7, 9], [2, 13, 7, 8, 9], [2, 13, 1, 8, 9], [2, 10, 8, 14, 9]] ,
		'All QPL values'    =>  '2, 9, 14, 10, 8, 7, 1, 13, 11',
		'All Runners   '    =>  '2, 9, 14, 10, 8, 1, 7, 13, 6, 12, 11, 5, 4, 3',
		'favorite' =>  2 ,
		'Set 1'  =>  '11',
		'WP'  =>  '2',
		'Set 2'  =>  '6, 12',
		'all wins values'  =>  '9, 8, 7 //count wins: 3',
		'for reference  '  =>  '2, 14, 10, 1, 13, 11 //count ref: 6',
		'weird values   '  =>  '6, 12, 5, 4, 3',
		'small set  '  =>  '2',
		'medium set '  =>  '14, 10',
		'big set    '  =>  '13, 11',
		'Qqpl' =>  '2, 14, 10, 1, 13, 11',
		'For reference' =>  '2, 14, 10, 1, 13, 11',
		'Place' =>  '2',
		'Qin' =>  '14, 10, 1',
		'Tce' =>  '2, 9, 14, 10, 8, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2, 11]] ,
		'qpl/trio'       =>  [[6, 1, 3, 2, 11], [6, 1, 12, 2, 11], [6, 12, 3, 2, 11]] ,
		'All QPL values'    =>  '6, 2, 3, 11, 12, 1',
		'All Runners   '    =>  '6, 2, 3, 11, 12, 4, 8, 1, 13, 7, 5, 14, 10, 9',
		'favorite' =>  6 ,
		'Set 1'  =>  '1',
		'WP'  =>  '6',
		'Set 2'  =>  '4, 8',
		'all wins values'  =>  '2, 11 //count wins: 2',
		'for reference  '  =>  '6, 3, 12, 1 //count ref: 4',
		'weird values   '  =>  '4, 8, 13, 7, 5, 14, 10, 9',
		'small set  '  =>  '6',
		'medium set '  =>  '3',
		'big set    '  =>  '1',
		'Qqpl' =>  '6, 3, 12, 1',
		'For reference' =>  '6, 3, 12, 1',
		'Place' =>  '6',
		'Qin' =>  '3, 12, 1',
		'Tce' =>  '6, 2, 3, 11, 12, 1',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2, 10], [2], [8, 2]] ,
		'qpl/trio'       =>  [[3, 1, 9, 2, 10], [3, 12, 1, 2, 10], [3, 12, 1, 8, 2]] ,
		'All QPL values'    =>  '3, 2, 8, 12, 1, 9, 10',
		'All Runners   '    =>  '3, 2, 8, 4, 12, 1, 9, 6, 10, 14, 5, 7, 11, 13',
		'favorite' =>  3 ,
		'Set 1'  =>  '12, 1, 9, 10',
		'WP'  =>  '3',
		'Set 2'  =>  '4, 6',
		'all wins values'  =>  '2, 8, 10 //count wins: 3',
		'for reference  '  =>  '3, 12, 1, 9 //count ref: 4',
		'weird values   '  =>  '4, 6, 14, 5, 7, 11, 13',
		'small set  '  =>  '3',
		'medium set '  =>  '12, 1, 9',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 12, 1, 9',
		'For reference' =>  '3, 12, 1, 9',
		'Place' =>  '3',
		'Qin' =>  '12, 1, 9',
		'Tce' =>  '3, 2, 8, 12, 1, 9',
	],
];
