<?php

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference',
        [
            'controls' => [
                'exclude' => true,
                'label' => 'LLL:EXT:t3easy_video_attributes/Resources/Private/Language/locallang_ttc.xlf:controls',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ],
                    ],
                ],
            ],
            'loop' => [
                'exclude' => true,
                'label' => 'LLL:EXT:t3easy_video_attributes/Resources/Private/Language/locallang_ttc.xlf:loop',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ],
                    ],
                ],
            ],
            'muted' => [
                'exclude' => true,
                'label' => 'LLL:EXT:t3easy_video_attributes/Resources/Private/Language/locallang_ttc.xlf:muted',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ],
                    ],
                ],
            ],
            'disable_picture_in_picture' => [
                'exclude' => true,
                'label' => 'LLL:EXT:t3easy_video_attributes/Resources/Private/Language/locallang_ttc.xlf:picture_in_picture',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                            'invertStateDisplay' => true,
                        ],
                    ],
                ],
            ],
            'playsinline' => [
                'exclude' => true,
                'label' => 'LLL:EXT:t3easy_video_attributes/Resources/Private/Language/locallang_ttc.xlf:playsinline',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ],
                    ],
                ],
            ],
        ],
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'sys_file_reference',
        'videoOverlayPalette',
        'controls,loop,muted,playsinline,disable_picture_in_picture',
        'after:autoplay'
    );
});
