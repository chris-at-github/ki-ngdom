<?php

namespace Ps\Ki\Domain\Repository;

/***
 *
 * This file is part of the "Kingdom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * The repository for Settlements
 */
class SettlementRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @var array
	 */
	protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
