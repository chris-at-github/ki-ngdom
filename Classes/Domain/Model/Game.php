<?php

namespace Ps\Ai\Domain\Model;

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

class Game extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 * 
	 * @var string
	 */
	protected $title = '';

	/**
	 * map
	 * 
	 * @var \Ps\Ai\Domain\Model\Map
	 */
	protected $map = null;

	/**
	 * regions
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GameMapRegion>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $regions = null;

	/**
	 * regions
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GamePlayer>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $players = null;

	/**
	 * __construct
	 */
	public function __construct()	{
		$this->initStorageObjects();
	}

	/**
	 * @return void
	 */
	protected function initStorageObjects()	{
		$this->regions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->players = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the map
	 * 
	 * @return \Ps\Ai\Domain\Model\Map $map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * Sets the map
	 * 
	 * @param \Ps\Ai\Domain\Model\Map $map
	 * @return void
	 */
	public function setMap(\Ps\Ai\Domain\Model\Map $map) {
		$this->map = $map;
	}

	/**
	 * Adds a MapRegion
	 *
	 * @param \Ps\Ai\Domain\Model\GameMapRegion $region
	 * @return void
	 */
	public function addRegion(\Ps\Ai\Domain\Model\GameMapRegion $region) {
		$this->regions->attach($region);
	}

	/**
	 * Removes a MapRegion
	 *
	 * @param \Ps\Ai\Domain\Model\GameMapRegion $region The MapRegion to be removed
	 * @return void
	 */
	public function removeRegion(\Ps\Ai\Domain\Model\GameMapRegion $region)	{
		$this->regions->detach($region);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GameMapRegion> $regions
	 */
	public function getRegions() {
		return $this->regions;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GameMapRegion> $regions
	 * @return void
	 */
	public function setRegions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $regions) {
		$this->regions = $regions;
	}

	/**
	 * @param \Ps\Ai\Domain\Model\GamePlayer $player
	 * @return void
	 */
	public function addPlayer(\Ps\Ai\Domain\Model\GamePlayer $player) {
		$this->players->attach($player);
	}

	/**
	 * @param \Ps\Ai\Domain\Model\GamePlayer $player
	 * @return void
	 */
	public function removePlayer(\Ps\Ai\Domain\Model\GamePlayer $player) {
		$this->players->detach($player);
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GamePlayer> $players
	 */
	public function getPlayers() {
		return $this->players;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\GamePlayer> $players
	 * @return void
	 */
	public function setPlayers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $players) {
		$this->players = $players;
	}
}
