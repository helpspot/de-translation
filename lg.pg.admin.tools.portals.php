<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_portals_title','Secondary Portals');
define('lg_admin_portals_instructions','Installation Instructions');
define('lg_admin_portals_viewinstructions','View Instructions');
define('lg_admin_portals_instructionsnote','These instructions only need to be performed if you have updated the URL. Otherwise there is no need to update the config.php or index.php files.');
define('lg_admin_portals_desc','Secondary portals are used to support different websites, customers, or divisions. Creation is a two phases process, the first requires completion of the form below. The second outlines the file system configuration steps on the server. More information on secondary portals can be found in the <a href="https://support.helpspot.com/index.php?pg=kb.chapter&id=63" target="_blank">admin manual</a>.');
define('lg_admin_portals_showdel','Show Inactive Portals');
define('lg_admin_portals_noshowdel','Return to Portals');
define('lg_admin_portals_colid','ID');
define('lg_admin_portals_colname','Portal');
define('lg_admin_portals_colhost','URL');
define('lg_admin_portals_visit','visit');
define('lg_admin_portals_add','Add a Secondary Portal');
define('lg_admin_portals_edit','Edit Portal');
define('lg_admin_portals_del','Make Portal Inactive');
define('lg_admin_portals_delwarn','Are you sure you want to make this portal inactive?');
define('lg_admin_portals_buttonadd','Add Portal');
define('lg_admin_portals_buttonsave','Save Portal');
define('lg_admin_portals_sportalname','Portal Name');
define('lg_admin_portals_sportalnameex','Name shown in the portal banner');
define('lg_admin_portals_sportalphone','Portal Phone');
define('lg_admin_portals_sportalphoneex','Phone number to display on the portal');
define('lg_admin_portals_tportalmsg','Portal Homepage Message');
define('lg_admin_portals_tportalmsgex','If left blank, the primary portal homepage message will be used. HTML Allowed.');
define('lg_admin_portals_shost','Portal URL');
define('lg_admin_portals_shostex','URL of the portal homepage. This can be on the same domain as the primary portal or a different one. ex: http://second.domain.com');
define('lg_admin_portals_shostnote','Changes to this setting require the config.php file to be updated');
define('lg_admin_portals_sportalpath','File Directory Path');
define('lg_admin_portals_sportalpathex','Directory which corresponds to the URL above. The path must be on the same server as the primary portal or a networked drive. ex: /var/www/portal, c:\inetpub\portal');
define('lg_admin_portals_cfs','Custom Fields');
define('lg_admin_portals_cfsex','Selected custom fields will be available in this portal');
define('lg_admin_portals_cfsempty','There are no public custom fields.');
define('lg_admin_portals_cats','Categories');
define('lg_admin_portals_catsex','Selected categories will be available in this portal');
define('lg_admin_portals_catsempty','There are no public categories.');
define('lg_admin_portals_kbs','Knowledge Books');
define('lg_admin_portals_kbsex','Selected books will be available in this portal');
define('lg_admin_portals_kbsempty','There are no public knowledge books.');
define('lg_admin_portals_forums','Forums');
define('lg_admin_portals_forumsex','Selected forums will be available in this portal');
define('lg_admin_portals_forumsempty','There are no public forums.');
define('lg_admin_portals_mailboxes','Customer Log-in View');
define('lg_admin_portals_mailboxesex','Customers logged into this portal will see requests created from this portal as well as those created via the mailboxes selected.');
define('lg_admin_portals_mailboxesempty','There are no mailboxes.');
define('lg_admin_portals_sendfrom','Send Emails From');
define('lg_admin_portals_sendfromex','Emails generated from this portal will be sent from this mailbox.');
define('lg_admin_portals_sendfromdef','Default Mailbox');
define('lg_admin_portals_created','Portal Created');
define('lg_admin_portals_edited','Portal Edited');
define('lg_admin_portals_ername','A portal name is required');
define('lg_admin_portals_erhost','A URL is required');
define('lg_admin_portals_erpath','A file path is required');

define('lg_admin_portals_inst_step1','Step 1');
define('lg_admin_portals_inst_step2','Step 2');
define('lg_admin_portals_inst_step3','Step 3');
define('lg_admin_portals_inst_step4','Step 4');
define('lg_admin_portals_inst_step1_p1','Create a file called config.php at this location');
define('lg_admin_portals_inst_step1_p2','Copy and paste the text below into the config.php file');
define('lg_admin_portals_inst_step2_p1','Create a file called index.php at this location');
define('lg_admin_portals_inst_step2_p2','Copy and paste the text below into the index.php file');
define('lg_admin_portals_inst_step3_p1','Create an empty folder named <b>custom_templates</b> in this location');
define('lg_admin_portals_inst_step3_p2','This is where you can place custom versions of portal templates that will apply to this portal only. This folder works exactly like the /custom_templates folder of the primary portal, but is specific to this secondary portal.');
define('lg_admin_portals_inst_step3_p3','The file structure of');
define('lg_admin_portals_inst_step3_p4','should appear as below');
define('lg_admin_portals_inst_note2','If you want emails to customers from particular email addresses to link back to this portal do not forget to edit the <u>public notes to customers</u> template on the mailbox page (Admin->Mailboxes). Replace <b>##REQUESTCHECKURL##</b> with <b>##PORTAL%s_REQUESTCHECKURL##&id=##ACCESSKEY##</b> in both the text and HTML versions of the email template.');
define('lg_admin_portals_inst_note1','The portal should now be visible at');
?>
