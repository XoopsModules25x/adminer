<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    XOOPS Project http://xoops.org/
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package
 * @since
 * @author       XOOPS Development Team
 */

//defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

//$path = dirname(dirname(dirname(__DIR__)));
//include_once $path . '/mainfile.php';

$moduleDirName = basename(dirname(__DIR__));

$moduleHandler = xoops_getHandler('module');
$module        = $moduleHandler->getByDirname($moduleDirName);
$pathIcon32    = '../../' . $module->getInfo('sysicons32');
$pathModIcon32 = './' . $module->getInfo('modicons32');
xoops_loadLanguage('modinfo', $module->dirname());

$xoopsModuleAdminPath = XOOPS_ROOT_PATH . '/' . $module->getInfo('dirmoduleadmin');
include_once $xoopsModuleAdminPath . '/language/english/main.php';

$adminmenu[] = array(
    'title' => _AM_MODULEADMIN_HOME,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . '/home.png'
);

$adminmenu[] = array(
    'title' => _MI_ADMINER_MENU_01,
    'link'  => 'admin/mysql.php',
    'icon'  => $pathIcon32 . '/database_go.png'
);

$adminmenu[] = array(
    'title' => _MI_ADMINER_MENU_02,
    'link'  => 'admin/editor.php',
    'icon'  => $pathIcon32 . '/translations.png'
);

$adminmenu[] = array(
    'title' => _MI_ADMINER_MENU_03,
    'link'  => 'admin/dump.php',
    'icon'  => $pathIcon32 . '/upload.png'
);

$adminmenu[] = array(
    'title' => _AM_MODULEADMIN_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png'
);
