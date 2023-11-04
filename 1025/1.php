<?php
/**
small values: 3, 5, 8, 11, 12, 14
medium values: 1, 2, 4, 5, 6, 11
inter values: 5, 11, count(interValues) = 2
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[5, 3, 7, 11, 6], [5, 3, 7, 2, 6]] ,
		'All QPL values'    =>  '5, 6, 2, 11, 7, 3',
		'All Runners   '    =>  '5, 6, 2, 11, 7, 3, 12, 9, 8, 10, 4, 1',
		'WP'  =>  '5',
		'Place' =>  '5',
		'Tce' =>  '5, 6, 2, 11, 7, 3',
	],
];
