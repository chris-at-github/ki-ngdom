<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Ps.Ki',
		'Frontend',
		[
			'Game' => 'index, create, playground',
			'Queue' => 'wizard, create',
		],

		// non-cacheable actions
		[
			'Game' => 'index, create, playground',
			'Queue' => 'wizard, create',
		]
	);

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					frontend {
						iconIdentifier = ki-plugin-frontend
						title = LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_frontend.name
						description = LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_frontend.description
						tt_content_defValues {
							CType = list
							list_type = ki_frontend
						}
					}
				}
				show = *
			}
	 }'
	);

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'ki-plugin-frontend',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:ki/Resources/Public/Icons/user_plugin_frontend.svg']
	);

});
