<?php

namespace Ps\Ai\Controller;

use Ps\Ai\Domain\Model\Game;
use Ps\Ai\Domain\Model\Map;
use Ps\Ai\Domain\Repository\GameRepository;
use Ps\Ai\Domain\Repository\MapRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('maps', $this->objectManager->get(MapRepository::class)->findAll());
	}

	/**
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function createAction(Game $game, $options = []) {
		$this->objectManager->get(GameRepository::class)->add($game);

		foreach([
			\Ps\Ai\Processor\GameCreator\MapCreator::class
		] as $fqcn) {

			/** @var \Ps\Ai\Processor\GameCreator\AbstractCreator $gameCreator */
			$gameCreator = $this->objectManager->get($fqcn);
			$gameCreator->create($game, $options);
		}
	}
}