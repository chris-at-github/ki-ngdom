<?php

namespace Ps\Ki\Domain\Model;

/***
 *
 * This file is part of the "Kingdom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * Settlement
 */
class Settlement extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $title = '';

	/**
	 * coordinate
	 *
	 * @var \Ps\Ki\Domain\Model\GameMapCoordinate
	 */
	protected $coordinate = null;

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
	 * Returns the coordinate
	 *
	 * @return \Ps\Ki\Domain\Model\GameMapCoordinate coordinate
	 */
	public function getCoordinate() {
		return $this->coordinate;
	}

	/**
	 * Sets the coordinate
	 *
	 * @param \Ps\Ki\Domain\Model\GameMapCoordinate $coordinate
	 * @return void
	 */
	public function setCoordinate(\Ps\Ki\Domain\Model\GameMapCoordinate $coordinate) {
		$this->coordinate = $coordinate;
	}
}
