<?php

namespace Ps\Ai\Controller;

use Ps\Ai\Domain\Model\Map;
use Ps\Ai\Domain\Repository\MapRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('maps', $this->objectManager->get(MapRepository::class)->findAll());
	}
}