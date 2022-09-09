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

define('lg_ajax_workspacedefault', 'This page is now your default workspace');
define('lg_ajax_au', 'Assigned User');
define('lg_ajax_sub', 'Subscribed');
define('lg_ajax_timeadded', 'Time logged');
define('lg_ajax_timedeleted', 'Time deleted');
define('lg_ajax_timeerr', 'There was an error adding the log time');
define('lg_ajax_timedelerr', 'There was an error deleting the log time');
define('lg_ajax_foldername', 'New Folder Name');
define('lg_ajax_groupname', 'Group Name');
define('lg_ajax_myfilters', 'My Filters');

define('lg_ajax_filtersql', 'Show Filter SQL');
define('lg_ajax_showing', '(first %s only)');

define('lg_ajax_email_sendtestto', 'Address to Email');
define('lg_ajax_email_method', 'Using Method');
define('lg_ajax_email_methodsmtp', 'SMTP Server');
define('lg_ajax_email_methodphp', 'Built in PHP Mail');
define('lg_ajax_email_methodapimail', 'API Mailbox, e.g. Microsoft or Google');
define('lg_ajax_email_sendtest', 'Send Test');
define('lg_ajax_email_subject', 'HelpSpot Email Test');
define('lg_ajax_email_body', 'Your outbound email connection appears to be working correctly.');
define('lg_ajax_email_failed', 'Error');
define('lg_ajax_email_success', 'Your email appears to have sent, please check your email.');

define('lg_livelookup_table', 'Matches');
define('lg_livelookup_noxml', 'Live Lookup requires the PHP XML parser to be installed');
define('lg_livelookup_xmlerror', 'An Error Occurred');
define('lg_livelookup_notfound', 'No customers found');
define('lg_livelookup_insertdata', 'Insert Customer Information');
define('lg_livelookup_xmlparsermsg', 'XML Parser Returned Error');
define('lg_livelookup_xmlview', 'View XML');
define('lg_livelookup_sourcepath', 'Source Path');
define('lg_livelookup_sourcetype', 'Call Type');
define('lg_livelookup_shellexec', 'shell_exec PHP function required for command line Live Lookup');
define('lg_livelookup_livelookupnotsetup1', 'Live Lookup has not be configured by your administrator.');
define('lg_livelookup_livelookupnotsetup2', 'Live Lookup allows direct integration of HelpSpot with your customer data systems such as a CRM, Active Directory, or custom databases. <br /><br />Please <a href="https://support.helpspot.com/index.php?pg=kb.page&id=174" target="_blank">read the overview</a> for more details.');

define('lg_ajaxfield_noxml', 'AJAX custom fields require the PHP XML parser to be installed');
define('lg_ajaxfield_xmlerror', 'An error occurred. Check the error log for details');
define('lg_ajaxfield_notfound', 'No results returned');

define('lg_historysearch_openclose', 'O/C');
define('lg_historysearch_date', 'Created on');
define('lg_historysearch_tnote', 'Request');

define('lg_ajax_origmsg', '-----Original Message-----');

define('lg_ajax_newversion', 'A new version of HelpSpot (%s) has been released. Details available in the <a href="'.action('Admin\AdminBaseController@adminFileCalled', ['pg' => 'admin']).'">admin area</a>');

define('lg_ajax_at_insertmin', 'Insert');

define('lg_ajax_mailboxtestingsuccess', 'Connection Successful');
define('lg_ajax_mailboxerror', 'Error');

define('lg_ajax_ldapsuccess', 'Connection Successful');
define('lg_ajax_ldaperror', 'Error');

define('lg_reminderpopup_reqreminders', 'Request Reminders');
define('lg_reminderpopup_submit', 'Create Reminder');
define('lg_reminderpopup_reminder', 'Note');
define('lg_reminderpopup_date', 'Date and Time');
define('lg_reminderpopup_also', 'Email Reminder To');
define('lg_reminderpopup_remerror', 'Please add a reminder');

define('lg_ajax_push_notobject', 'Your class could not be initiated. Check that class name in your push file to be sure it matches the file name.');
define('lg_ajax_push_error', 'Request push failed. Error returned: ');
define('lg_ajax_push_nofile', 'The request push file does not exist on this server.');
define('lg_ajax_push_metaby', 'Pushed by');
define('lg_ajax_push_metacomment', 'Comment');
define('lg_ajax_push_metadate', 'Date');
define('lg_ajax_push_metato', 'To');
define('lg_ajax_push_metaid', 'ID Returned');

define('lg_ajax_select_draft', 'Restore a Saved Draft');

define('lg_ajax_nh_error', 'Error');
define('lg_ajax_nh_errormsg', 'We could not connect to the UserScape servers. This may be due to a firewall or network issue. Please <a href="https://support.helpspot.com/index.php?pg=request" target="_blank">contact us directly</a>.');
define('lg_ajax_nh_success', 'Thank you, your question has been received!');
define('lg_ajax_nh_success1', 'We will respond to you at');
define('lg_ajax_nh_success2', 'shortly.');

define('lg_search_result', 'Search Results');
define('lg_search_resultkb', 'Book Results');

define('lg_kbui_private', 'Private');
define('lg_kbui_insertlink', 'Link to Page');
define('lg_kbui_linkchapter', 'Link to Chapter');
define('lg_kbui_linkbook', 'Link to Book');
define('lg_kbui_primaryportal', 'Primary Portal');

define('lg_stream_loadmore', 'Load More');

define('lg_ajax_valid_wysiwyg_values', '
<h4>Groups</h4>
<ul>
	<li>undo - undo, redo</li>
	<li>insert - commands for links, table, mediaembed, hr, specialchar</li>
	<li>style - Choice for paragraph, headings, div, etc.</li>
	<li>emphasis - bold, italic, underline</li>
	<li>align - alignment of text</li>
	<li>listindent - choice of ul, ol, indent, outdent, or blockquote.</li>
	<li>format - choice of font-menu and remove formatting.</li>
	<li>tools - find, fullscreen, usersettings.</li>
	<li>language - language, ltrdir, rtldir.</li>
</ul>
<p>The default is: "undo", "insert", "style", "emphasis", "align", "listindent", "format", "tools"
</p>
');

define('lg_saved_success', 'Your settings have been saved');
define('lg_theme_changed', 'Your theme has been changed');

define('lg_admin_portaltemplates_savebutton', 'Save Template');
define('lg_admin_portaltemplates_viewprev', 'View previous customizations for');
define('lg_admin_portaltemplates_originaltemplate', 'Original Template');
