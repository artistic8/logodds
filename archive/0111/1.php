<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '9, 3, 11, 8, 1, 12, 4, 6, 2, 7, 5, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '4, 6, 5, 2, 3, 10, 11, 8, 9, 1, 12, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '2',
		'win odds candidate(k = 8)' => '3',
		/** Black selection */
		'black win odds candidates' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '3, 9, 4, 2, 10, 11, 5, 7, 8, 6, 1, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '3',
		'win odds candidate(k = 12)' => '3',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '1, 8, 10, 7, 5, 4, 6, 2, 9, 3',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '5, 10, 4, 8, 6, 1, 7, 2, 9, 12, 3, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '8',
		'win odds candidate(k = 7)' => '1',
		/** Black selection */
		'black win odds candidates' => '8',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '10, 3, 6, 5, 7, 2, 11, 9, 8, 1, 12, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 10)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '7, 2, 3, 5, 9, 8, 11, 6, 10, 1, 4, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '7',
		'win odds candidate(k = 12)' => '7',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '6, 7, 5, 8, 3, 4, 10, 1, 12, 2, 11, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '7',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '10, 5, 9, 11, 4, 3, 7, 2, 12, 1, 6, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '3',
	],
];
