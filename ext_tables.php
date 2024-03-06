<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_aiassistant_domain_model_message', 'EXT:aiassistant/Resources/Private/Language/locallang_csh_tx_aiassistant_domain_model_message.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_aiassistant_domain_model_message');
})();
