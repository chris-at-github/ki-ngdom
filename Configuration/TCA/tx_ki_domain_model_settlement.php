<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement',
		'label' => 'title',
		'type' => 'record_type',
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
		'searchFields' => 'title',
		'iconfile' => 'EXT:ki/Resources/Public/Icons/tx_ki_domain_model_settlement.gif'
	],
	'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, game, coordinate',
	],
	'types' => [
		'0' => [
			'showitem' => 'record_type, title'
		],
		'Ps\Ki\Domain\Model\SettlementTown' => [
			'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, record_type, title, game, coordinate, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime\''
		],
		'Ps\Ki\Domain\Model\SettlementOutpost' => [
			'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, record_type, title, game, coordinate, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime\''
		],
		'Ps\Ki\Domain\Model\SettlementDefense' => [
			'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, record_type, title, game, coordinate, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime\''
		],
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
				'foreign_table' => 'tx_ki_domain_model_settlement',
				'foreign_table_where' => 'AND {#tx_ki_domain_model_settlement}.{#pid}=###CURRENT_PID### AND {#tx_ki_domain_model_settlement}.{#sys_language_uid} IN (-1,0)',
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
		'record_type' => [
			'exclude' => true,
			'label' => 'Type',
			'config' => [
				'type' => 'select',
				'items' => [
					['', ''],
					['LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.type.town', 'Ps\Ki\Domain\Model\SettlementTown'],
					['LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.type.outpost', 'Ps\Ki\Domain\Model\SettlementOutpost'],
					['LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.type.defense', 'Ps\Ki\Domain\Model\SettlementDefense'],
				],
				'default' => '',
				'minitems' => 1,
				'eval' => 'required'
			],
		],
		'title' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.title',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			],
		],
		'game' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.game',
			'config' => [
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_ki_domain_model_game',
				'maxitems' => 1,
				'minitems' => 0,
				'size' => 1,
				'default' => 0,
				'hideSuggest' => 1,
			],
		],
		'coordinate' => [
			'exclude' => true,
			'label' => 'LLL:EXT:ki/Resources/Private/Language/locallang_tca.xlf:tx_ki_domain_model_settlement.coordinate',
			'config' => [
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_ki_domain_model_gamemapcoordinate',
				'maxitems' => 1,
				'minitems' => 0,
				'size' => 1,
				'default' => 0,
				'hideSuggest' => 1,
			],
		],
	],
];
