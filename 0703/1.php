<?php
/**
small values: 2, 3, 4, 6, 11, 14
medium values: 1, 3, 6, 7, 9, 10, 13
inter values: 3, 6, count(interValues) = 2
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [3], [1, 3]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 11], [3, 7, 2, 4, 11], [3, 7, 4, 11, 13], [3, 5, 4, 11, 13], [1, 3, 4, 11, 13], [1, 7, 2, 4, 11], [3, 5, 2, 4, 11], [3, 14, 2, 4, 11]] ,
		'All QPL values'    =>  '11, 4, 14, 2, 3, 7, 1, 13, 5',
		'All Runners   '    =>  '11, 4, 14, 2, 3, 7, 1, 13, 5, 9, 6, 10, 8, 12',
		'favorite' =>  11 ,
		'all wins values'  =>  '3, 1, 5 //count wins: 3',
		'for reference  '  =>  '11, 4, 14, 2, 7, 13 //count ref: 6',
		'weird values   '  =>  '9, 6, 10, 8, 12',
		'small set  '  =>  '11, 4, 14, 2',
		'medium set '  =>  '7, 13',
		'big set    '  =>  '',
		'Qqpl' =>  '11, 4, 14, 2, 7, 13',
		'For reference' =>  '11, 4, 14, 2, 7, 13',
		'Tce' =>  '11, 4, 14, 2, 3, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2], [2, 4]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 6], [1, 9, 2, 4, 6]] ,
		'All QPL values'    =>  '2, 1, 4, 6, 9, 3',
		'All Runners   '    =>  '2, 1, 4, 6, 9, 3, 10, 5, 11, 12, 7, 8',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 4 //count wins: 2',
		'for reference  '  =>  '1, 6, 9, 3 //count ref: 4',
		'weird values   '  =>  '10, 5, 11, 12, 7, 8',
		'small set  '  =>  '',
		'medium set '  =>  '1',
		'big set    '  =>  '6, 9, 3',
		'Qqpl' =>  '1, 6, 9, 3',
		'For reference' =>  '1, 6, 9, 3',
		'Tce' =>  '2, 1, 4, 6, 9, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[3], [1], [6, 7], [6]] ,
		'qpl/trio'       =>  [[3, 7, 2, 4, 11], [1, 7, 2, 4, 11], [1, 7, 2, 4, 10], [1, 7, 2, 4, 6], [1, 7, 9, 2, 4], [3, 7, 4, 6, 10]] ,
		'All QPL values'    =>  '4, 7, 3, 1, 9, 10, 6, 2, 11',
		'All Runners   '    =>  '4, 7, 3, 1, 9, 10, 6, 2, 11, 8, 5, 12',
		'favorite' =>  4 ,
		'all wins values'  =>  '7, 3, 1, 6 //count wins: 4',
		'for reference  '  =>  '4, 9, 10, 2, 11 //count ref: 5',
		'weird values   '  =>  '8, 5, 12',
		'small set  '  =>  '4',
		'medium set '  =>  '9, 10',
		'big set    '  =>  '2, 11',
		'Qqpl' =>  '4, 9, 10, 2, 11',
		'For reference' =>  '4, 9, 10, 2, 11',
		'Place' =>  '4',
		'Qin' =>  '9, 10, 2',
		'Tce' =>  '4, 7, 3, 1, 9, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [5], [2, 4, 5], [2, 11], [2, 9, 11], [2, 9], [2]] ,
		'qpl/trio'       =>  [[1, 9, 2, 4, 6], [1, 5, 2, 6, 11], [1, 5, 2, 4, 6], [1, 3, 2, 6, 11], [1, 9, 2, 6, 11], [1, 3, 9, 2, 6]] ,
		'All QPL values'    =>  '2, 1, 6, 3, 9, 11, 4, 5',
		'All Runners   '    =>  '2, 1, 6, 3, 9, 11, 8, 12, 4, 5, 7, 10',
		'favorite' =>  2 ,
		'Set 1'  =>  '4, 5',
		'Set 2'  =>  '8, 12',
		'all wins values'  =>  '2, 9, 11, 4, 5 //count wins: 5',
		'for reference  '  =>  '1, 6, 3 //count ref: 3',
		'weird values   '  =>  '8, 12, 7, 10',
		'small set  '  =>  '',
		'medium set '  =>  '1, 6, 3',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 6, 3',
		'Tce' =>  '2, 1, 6, 3, 9, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 6], [4, 11], [4]] ,
		'qpl/trio'       =>  [[3, 12, 4, 6, 11], [1, 3, 12, 4, 6]] ,
		'All QPL values'    =>  '3, 6, 4, 1, 11, 12',
		'All Runners   '    =>  '3, 6, 4, 1, 11, 12, 9, 2, 7, 13, 10, 5, 8',
		'favorite' =>  3 ,
		'all wins values'  =>  '6, 4, 11 //count wins: 3',
		'for reference  '  =>  '3, 1, 12 //count ref: 3',
		'weird values   '  =>  '9, 2, 7, 13, 10, 5, 8',
		'small set  '  =>  '3',
		'medium set '  =>  '1',
		'big set    '  =>  '12',
		'Qqpl' =>  '3, 1, 12',
		'Tce' =>  '3, 6, 4, 1, 11, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5], [4, 5, 6], [5, 6], [4, 5, 11], [5]] ,
		'qpl/trio'       =>  [[3, 5, 7, 4, 11], [3, 5, 4, 6, 11], [5, 7, 4, 6, 11], [1, 5, 4, 6, 11], [1, 3, 5, 4, 6], [3, 5, 12, 4, 6]] ,
		'All QPL values'    =>  '4, 5, 3, 11, 6, 12, 1, 7',
		'All Runners   '    =>  '4, 5, 3, 11, 6, 12, 1, 8, 7, 2, 9, 10',
		'favorite' =>  4 ,
		'Set 1'  =>  '7',
		'Set 2'  =>  '8',
		'all wins values'  =>  '4, 5, 11, 6 //count wins: 4',
		'for reference  '  =>  '3, 12, 1, 7 //count ref: 4',
		'weird values   '  =>  '8, 2, 9, 10',
		'small set  '  =>  '',
		'medium set '  =>  '3',
		'big set    '  =>  '1, 7',
		'Qqpl' =>  '3, 12, 1, 7',
		'For reference' =>  '3, 12, 1, 7',
		'Tce' =>  '4, 5, 3, 11, 6, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2, 10], [10], [3], [5], [2, 3, 10]] ,
		'qpl/trio'       =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10], [3, 5, 2, 4, 10], [1, 3, 5, 4, 10]] ,
		'All QPL values'    =>  '3, 5, 2, 10, 7, 1, 4',
		'All Runners   '    =>  '3, 5, 2, 10, 7, 1, 11, 4, 6, 13, 14, 8, 9, 12',
		'favorite' =>  3 ,
		'Set 1'  =>  '1, 4',
		'Set 2'  =>  '11',
		'all wins values'  =>  '3, 5, 2, 10 //count wins: 4',
		'for reference  '  =>  '7, 1, 4 //count ref: 3',
		'weird values   '  =>  '11, 6, 13, 14, 8, 9, 12',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '7, 1, 4',
		'Qqpl' =>  '7, 1, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [11]] ,
		'qpl/trio'       =>  [[5, 7, 6, 11, 13], [3, 7, 6, 11, 13], [3, 5, 7, 6, 13], [5, 7, 4, 11, 13], [5, 7, 4, 6, 13], [5, 7, 4, 6, 11], [1, 5, 7, 6, 11], [3, 5, 7, 6, 11]] ,
		'All QPL values'    =>  '6, 5, 11, 4, 13, 7, 3, 1',
		'All Runners   '    =>  '6, 5, 11, 4, 13, 7, 1, 3, 12, 9, 8, 10, 2, 14',
		'favorite' =>  6 ,
		'all wins values'  =>  '5, 11 //count wins: 2',
		'for reference  '  =>  '6, 4, 13, 7, 3, 1 //count ref: 6',
		'weird values   '  =>  '12, 9, 8, 10, 2, 14',
		'small set  '  =>  '6',
		'medium set '  =>  '',
		'big set    '  =>  '4, 13, 7, 3, 1',
		'Qqpl' =>  '6, 4, 13, 7, 3, 1',
		'For reference' =>  '6, 4, 13, 7, 3, 1',
		'Place' =>  '6',
		'Qin' =>  '4, 13, 7',
	],
];
