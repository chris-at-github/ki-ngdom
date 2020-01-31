<?php

namespace Ps\Ki\Processor\Queue;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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

class SettlementProcessor extends AbstractProcessor {

	/**
	 * @return void
	 */
	public function create() {
		$queue = $this->getQueue();
		$queue->setArguments($this->getArguments());
		$queue->setExpiryDate(0);

		$this->store($queue);
	}

	/**
	 * @return void
	 */
	public function finish() {
	}
}
