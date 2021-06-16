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

define('lg_admin_portaltemplates_title', 'Modify Portal Templates');
define('lg_admin_portaltemplates_saved', 'Template saved');
define('lg_admin_portaltemplates_notwritable', 'Folder is not writable');
define('lg_admin_portaltemplates_headtemp', 'Template');
define('lg_admin_portaltemplates_headdesc', 'Description');
define('lg_admin_portaltemplates_custom', 'Customized');
define('lg_admin_portaltemplates_headtable', 'Portal Templates');
define('lg_admin_portaltemplates_selectportal', 'Select Portal to Edit');
define('lg_admin_portaltemplates_editarea', 'Editing Area');
define('lg_admin_portaltemplates_editing', 'Editing');
define('lg_admin_portaltemplates_temp_captcha', 'HTML elements for the CAPTCHA system');
define('lg_admin_portaltemplates_temp_css', '(Classic) CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_css_clean', '(Clean) CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_css_blue', '(Blue) CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_css_grey', '(Grey) CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_ie_css', '(Classic) Special IE specific CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_ie_css_clean', '(Clean) Special IE specific CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_ie_css_blue', '(Blue) Special IE specific CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_ie_css_grey', '(Grey) Special IE specific CSS styles used in the portal');
define('lg_admin_portaltemplates_temp_email', 'Page to email a forum poster');
define('lg_admin_portaltemplates_temp_request', 'Submit a request form');
define('lg_admin_portaltemplates_temp_footer', 'HTML footer used across all portal pages');
define('lg_admin_portaltemplates_temp_forums_feed', 'RSS feed for the forums');
define('lg_admin_portaltemplates_temp_forums_posts', 'Page that displays forum posts for a thread');
define('lg_admin_portaltemplates_temp_forums_topics', 'Page that lists forum topics');
define('lg_admin_portaltemplates_temp_forums', 'List of available forums');
define('lg_admin_portaltemplates_temp_header', 'HTML header used across all portal pages');
define('lg_admin_portaltemplates_temp_home', 'The portals homepage');
define('lg_admin_portaltemplates_temp_index', 'A special page that includes the correct template. All pages pass through the index template.');
define('lg_admin_portaltemplates_temp_js', 'Javascript required for the portal');
define('lg_admin_portaltemplates_temp_loginbar', 'The menu bar at the top of the request check pages when a user is logged in.');
define('lg_admin_portaltemplates_temp_kb_book', 'Books table of contents page');
define('lg_admin_portaltemplates_temp_kb_chapter', 'Chapter with list of chapter pages');
define('lg_admin_portaltemplates_temp_kb_page', 'Knowledge book page');
define('lg_admin_portaltemplates_temp_kb_printer_friendly', 'All a knowledge books pages on one page for easy printing.');
define('lg_admin_portaltemplates_temp_kb', 'List of available knowledge books');
define('lg_admin_portaltemplates_temp_maintenance', 'A page which is shown to visitors when the system is in maintenance mode');
define('lg_admin_portaltemplates_temp_moderated', 'Page shown to the user when a form posting is thought to be SPAM');
define('lg_admin_portaltemplates_temp_navigation', 'HTML for side bar navigation used across all portal pages');
define('lg_admin_portaltemplates_temp_request_check', 'Page where customers check their requests');
define('lg_admin_portaltemplates_temp_request_history', 'List of requests visitors see when logged into the portal');
define('lg_admin_portaltemplates_temp_search', 'Search results page');
define('lg_admin_portaltemplates_temp_searchbox', 'HTML for search box used across all portal pages');
define('lg_admin_portaltemplates_temp_tag_search', 'List of pages/topics matching a knowledge tag');
define('lg_admin_portaltemplates_temp_terms', 'HTML Elements for agreeing to the terms and privacy policy.');
define('lg_admin_portaltemplates_temp_login_create', 'Customer account creation page');
define('lg_admin_portaltemplates_temp_login_forgot', 'Customer forgot password page');
define('lg_admin_portaltemplates_temp_login_reset', 'Customer reset password page');

define('lg_admin_portaltemplates_primary', 'Primary Portal');
