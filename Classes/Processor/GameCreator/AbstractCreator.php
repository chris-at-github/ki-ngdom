<?php

namespace Ps\Ai\Processor\GameCreator;

use Ps\Ai\Domain\Model\Game;

/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020 
 *
 ***/

abstract class AbstractCreator {

	/**
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	abstract public function create(Game $game, $options);
}