<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 5, 6, 3, 1, 2, 7, 8, 9, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '4',
		'win odds candidate(k = 10)' => '4',
		'win odds candidate(k = 9)' => '5',
		'win odds candidate(k = 8)' => '6',
		'win odds candidate(k = 7)' => '3',
		/** Black selection */
		'black win odds candidates' => '4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 6, 11, 7, 5, 2, 10, 12, 4, 1, 9, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '4, 9, 1, 5, 8, 7, 2, 6, 3, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '4',
		'win odds candidate(k = 10)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '5, 6, 2, 11, 4, 9, 12, 7, 1, 10, 8, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '6, 11, 8, 4, 7, 5, 2, 10, 1, 12, 3, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 11, 3, 6, 7, 1, 9, 2, 10, 5, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '4',
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 2, 10, 7, 12, 3, 9, 6, 8, 4, 11, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '7, 3, 10, 5, 8, 4, 2, 12, 6, 1, 11, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '3',
	],
];
