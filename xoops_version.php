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
$moduleDirName               = basename(__DIR__);
$modversion['name']           = _MI_ADMINER_NAME;
$modversion['version']        = 3.1;
$modversion['description']    = _MI_ADMINER_DESC;
$modversion['credits']        = 'Adminer.org and Alexey Ozerov ';
$modversion['author']         = 'Kris - http://www.xoofoo.org';
$modversion['help']           = 'page=help';
$modversion['license']        = 'GPL see LICENSE';
$modversion['official']       = 0;
$modversion['image']          = 'assets/images/logoModule.png';
$modversion['dirname']        = $moduleDirName;
$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses/moduleadmin';
$modversion['sysicons16']     = 'Frameworks/moduleclasses/icons/16';
$modversion['sysicons32']     = 'Frameworks/moduleclasses/icons/32';
$modversion['modicons16']     = 'assets/images/icons/16';
$modversion['modicons32']     = 'assets/images/icons/32';
//about
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2016/07/18';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = array(
    'mysql'  => '5.0.7',
    'mysqli' => '5.0.7'
);

// Menu
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Templates
$modversion['templates'][1]['file']        = $moduleDirName . '_index.tpl';
$modversion['templates'][1]['description'] = '';
