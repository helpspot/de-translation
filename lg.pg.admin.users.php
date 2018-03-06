<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_users_title','Staff');	
define('lg_admin_users_showdel','Show Inactive Staff');
define('lg_admin_users_noshowdel','Return to Active Staff');
define('lg_admin_users_addcat','Add a Staff Member');
define('lg_admin_users_addbutton','Add Staff');
define('lg_admin_users_editcat','Edit: ');
define('lg_admin_users_mgprefs','Manage Settings');
define('lg_admin_users_editbutton','Save Staffer');
define('lg_admin_users_firstname','First Name');
define('lg_admin_users_lastname','Last Name');
define('lg_admin_users_email','Email');
define('lg_admin_users_email_confirm','Confirm Email');
define('lg_admin_users_username','Black Box/LDAP/AD Username');
define('lg_admin_users_usernameex','Needed only if using custom black box authentication or LDAP/AD');
define('lg_admin_users_password','Password');
define('lg_admin_users_changepassword','Enter a new password to change password');
define('lg_admin_users_changeavatar','Change Image');
define('lg_admin_users_uploadavatar','Upload a Custom Image');
define('lg_admin_users_avatars_classics','Classic');
define('lg_admin_users_avatars_monsters','Monsters');
define('lg_admin_users_avatars_robots','Robots');
define('lg_admin_users_avatars_animals','Animals');
define('lg_admin_users_avatars_generic','Generic People');
define('lg_admin_users_avatars_nature','Nature');
define('lg_admin_users_avatars_upload','Images should be a GIF, PNG, or JPG that is 48px wide by 48px high and smaller than 50K');
define('lg_admin_users_emailnewuser','Email this new staff member their access information?');	
define('lg_admin_users_nofyemail','Send notifications via email');
define('lg_admin_users_nofyemail2','Send notifications via the alternate email');
define('lg_admin_users_nofyemail2_missing','Please first enter an alternate email');
define('lg_admin_users_nofysms','Send ALL notifications via SMS Text Messages');
define('lg_admin_users_nofysmsurgent','Send ONLY URGENT notifications via SMS Text Messages');
define('lg_admin_users_comm','Communication');
define('lg_admin_users_prefs','Preferences');
define('lg_admin_users_defpublic','Default notes to public on the request page');
define('lg_admin_users_hidewysy','Do not use the WYSIWYG editor in the knowledge books');
define('lg_admin_users_shortcuts','Enable Keyboard Shortcuts in Workspace');
define('lg_admin_users_shortcutstitle','Keyboard Shortcuts');
define('lg_admin_users_sidebarsearch','Search History by Default in Sidebar');
define('lg_admin_users_sidebarsearchtitle','Sidebar Search');
define('lg_admin_users_rhview','Default History View');
define('lg_admin_users_rhview1','Full History');
define('lg_admin_users_rhview4','Only Notes');
define('lg_admin_users_htmlemail_editor','Request Note Editor');
define('lg_admin_users_htmlemail_editorex','Default editor for HTML request notes (HTML emails must be enabled)');
define('lg_admin_users_htmlemail_default','System default');
define('lg_admin_users_htmlemail_wysiwyg','WYSIWYG - visual editor');
define('lg_admin_users_htmlemail_markdown','Formatted Text - convert text to HTML');
define('lg_admin_users_noembed','Do not embed images in the request history');
define('lg_admin_users_returntorequest','After closing request');
define('lg_admin_users_returntorequest0','Return to workspace');
define('lg_admin_users_returntorequest1','Return to request');
define('lg_admin_users_returntorequest2','Move to next request in queue/filter');
define('lg_admin_users_showgs','Show the Get Started tab');
define('lg_admin_users_reqhistorylimit','# Request History Events');
define('lg_admin_users_reqhistorylimitex','Number of request history items shown by default');
define('lg_admin_users_notification','Notification');
define('lg_admin_users_notifynewreq','Notify on Unassigned New Requests');
define('lg_admin_users_notifynewreqdesc','Notifications are via the methods above');
define('lg_admin_users_email2','Alternate Email');
define('lg_admin_users_phone','Phone');
define('lg_admin_users_sig','Email Signature');
define('lg_admin_users_smsnum','SMS Phone Number');
define('lg_admin_users_smsnumex','exclude dashes');
define('lg_admin_users_default','Default Contact');
define('lg_admin_users_assigncats','Assign to Categories');
define('lg_admin_users_assigncatsdesc','Categories are used to group requests. Linking support staff
										to selected categories will allow them to be assigned requests
										within those categories.');
define('lg_admin_users_outofoffice','Out of Office Status');
define('lg_admin_users_outofofficedef','User is Available');
define('lg_admin_users_outofofficefwd','Forward requests to: ');
define('lg_admin_users_photo','Photo/Icon');
define('lg_admin_users_phototitle','Select a photo/icon');
define('lg_admin_users_fbadded','Staff added');	
define('lg_admin_users_fbedited','Staff edited');
define('lg_admin_users_fbupdated','Settings updated');
define('lg_admin_users_fbdeleted','Staff member made inactive');	
define('lg_admin_users_fbundeleted','Staff member restored');
define('lg_admin_users_er_fname','Please enter a first name');
define('lg_admin_users_er_lname','Please enter a last name');
define('lg_admin_users_er_pass','Please enter a password. Required, even if using Black Box authentication');
define('lg_admin_users_er_email','Please enter a valid email');
define('lg_admin_users_er_email_confirm','Please confirm the email');
define('lg_admin_users_er_email2','Please enter a valid alternate email');
define('lg_admin_users_er_emaildup','Another staff member is already using this email');
define('lg_admin_users_er_sms','Please provide an SMS phone number');
define('lg_admin_users_er_usernamedup','Another staff member is already using this username');
define('lg_admin_users_er_mailboxcheck','You can not use an email address HelpSpot is checking as a mailbox');
define('lg_admin_users_er_user','When using Black Box authentication you must enter a username');
define('lg_admin_users_nomoreusers','All licenses used. Please deactivate a user or purchase additional licenses.');
define('lg_admin_users_colid','ID');
define('lg_admin_users_coluser','Staff Member');
define('lg_admin_users_colut','Permission Group');		
define('lg_admin_users_colemail','Email');		
define('lg_admin_users_coldel','Make Inactive');
define('lg_admin_users_coldelwarn','Are you sure you want to make this staff member inactive?');
define('lg_admin_users_search','Search: Staff');
define('lg_admin_users_er_default_cat', 'This user is the default contact in at least one category. You must reassign the default contact before this user can be made inactive.');
?>