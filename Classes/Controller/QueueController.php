<?php

namespace Ps\Ai\Controller;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class QueueController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @param string $processor
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @return void
	 */
	public function wizardAction($processor, \Ps\Ai\Domain\Model\Game $game) {
		$partial = trim(str_replace(['Ps\Ai\Processor\Queue\\', 'Processor'], null, $processor));

		$this->view->assign('game', $game);
		$this->view->assign('processor', $processor);
		$this->view->assign('partial', $partial);
	}

	/**
	 * @param string $processor
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @param array $arguments
	 */
	public function createAction($processor, $game, $arguments) {

		/** @var \Ps\Ai\Processor\Queue\AbstractProcessor $creator */
		$creator = $this->objectManager->get($processor);
		$creator->setGame($game);
		$creator->setArguments($arguments);
		$creator->create();

		$this->redirect('playground', 'Game', null, ['game' => $game]);
	}
}
