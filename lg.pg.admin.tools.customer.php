<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_tools_customer_title','Customer Tools');
define('lg_admin_tools_customer_manage_data','Manage Customer Data');
define('lg_admin_tools_customer_export_data','Export Customer Data');
define('lg_admin_tools_customer_export_email','Export by Email');
define('lg_admin_tools_customer_email','Email');
define('lg_admin_tools_customer_email_address','Email Address');
define('lg_admin_tools_customer_export','Export');
define('lg_admin_tools_customer_delete_data','Delete Customer Data');
define('lg_admin_tools_customer_delete_request','Delete a request');
define('lg_admin_tools_customer_delete_request_note','Delete a request note');
define('lg_admin_tools_customer_delete_request_note_id','Note ID');
define('lg_admin_tools_customer_delete_request_note_info','This will permanently delete a single request history item along with any associated attachments.');
define('lg_admin_tools_customer_delete','Delete');
define('lg_admin_tools_customer_request_id','Request ID');
define('lg_admin_tools_customer_request_id_note','This will permanently delete a single request');
define('lg_admin_tools_customer_delete_by_email','Delete by Email');
define('lg_admin_tools_customer_delete_by_email_note','This will permanently delete anything in the database related to an email address.');
define('lg_admin_tools_customer_delete_by_id','Delete by Customer ID');
define('lg_admin_tools_customer_delete_by_id_note','This will permanently delete anything in the database related to a customer ID.');
define('lg_admin_tools_customer_sure','Are you sure you want to delete this?');
define('lg_admin_tools_customer_agree','You must type "I AGREE" to confirm.');
define('lg_admin_tools_customer_mutli_found','We found %s requests for %s. Are you sure you want to delete these?');
define('lg_admin_tools_customer_one_found','Are you sure you want to delete this?');
define('lg_admin_tools_customer_warning','<b>WARNING:</b> This operation is immediate and will <b>permanently delete</b>. Type "I AGREE" below to delete.');
define('lg_admin_tools_customer_confirm','Confirm');
define('lg_admin_tools_customer_finished','The item(s) have been deleted.');
define('lg_admin_tools_customer_delete_attachment','Delete an attachment');
define('lg_admin_tools_customer_delete_attachment_note','This will permanently delete an attachment');
?>
