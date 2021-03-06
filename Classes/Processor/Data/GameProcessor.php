<?php

namespace Ps\Ki\Processor\Data;

use Ps\Ki\Domain\Model\Game;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "Ki" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020
 *
 ***/

class GameProcessor extends AbstractProcessor {

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $data
	 * @param array $options
	 * @return array
	 */
	public function provide(Game $game, $data, $options = []) {
		$data['game'] = $game;

		return $data;
	}
}