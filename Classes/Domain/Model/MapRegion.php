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
	 * @var \Ps\Ki\Domain\Model\Map
	 */
	protected $map = null;

	/**
	 * coordinates
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapCoordinate>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $coordinates = null;

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
		$this->coordinates = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * @return \Ps\Ki\Domain\Model\Map $map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * Sets the map
	 *
	 * @param \Ps\Ki\Domain\Model\Map $map
	 * @return void
	 */
	public function setMap(\Ps\Ki\Domain\Model\Map $map) {
		$this->map = $map;
	}

	/**
	 * Adds a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\MapCoordinate $coordinate
	 * @return void
	 */
	public function addCoordinate(\Ps\Ki\Domain\Model\MapCoordinate $coordinate) {
		$this->coordinates->attach($coordinate);
	}

	/**
	 * Removes a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\MapCoordinate $coordinate The MapRegion to be removed
	 * @return void
	 */
	public function removeCoordinate(\Ps\Ki\Domain\Model\MapCoordinate $coordinate) {
		$this->coordinates->detach($coordinate);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapCoordinate> $coordinates
	 */
	public function getCoordinates() {
		return $this->coordinates;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapCoordinate> $coordinates
	 * @return void
	 */
	public function setCoordinates(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $coordinates) {
		$this->coordinates = $coordinates;
	}
}