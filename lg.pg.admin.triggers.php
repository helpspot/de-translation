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

define('lg_admin_trigger_title', 'Triggers');
define('lg_admin_trigger_namecol', 'Trigger Name');
define('lg_admin_trigger_add', 'Add a Trigger');
define('lg_admin_trigger_button', 'Add Trigger');
define('lg_admin_trigger_buttonedit', 'Save Trigger');
define('lg_admin_trigger_anyall', 'When a request is %s if %s of the following conditions are met');
define('lg_admin_trigger_edit', 'Edit Trigger');
define('lg_admin_trigger_name', 'Name');
define('lg_admin_trigger_then', 'Perform these actions');
define('lg_admin_trigger_any', 'any');
define('lg_admin_trigger_all', 'all');
define('lg_admin_trigger_oncreate', 'Created');
define('lg_admin_trigger_onupdate', 'Updated');
define('lg_admin_trigger_colid', 'ID');
define('lg_admin_trigger_options', 'Options');
define('lg_admin_trigger_hourlabel', 'Trigger in effect');
define('lg_admin_trigger_log', 'Log trigger runs in request history');
define('lg_admin_trigger_anyhours', 'At all times');
define('lg_admin_trigger_bizhours', 'Business hours only');
define('lg_admin_trigger_offhours', 'Outside of business hours only');
define('lg_admin_trigger_options_nonotificaitons', 'Suppress any staff notifications that result from Actions');
define('lg_admin_trigger_del', 'Make Trigger Inactive');
define('lg_admin_trigger_delwarn', 'Are you sure you want to make this trigger inactive?');
define('lg_admin_trigger_showdel', 'Show Inactive Triggers');
define('lg_admin_trigger_noshowdel', 'Return to Triggers');
define('lg_admin_trigger_noname', 'Please provide a name for this trigger');
define('lg_admin_trigger_fbinactive', 'Trigger made inactive');
define('lg_admin_trigger_fbrestored', 'Trigger restored');
define('lg_admin_trigger_fbadded', 'Trigger added');
define('lg_admin_trigger_fbedited', 'Trigger edited');
define('lg_admin_trigger_sorttitle', 'Trigger Order');
define('lg_admin_trigger_note', 'Watch for request changes in real time and perform instant actions based on those changes. <br /><b>Intense or numerous triggers can decrease system performance</b>');
define('lg_admin_trigger_confirm', 'Are you sure you want to add this trigger? It will take effect immediately.');
define('lg_admin_trigger_error_conditions', 'Your must add at least one condition to this trigger before saving');
