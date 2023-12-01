<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '3, 1, 11, 7, 2, 9, 8, 6, 5, 4, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '3, 1, 11, 7, 2, 9, 8, 6, 5, 4, 10',
		//No win candidates(Place bet: 3)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 8, 10, 5, 2, 7, 9, 6, 11, 1, 4, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '3, 8, 10',
		'WP' => '3',
		'win odds candidate(k = 12)' => '3',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '6, 1, 2, 3, 4, 7, 9, 8, 5',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win bet' => '6, 1, 2, 3, 4',
		'win odds candidate(k = 8)' => '1',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '2, 3, 6, 8, 5, 7, 11, 9, 1, 4, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '2, 3, 6, 8, 5, 7, 11',
		//No win candidates(Place bet: 2)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '8, 3, 4, 6, 1, 5, 9, 7',
		'Total Runners '  =>  8,
		/** Based on win odds */
		'win bet' => '8, 3, 4, 6, 1, 5, 9, 7',
		//No win candidates(Place bet: 8)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '1, 5, 7, 10, 3, 12, 8, 4, 2, 9, 11, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '1, 5, 7, 10, 3, 12, 8, 4, 2',
		'win odds candidate(k = 11)' => '5',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 4, 11, 3, 2, 7, 10, 5, 9, 12, 6, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '1, 4, 11, 3, 2',
		'win odds candidate(k = 9)' => '3',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '12, 5, 4, 1, 7, 8, 6, 2, 10, 3, 11',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '12, 5, 4',
		'WP' => '12',
		'win odds candidate(k = 11)' => '12',
	],
];
