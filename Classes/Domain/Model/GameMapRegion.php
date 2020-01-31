<?php

namespace Ps\Ki\Domain\Model;

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
	 * @var \Ps\Ki\Domain\Model\MapRegion
	 */
	protected $origin = null;

	/**
	 * game
	 *
	 * @var \Ps\Ki\Domain\Model\Game
	 */
	protected $game = null;

	/**
	 * locations
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\GameMapLocation>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $locations = null;

	/**
	 * __construct
	 */
	public function __construct() {
		$this->initStorageObjects();
	}

	/**
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->locations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the origin
	 *
	 * @return \Ps\Ki\Domain\Model\MapRegion $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param \Ps\Ki\Domain\Model\MapRegion $origin
	 * @return void
	 */
	public function setOrigin(\Ps\Ki\Domain\Model\MapRegion $origin) {
		$this->origin = $origin;
	}

	/**
	 * Returns the game
	 *
	 * @return \Ps\Ki\Domain\Model\Game $game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * Sets the game
	 *
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @return void
	 */
	public function setGame(\Ps\Ki\Domain\Model\Game $game) {
		$this->game = $game;
	}

	/**
	 * Adds a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\GameMapLocation $location
	 * @return void
	 */
	public function addLocation(\Ps\Ki\Domain\Model\GameMapLocation $location) {
		$this->locations->attach($location);
	}

	/**
	 * Removes a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\GameMapLocation $location The MapRegion to be removed
	 * @return void
	 */
	public function removeLocation(\Ps\Ki\Domain\Model\GameMapLocation $location) {
		$this->locations->detach($location);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\GameMapLocation> $locations
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\GameMapLocation> $locations
	 * @return void
	 */
	public function setLocations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $locations) {
		$this->locations = $locations;
	}
}
