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
include_once __DIR__ . '/admin_header.php';
xoops_cp_header();

if (!is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid())) {
    exit(_NOPERM);
}

$aboutAdmin = new ModuleAdmin();
echo $aboutAdmin->addNavigation(basename(__FILE__));

echo '<table width="100%" class="outer">';
echo '<tr>';
echo '<td align="center">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td><iframe src="' . XOOPS_URL . '/modules/adminer/admin/getBigdump.php" scrolling="auto" frameborder="1" width="100%" height="1024"></iframe></td>';
echo '</tr>';
echo '</table>';

include_once __DIR__ . '/admin_footer.php';
