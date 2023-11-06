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

define('lg_inst_welcome', '<strong>Welcome to the HelpSpot family!</strong><br />Installation takes just a few moments so let\'s get started. ');
define('lg_inst_config', 'You must rename .env.example to .env and customize the .env file before continuing');
define('lg_inst_start', 'Start Installation');
define('lg_inst_lang', 'Language');
define('lg_inst_license', 'License');
define('lg_inst_viewlicense', 'View License Agreement');
define('lg_inst_agree', 'Check if you agree to the license terms above');
define('lg_inst_must_agree', 'You must accept the license terms to continue');
define('lg_inst_cont', 'Continue');
define('lg_inst_prepared_global', 'Global Responses');
define('lg_inst_prepared_my', 'My Responses');
define('lg_inst_namefirstlast', 'Please provide a first and last name');
define('lg_inst_selecttz', 'Please select a time zone');
define('lg_inst_validemail', 'Please provide a valid email');
define('lg_inst_validpassword', 'Please provide a password');
define('lg_inst_checkdb', 'Can connect to database');
define('lg_inst_checknotdb', 'HelpSpot can not connect to the database. Please check your database settings in the .env file.');
define('lg_inst_checkmysql4', 'MySQL 5.6 or greater required.');
define('lg_inst_checkmysql4update', 'Your MySQL database is less than version 4.1.2. HelpSpot 2.0 and higher require MySQL 4.1.2 or greater. Please upgrade your database and then continue the HelpSpot upgrade.');
define('lg_inst_checkdberror', 'Error reported');
define('lg_inst_checkdbmssql', 'Check that the database user is running as owner and that you are using SQL Authentication. If you continue to have trouble please visit our SQL Server <a href="https://support.helpspot.com/index.php?pg=kb.page&id=13">troubleshooting page</a>.');
define('lg_inst_checkdbmysql', 'If you are running MySQL 5 on Windows you may also need to install the MyODBC connectors from the MySQL site.');
define('lg_inst_checkemail', 'PHP IMAP extension installed');
define('lg_inst_checknotemail', 'This extension is optional and you may continue the installation without it, however, email integration will not be available. You can install the extension later without needing to reinstall HelpSpot.');
define('lg_inst_checkxml', 'PHP XML extension installed');
define('lg_inst_checknotxml', 'This extension is optional and you may continue the installation without it, however, Live Lookup will not be available. You can install the extension later without needing to reinstall HelpSpot.');
define('lg_inst_checkphp', 'PHP version 5.6 or higher');
define('lg_inst_checknotphp', 'HelpSpot requires PHP version 5.6.0 or higher to run');
define('lg_inst_checkzlib', 'PHP ZLIB extension installed');
define('lg_inst_checknotzlib', 'This extension is optional, however, having the extension available allows HelpSpot to compress web pages making the system feel more responsive to users by allowing faster page loading.');
define('lg_inst_checkmbstring', 'PHP MBSTRING extension installed');
define('lg_inst_checknotmbstring', 'This extension is optional, however, having the extension available allows HelpSpot to work correctly with special language characters. If your help desk receives non-english characters you should enable this extension.');
define('lg_inst_checktidy', 'PHP TIDY extension installed');
define('lg_inst_checknotidy', 'This extension is optional, however, security and rendering of HTML emails are greatly improved with it installed.');
define('lg_inst_checksessauto', 'PHP Session auto start off');
define('lg_inst_checknosessauto', 'This php.ini setting must be off or logins will not work correctly, please change the setting to off and refresh.');
define('lg_inst_uploaddir', 'PHP.ini upload_tmp_dir writable');
define('lg_inst_uploaddirempty', 'Your PHP.ini has no directory specified for the upload_tmp_dir variable or the directory specified is not writable by the web server. Without this information you may have trouble uploading files and/or sending email attachments. After the installation completes you should address this issue to avoid any problems.');
define('lg_inst_permcheck', 'Source file permissions');
define('lg_inst_permwarning', 'Your HelpSpot source files (some or all) have permissions which make them writable by the web server (777). HelpSpot does not write to its source files in anyway. Please change your file permissions to be less open.');
define('lg_inst_permcheckok', 'OK');
define('lg_inst_datadir', 'Data Directory Permissions');
define('lg_inst_datadirnowrite', 'The "data" directory or subdirectories are not writable');
define('lg_inst_help', 'Get Support');
define('lg_inst_of', 'of');
define('lg_inst_tz', 'Installation Time Zone');
define('lg_inst_tzchange', 'Please confirm your timezone');
define('lg_inst_page2', 'Your customer ID and license file should have been emailed to you. If you did not receive them or do not have them please email us using the link at the bottom of the page.');
define('lg_inst_installer', 'Installer: Step ');
define('lg_inst_upgradehs', 'Upgrade HelpSpot');
define('lg_inst_companyhd', 'Company/Help Desk Name');
define('lg_inst_custid', 'Your Customer ID');
define('lg_inst_licensefile', 'Upload Your License File');
define('lg_inst_licensefile_cli', 'Path To Your License File');
define('lg_inst_notemail', 'Notification Email Address');
define('lg_inst_notnote', 'This is the email address used when HelpSpot sends out notifications. If you plan on integrating HelpSpot with one or more of your support email accounts you may want to set this address to one of those. Doing so allows HelpSpot to track any replies to notification emails.');
define('lg_inst_youremail', 'Your Email Address');
define('lg_inst_yourpassword', 'Your Password (Minimum of 8 characters, at least one letter, number, symbol, or characters and mixed casing)');
define('lg_inst_yourname', 'Your Name');
define('lg_inst_finish', 'Finish Installation');
define('lg_inst_endtop1', 'HelpSpot has been installed!');
define('lg_inst_endtop2', 'You still need to setup the automated tasks for email integration and reminders to work and don\'t forget to delete this installer script.');
define('lg_inst_loc', 'Login Location');
define('lg_inst_login1', 'Login with email');
define('lg_inst_login2', 'Password');
define('lg_inst_empty', 'Please fill in this field');
define('lg_inst_unabletodb', 'Unable to connect to the database, please check the .env file');

