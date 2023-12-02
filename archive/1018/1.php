<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '3, 5, 4, 9, 11, 10, 6, 8, 1, 2, 7, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '3',
		'win odds candidate(k = 12)' => '3',
		'win odds candidate(k = 8)' => '11',
		/** Black selection */
		'black win odds candidates' => '11',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 4, 12, 5, 2, 1, 10, 9, 7, 11, 6, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 8, 4, 2, 5, 9, 6, 3, 11, 10, 7, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '1',
		'win odds candidate(k = 12)' => '1',
		'win odds candidate(k = 10)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		'SURE PLACE' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '2, 6, 3, 7, 11, 9, 4, 1, 5, 10, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '2',
		'win odds candidate(k = 12)' => '2',
		'win odds candidate(k = 10)' => '3',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '8, 4, 1, 11, 9, 2, 3, 5, 6, 12, 7',
		'Total Runners '  =>  11,
		/** Based on win odds */
		//No win candidates(Place bet: 8)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '6, 3, 11, 2, 5, 9, 8, 1, 10, 12, 4, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '2, 4, 3, 12, 5, 7, 10, 11, 9, 1, 6, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '12',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '3, 6, 1, 7, 11, 4, 10, 2, 12, 8, 9, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 10, 5, 8, 6, 9, 2, 3, 12, 7, 11, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '10',
		/** Black selection */
		'black win odds candidates' => '10',
		'SURE PLACE' => '10',
	],
];
