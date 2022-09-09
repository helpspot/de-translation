<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_status_title','Status Types');	
define('lg_admin_status_addcat','Add a Status');
define('lg_admin_status_addbutton','Add Status');
define('lg_admin_status_editcat','Edit: ');
define('lg_admin_status_editbutton','Save Edits');
define('lg_admin_status_showdel','Show Inactive Statuses');
define('lg_admin_status_noshowdel','Return to Statuses');
define('lg_admin_status_colid','ID');
define('lg_admin_status_colstatus','Status');
define('lg_admin_status_coldel','Make Status Inactive');
define('lg_admin_status_coldelwarn','Are you sure you want to make this status inactive?');
define('lg_admin_status_fbdeleted','Status deleted');	
define('lg_admin_status_fbundeleted','Status restored');
define('lg_admin_status_fbedited','Status edited');	
define('lg_admin_status_fbadded','Status added');
define('lg_admin_status_er_status','Please fill in status');
