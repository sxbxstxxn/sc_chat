<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SebastianChristoph.sc_chat',
            'chat',
            'Chat'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sc_chat', 'Configuration/TypoScript', 'SCChat');

    }
);