// Default Categories
define('lg_inst_cat_number_cats', 6); // Number of default categories to install

// Default setup for internal facing support
define('lg_inst_cat_def', 'Software');
define('lg_inst_cat_reptags', 'Operating System, Mac, Windows, Linux, MS Office, Browser');	//leave commas
define('lg_inst_cat2_def', 'Hardware');
define('lg_inst_cat2_reptags', 'Desktop, Laptop, Monitor, Peripheral, Projector, TV, Phone');	//leave commas
define('lg_inst_cat3_def', 'Server');
define('lg_inst_cat3_reptags', 'Offline, Performance, Linux, Windows, RAM, Storage, Networking');	//leave commas
define('lg_inst_cat4_def', 'Human Resources');
define('lg_inst_cat4_reptags', 'New Hire, Benefits, Policy, Time Off');	//leave commas
define('lg_inst_cat5_def', 'Maintenance');
define('lg_inst_cat5_reptags', 'Grounds, Buildings, Electric, Plumbing, Furniture');	//leave commas
define('lg_inst_cat6_def', 'Other');
define('lg_inst_cat6_reptags', 'Wrong Email, Notification');	//leave commas

// Default setup for external facing support
define('lg_inst_cat_def_external', 'Account Question');
define('lg_inst_cat_reptags_external', 'Status, Renewal, Rewards, Cancel');	//leave commas
define('lg_inst_cat2_def_external', 'Technical Issue');
define('lg_inst_cat2_reptags_external', 'Installation, On-boarding, Browser, Feature, Bug');	//leave commas
define('lg_inst_cat3_def_external', 'Development');
define('lg_inst_cat3_reptags_external', 'Software Bug, Feature Request');	//leave commas
define('lg_inst_cat4_def_external', 'Sales');
define('lg_inst_cat4_reptags_external', 'Pricing, Demo, Discount, Upgrade, Downgrade, Pre-Sales');	//leave commas
define('lg_inst_cat5_def_external', 'How To');
define('lg_inst_cat5_reptags_external', 'User Management, Features, Configuration, Optimization');	//leave commas
define('lg_inst_cat6_def_external', 'Other');
define('lg_inst_cat6_reptags_external', 'Wrong Email, Notification');	//leave commas

