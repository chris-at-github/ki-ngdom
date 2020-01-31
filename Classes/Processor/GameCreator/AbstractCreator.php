<?php

namespace Ps\Ki\Processor\GameCreator;

use Ps\Ki\Domain\Model\Game;
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

abstract class AbstractCreator {

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	abstract public function create(Game $game, $options);
}