<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '9, 7, 2, 5, 1, 3, 10, 11, 4, 12, 8, 6',
		'Pla Odds'  =>  '7, 9, 5, 2, 3, 1, 11, 10, 4, 12, 8, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '2, 3, 6, 11, 1, 8, 10, 12, 4, 7, 9, 5',
		'Pla Odds'  =>  '2, 3, 6, 1, 11, 8, 10, 12, 4, 7, 9, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '5, 11, 4, 10, 9, 12, 3, 7, 1, 6, 8, 2',
		'Pla Odds'  =>  '5, 11, 9, 4, 10, 12, 3, 1, 7, 6, 8, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
		/** Based on pla odds */
		//No pla candidates(Place bet: 5 <== focus on this one for now)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '1, 5, 10, 11, 8, 9, 3, 2, 6, 12, 4, 7',
		'Pla Odds'  =>  '1, 11, 5, 9, 10, 8, 2, 3, 12, 6, 4, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
		/** Based on pla odds */
		//No pla candidates(Place bet: 1 <== focus on this one for now)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 6, 8, 2, 7, 3, 12, 5, 4, 11, 10, 9',
		'Pla Odds'  =>  '6, 1, 8, 12, 7, 3, 2, 5, 4, 11, 10, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '1, 7, 12, 3, 9, 11, 4, 2, 5, 6, 10, 8',
		'Pla Odds'  =>  '7, 12, 3, 11, 9, 1, 4, 2, 5, 6, 10, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '2, 6, 4, 5, 3, 8, 10, 11, 1, 7, 9, 12',
		'Pla Odds'  =>  '6, 4, 3, 2, 5, 8, 10, 1, 11, 9, 7, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '2',
		'win odds candidate(k = 12)' => '2',
		/** Black selection */
		'history w' => '2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'WP' => '6',
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6',
		'SURE PLACE' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '4, 7, 6, 8, 1, 2, 9, 5, 3, 11, 10',
		'Pla Odds'  =>  '7, 1, 8, 5, 11, 4, 9, 2, 6, 3, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '10, 1, 5, 11, 8, 4, 3, 7, 6, 2, 9, 12',
		'Pla Odds'  =>  '1, 8, 11, 10, 4, 5, 7, 6, 2, 9, 3, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '10',
		'win odds candidate(k = 12)' => '10',
		/** Black selection */
		'history w' => '10',
		'SURE PLACE' => '10',
		/** Based on pla odds */
		'WP' => '1',
		'pla odds candidate(k = 12)' => '1',
		'pla odds candidate(k = 7)' => '5',
	],
];
