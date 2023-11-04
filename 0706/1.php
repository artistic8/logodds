<?php
/**
small values: 1, 3
medium values: 1, 2, 3, 4, 5, 6, 7, 8, 12
inter values: 1, 3, count(interValues) = 2
*/

return [
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[4], [7], [8], [7, 8]] ,
		'qpl/trio'       =>  [[3, 5, 2, 4, 8], [3, 7, 2, 4, 8], [3, 7, 4, 8, 11], [3, 5, 7, 4, 8], [3, 5, 7, 2, 4]] ,
		'All QPL values'    =>  '3, 7, 4, 2, 8, 5, 11',
		'All Runners   '    =>  '3, 7, 4, 2, 8, 5, 9, 11, 6, 1, 10',
		'WP'  =>  '3',
		'Place' =>  '3',
		'Tce' =>  '3, 7, 4, 2, 8, 5',
	],
];
