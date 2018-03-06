<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_errorlog_title','Error Log');
define('lg_admin_errorlog_time','Time');
define('lg_admin_errorlog_type','Type');
define('lg_admin_errorlog_file','File');
define('lg_admin_errorlog_line','Line');
define('lg_admin_errorlog_msg','Message');
define('lg_admin_errorlog_clear','Clear Error Log');
?>