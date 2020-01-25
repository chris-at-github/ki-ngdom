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
 * GameMapLocation
 */
class GameMapLocation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * region
	 *
	 * @var \Ps\Ai\Domain\Model\GameMapRegion
	 */
	protected $region = null;

	/**
	 * origin
	 *
	 * @var \Ps\Ai\Domain\Model\MapLocation
	 */
	protected $origin = null;

	/**
	 * Returns the region
	 *
	 * @return \Ps\Ai\Domain\Model\GameMapRegion $region
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Sets the region
	 *
	 * @param \Ps\Ai\Domain\Model\GameMapRegion $region
	 * @return void
	 */
	public function setRegion(\Ps\Ai\Domain\Model\GameMapRegion $region) {
		$this->region = $region;
	}

	/**
	 * Returns the origin
	 *
	 * @return \Ps\Ai\Domain\Model\MapLocation $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param \Ps\Ai\Domain\Model\MapLocation $origin
	 * @return void
	 */
	public function setOrigin(\Ps\Ai\Domain\Model\MapLocation $origin) {
		$this->origin = $origin;
	}
}
