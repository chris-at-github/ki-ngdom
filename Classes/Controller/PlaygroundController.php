<?php

namespace Ps\Ki\Controller;

use Ps\Ki\Domain\Repository\SettlementRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class PlaygroundController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
	}

	/**
	 * @return boolean
	 */
	public function settlementAction() {
		$settlements = $this->objectManager->get(SettlementRepository::class)->findAll();
		DebuggerUtility::var_dump($settlements);

		return true;
	}
}