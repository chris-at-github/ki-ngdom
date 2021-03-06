<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_mapcoordinate',
		'label' => 'region',
		'label_userFunc' => \Ps\Ki\Service\TcaService::class . '->getTileTitle',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'versioningWS' => true,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		],
		'searchFields' => '',
		'iconfile' => 'EXT:ki/Resources/Public/Icons/tx_ki_domain_model_mapcoordinate.gif'
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, region, map, x, y',
	],
	'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, region, map, x, y, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
	],
	'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
		],
		'l10n_parent' => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'default' => 0,
				'items' => [
					['', 0],
				],
				'foreign_table' => 'tx_ki_domain_model_mapcoordinate',
				'foreign_table_where' => 'AND {#tx_ki_domain_model_mapcoordinate}.{#pid}=###CURRENT_PID### AND {#tx_ki_domain_model_mapcoordinate}.{#sys_language_uid} IN (-1,0)',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		't3ver_label' => [
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			],
		],
		'hidden' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[
						0 => '',
						1 => '',
						'invertStateDisplay' => true
					]
				],
			],
		],
		'starttime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime,int',
				'default' => 0,
				'behaviour' => [
					'allowLanguageSynchronization' => true
				]
			],
		],
		'endtime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime,int',
				'default' => 0,
				'range' => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038)
				],
				'behaviour' => [
					'allowLanguageSynchronization' => true
				]
			],
		],

		'region' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_mapcoordinate.region',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_ki_domain_model_mapregion',
				'minitems' => 0,
				'maxitems' => 1,
			],
		],
		'map' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_mapcoordinate.map',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_ki_domain_model_map',
				'minitems' => 0,
				'maxitems' => 1,
			],
		],
		'x' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_mapcoordinate.x',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			]
		],
		'y' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_mapcoordinate.y',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			]
		],

	],
];
