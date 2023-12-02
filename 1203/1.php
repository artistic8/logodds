<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 1, 11, 13, 8, 10, 7, 14, 2, 3, 6, 12, 9, 5',
		'Pla Odds'  =>  '13, 1, 4, 11, 8, 7, 10, 14, 12, 6, 3, 2, 5, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '11',
		/** Black selection */
		'black win odds candidates' => '13, 11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		//No pla candidates(Place bet: 13 <== focus on this one for now)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 7, 6, 1, 3, 5, 2, 10, 8, 4, 12, 11',
		'Pla Odds'  =>  '9, 6, 3, 7, 10, 1, 2, 8, 5, 4, 12, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '10',
		'black pla odds candidates' => '10',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 7, 5, 2, 10, 14, 8, 6, 9, 3, 13, 4, 12, 11',
		'Pla Odds'  =>  '5, 7, 8, 14, 2, 10, 1, 6, 9, 4, 13, 12, 3, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '14',
		/** Black selection */
		'black win odds candidates' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '8',
		'pla odds candidate(k = 9)' => '10',
		'black pla odds candidates' => '8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 12, 1, 3, 10, 5, 2, 4, 8, 7, 11, 9',
		'Pla Odds'  =>  '6, 12, 3, 1, 5, 10, 2, 4, 8, 11, 7, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '12',
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
		'black pla odds candidates' => '6, 10',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 4, 6, 7, 3, 8, 1, 12, 11, 10, 5, 9',
		'Pla Odds'  =>  '4, 2, 6, 7, 8, 3, 12, 10, 1, 5, 11, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '6',
		/** Black selection */
		'black win odds candidates' => '2, 6',
		'SURE PLACE' => '2, 6',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '2',
		'black pla odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 4, 3, 5, 1, 6, 10, 2, 8, 9',
		'Pla Odds'  =>  '7, 3, 4, 5, 10, 6, 8, 2, 1, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 6)' => '10',
		'black pla odds candidates' => '4, 10',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 5, 1, 6, 3, 11, 8, 7, 10, 9',
		'Pla Odds'  =>  '2, 4, 6, 5, 1, 3, 8, 7, 11, 10, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		'win odds candidate(k = 8)' => '1',
		/** Black selection */
		'black win odds candidates' => '6, 2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 8, 9, 2, 1, 11, 13, 4, 3, 7, 6, 12, 10',
		'Pla Odds'  =>  '5, 8, 9, 2, 13, 11, 1, 4, 3, 6, 7, 10, 12',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		//No pla candidates(Place bet: 5 <== focus on this one for now)
		'black pla odds candidates' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 5, 4, 3, 9, 14, 12, 13, 8, 7, 11',
		'Pla Odds'  =>  '6, 2, 1, 10, 3, 5, 12, 4, 14, 9, 8, 13, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 8, 3, 12, 11, 2, 14, 10, 13, 1, 7, 6, 9',
		'Pla Odds'  =>  '4, 5, 8, 12, 7, 11, 14, 2, 13, 1, 3, 10, 6, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
		'black pla odds candidates' => '4, 8',
		'SURE PLACE' => '4, 8',
	],
];
