<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_powermail_domain_model_forms'] = array(
	'ctrl' => $TCA['tx_powermail_domain_model_forms']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, css, pages',
	),
	'types' => array(
		'1' => array('showitem' => 'title, pages, --div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_fields.sheet1, css, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_powermail_domain_model_forms',
				'foreign_table_where' => 'AND tx_powermail_domain_model_forms.pid=###CURRENT_PID### AND tx_powermail_domain_model_forms.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'css' => array(
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.css',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(
						'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:pleaseChoose',
						''
					),
					array(
						'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.css.1',
						'layout1'
					),
					array(
						'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.css.2',
						'layout2'
					),
					array(
						'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.css.3',
						'layout3'
					),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'pages' => array(
			'l10n_mode' => 'exclude',
			'exclude' => 0,
			'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xml:tx_powermail_domain_model_forms.pages',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_powermail_domain_model_pages',
				'foreign_table_where' => 'AND tx_powermail_domain_model_pages.deletex = 1 AND tx_powermail_domain_model_pages.hidden = 0 and tx_powermail_domain_model_pages.sys_language_uid = 0',
				'foreign_field' => 'forms',
				'maxitems'      => 1000,
				'appearance' => array(
					'collapse' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 0,
					'showAllLocalizationLink' => 0
				),
			),
		),
	),
);
?>