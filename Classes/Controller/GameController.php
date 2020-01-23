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

		/** @var Map $map */
		$map = $this->objectManager->get(MapRepository::class)->findByUid(1);

		DebuggerUtility::var_dump($map);

		return true;
	}
}