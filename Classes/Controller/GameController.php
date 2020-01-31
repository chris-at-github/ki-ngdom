<?php

namespace Ps\Ki\Controller;

use Ps\Ki\Domain\Model\Game;
use Ps\Ki\Domain\Model\Map;
use Ps\Ki\Domain\Repository\GameRepository;
use Ps\Ki\Domain\Repository\MapRepository;
use Ps\Ki\Processor\Queue\SettlementProcessor;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('games', $this->objectManager->get(GameRepository::class)->findAll());
		$this->view->assign('maps', $this->objectManager->get(MapRepository::class)->findAll());
	}

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function createAction(Game $game, $options = []) {
		$this->objectManager->get(GameRepository::class)->add($game);

		foreach([
			\Ps\Ki\Processor\GameCreator\MapCreator::class,
			\Ps\Ki\Processor\GameCreator\PlayerCreator::class
		] as $fqcn) {

			/** @var \Ps\Ki\Processor\GameCreator\AbstractCreator $gameCreator */
			$gameCreator = $this->objectManager->get($fqcn);
			$gameCreator->create($game, $options);
		}

		$this->redirect('index');
	}

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @return void
	 */
	public function playgroundAction(Game $game) {
		$this->view->assign('game', $game);
		$this->view->assign('queueProcessors', [
			SettlementProcessor::class
		]);

		// DebuggerUtility::var_dump($game);
	}
}