<?php

namespace Ps\Ki\Processor\Data;

use Ps\Ki\Domain\Model\Game;
use Ps\Ki\Domain\Repository\QueueRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "Ki" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020
 *
 ***/

class QueueProcessor extends AbstractProcessor {

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $data
	 * @param array $options
	 * @return array
	 */
	public function provide(Game $game, $data, $options = []) {
		$data['queue'] = $this->objectManager->get(QueueRepository::class)->findAll([
			'game' => $game
		]);;

		return $data;
	}
}