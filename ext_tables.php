<?php
defined('TYPO3') or die();

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('chf_time', 'Configuration/TypoScript/', 'Cultural Heritage Framework: Time Component');

// TSCONFIG

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:chf_time/Configuration/TSConfig/setup.txt">
');
