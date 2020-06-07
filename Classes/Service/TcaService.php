<?php

namespace Ps\Ki\Service;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class TcaService {

	/**
	 * @param array $parameter
	 * @param $parentObject
	 */
	public function getTileTitle(&$parameter) {
		$record = BackendUtility::getRecord($parameter['table'], (int) $parameter['row']['uid']);
		$parameter['title'] = $record['x'] . ' | ' . $record['y'];
	}
}