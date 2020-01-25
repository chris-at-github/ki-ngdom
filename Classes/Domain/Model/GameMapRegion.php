<?php

namespace Ps\Ai\Domain\Model;

/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * GameMapRegion
 */
class GameMapRegion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * origin
	 *
	 * @var \Ps\Ai\Domain\Model\MapRegion
	 */
	protected $origin = null;

	/**
	 * game
	 *
	 * @var \Ps\Ai\Domain\Model\Game
	 */
	protected $game = null;

	/**
	 * Returns the origin
	 *
	 * @return \Ps\Ai\Domain\Model\MapRegion $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param \Ps\Ai\Domain\Model\MapRegion $origin
	 * @return void
	 */
	public function setOrigin(\Ps\Ai\Domain\Model\MapRegion $origin) {
		$this->origin = $origin;
	}

	/**
	 * Returns the game
	 *
	 * @return \Ps\Ai\Domain\Model\Game $game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * Sets the game
	 *
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @return void
	 */
	public function setGame(\Ps\Ai\Domain\Model\Game $game) {
		$this->game = $game;
	}
}
