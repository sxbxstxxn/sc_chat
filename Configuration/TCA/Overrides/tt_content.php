<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'sc_chat',
    'chat',
    'Chat',
    'EXT:sc_chat/Resources/Public/Icons/user_plugin_chat.svg'
);

/**
 * Remove unused fields
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['scchat_chat'] = 'recursive,pages';

/**
 * Add Flexform for userlist plugin
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['scchat_chat'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'scchat_chat',
    'FILE:EXT:sc_chat/Configuration/FlexForm/chat.xml'
);