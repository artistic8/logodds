<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '7, 2, 6, 1, 8, 5, 4, 9, 10, 3',
		'Total Runners '  =>  10,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 6, 4, 8, 2, 10, 1, 7, 13, 11, 14, 9, 12, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '5, 1, 7, 2, 9, 3, 8, 6, 4, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '5',
		'win odds candidate(k = 10)' => '5',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '7, 4, 1, 12, 5, 2, 11, 3, 9, 10, 6, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '1',
		'win odds candidate(k = 9)' => '12',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '8, 1, 9, 6, 3, 10, 2, 7, 4, 5',
		'Total Runners '  =>  10,
		/** Based on win odds */
		//No win candidates(Place bet: 8)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '9, 2, 5, 14, 4, 13, 1, 10, 12, 3, 6, 8, 11, 7',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 8, 7, 2, 5, 6, 3, 4, 9, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '1',
		'win odds candidate(k = 10)' => '1',
		'win odds candidate(k = 9)' => '8',
		'win odds candidate(k = 6)' => '5',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 1, 4, 6, 3, 7, 5',
		'Total Runners '  =>  7,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 9, 5, 6, 3, 2, 8, 12, 4, 7, 14, 10, 11, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '8, 4, 2, 1, 6, 12, 7, 5, 3, 11, 9, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '12',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
];
