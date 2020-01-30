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
/**
 * Queue
 */
class Queue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * processor
	 *
	 * @var string
	 */
	protected $processor = '';

	/**
	 * expiryDate
	 *
	 * @var int
	 */
	protected $expiryDate = 0;

	/**
	 * arguments
	 *
	 * @var string
	 */
	protected $arguments = '';

	/**
	 * game
	 *
	 * @var \Ps\Ai\Domain\Model\Game
	 */
	protected $game = null;

	/**
	 * Returns the processor
	 *
	 * @return string $processor
	 */
	public function getProcessor() {
		return $this->processor;
	}

	/**
	 * Sets the processor
	 *
	 * @param string $processor
	 * @return void
	 */
	public function setProcessor($processor) {
		$this->processor = $processor;
	}

	/**
	 * Returns the expiryDate
	 *
	 * @return int $expiryDate
	 */
	public function getExpiryDate() {
		return $this->expiryDate;
	}

	/**
	 * Sets the expiryDate
	 *
	 * @param int $expiryDate
	 * @return void
	 */
	public function setExpiryDate($expiryDate) {
		$this->expiryDate = $expiryDate;
	}

	/**
	 * Returns the arguments
	 *
	 * @return string $arguments
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * Sets the arguments
	 *
	 * @param string|array $arguments
	 * @return void
	 */
	public function setArguments($arguments) {
		if(is_array($arguments) === true) {
			$arguments = json_encode($arguments);
		}

		$this->arguments = $arguments;
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
