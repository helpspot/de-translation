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

define('lg_admin_responses_title','Antworten auf Anfrage');	
define('lg_admin_responses_perms','Nutzbar von');
define('lg_admin_responses_recurring', 'Recurring');	
define('lg_admin_responses_foldernameex','Unterordner (bis zu drei Stufen) können erstellt werden durch das Hinzufügen des folgenden Zeichen / z.b.: Accounts / Login / Passwords');
define('lg_admin_responses_myfolder','Meine Antworten');
define('lg_admin_responses_addfolder','Ordner hinzufügen');
define('lg_admin_responses_folder','Ordner');
define('lg_admin_responses_addattachment', 'Add Attachment');
define('lg_admin_responses_advoptions','Anfragen Aktionen');
define('lg_admin_responses_adv_change','Anpassen');
define('lg_admin_responses_adv_add','Insert Into');
define('lg_admin_responses_adv_subject','Emailbetreff');
define('lg_admin_responses_adv_status','Status');
define('lg_admin_responses_adv_category','Kategorie');
define('lg_admin_responses_adv_reptags','Reporting Tags');
define('lg_admin_responses_adv_assigned','zugewiesener Staff');
define('lg_admin_responses_adv_assignednote','Staff muss der zugehörigen Kategorie hinzugefügt sein');
define('lg_admin_responses_adv_note','Note');
define('lg_admin_responses_adv_pub','öffentliche Notiz');
define('lg_admin_responses_adv_priv','private Notiz');
define('lg_admin_responses_adv_ext','externe Notiz');
define('lg_admin_responses_adv_tofield','AN Feld (nur für externe Noizen)');
define('lg_admin_responses_adv_tofield_note', '(for external notes only)');
define('lg_admin_responses_adv_cc','CC Feld');
define('lg_admin_responses_adv_bcc','BCC Feld');
define('lg_admin_responses_adv_sepcomma','Jede Emailadresse mit einem Komma separatieren');
define('lg_admin_responses_adv_emailfrom','Sende Mail von');
define('lg_admin_responses_showdel','Zeige inaktive Antworten');
define('lg_admin_responses_noshowdel','zurück zu aktiven Antworten');
define('lg_admin_responses_colrestitle','Antwort Titel');
define('lg_admin_responses_resdel','Inaktiv setzen');
define('lg_admin_responses_resdelwarn','Antwort wirklich auf Inaktiv setzen?Are you sure you want to make this response inactive?');
define('lg_admin_responses_restore', 'Restore');
define('lg_admin_responses_restorewarn', 'Are you sure you want to restore this response?');
define('lg_admin_responses_search','Suche: Antworten');
define('lg_admin_responses_add','eine Antwort hinzufügen');
define('lg_admin_responses_edit','Bearbeiten: ');
define('lg_admin_responses_addbutton','Antwort hinzufügen');
define('lg_admin_responses_editbutton','Anapssungen speichern');
define('lg_admin_responses_restitle','Antwort Titel');
define('lg_admin_responses_response','Antwortnotiz');
define('lg_admin_responses_createdby','Erstellt von');
define('lg_admin_responses_typeuser','nur Ersteller');
define('lg_admin_responses_typegroup','Gruppe');
define('lg_admin_responses_typeppl','ausgewähle Personen');
define('lg_admin_responses_er_title','Bitte einen Titel für diese Antwort angeben.');
define('lg_admin_responses_er_response','Bitte eine Antwort hinterlassen');
define('lg_admin_responses_er_folder','Bitte einen Ordner wählen/erstellen für diese Antwort.');
define('lg_admin_responses_fbedited','Antwort bearbeitet');
define('lg_admin_responses_fbadded','Antwort hinzugefügt');
define('lg_admin_responses_setactive','Die Antwort wurde aktiviert');
define('lg_admin_responses_setinactive','Diese Antowort wurde deaktiviert');
define('lg_admin_responses_explanation','Vordefinierte Antworten für meist auftauchende Anfragen.');										
define('lg_admin_responses_saveas_details','Neue Antwort benennen.');
define('lg_admin_responses_togglerd','Anfragen Details');
define('lg_admin_responses_togglecf','Benutzerdefinierte Felder');
define('lg_admin_responses_togglenote','Notiz Optionen');
define('lg_admin_responses_scheduling', 'Convert to Recurring Request');
define('lg_admin_responses_scheduling_enabled', 'Enable Recurring Request');
define('lg_admin_responses_scheduling_info', 'HelpSpot creates a new request at the defined interval based on this response. Perfect for regular maintenance tasks or recurring reminders.');
define('lg_admin_responses_scheduling_customerinfo', 'Customer Details (at least one required)');
define('lg_admin_responses_dontemail','Mail nicht versenden');
define('lg_admin_responses_owner', 'Besitzer der Anfrage');
define('lg_admin_responses_create_schedule', 'Create Request');
define('lg_admin_responses__time', 'at/on');
define('lg_admin_responses_first_name', 'First Name');
define('lg_admin_responses_last_name', 'Last Name');
define('lg_admin_responses_email', 'Email');
define('lg_admin_responses_phone', 'Phone');
define('lg_admin_responses_customer_id', 'Customer ID');
