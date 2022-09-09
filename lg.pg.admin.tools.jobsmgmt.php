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

define('lg_admin_jobsmgmt_title', 'Failed Background Jobs');
define('lg_admin_jobsmgmt_jobname', 'Job');
define('lg_admin_jobsmgmt_delete', 'Delete');
define('lg_admin_jobsmgmt_retry', 'Retry');
define('lg_admin_jobsmgmt_failed_at', 'Failed At');
define('lg_admin_jobsmgmt_info', 'Information');
define('lg_admin_jobsmgmt_noresults', 'No Failed Jobs');
define('lg_admin_jobsmgmt_job_deleted', 'Job deleted');
define('lg_admin_jobsmgmt_job_retried', 'Job dispatched to be retried');
