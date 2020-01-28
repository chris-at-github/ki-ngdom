<?php

namespace Ps\Ai\Processor\Queue;

use Ps\Ai\Domain\Model\Game;
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
}
