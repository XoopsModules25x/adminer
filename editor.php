<?php
/**
 * Adminer Module based on Ghost Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package             Adminer Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id $
 **/

// connect xoops database
defined('XOOPS_ROOT_PATH') || include dirname(dirname(__DIR__)) . '/mainfile.php';

$moduleDirName = basename(__DIR__);
include(XOOPS_ROOT_PATH . '/header.php');

if (!is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid())) {
    exit(_NOPERM);
}
function adminer_object()
{
    class AdminerKfr extends Adminer
    {
        public function name()
        {
            return 'XOOPS Admin';
        }

        public function credentials()
        {
            return array(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS);
        }

        public function database()
        {
            return XOOPS_DB_NAME;
        }

        public function login($login, $password)
        {
            return ($login == XOOPS_DB_USER);
        }
    }

    return new AdminerKfr;
}

include __DIR__ . '/include/editor.php';
