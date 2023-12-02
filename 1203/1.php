<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 1, 11, 13, 8, 10, 3, 14, 2, 7, 6, 12, 9, 5',
		'Pla Odds'  =>  '13, 4, 1, 11, 10, 7, 8, 14, 3, 6, 2, 12, 9, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '11',
		/** Black selection */
		'black win odds candidates' => '13, 11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '1',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 6, 7, 3, 1, 5, 10, 8, 2, 4, 12, 11',
		'Pla Odds'  =>  '6, 9, 3, 7, 10, 8, 5, 1, 2, 4, 12, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '1',
		/** Black selection */
		'black win odds candidates' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 7, 5, 2, 10, 14, 8, 6, 9, 3, 12, 4, 13, 11',
		'Pla Odds'  =>  '2, 5, 7, 14, 8, 1, 10, 9, 6, 13, 4, 3, 11, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 13)' => '7',
		'win odds candidate(k = 9)' => '14',
		/** Black selection */
		'black win odds candidates' => '2',
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 1, 12, 3, 10, 5, 4, 2, 8, 7, 11, 9',
		'Pla Odds'  =>  '3, 6, 12, 1, 10, 5, 4, 8, 9, 2, 7, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '1',
		'pla odds candidate(k = 8)' => '10',
		'black pla odds candidates' => '6, 10',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 2, 6, 7, 3, 8, 1, 12, 5, 10, 11, 9',
		'Pla Odds'  =>  '4, 2, 7, 6, 3, 8, 10, 1, 12, 5, 11, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '2',
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
		'Win Odds'  =>  '7, 4, 3, 5, 10, 1, 2, 6, 8, 9',
		'Pla Odds'  =>  '7, 3, 4, 8, 2, 5, 6, 1, 10, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
		'black pla odds candidates' => '4',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 5, 6, 1, 3, 11, 8, 7, 9, 10',
		'Pla Odds'  =>  '2, 4, 6, 5, 3, 1, 8, 7, 10, 11, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
		'black pla odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 8, 9, 1, 2, 11, 13, 3, 7, 4, 12, 6, 10',
		'Pla Odds'  =>  '5, 9, 2, 8, 13, 1, 11, 3, 4, 7, 6, 10, 12',
		'Total Runners '  =>  13,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
		/** Based on pla odds */
		//No pla candidates(Place bet: 5 <== focus on this one for now)
		'black pla odds candidates' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 10, 1, 5, 4, 9, 14, 3, 13, 8, 12, 7, 11',
		'Pla Odds'  =>  '2, 6, 1, 10, 5, 14, 4, 12, 3, 9, 8, 7, 11, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '10',
		/** Black selection */
		'black win odds candidates' => '2, 6, 10',
		'SURE PLACE' => '2, 6, 10',
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
		'black pla odds candidates' => '10',
		'SURE PLACE' => '10',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 8, 3, 12, 2, 14, 11, 13, 7, 10, 6, 1, 9',
		'Pla Odds'  =>  '4, 5, 8, 12, 7, 2, 14, 11, 3, 1, 13, 6, 10, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
		'black pla odds candidates' => '4, 8',
		'SURE PLACE' => '4, 8',
	],
];
