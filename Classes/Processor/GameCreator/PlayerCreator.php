<?php

namespace Ps\Ki\Processor\GameCreator;

use Ps\Ki\Domain\Model\Game;
use Ps\Ki\Domain\Model\GamePlayer;

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

class PlayerCreator extends AbstractCreator
{

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function create(Game $game, $options) {

		/** @var \Ps\Ki\Domain\Model\GamePlayer $gamePlayer */
		$gamePlayer = $this->objectManager->get(GamePlayer::class);
		$gamePlayer->setTitle('Player #' . time());

		$game->addPlayer($gamePlayer);
	}
}
