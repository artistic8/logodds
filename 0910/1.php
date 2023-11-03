<?php
/**
small values: 8
medium values: 3, 5
inter values: , count(interValues) = 0
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[10, 2], [10, 2, 1], [10, 11]] ,
		'qpl/trio'       =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11], [8, 2, 11, 3, 5]] ,
		'All QPL values'    =>  '8, 2, 11, 10, 3, 5, 1',
		'All Runners   '    =>  '8, 2, 11, 10, 3, 5, 1, 7, 6, 4, 9',
		'favorite' =>  8 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '2, 11, 10, 1 //count wins: 4',
		'for reference  '  =>  '8, 3, 5 //count ref: 3',
		'weird values   '  =>  '7, 6, 4, 9',
		'small set  '  =>  '8',
		'medium set '  =>  '3, 5',
		'big set    '  =>  '',
		'Qqpl' =>  '8, 3, 5',
		'Tce' =>  '8, 2, 11, 10, 3, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[14], [7], [7, 6], [11], [14, 6], [7, 11]] ,
		'qpl/trio'       =>  [[7, 3, 4, 11, 14], [3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6]] ,
		'All QPL values'    =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'All Runners   '    =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4, 13, 8, 9, 2',
		'favorite' =>  7 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '7, 11, 6, 14 //count wins: 4',
		'for reference  '  =>  '5, 3, 12, 1, 10, 4 //count ref: 6',
		'weird values   '  =>  '13, 8, 9, 2',
		'small set  '  =>  '',
		'medium set '  =>  '5',
		'big set    '  =>  '12, 1, 10, 4',
		'Qqpl' =>  '5, 3, 12, 1, 10, 4',
		'For reference' =>  '5, 3, 12, 1, 10, 4',
		'Tce' =>  '7, 11, 5, 6, 3, 14',
	],
];
