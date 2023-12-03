<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '11, 1, 4, 13, 3, 7, 8, 10, 2, 12, 6, 14, 9, 5',
		'Pla Odds'  =>  '11, 1, 4, 13, 7, 3, 8, 10, 2, 12, 6, 14, 9, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 11)
		/** Black selection */
		'black win odds candidates' => '11, 10',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		//No pla candidates(Place bet: 11 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 7, 5, 1, 8, 6, 3, 10, 12, 2, 4, 11',
		'Pla Odds'  =>  '9, 7, 5, 8, 1, 6, 3, 12, 10, 11, 2, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
		/** Based on pla odds */
		//No pla candidates(Place bet: 9 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '5, 10, 2, 1, 7, 14, 8, 12, 13, 6, 3, 4, 9, 11',
		'Pla Odds'  =>  '5, 2, 1, 10, 7, 14, 8, 12, 13, 6, 4, 3, 9, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		//No pla candidates(Place bet: 5 <== focus on this one for now)
		'black pla odds candidates' => '8, 10',
		'SURE PLACE' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 1, 12, 5, 10, 3, 7, 2, 4, 8, 11, 9',
		'Pla Odds'  =>  '6, 12, 1, 10, 5, 7, 8, 2, 3, 11, 4, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '1',
		'win odds candidate(k = 7)' => '3',
		/** Black selection */
		'black win odds candidates' => '4',
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
		'black pla odds candidates' => '6, 10, 2',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 6, 4, 7, 1, 12, 3, 8, 11, 10, 5, 9',
		'Pla Odds'  =>  '2, 4, 6, 7, 1, 3, 12, 8, 11, 10, 5, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '4',
		'win odds candidate(k = 8)' => '1',
		/** Black selection */
		'black win odds candidates' => '4, 6',
		'SURE PLACE' => '4, 6',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '6',
		'pla odds candidate(k = 8)' => '1',
		'black pla odds candidates' => '2, 4, 6',
		'SURE PLACE' => '2, 4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 5, 4, 3, 2, 8, 6, 1, 10, 9',
		'Pla Odds'  =>  '4, 7, 5, 3, 2, 10, 8, 6, 1, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
		'black pla odds candidates' => '4, 10',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 1, 6, 5, 3, 11, 7, 8, 10, 9',
		'Pla Odds'  =>  '2, 1, 4, 6, 5, 3, 11, 7, 8, 10, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		/** Black selection */
		'black win odds candidates' => '6, 2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '1',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 5, 11, 8, 1, 2, 4, 13, 6, 7, 3, 12, 10',
		'Pla Odds'  =>  '11, 1, 9, 4, 5, 13, 8, 2, 6, 3, 7, 12, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '5',
		/** Black selection */
		'black win odds candidates' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '1',
		'black pla odds candidates' => '2, 11',
		'SURE PLACE' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 3, 4, 13, 12, 9, 5, 8, 14, 7, 11',
		'Pla Odds'  =>  '2, 6, 10, 1, 3, 13, 12, 4, 8, 9, 14, 5, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
		'black pla odds candidates' => '10, 4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 8, 3, 11, 12, 6, 1, 2, 10, 13, 7, 9, 14',
		'Pla Odds'  =>  '4, 5, 12, 8, 11, 6, 3, 1, 2, 10, 13, 7, 9, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'WP' => '4',
		'win odds candidate(k = 14)' => '4',
		'win odds candidate(k = 10)' => '11',
		/** Black selection */
		'black win odds candidates' => '8, 4, 11',
		'SURE PLACE' => '8, 4',
		/** Based on pla odds */
		'WP' => '4',
		'pla odds candidate(k = 14)' => '4',
		'pla odds candidate(k = 10)' => '11',
		'black pla odds candidates' => '4, 8, 11',
		'SURE PLACE' => '4, 8',
	],
];
