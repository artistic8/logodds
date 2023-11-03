<?php
/**
small values: 1, 3
medium values: 1, 2, 3, 4, 5, 6, 7, 8, 12
inter values: 1, 3, count(interValues) = 2
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [9], [2, 9, 10], [1, 2, 10], [2, 10], [1, 9]] ,
		'qpl/trio'       =>  [[9, 12, 2, 6, 10], [1, 9, 2, 6, 10], [1, 9, 2, 8, 10]] ,
		'All QPL values'    =>  '10, 2, 8, 1, 9, 6, 12',
		'All Runners   '    =>  '10, 2, 8, 1, 9, 5, 6, 3, 4, 12, 7',
		'favorite' =>  10 ,
		'Set 1'  =>  '6, 12',
		'Set 2'  =>  '5, 3, 4',
		'all wins values'  =>  '10, 2, 1, 9 //count wins: 4',
		'for reference  '  =>  '8, 6, 12 //count ref: 3',
		'weird values   '  =>  '5, 3, 4, 7',
		'small set  '  =>  '',
		'medium set '  =>  '8',
		'big set    '  =>  '6, 12',
		'Qqpl' =>  '8, 6, 12',
		'Tce' =>  '10, 2, 8, 1, 9, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[5, 6], [6], [11], [5], [10]] ,
		'qpl/trio'       =>  [[1, 5, 12, 6, 8], [1, 12, 6, 8, 11], [1, 12, 6, 10, 11], [1, 12, 6, 8, 10], [1, 5, 6, 8, 10]] ,
		'All QPL values'    =>  '6, 12, 1, 10, 5, 8, 11',
		'All Runners   '    =>  '6, 12, 1, 10, 5, 9, 8, 11, 3, 4, 7, 2',
		'favorite' =>  6 ,
		'Set 1'  =>  '8, 11',
		'Set 2'  =>  '9',
		'all wins values'  =>  '6, 10, 5, 11 //count wins: 4',
		'for reference  '  =>  '12, 1, 8 //count ref: 3',
		'weird values   '  =>  '9, 3, 4, 7, 2',
		'small set  '  =>  '',
		'medium set '  =>  '12, 1, 8',
		'big set    '  =>  '',
		'Qqpl' =>  '12, 1, 8',
		'Tce' =>  '6, 12, 1, 10, 5, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[4], [7], [8], [7, 8]] ,
		'qpl/trio'       =>  [[3, 5, 2, 4, 8], [3, 7, 2, 4, 8], [3, 7, 4, 8, 11], [3, 5, 7, 4, 8], [3, 5, 7, 2, 4]] ,
		'All QPL values'    =>  '3, 7, 4, 2, 8, 5, 11',
		'All Runners   '    =>  '3, 7, 4, 2, 8, 5, 9, 11, 6, 1, 10',
		'favorite' =>  3 ,
		'Set 1'  =>  '11',
		'WP'  =>  '3',
		'Set 2'  =>  '9',
		'all wins values'  =>  '7, 4, 8 //count wins: 3',
		'for reference  '  =>  '3, 2, 5, 11 //count ref: 4',
		'weird values   '  =>  '9, 6, 1, 10',
		'small set  '  =>  '3',
		'medium set '  =>  '2',
		'big set    '  =>  '5, 11',
		'Qqpl' =>  '3, 2, 5, 11',
		'For reference' =>  '3, 2, 5, 11',
		'Place' =>  '3',
		'Qin' =>  '2, 5, 11',
		'Tce' =>  '3, 7, 4, 2, 8, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[7], [7, 8, 9], [7, 9], [9], [8, 9]] ,
		'qpl/trio'       =>  [[1, 7, 12, 6, 8], [7, 9, 12, 6, 8], [1, 7, 12, 4, 6], [7, 9, 12, 4, 6], [7, 9, 12, 4, 8], [7, 9, 12, 4, 11]] ,
		'All QPL values'    =>  '7, 4, 12, 9, 8, 11, 1, 6',
		'All Runners   '    =>  '7, 4, 12, 9, 8, 11, 1, 6, 10, 5, 2, 3',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 9, 8 //count wins: 3',
		'for reference  '  =>  '4, 12, 11, 1, 6 //count ref: 5',
		'weird values   '  =>  '10, 5, 2, 3',
		'small set  '  =>  '',
		'medium set '  =>  '4, 12',
		'big set    '  =>  '11, 1, 6',
		'Qqpl' =>  '4, 12, 11, 1, 6',
		'For reference' =>  '4, 12, 11, 1, 6',
		'Tce' =>  '7, 4, 12, 9, 8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9], [6, 9], [5], [1]] ,
		'qpl/trio'       =>  [[5, 9, 12, 2, 6], [1, 5, 9, 2, 6], [3, 5, 9, 2, 6], [5, 9, 2, 6, 10]] ,
		'All QPL values'    =>  '6, 9, 5, 1, 3, 10, 12, 2',
		'All Runners   '    =>  '6, 9, 5, 1, 3, 10, 12, 7, 2, 11, 8, 4',
		'favorite' =>  6 ,
		'Set 1'  =>  '2',
		'Set 2'  =>  '7',
		'all wins values'  =>  '6, 9, 5, 1 //count wins: 4',
		'for reference  '  =>  '3, 10, 12, 2 //count ref: 4',
		'weird values   '  =>  '7, 11, 8, 4',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '10, 12, 2',
		'Qqpl' =>  '3, 10, 12, 2',
		'For reference' =>  '3, 10, 12, 2',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9], [6, 8, 9], [6, 8], [5, 6], [5, 6, 8], [2, 5], [1, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 6, 8], [1, 9, 2, 6, 8], [1, 5, 2, 4, 6], [1, 5, 7, 2, 6], [1, 5, 2, 6, 10]] ,
		'All QPL values'    =>  '6, 1, 5, 2, 7, 9, 8, 10, 4',
		'All Runners   '    =>  '6, 1, 5, 2, 7, 9, 12, 8, 10, 3, 11, 4',
		'favorite' =>  6 ,
		'Set 1'  =>  '8, 10, 4',
		'Set 2'  =>  '12, 3, 11',
		'all wins values'  =>  '6, 1, 5, 2, 9, 8 //count wins: 6',
		'for reference  '  =>  '7, 10, 4 //count ref: 3',
		'weird values   '  =>  '12, 3, 11',
		'small set  '  =>  '',
		'medium set '  =>  '7',
		'big set    '  =>  '4',
		'Qqpl' =>  '7, 10, 4',
		'Tce' =>  '6, 1, 5, 2, 7, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 9], [5]] ,
		'qpl/trio'       =>  [[1, 5, 9, 4, 8], [1, 5, 9, 6, 8], [1, 5, 12, 6, 8], [1, 5, 12, 4, 6], [1, 5, 12, 4, 8], [1, 3, 5, 4, 8], [1, 3, 5, 4, 6], [1, 3, 5, 6, 8]] ,
		'All QPL values'    =>  '1, 5, 4, 8, 6, 3, 12, 9',
		'All Runners   '    =>  '1, 5, 4, 6, 8, 2, 11, 3, 12, 9, 7, 10',
		'favorite' =>  1 ,
		'Set 1'  =>  '3, 12, 9',
		'WP'  =>  '1',
		'Set 2'  =>  '2, 11',
		'all wins values'  =>  '5, 9 //count wins: 2',
		'for reference  '  =>  '1, 4, 8, 6, 3, 12 //count ref: 6',
		'weird values   '  =>  '2, 11, 7, 10',
		'small set  '  =>  '1',
		'medium set '  =>  '4, 8, 6, 3, 12',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 4, 8, 6, 3, 12',
		'For reference' =>  '1, 4, 8, 6, 3, 12',
		'Tce' =>  '1, 5, 4, 8, 6, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2, 4], [6]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 6], [1, 3, 2, 6, 8], [3, 5, 2, 6, 8], [1, 5, 2, 6, 8]] ,
		'All QPL values'    =>  '6, 2, 1, 8, 5, 3, 4',
		'All Runners   '    =>  '6, 2, 1, 5, 8, 3, 4, 7, 9, 10, 12, 11',
		'favorite' =>  6 ,
		'all wins values'  =>  '6, 2, 4 //count wins: 3',
		'for reference  '  =>  '1, 8, 5, 3 //count ref: 4',
		'weird values   '  =>  '7, 9, 10, 12, 11',
		'small set  '  =>  '',
		'medium set '  =>  '1, 8, 5, 3',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 8, 5, 3',
		'For reference' =>  '1, 8, 5, 3',
		'Tce' =>  '6, 2, 1, 8, 5, 3',
	],
];
