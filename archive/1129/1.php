<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '9, 3, 8, 7, 2, 6, 1, 5, 4',
		'Pla Odds'  =>  '9, 8, 3, 2, 7, 6, 5, 1, 4',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '7',
		/** Based on pla odds */
		'pla odds candidate(k = 6)' => '2',
		'black pla odds candidates' => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '4, 5, 3, 2, 1, 6, 8, 7',
		'Pla Odds'  =>  '4, 5, 3, 2, 1, 6, 8, 7',
		'Total Runners '  =>  8,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '3',
		/** Based on pla odds */
		'pla odds candidate(k = 6)' => '3',
		'black pla odds candidates' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 11, 1, 4, 5, 6, 3, 8, 9, 10, 2',
		'Pla Odds'  =>  '7, 4, 11, 1, 5, 3, 6, 8, 9, 10, 2',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '11',
		'win odds candidate(k = 9)' => '1',
		'win odds candidate(k = 8)' => '4',
		'win odds candidate(k = 6)' => '6',
		/** Black selection */
		'black win odds candidates' => '11, 4, 6',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'pla odds candidate(k = 9)' => '11',
		'pla odds candidate(k = 8)' => '1',
		'black pla odds candidates' => '4, 11',
		'SURE PLACE' => '11',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '7, 5, 2, 10, 6, 1, 8, 12, 4, 11, 3, 9',
		'Pla Odds'  =>  '7, 5, 2, 10, 6, 1, 8, 12, 11, 4, 3, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
		'black pla odds candidates' => '4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '5, 1, 3, 11, 2, 10, 7, 9, 8, 4, 6, 12',
		'Pla Odds'  =>  '5, 1, 3, 11, 2, 10, 7, 9, 8, 4, 12, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '5',
		'win odds candidate(k = 12)' => '5',
		'win odds candidate(k = 7)' => '10',
		/** Black selection */
		'black win odds candidates' => '10',
		/** Based on pla odds */
		'pla odds candidate(k = 7)' => '10',
		'black pla odds candidates' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '3, 11, 5, 2, 8, 1, 10, 12, 7, 9, 6, 4',
		'Pla Odds'  =>  '3, 5, 11, 2, 8, 1, 12, 9, 10, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
		/** Based on pla odds */
		//No pla candidates(Place bet: 3 <== focus on this one for now)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 10, 5, 7, 3, 4, 6, 8, 2, 9',
		'Pla Odds'  =>  '1, 10, 5, 7, 3, 4, 8, 2, 6, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Black selection */
		'black win odds candidates' => '10',
		'SURE PLACE' => '10',
		/** Based on pla odds */
		//No pla candidates(Place bet: 1 <== focus on this one for now)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 8, 5, 4, 6, 1, 11, 9, 7, 3, 12',
		'Pla Odds'  =>  '8, 5, 2, 4, 6, 9, 1, 11, 7, 3, 12',
		'Total Runners '  =>  11,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Based on pla odds */
		//No pla candidates(Place bet: 8 <== focus on this one for now)
	],
];
