<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    DolphinCore Dolphin Core
 * @{
 */

bx_import('BxBaseMenuCmts');

/**
 * @see BxDolMenu
 */
class BxTemplMenuCmts extends BxBaseMenuCmts {

    public function __construct ($aObject, $oTemplate = false) {
        parent::__construct ($aObject, $oTemplate);
    }
}

/** @} */
