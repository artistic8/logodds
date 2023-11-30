<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '1, 5, 6, 7, 2, 3, 4',
		'Total Runners '  =>  7,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '1, 7, 4, 8, 2, 5, 6, 3',
		'Total Runners '  =>  8,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '3, 7, 4, 6, 8, 2, 5',
		'Total Runners '  =>  7,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '5, 4, 7, 1, 2, 8, 6, 3',
		'Total Runners '  =>  8,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '8, 3, 2, 11, 4, 5, 1, 7, 9, 6, 10, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '8',
		'win odds candidate(k = 12)' => '8',
		'win odds candidate(k = 9)' => '11',
		/** Black selection */
		'black win odds candidates' => '8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '3, 6, 10, 7, 1, 4, 8, 9, 2, 5, 12, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 8, 3, 10, 7, 9, 2, 11, 6, 12, 4',
		'Total Runners '  =>  11,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 4, 6, 10, 1, 2, 3, 9, 7, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '10, 1, 7, 2, 3, 9, 4, 5, 6, 8, 11',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'WP' => '10',
		'win odds candidate(k = 11)' => '10',
		/** Black selection */
		'black win odds candidates' => '10',
	],
];
