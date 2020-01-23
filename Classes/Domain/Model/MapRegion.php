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
class MapRegion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * locations
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\MapLocation>
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
	 * @param \Ps\Ai\Domain\Model\MapLocation $location
	 * @return void
	 */
	public function addLocation(\Ps\Ai\Domain\Model\MapLocation $location) {
		$this->locations->attach($location);
	}

	/**
	 * Removes a MapRegion
	 *
	 * @param \Ps\Ai\Domain\Model\MapLocation $location The MapRegion to be removed
	 * @return void
	 */
	public function removeLocation(\Ps\Ai\Domain\Model\MapLocation $location) {
		$this->locations->detach($location);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\MapLocation> $locations
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ai\Domain\Model\MapLocation> $locations
	 * @return void
	 */
	public function setLocations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $locations) {
		$this->locations = $locations;
	}
}