<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '1, 2, 3, 5, 7, 6, 4',
		'Total Runners '  =>  7,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 1, 9, 5, 11, 7, 8, 12, 6, 2, 10, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '12, 9, 5, 3, 1, 2, 8, 10, 4, 7, 11, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '9',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '9, 1, 10, 6, 12, 8, 4, 7, 3, 2, 11, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '1',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 5, 3, 10, 11, 6, 7, 2, 9, 8, 12, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '10',
		'win odds candidate(k = 7)' => '6',
		/** Black selection */
		'black win odds candidates' => '10, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '6, 7, 8, 12, 4, 3, 2, 9, 11, 10, 1, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 5, 11, 4, 2, 7, 6, 10, 8, 12, 9, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '4, 6, 5, 9, 7, 8, 1, 3, 12, 2, 11, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
		'SURE PLACE' => '6',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '2, 6, 1, 3, 9, 11, 12, 5, 10, 7, 8, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
	],
];
