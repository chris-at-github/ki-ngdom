<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Ps.Ai',
		'Frontend',
		'Frontend'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ai', 'Configuration/TypoScript', 'Ai');

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_map');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_mapregion');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_maplocation');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_map');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_game');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_gamemapregion');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_gamemaplocation');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_gameplayer');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ai_domain_model_queue');
});