define('lg_inst_status1', 'Problem Solved');
define('lg_inst_status2', 'Escalated');
define('lg_inst_status3', 'Waiting for Reply');
define('lg_inst_status4', 'Customer Found Solution');
define('lg_inst_status5', 'Customer Unreachable');
define('lg_inst_statusactive', 'Active');
define('lg_inst_statusspam', 'SPAM');
define('lg_inst_upgradenote', 'Upgrade from version %s to %s?');
define('lg_inst_upgradenow', 'Upgrade Now');
define('lg_inst_upgradecomp', 'Upgraded!');
define('lg_inst_upgradecomp2', 'HelpSpot is ready to go!');
define('lg_inst_upgradedberrors', 'Upgrade Database Errors');
define('lg_inst_upgradedberrors2', 'These errors are often due to database user permissions. Please fix the permissions or other error source and re-run <a href="/install">the installation</a>.');
define('lg_inst_upgradelogin', 'Continue to HelpSpot >');
define('lg_inst_upgradbackup', 'Be sure to backup your database before upgrading.');
define('lg_inst_upgradephase2', 'Performing Phase 2');
define('lg_inst_upgradephase2_warning', 'This page is auto refreshing. <u>Do not leave</u> until the completed button appears.');
define('lg_inst_upgradephase2_updated', 'Updated %s of %s records');
define('lg_inst_langpackreminder', 'Your installation is currently using a language pack other than the default (english-us). You must merge your language pack changes with the new /helpspot/lang/english-us files before performing this upgrade.');
define('lg_inst_licbad', 'Your license does not appear to be valid. It may also be that your Customer ID is entered incorrectly. Please try again. If you continue to have trouble <a href="mailto:customer.service@userscape.com">contact UserScape</a>.');
define('lg_inst_portal_msg', 'Welcome to the support center where you\'ll find our documentation and support contact form.');
define('lg_inst_dbnotloaded', 'Your .env file indicates that you want to use %s as your database. However that extension is not enabled in your PHP configuration. You must modify your php.ini file to enable the extension.');
define('lg_inst_dbnotloadedex', 'For example, on Windows if you needed to enable the MS SQL extension you would find this line in the php.ini file: <br><br> ;extension=php_sqlsrv.dll <br><br> remove the leading semicolon and save the file. Note that you would still need to make sure the php_sqlsrv.dll extension file was in the correct extension directory as defined in the php.ini (usually c:\WINDOWS)');
define('lg_inst_expiredsupport', 'Your support contract has expired. In order to upgrade you will need to renew your support contract.');
define('lg_inst_expiredsupportrenew', 'Renew Support');
define('lg_inst_note', 'Note');
define('lg_inst_defaultsearch', 'Default Search');
define('lg_inst_settings_smtphost', 'SMTP Host');
define('lg_inst_settings_smtphostex', 'URL to SMTP server. URL to SMTP server. e.g. smtp2.example.com');
define('lg_inst_settings_smtpuser', 'SMTP Username');
define('lg_inst_settings_smtppass', 'SMTP Password');
define('lg_inst_settings_smtpprotocol', 'SMTP Protocol (none, ssl, tls)');
define('lg_inst_settings_smtpport', 'SMTP Port');
define('lg_inst_templatechange_200', '
<p>HelpSpot version 2 has significant changes to the portal templates. The portal <b>will not function</b> correctly if
any customizations have been made to the templates listed below.</p>

<ul>
	<li>
		css.tpl.php
	</li>
	<li>
		forums.posts.tpl.php
	</li>
	<li>
		forums.topics.tpl.php
	</li>
	<li>
		header.tpl.php
	</li>
	<li>
		index.tpl.php
	</li>
	<li>
		request.tpl.php
	</li>
	<li>
		request.check.tpl.php
	</li>
</ul>

<p>Customized files can be found in the /custom_templates directory. If none of these files are in the directory, you may finish the upgrade now.</p>

<p>If any have been customized you must first make the required changes.</p>

<h3>Template Update Instructions:</h3>

<p>If you have a text editor available that can do file diff\'s, we suggest running a diff on your modified files against the new portal templates in /helpspot/templates. A manual comparison of the files can be done with the help of the change outlines provided in the manual.</p>

<p><a href="https://support.helpspot.com/index.php?pg=kb.page&id=155" target="_blank">Version 2 - Template Changes</a></p>');

define('lg_inst_templatechange_240', '
<p>HelpSpot version 2.4 has significant changes to the portal templates. The portal <b>will not function</b> correctly if
any customizations have been made to the templates listed below.</p>

<ul>
	<li>
		css.tpl.php
	</li>
	<li>
		email.tpl.php
	</li>
	<li>
		index.tpl.php
	</li>
	<li>
		js.tpl.php
	</li>
	<li>
		navigation.tpl.php
	</li>
	<li>
		request.tpl.php
	</li>
	<li>
		request.check.tpl.php
	</li>
	<li>
		searchbox.tpl.php
	</li>
</ul>

<p>Customized files can be found in the /custom_templates directory. If none of these files are in the directory, you may finish the upgrade now.</p>

<p>If any have been customized you must first make the required changes.</p>

<h3>Template Update Instructions:</h3>

<p>If you have a text editor available that can do file diff\'s, we suggest running a diff on your modified files against the new portal templates in /helpspot/templates. A manual comparison of the files can be done with the help of the change outlines provided in the manual.</p>

<p><a href="https://support.helpspot.com/index.php?pg=kb.page&id=189" target="_blank">Version 2.4 - Template Changes</a></p>');

define('lg_inst_templatechange_260', '
<p>HelpSpot version 2.6.0 has significant changes to the portal templates. The portal <b>will not function</b> correctly if
any customizations have been made to the templates listed below.</p>

<ul>
	<li>
		css.tpl.php
	</li>
	<li>
		email.tpl.php
	</li>
	<li>
		forums.posts.tpl.php
	</li>
	<li>
		forums.topics.tpl.php
	</li>
	<li>
		js.tpl.php
	</li>
	<li>
		request.tpl.php
	</li>
</ul>

<p>Customized files can be found in the /custom_templates directory. If none of these files are in the directory, you may finish the upgrade now.</p>

<p>If any have been customized you must first make the required changes.</p>

<h3>Template Update Instructions:</h3>

<p>If you have a text editor available that can do file diff\'s, we suggest running a diff on your modified files against the new portal templates in /helpspot/templates. A manual comparison of the files can be done with the help of the change outlines provided in the manual.</p>

<p><a href="https://support.helpspot.com/index.php?pg=kb.page&id=298" target="_blank">Version 2.6.0 - Template Changes</a></p>');

define('lg_inst_emailtemplatechange_200', 'The email auto response and all email templates now have HTML versions which you may need to modify to match your existing text versions. New template tags are also available in all templates.');

define('lg_inst_templatechange_301', '
<p>HelpSpot version 3.0.1 has significant changes to the portal templates. The portal <b>will not function</b> correctly if
any customizations have been made to the templates listed below.</p>

<ul>
	<li>
		css.tpl.php
	</li>
	<li>
		footer.tpl.php
	</li>
	<li>
		forums.posts.tpl.php
	</li>
	<li>
		forums.topics.tpl.php
	</li>
	<li>
		header.tpl.php
	</li>
	<li>
		home.tpl.php
	</li>
	<li>
		index.tpl.php
	</li>
	<li>
		kb.page.tpl.php
	</li>
	<li>
		request.check.tpl.php
	</li>
	<li>
		request.tpl.php
	</li>
	<li>
		search.tpl.php
	</li>
	<li>
		searchbox.tpl.php
	</li>
</ul>

<p>Customized files can be found in the /custom_templates directory. If none of these files are in the directory, you may finish the upgrade now.</p>

<p>If any have been customized you must first make the required changes.</p>

<h3>Template Update Instructions:</h3>

<p>If you have a text editor available that can do file diff\'s, we suggest running a diff on your modified files against the new portal templates in /helpspot/templates. A manual comparison of the files can be done with the help of the change outlines provided in the manual.</p>

<p><a href="https://support.helpspot.com/index.php?pg=kb.page&id=339" target="_blank">Version 3.0.1 - Template Changes</a></p>');

define('lg_inst_welcomereq', '
Welcome to HelpSpot!

Don\'t forget to visit our Knowledge Books [1] for documentation and usage tips.  Feedback is always welcome, so drop us a line customer.service@userscape.com or submit a request [2].

I would also recommend taking a look through the settings under Admin -> Settings. There are many features there which will allow you to customize HelpSpot. To give one example, if you want to add custom fields to track additional data with requests, you can add them from Admin -> Custom Fields.

For a quick overview on how to get started, try the getting started guide:
[https://support.helpspot.com/index.php?pg=kb.book&id=11](https://support.helpspot.com/index.php?pg=kb.book&id=11). If you have any questions or need help figuring out how to do something in HelpSpot, don’t hesitate to let us know - we’re always here to help!

Sincerely,
Ian Landsman, Founder

[1] - [https://support.helpspot.com/index.php?pg=kb](https://support.helpspot.com/index.php?pg=kb)
[2] - [https://support.helpspot.com/index.php?pg=request](https://support.helpspot.com/index.php?pg=request)');

//START OF EMAIL TEMPLATES. - TO CHANGE THESE TEMPLATES IN YOUR INSTALLATION GO TO Admin->Tools->Modify Email Templates
define('lg_inst_et_portal_reqcreated', '
{{ $replyabove }}

Your request, as follows, has been received and is being reviewed by our support staff.

Don\'t forget you can review the status of the this request and add updates by going to:
{{ $requestcheckurl }}

Request access key: {{ $accesskey }}

Thank You

REQUEST INFORMATION
-------------------------------------------
{{ $message }}
');

define('lg_inst_et_forumreply', '
# FORUM REPLY

{{ $message }}

{{ $postername }}
-------------------------------------------

Reply at: {{ $replyurl }}
');

define('lg_inst_et_staff', '
{{ $replyabove }}

# {{ $label }}

{{ $message }}
-------------------------------------------

{{ $requestdetails }}
');

define('lg_inst_et_newstaff', '
Welcome-

Your HelpSpot account has been created. You can access the site at {{ $helpspoturl }} using the account information provided below.

Your account details are:

email:    {{ $email }}
password: {{ $password }}

Thank You
');

define('lg_inst_et_ccstaff', '
{{ $replyabove }}

# Request notification from {{ $name }}

{{ $message }}
-------------------------------------------
View complete request: {{ $requestcheckurl }}
');

define('lg_inst_et_public', '
{{ $replyabove }}

{{ $message }}

-------------------------------------------
View the complete request history:
{{ $requestcheckurl }}

Request access key: {{ $accesskey }}
');

define('lg_inst_et_reminder', '
{{ $replyabove }}

# REMINDER

{{ $message }}
-------------------------------------------

{{ $requestdetails }}
');

define('lg_inst_et_external', '
{{ $replyabove }}

{{ $message }}
');

define('lg_inst_et_portal_reqcreated_html', '
<html>
<body>

{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Request Received</td>
<td align="right">
<a href="{{ $requestcheckurl }}">View the complete request history</a>
</td>
</tr>
</table>

<br />

<p>Your request, as follows, has been received and is being reviewed by our support staff.</p>

<hr width="80%" /><br />

{{ $message }}

</body>
</html>
');

define('lg_inst_et_external_html', '
<html>
<body>

{{ $replyabove }}

{{ $message }}

</body>
</html>
');

define('lg_inst_et_staff_html', '
<html>
<body>

{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">{{ $label }}</td>
<td align="right">
<a href="{{ $mobilelink }}">View in App</a> - <a href="{{ $requestcheckurl }}">View the request</a>
</td>
</tr>
</table>

<br />

{{ $message }}

<br /><hr width="80%" /><br />

{{ $requestdetails_html }}

</body>
</html>
');

define('lg_inst_et_ccstaff_html', '
<html>
<body>

{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Request Notification from {{ $name }}</td>
<td align="right">
<a href="{{ $mobilelink }}">View in App</a> - <a href="{{ $requestcheckurl }}">View the complete request history</a>
</td>
</tr>
</table>

<br />

{{ $message }}

</body>
</html>
');

define('lg_inst_et_public_html', '
<html>
<body>

{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Request Update</td>
<td align="right">
<a href="{{ $requestcheckurl }}">View the complete request history</a>
</td>
</tr>
</table>

<br />

{{ $message }}

</body>
</html>
');

define('lg_inst_et_reminder_html', '
<html>
<body>

{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Reminder</td>
</tr>
</table>

<br />

{{ $message }}

<br /><hr width="80%" /><br />

{{ $requestdetails_html }}

</body>
</html>
');

define('lg_inst_et_forumreply_html', '
<html>
<body>

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Forum Reply</td>
</tr>
</table>

<br />

{{ $message }}

<br /><br />

<b>{{ $postername }}</b>

<br /><hr width="80%" /><br />

Reply at: <a href="{{ $replyurl }}">{{ $replyurl }}</a>

</body>
</html>
');

define('lg_inst_et_newstaff_html', '
<html>
<body>

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">HelpSpot Login</td>
</tr>
</table>

<p>Welcome-</p>

<p>Your HelpSpot account has been created. You can access the site at <a href="{{ $helpspoturl }}">{{ $helpspoturl }}</a> using the account information provided below.</p>

<p>Your account details are:</p>

<table>
<tr><td><b>Email:</b></td><td> {{ $email }}</td></tr>
<tr><td><b>Password:</b></td><td> {{ $password }}</td></tr>
</table>

<p>Thank You</p>

</body>
</html>
');

define('lg_inst_et_sms', '{{ $message }}');

define('lg_inst_et_partials_replyabove', '{{ $replyabove_text }}\n-------------------------------------------\n');
define('lg_inst_et_partials_replyabove_html', '
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
	<td style="color:#999;padding: 10px 10px 10px 0px; text-align:center;" align="center">
		{{ $replyabove_text }}
	</td>
</tr>
</table>');

define('lg_inst_et_portal_reqcreated_subject', '{{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_external_subject', '{{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_staff_subject', '{{ $urgent }} {{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_ccstaff_subject', '{{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_public_subject', '{{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_reminder_subject', '{{ $email_subject }} {{ $tracking_id }}');
define('lg_inst_et_forumreply_subject', '{{ $email_subject }}');
define('lg_inst_et_newstaff_subject', '{{ $email_subject }}');
