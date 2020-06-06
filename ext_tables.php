<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Ps.Ki',
		'Frontend',
		'Frontend'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ki', 'Configuration/TypoScript', 'Ki-ngdom');

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_map');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_mapregion');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_mapcoordinate');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_map');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_game');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_gamemapregion');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_gamemapcoordinate');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_gameplayer');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ki_domain_model_queue');
});
