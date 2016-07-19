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
 * @copyright            The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license              http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package              Adminer Module
 * @since                2.3.0
 * @author               Kris <http://www.xoofoo.org>
 * @version              $Id $
 **/
// connect xoops database
include_once __DIR__ . '/admin_header.php';

if (!is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid())) {
    exit(_NOPERM);
}

function adminer_object()
{
    // required to run any plugin
    include_once dirname(__DIR__) . '/include/plugins/plugin.php';
    //    include_once dirname(__DIR__) . "/include/plugins/plugin.php";
    include_once dirname(__DIR__) . '/include/plugins/frames.php';

    // autoloader
    //    foreach (glob("plugins/*.php") as $filename) {
    //        include_once "./$filename";
    //    }

    $plugins = array(
        // specify enabled plugins here
        //        new AdminerDumpXml,
        //        new AdminerTinymce,
        //        new AdminerFileUpload("data/"),
        //        new AdminerSlugify,
        //        new AdminerTranslation,
        //        new AdminerForeignSystem,
        new AdminerFrames,
    );

    //    It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin
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

    return new AdminerCustomization($plugins);
}

// include original Adminer or Adminer Editor
include_once dirname(__DIR__) . '/include/editor.php';
