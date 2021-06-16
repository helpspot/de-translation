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

define('lg_filter_requests_title', 'Filter Requests');
define('lg_filter_requests_fbadded', 'Filter added');
define('lg_filter_requests_fbedited', 'Filter edited');
define('lg_filter_requests_edit', 'Edit Filter');
define('lg_filter_requests_filter', 'Filter');
define('lg_filter_requests_moreoptions', 'Options');
define('lg_filter_requests_buttonedit', 'Save Edits');
define('lg_filter_requests_buttonsave', 'Save Filter');
define('lg_filter_requests_any', 'any');
define('lg_filter_requests_all', 'all');
define('lg_filter_requests_runfilter', 'Run Filter');
define('lg_filter_requests_showall', 'Show all results');
define('lg_filter_requests_anyall', 'Match %s of the following conditions');
define('lg_filter_requests_name', 'Filter Name');
define('lg_filter_requests_folder', 'In Folder');
define('lg_filter_requests_filtertype','Default Filter View');
define('lg_filter_requests_stream','Stream');
define('lg_filter_requests_shortcut', 'Keyboard Shortcut');
define('lg_filter_requests_none', 'none');
define('lg_filter_requests_addfolder', 'Add Folder');
define('lg_filter_requests_nofolder', '-Top Level (no folder)');
define('lg_filter_requests_inline', 'Inline');
define('lg_filter_requests_attop', 'At the top');
define('lg_filter_requests_urgentinline', 'Show Urgent Requests');
define('lg_filter_requests_ascending', 'Ascending');
define('lg_filter_requests_descending', 'Descending');
define('lg_filter_requests_orderby', 'Order');
define('lg_filter_requests_groupby', 'Group Requests By');
define('lg_filter_requests_nogroupby', 'No Grouping');
define('lg_filter_requests_noname', 'Please provide a name for this filter');
define('lg_filter_requests_noconds', 'Please add at least one condition');
define('lg_filter_requests_setcols', 'Columns To Display');
define('lg_filter_requests_displaytop', 'Display filter above Inbox in left navigation (folder will be ignored)');
define('lg_filter_requests_rssfriendly', 'RSS feed should only contain public notes');
define('lg_filter_requests_nevercache', 'Never cache the workspace display count');
define('lg_filter_requests_counts', 'Display count in Workspace');
define('lg_filter_requests_perms', 'Who else can view this');
define('lg_filter_requests_selectcol', 'Select a column to add');
define('lg_filter_requests_removecol', 'Are you sure you want the remove this column?');
define('lg_filter_requests_saveas_details', 'Select a name for the new filter.');
define('lg_filter_requests_setcolumnwidthsave', 'Save');
define('lg_filter_requests_setcolumnwidthnote', 'blank for a fill column');
define('lg_filter_requests_setcolumnwidthfill', 'This column always fills');

define('lg_filter_requests_ogreqhistory', 'Request History');
define('lg_filter_requests_ogcustinfo', 'Customer Information');
define('lg_filter_requests_ogreqdetails', 'Request Details');
define('lg_filter_requests_ogcustomfields', 'Custom Fields');
define('lg_filter_requests_ogdatetime', 'Date and Time');
define('lg_filter_requests_ogspecial', 'Special Columns');
define('lg_filter_requests_ogother', 'Other');
define('lg_filter_requests_ointegrations', 'Integrations');
define('lg_filter_requests_thermostat', 'Thermostat');
