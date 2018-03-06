<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_workspacestream_title','Workspace Stream');
define('lg_workspacestream_streaming','Live Streaming');
define('lg_workspacestream_streamex','Real time view of the request history for requests in this filter');
define('lg_workspacestream_live','LIVE');
define('lg_workspacestream_grid','Grid');
define('lg_workspacestream_stream','Staff Only');
define('lg_workspacestream_streamwpriv','Staff Only w/ Private');
define('lg_workspacestream_streamcustomers','Customers Only');
define('lg_workspacestream_streamcuststaff','Customers and Staff');
?>