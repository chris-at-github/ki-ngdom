<?php

namespace Ps\Ai\Processor\Queue;

use Ps\Ai\Domain\Model\Game;
use Ps\Ai\Domain\Model\Queue;
use Ps\Ai\Domain\Repository\QueueRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;

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

abstract class AbstractProcessor {

	/**
	 * @var \Ps\Ai\Domain\Model\Game
	 */
	protected $game;

	/**
	 * @var array
	 */
	protected $arguments = [];

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * @return void
	 */
	abstract public function create();

	/**
	 * @return void
	 */
	abstract public function finish();

	/**
	 * @param \Ps\Ai\Domain\Model\Game $game
	 */
	public function setGame(\Ps\Ai\Domain\Model\Game $game) {
		$this->game = $game;
	}

	/**
	 * @return \Ps\Ai\Domain\Model\Game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * @param array $arguments
	 */
	public function setArguments($arguments) {
		$this->arguments = $arguments;
	}

	/**
	 * @return array
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * @return \Ps\Ai\Processor\Queue
	 */
	protected function getQueue() {

		/** @var \Ps\Ai\Processor\Queue $queue */
		$queue = $this->objectManager->get(Queue::class);
		$queue->setProcessor(get_class($this));
		$queue->setGame($this->getGame());

		return $queue;
	}

	/**
	 * @param \Ps\Ai\Processor\Queue $queue
	 */
	protected function store($queue) {
		if($queue->getUid() === null) {
			$this->objectManager->get(QueueRepository::class)->add($queue);

		} else {
			$this->objectManager->get(QueueRepository::class)->update($queue);
		}
	}
}
