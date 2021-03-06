<?php

########################################################################
# Extension Manager/Repository config file for ext "pagebrowse".
#
# Auto generated 26-07-2012 17:49
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Universal page browser',
	'description' => 'Provides page browsing services for extensions',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.3.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry@typo3.org',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
			'php' => '5.3.2-10.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:9:"ChangeLog";s:4:"06a7";s:12:"ext_icon.gif";s:4:"c538";s:17:"ext_localconf.php";s:4:"821e";s:14:"ext_tables.php";s:4:"80a0";s:14:"doc/manual.sxw";s:4:"e646";s:31:"pi1/class.tx_pagebrowse_pi1.php";s:4:"2e53";s:19:"pi1/flexform_ds.xml";s:4:"b1b9";s:17:"pi1/locallang.xml";s:4:"e8ee";s:14:"res/styles.css";s:4:"34c0";s:18:"res/styles_min.css";s:4:"e907";s:17:"res/template.html";s:4:"d59b";s:33:"static/page_browser/constants.txt";s:4:"156c";s:29:"static/page_browser/setup.txt";s:4:"dea8";}',
);

?>