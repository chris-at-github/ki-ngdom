<?php

namespace Ps\Ki\Domain\Model;

/***
 *
 * This file is part of the "Ki" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * GameMapCoordinate
 */
class GameMapCoordinate extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * region
	 *
	 * @var \Ps\Ki\Domain\Model\GameMapRegion
	 */
	protected $region = null;

	/**
	 * origin
	 *
	 * @var \Ps\Ki\Domain\Model\MapCoordinate
	 */
	protected $origin = null;

	/**
	 * Returns the region
	 *
	 * @return \Ps\Ki\Domain\Model\GameMapRegion $region
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Sets the region
	 *
	 * @param \Ps\Ki\Domain\Model\GameMapRegion $region
	 * @return void
	 */
	public function setRegion(\Ps\Ki\Domain\Model\GameMapRegion $region) {
		$this->region = $region;
	}

	/**
	 * Returns the origin
	 *
	 * @return \Ps\Ki\Domain\Model\MapCoordinate $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param \Ps\Ki\Domain\Model\MapCoordinate $origin
	 * @return void
	 */
	public function setOrigin(\Ps\Ki\Domain\Model\MapCoordinate $origin) {
		$this->origin = $origin;
	}
}
