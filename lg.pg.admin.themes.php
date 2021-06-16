<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (! defined('cBASEPATH')) {
    die();
}

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_themes_title', 'Themes');
define('lg_admin_themes_admin', 'Theme Selection');
define('lg_admin_themes_theme', 'Try/Select Admin Theme');
define('lg_admin_themes_portaltheme', 'Select Portal Theme');
define('lg_admin_themes_save', 'Save Theme');
define('lg_admin_themes_custom', 'Build custom themes, <a href="http://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=403">learn how</a>');

define('lg_admin_themes_pt_clean', 'Clean');
define('lg_admin_themes_pt_cleandesc', 'A clean and modern theme that is easy to customize.');
define('lg_admin_themes_pt_grey', 'Grey');
define('lg_admin_themes_pt_greydesc', 'A modern and sophisticated theme.');
define('lg_admin_themes_pt_blue', 'Blue');
define('lg_admin_themes_pt_bluedesc', 'A light theme that can be easily customize to match another sites look or used as is.');
define('lg_admin_themes_pt_classic', 'Classic');
define('lg_admin_themes_pt_classicdesc', 'Our simple original portal theme.');
