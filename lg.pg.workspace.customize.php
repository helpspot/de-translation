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

define('lg_custworkspace_title', 'Customize Workspace');
define('lg_custworkspace_inbox', 'Customize Inbox Columns');
define('lg_custworkspace_myq', 'Customize My Queue Columns');
define('lg_custworkspace_selectcol', 'Select a column to add');
define('lg_custworkspace_removecol', 'Are you sure you want the remove this column?');
define('lg_custworkspace_setcolumnwidthsave', 'Save');
define('lg_custworkspace_setcolumnwidthnote', 'blank for a fill column');
define('lg_custworkspace_setcolumnwidthfill', 'This column always fills');
