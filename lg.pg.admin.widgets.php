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

define('lg_admin_widgets_title', 'HelpSpot Widgets');
define('lg_admin_widgets_code', 'Widget Code');
define('lg_admin_widgets_tabex', 'Copy and paste the code below into any pages you want the tab to appear on. It can be useful to insert this into a globally included footer. Full documentation for all tab settings are available here: <a href="https://support.helpspot.com/index.php?pg=kb.page&id=323" target="_blank">Widget Tab Settings</a>');
define('lg_admin_widgets_questiontab', 'Tab');
define('lg_admin_widgets_questiontabdesc', 'Easily collect questions or feedback from any or all pages on your website(s). Easily collect sales and support questions unobtrusively and conveniently for customers.');
define('lg_admin_widgets_questiontab1', 'Completely configurable tab image, colors and text');
define('lg_admin_widgets_questiontab2', 'Adjust the configuration per page or even per visitor');
define('lg_admin_widgets_questiontab3', 'Requests created via the tab are tracked like any other request');
define('lg_admin_widgets_questiontab4', 'Submitted requests include the page the widget was opened on');
