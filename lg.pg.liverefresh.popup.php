<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_liverefresh_title','Live Aktualisierung');
define('lg_liverefresh_body','Live Refresh will check the server about every 30 seconds to see if any requests related to your account have been 
							  added or updated. If changes have been found the queue/filter you are currently in will be updated. In addition, the 
							  counts in the navigation bar will be updated to the current counts. Live Refresh maintains the state of your queue/filter
							  so any items checked or sorting done before the refresh occurs will remain after the refresh.');
?>