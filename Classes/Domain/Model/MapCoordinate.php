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

class MapCoordinate extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * region
	 *
	 * @var \Ps\Ki\Domain\Model\MapRegion
	 */
	protected $region = null;

	/**
	 * map
	 *
	 * @var \Ps\Ki\Domain\Model\Map
	 */
	protected $map = null;

	/**
	 * x
	 *
	 * @var int
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $x = 0;

	/**
	 * y
	 *
	 * @var int
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $y = 0;

	/**
	 * Returns the region
	 *
	 * @return \Ps\Ki\Domain\Model\MapRegion $region
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Sets the region
	 *
	 * @param \Ps\Ki\Domain\Model\MapRegion $region
	 * @return void
	 */
	public function setRegion(\Ps\Ki\Domain\Model\MapRegion $region) {
		$this->region = $region;
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
	 * Returns the x
	 *
	 * @return int $x
	 */
	public function getX() {
		return $this->x;
	}

	/**
	 * Sets the x
	 *
	 * @param int $x
	 * @return void
	 */
	public function setX($x) {
		$this->x = $x;
	}

	/**
	 * Returns the y
	 *
	 * @return int $y
	 */
	public function getY() {
		return $this->y;
	}

	/**
	 * Sets the y
	 *
	 * @param int $y
	 * @return void
	 */
	public function setY($y) {
		$this->y = $y;
	}
}
