<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message',
        'label' => 'user_prompt',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
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
        'searchFields' => 'user_prompt,assistant_answer,file_citation,thread,file_id',
        'iconfile' => 'EXT:aiassistant/Resources/Public/Icons/tx_aiassistant_domain_model_message.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'user_prompt, assistant_answer, file_citation, thread, prompt_tokens, completion_tokens, file_id, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_aiassistant_domain_model_message',
                'foreign_table_where' => 'AND {#tx_aiassistant_domain_model_message}.{#pid}=###CURRENT_PID### AND {#tx_aiassistant_domain_model_message}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
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

        'user_prompt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.user_prompt',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.user_prompt.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'assistant_answer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.assistant_answer',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.assistant_answer.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'file_citation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.file_citation',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.file_citation.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'thread' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.thread',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.thread.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'prompt_tokens' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.prompt_tokens',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.prompt_tokens.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'completion_tokens' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.completion_tokens',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.completion_tokens.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'file_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.file_id',
            'description' => 'LLL:EXT:aiassistant/Resources/Private/Language/locallang_db.xlf:tx_aiassistant_domain_model_message.file_id.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
    ],
];