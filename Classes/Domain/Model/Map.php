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
 * Map
 */
class Map extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * regions
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapRegion>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $regions = null;

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
		$this->regions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Adds a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\MapRegion $region
	 * @return void
	 */
	public function addRegion(\Ps\Ki\Domain\Model\MapRegion $region) {
		$this->regions->attach($region);
	}

	/**
	 * Removes a MapRegion
	 *
	 * @param \Ps\Ki\Domain\Model\MapRegion $region The MapRegion to be removed
	 * @return void
	 */
	public function removeRegion(\Ps\Ki\Domain\Model\MapRegion $region) {
		$this->regions->detach($region);
	}

	/**
	 * Returns the regions
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapRegion> $regions
	 */
	public function getRegions() {
		return $this->regions;
	}

	/**
	 * Sets the regions
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Ki\Domain\Model\MapRegion> $regions
	 * @return void
	 */
	public function setRegions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $regions) {
		$this->regions = $regions;
	}
}
