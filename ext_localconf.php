<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SebastianChristoph.sc_chat',
            'chat',
            [
                'chat' => 'chat'
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    chat {
                        iconIdentifier = sc_chat-plugin-feuserlist
                        title = LLL:EXT:sc_chat/Resources/Private/Language/locallang_db.xlf:tx_sc_chat_chat.name
                        description = LLL:EXT:sc_chat/Resources/Private/Language/locallang_db.xlf:tx_sc_chat_chat.description
                        tt_content_defValues {
                            CType = list
                            list_type = scchat_chat
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'sc_chat-plugin-chat',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sc_chat/Resources/Public/Icons/user_plugin_chat.svg']
			);
		
    }
);
