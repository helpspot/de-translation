<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_emailtemplates_title','Modify Email Templates');
define('lg_admin_emailtemplates_savebutton','Save Templates');
define('lg_admin_emailtemplates_saved','Templates saved');
define('lg_admin_emailtemplates_forumreply','Forum Topic Subscriber');
define('lg_admin_emailtemplates_staff','Staff Notifications');
define('lg_admin_emailtemplates_newstaff','New Staff Welcome');
define('lg_admin_emailtemplates_ccstaff','Notify Staff on a Request');
define('lg_admin_emailtemplates_public','Public Notes to Customers');
define('lg_admin_emailtemplates_publicex','This is the default public note template. It can be overridden on a per mailbox basis. See individual boxes on the <br /><a href="admin.php?pg=admin.mailboxes">mailbox screen</a>');
define('lg_admin_emailtemplates_externalex','This is the default external note template. You can override it on a per mailbox basis on the mailbox screen.');
define('lg_admin_emailtemplates_reminders','Reminders');
define('lg_admin_emailtemplates_sms','SMS Messages');
define('lg_admin_emailtemplates_trackidmissing','Tracking ID (##TRACKING_ID##) is missing from the subject line of Public Note to Customer. Omitting this will prevent HelpSpot from correctly threading responses.');
define('lg_admin_emailtemplates_partials','Partial Templates');
define('lg_admin_emailtemplates_replyabove','Reply Above');
