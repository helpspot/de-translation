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

//Language used in WYSIWYG - to change you must provide a 639-2 abbreviation from this list: http://www.loc.gov/standards/iso639-2/englangn.html
// The language must also be available. You can see the ones available in this folder: js/tiny_mce/langs
define('lg_WYSIWYG_Lang','gsw');

define('lg_inbox','Posteinang');
define('lg_email','Email');
define('lg_username','Username');
define('lg_password','Passwort');
define('lg_sessionexpired','HelpSpot Session Abgelaufen');
define('lg_js_notification','Benachrichtigung');
define('lg_js_error','Fehler');
define('lg_js_confirmation','Bestätigen');
define('lg_button_ok','OK');
define('lg_button_cancel','Abbrechen');
define('lg_button_close','Schliessen');
define('lg_logintitle','Login');
define('lg_loginbutton','Anmelden');
define('lg_logbackin', 'Log Back In');
define('lg_logged_out', 'You have been logged out!');
define('lg_login_trouble', 'Having trouble logging in?');
define('lg_login_use_default', 'Use HelpSpot\'s default authentication to login and fix any issues');
define('lg_login_authenticating', 'Authenticating...');
define('lg_emailpassword','Passwort neu setzen');
define('lg_emailpasswordsent','Link zum zurücksetzen des Passworts versendet. Bitte überprüfen Sie ihr Mailpostfach.');
define('lg_providemail','Please provide an email');
define('lg_logout','Abmelden');
define('lg_prefs','Einstellungen');
define('lg_options', 'Options');
define('lg_spam','SPAM');
define('lg_trash','Papierkorb');
define('lg_error','Fehler');
define('lg_done','Erfolgreich');
define('lg_errorbox','Ein Fehler ist aufgetreten, siehe Details');
define('lg_databaseerror','Ein Datenbankfehler ist aufgetreten');
define('lg_inactive_text','inaktiv');
define('lg_inactive','<span class="red"> - '.lg_inactive_text.'</span>');
define('lg_restore','Wiederherstellen');
define('lg_restorewarn','Sind Sie sicher, dass Sie wiederherstellen möchten?');
define('lg_default','Standard');
define('lg_out','Aus');
define('lg_enable','Aktivieren');
define('lg_disable','Deaktivieren');
define('lg_cancel','Abbrechen');
define('lg_close','Schliessen');
define('lg_or','oder');
define('lg_saveas','Speichern als');
define('lg_download','Download');
define('lg_attach','Anhang');
define('lg_reattach','neu Anhängen');
define('lg_admin','Administrator');
define('lg_loadingwait','Wird geladen ..... bitte warten');
define('lg_noassign','nicht zugewiesen');
define('lg_documentation','Hilfe');
define('lg_forums','Forums');
define('lg_academy','Training');
define('lg_rss','RSS Feed');
define('lg_social','Social');
define('lg_partner','Partner Programm');
define('lg_twitter','Twitter');
define('lg_twitter_ex','Chatte mit uns auf Twitter');
define('lg_facebook','Facebook');
define('lg_facebook_ex','Werde ein Fan auf unserer Facebookseite');
define('lg_email_ex','weiter empfehlen');
define('lg_trialexpires','Ihr Testzeitraum läuft aus');
define('lg_freestart', 'Need more users, support, or hosting?');
define('lg_upgrade', 'Upgrade to Paid');
define('lg_purchase','Kaufen');
define('lg_purchase_here', 'Purchase here');
define('lg_enabled','Aktiviert');
define('lg_disabled','Deaktiviert');
define('lg_setorder','Reihenfolge bestimmen');
define('lg_trialover','Ihr Testzeitraum oder Ihr Abonnement ist abgelaufen');
define('lg_trialnote','Ihre Version von Helpspot ist abgelaufen. Bitte besuchen Sie die Website UserScape um eine neue Linenz für Ihre Installation zu erwerben.');
define('lg_trialcustid','Kundennummer ID');
define('lg_trialupload','Lizenz');
define('lg_trialbutton','Lizenz Uploaden');
define('lg_mailrule','Mail Regel stimmt überein');
define('lg_automation','Automation stimmt überein');
define('lg_trigger','Trigger stimmt überein');
define('lg_notified','Benachrichtigt');
define('lg_notifiedsms','Benachrichtigt via SMS');
define('lg_sp_check','Bitte Schreibweise überprüfen');
define('lg_sp_resume','Änderung übernehmen');
define('lg_sp_nomisspell','keine Schreibfehler gefunden');
define('lg_sp_nosugg','Keine Vorschläge');
define('lg_sp_revert','Verwerfen');
define('lg_sp_close','Schliessen');
define('lg_sp_checking','Überprüfung...');
define('lg_quicktimeselect','Quick Time Select');
define('lg_quicktimeselectalltime','ganzer Zeitraum');
define('lg_quicktimeselect_today','Heute');
define('lg_quicktimeselect_yesterday','Gestern');
define('lg_mr_emailcusterror','Mail Regel FEHLER: Antwortmail für Kunde ist fehlgeschlagen. Das Mailsystem gibt folgenden Fehler zurück.');
define('lg_at_emailcusterror','Automation FEHLER: EMAIL FEHLGESCHLAGEN. Das Mailsystem gibt folgenden Fehler zurück');
define('lg_at_reqpusherror1','Request Push ERROR: ');
define('lg_at_reqpusherror2','Request Push ERROR: Your class could not be initiated. Check that class name in your push file to be sure it matches the file name.');
define('lg_systemname','System');
define('lg_systemnameportal','Help Desk Nachrichten');
define('lg_jsmenu_appresponseempty','nicht Verfügbar. Die Button oben benutzen um zu erstellen.');
define('lg_response_shortcut', 'Type # for autocompletion');
define('lg_jsmenu_nokb','Keine  knowledge books verfügbar');
define('lg_jsmenu_respmostused','meis genutzt');
define('lg_jsmenu_manageresponses','Antworten verwalten');
define('lg_textversion','Text Version');
define('lg_htmlversion','HTML Version');
define('lg_subjectline','Betreffzeile');
define('lg_no_wysiwyg_textarea_formatting','Formatierungsoptionen');
define('lg_markdown_format_label','Formatted Text Syntax');
define('lg_preview','Vorschau');
define('lg_details','Details');
define('lg_requests','Anfragen');
define('lg_cumulative_percent','Kombinierte Prozentangabe');
define('lg_maintenance_title','Wartungsmodus');
define('lg_maintenance_mode','HelpSpot wurde von einem Administrator in den Wartungsmodus versetzt. Bitte in ein paar Minuten erneut probieren.');
define('lg_maintenance_off','Wartungsmodus deaktivieren (admins only)');
define('lg_default_mailbox','Standart Postfach');
define('lg_primaryportal','Primäres Portal');
define('lg_selectportal','Wählen Sie ein Portal');
define('lg_licenseuploader','Ihre Lizenz unterstützt nicht soviele aktive Benutzer, in Folge wurden Benutzer deaktiviert.');
define('lg_licnotvalid','Lizenz ist ungültig');
define('lg_sort','sortieren');
define('lg_to','zu');
define('lg_and','und');
define('lg_menu','Menu');
define('lg_everyone','Jede/r');
define('lg_onlyme','Nur Ich');
define('lg_mypermgroup','Meine Gruppe');
define('lg_permgroup','Berechtigungsgruppe...');
define('lg_selectedppl','Spezifische Benutzer...');
define('lg_request_initassign','Hinzugefügt wenn erstellt');
define('lg_inline_image','Bilder');
define('lg_checkbox_checkall', 'selektieren/Alle deselektieren');
define('lg_latestblog', 'Neuigkeiten von HelpSpot');
define('lg_newsblog', 'Neuigkeiten');

define('lg_passwordresetfor','Passwort vergessen link für: %s');
define('lg_passwordresetcomplete','Passwort vergessen link für: %s');
define('lg_passwordresetsent','Ein neues Passwort wurde versendet, bitte überprüfen Sie Ihr Postfach.');
define('lg_passwordresetexpired','Passwort vergessen link ist abgelaufen, bitte erneut versuchen.');
define('lg_passwordreset_email_reset','Bitte klicken Sie auf den Link weiter unten. Ein neues Passwort wird generiert und an diese Mailadresse versendet. Wichtig: Dieser Link verfällt nach 15min.

RESET LINK:
%s');
define('lg_passwordreset_email_complete','Ihr Passwort wurde zurückgesetzt.

Neues Passwort:
%s

Tipp: Ihr Passwort kann auf der oberen rechten Navigation unter Einstellungen angepasst werden.');

//This is a regular expression to match the different ways various versions of Microsoft Outlook mark the orginal part of an
//  email message. This is known to work in Outlook 2003 and Outlook Express. You may need to customize it if your organization
//  uses a custom separator.
define('lg_outlookseparator','/-----\s*orginal Nachricht\s*-----/');

//time
define('lg_year','Jahr');
define('lg_month','Monat');
define('lg_week','Woche');
define('lg_day','Tag');
define('lg_days','Tage');
define('lg_hour','Stunde');
define('lg_hours','Stunden');
define('lg_minute','Minute');
define('lg_years','Jahre');
define('lg_months','Monate');
define('lg_weeks','Wochen');
define('lg_minutes','Minuten');
define('lg_second','Sekunde');
define('lg_seconds','Sekunden');
define('lg_creation','Anfrage erstellt am %s');
define('lg_sincepost','%s seit erstem Eintrag');
define('lg_selectdate','Wählen Sie ein Datum aus');
define('lg_selectdatetime','Wählen Sie Datum & Zeit aus');

// lookups
define('lg_lookup_email','Email');
define('lg_lookup_phone','Telefon');
define('lg_lookup_walkin','Walk In');
define('lg_lookup_mail','Email');
define('lg_lookup_webform','Web Formular');
define('lg_lookup_other','Other');
define('lg_lookup_webservice','Web Service');
define('lg_lookup_forum','Forum');
define('lg_lookup_im','Instant Messenger');
define('lg_lookup_fax','Fax');
define('lg_lookup_voicemail','Voicemail');
define('lg_lookup_staffinit','initiert via Mitarbeiter');
define('lg_lookup_widget','Tab Widget');
define('lg_lookup_mobile','HelpSpot Mobile App');

define('lg_lookup_1','Zugewiesen von "%s" zu "%s"');
define('lg_lookup_2','benutzerdefiniertes Feld "%s" angepasst von "%s" auf "%s"');
define('lg_lookup_3','Anfrage gewechselt von "%s" zu "%s"');
define('lg_lookup_4','Statuswechsel von "%s" zu "%s"');
define('lg_lookup_7','Anfrage gewechselt von "%s" zu "%s"');
define('lg_lookup_8','Kategorie angepasst von "%s" zu "%s"');
define('lg_lookup_9','KundenID angepasst von "%s" zu "%s"');
define('lg_lookup_10','Kundenvorname angepasst von "%s" nach "%s"');
define('lg_lookup_11','Kundenachnahme angepasst von "%s" nach "%s"');
define('lg_lookup_12','Kundenemail angepasst von "%s" nach "%s"');
define('lg_lookup_13','Kundentelefonnummer angepasst von "%s" nach "%s"');
define('lg_lookup_14','benutzerdefiniertes Feld "%s" aktualisiert');
define('lg_lookup_15','Reporting tags aktualisiert auf');
define('lg_lookup_17','automatisch zugewiesen von "%s" zu "%s"');
define('lg_lookup_18','ausserhalb des Büros zugewiesen von "%s" zu "%s"');
define('lg_lookup_19','in Papierkorb verschoben');
define('lg_lookup_20','aus dem Papierkorb entfernt');
define('lg_lookup_21','Anfrage %s zusammengefügt');
define('lg_lookup_22','Batch Antworten/Bearbeiten durchgeführt');
define('lg_lookup_23','Email Betreff angepasst von "%s" auf "%s"');
define('lg_lookup_24','Versenden angepasst von "%s" auf "%s"');
define('lg_lookup_25','Konvertierte history Notiz von %s als neue Anfrage');
define('lg_lookup_26','Konvertierte history Notiz (#%s) als neue Anfrage: %s');

// custom field name lookups
define('lg_lookup_cfields_dropdown','Vordefinierte Liste');
define('lg_lookup_cfields_text','Textfeld');
define('lg_lookup_cfields_lrgtext','grosses Textfeld');
define('lg_lookup_cfields_checkbox','Checkbox');
define('lg_lookup_cfields_numfield','Nummernfeld');
define('lg_lookup_cfields_decimal','Dezimalfeld');
define('lg_lookup_cfields_regex','Regular Expression Feld');
define('lg_lookup_cfields_ajax','AJAX Selektionsfeld');
define('lg_lookup_cfields_date','Datumfeld');
define('lg_lookup_cfields_datetime','Datum und Zeit Feld');
define('lg_lookup_cfields_drilldown','Drill Down Liste');

// filter columns
define('lg_lookup_filter_custname','Kunde');
define('lg_lookup_filter_lastname','Nachname');
define('lg_lookup_filter_custemail','Email');
define('lg_lookup_filter_custphone','Telefon');
define('lg_lookup_filter_custid','Kundenummer');
define('lg_lookup_filter_emailtitle','Emailbetreff');
define('lg_lookup_filter_timeopen','geöffnet');
define('lg_lookup_filter_timeopen2','Eröffnungsdatum');
define('lg_lookup_filter_datetimeopen', 'Date and Time Opened');
define('lg_lookup_filter_timeclosed','Geschlossen');
define('lg_lookup_filter_timeclosed2','Abschlussdatum');
define('lg_lookup_filter_datetimeclosed', 'Date and Time Closed');
define('lg_lookup_filter_trashedon','In Papierkorb an');
define('lg_lookup_filter_category','Kategorie');
define('lg_lookup_filter_status','Status');
define('lg_lookup_filter_open','offen');
define('lg_lookup_filter_open2','offen/geschlossen');
define('lg_lookup_filter_readunread', 'Read / Unread');
define('lg_lookup_filter_isrepliedto','');
define('lg_lookup_filter_isrepliedto2','geantwortet an');
define('lg_lookup_filter_assignedto','zugewiesen an');
define('lg_lookup_filter_openedby','geöffnet von');
define('lg_lookup_filter_openedvia','');
define('lg_lookup_filter_openedvia2','kontaktiert via');
define('lg_lookup_filter_currentlyviewing','');
define('lg_lookup_filter_currentlyviewing2','wir zurzeit Betrachtet');
define('lg_lookup_filter_mailbox','Postfach');
define('lg_lookup_filter_portal','Portal');
define('lg_lookup_filter_reqsummary','initiale Anfrage');
define('lg_lookup_filter_lastpublicnote','letzte öffentliche Notiz');
define('lg_lookup_filter_lastpublicnoteby','letzte öffentliche Notiz von');
define('lg_lookup_filter_lastupdateby','letzte Aktualisierung von');
define('lg_lookup_filter_age','Alter');
define('lg_lookup_filter_attachment','&nbsp;');
define('lg_lookup_filter_attachment2','Anhang');
define('lg_lookup_filter_timetrack','Zeit');
define('lg_lookup_filter_timetrack2','Zeit Tracker Total');
define('lg_lookup_filter_lastupdate','letzte Aktualisierung');
define('lg_lookup_filter_thermostat_nps_score', 'Thermostat NPS Score');
define('lg_lookup_filter_thermostat_csat_score', 'Thermostat CSAT Score');
define('lg_lookup_filter_thermostat_feedback', 'Thermostat Feedback');
define('lg_lookup_filter_lastpubupdate','letztes öffentliche Aktualisierung');
define('lg_lookup_filter_lastcustupdate','letzte Kundenaktualisierung');
define('lg_lookup_filter_speedtofirstresponse','Zeit bis zur ersten Antwort (Stunden gesamt)');
define('lg_lookup_filter_speedtofirstresponse_biz','Zeit bist zur ersten Antwort (Öffnungszeit)');
define('lg_lookup_filter_reqid','ID');
define('lg_lookup_filter_reqid2','Anfrage ID');
define('lg_lookup_filter_takeit','Annehmen');
define('lg_lookup_filter_reminder','Erinnerung');
define('lg_lookup_filter_remdate','Erinnerung gesetzt für');
define('lg_lookup_filter_reqhaschanged','Die Anfrage hat sich verändert seit der letzten Betrachtung');
define('lg_lookup_filter_markunread','als ungelesen Markieren');
define('lg_lookup_filter_repliedtoby','letzte Antwort von Staff');
define('lg_lookup_filter_ctpublicupdates2','Anzahl öffentlicher Update');
define('lg_lookup_filter_ctpublicupdates','#');
define('lg_lookup_filter_reportingtags','Reporting Tags');
define('lg_lookup_filter_timegroup_today_yesterday','Zeit: Heute, Gestern');
define('lg_lookup_filter_timegroup_hourly','Zeit: Stunde');
define('lg_lookup_filter_timegroup_daily','Zeit: Tag');
define('lg_lookup_filter_timegroup_monthly','Zeit: Monat');
define('lg_lookup_filter_timegroup_label','Zeit');
define('lg_lookup_filter_timegroup_today','Heute');
define('lg_lookup_filter_timegroup_yesterday','Gestern');
define('lg_lookup_filter_timegroup_older','älter');
define('lg_lookup_filter_nps', 'NPS Score');
define('lg_lookup_filter_csat', 'CSAT Score');

// workflow
define('lg_wf_open','Offen');
define('lg_wf_single','Zuständig');

// tz
define('lg_tz_city','Stadt/Region');
define('lg_tz_date','Datum');
define('lg_tz_time','Zeit');
define('lg_tz_offset','GMT Offset');

// for pages
define('lg_help','Hilfe');
define('lg_loading','Laden...');
define('lg_yes','Ja');
define('lg_no','Nein');
define('lg_off','Aus');
define('lg_on','An');
define('lg_required','*Pflicht');
define('lg_all','Alles');
define('lg_checked','ausgewählt');
define('lg_notchecked','nicht ausgewählt');
define('lg_isopen','OFFEN');
define('lg_isclosed','GESCHLOSSEN');
define('lg_isurgent','WICHTIG');
define('lg_isnormal','NORMAL');
define('lg_ispublic','public');
define('lg_label_public','Öffentlich');
define('lg_label_private','Privat');
define('lg_label_external','Extern');
define('lg_label_customer','Kunde');
define('lg_alwaysvis','immer sichtbar');
define('lg_hiddenemail','versteckte mail historie');
define('lg_noresults','Keine Einträge gefunden');
define('lg_noresults_inbox','Der Posteingang ist leer');
define('lg_noresults_filter','Keine Einträge zu diesen Kriterien');
define('lg_nohistory','keine zutreffende Historie');
define('lg_rserror','Fehler in Abfrage');
define('lg_nextpage','nächste Seite');
define('lg_prevpage','vorherige Seite');
define('lg_next','nächste');
define('lg_prev','vorherige');
define('lg_loadmore','mehr laden');
define('lg_save','Speichern');
define('lg_saving','speichern');
define('lg_add','Hinzufügen');
define('lg_streamview_end','Ende einer Anfrage');
define('lg_streamview_desc_overflow','PEEK: Schnellübersicht');
define('lg_thermostat_label_see_results', 'See Survey Results');
define('lg_conditional_at_thermostat_promoter', 'promoter');
define('lg_conditional_at_thermostat_passive', 'passive');
define('lg_conditional_at_thermostat_detractor', 'detractor');
define('lg_conditional_at_thermostat_satisfied', 'satisfied');
define('lg_conditional_at_thermostat_dissatisfied', 'dissatisfied');
define('lg_requestchanged', 'Request Changed');

//No match for searches
define('lg_search_nomatch','Keine Übereinstimmung');

//Email auto reply
define('lg_mailre','Re');

//Reply above this line
define('lg_replyabove','## ÜBERHALB dieser Linie Antworten für eine Notiz ##');

//Syntax Highlighting
define('lg_double_click','Doppelklick auf den Code um diesen zu kopieren');

// For filter
define('lg_globalfilters','globale Filter');

//Select multiple fields
define('lg_addallstaff','Alles hinzufügen');
define('lg_expand','Erweitern');
define('lg_subscribeall','ausgewähle Abonnieren');

// Tags
define('lg_tags_knowledgetags','Wissens Tags');
define('lg_tags_add','Tag hinzufügen');
define('lg_tags_label','Neuer Tag hinzufügen');
define('lg_tags_save','Speichern');
define('lg_tags_delete','Löschen');
define('lg_tags_reorder','Reihenfolge ändern');
define('lg_tags_confirmdel','Möchten Sie diesen Tag wirklich löschen?');
define('lg_tags_none','Keine Tags erstellt');
define('lg_tags_updated','Tags Updated');

// Tip menu
define('lg_tm_view','Anfrage ansehen');
define('lg_tm_markunread','gelesen/ungelesen');
define('lg_tm_actiontrash','Papierkorb');
define('lg_tm_actionspam','SPAM');
define('lg_tm_skip','Skip');

// Person Status Type
define('lg_ps_viewingrequest','diese Anfrage <strong>ansehen</strong>');
define('lg_ps_editingrequest','diese Anfrage <strong>editieren</strong>');

// Address book
define('lg_addressbook_title','Addressbuch');
define('lg_addressbook_contacts','Kontakte');
define('lg_addressbook_livelookup','Live Lookup Suche');
define('lg_addressbook_livelookup_ex','Suche mit Live Lookup um Kontakte zu finden');
define('lg_addressbook_livelookup_na','Ihre Installation hat kein Live Lookup aktiviert. <a href="https://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=174" target="_blank">Mehr dazu (EN)</a>');
define('lg_addressbook_addcontact','Kontakt hinzufügen');
define('lg_addressbook_search','Suche');
define('lg_addressbook_llsource','Live Lookup Quelle');
define('lg_addressbook_llheader','Live Lookup Kontakte');
define('lg_addressbook_fname','Vorname');
define('lg_addressbook_lname','Nachname');
define('lg_addressbook_email','Email');
define('lg_addressbook_desc','Kurzbeschreibung');
define('lg_addressbook_add','Kontakt hinzufügen');
define('lg_addressbook_persontitle','Anrede');
define('lg_addressbook_highlight','Hervorgehoben');
define('lg_addressbook_highlightex','immer zuoberst anzeigen');
define('lg_addressbook_highlighted','hervorgehoben');
define('lg_addressbook_confirmdelete','Kontakt löschen?');

define('lg_validation_required','Dieses Feld wird benötigt');
define('lg_validation_email','Dieses Feld benötigt eine gültige Emailadresse');

define('lg_dontemail','Email nicht senden');

/*****************************************
NAVIGATION
 *****************************************/
define('lg_adminhome','Admin');
define('lg_admin_categories_nav','Kategorien');
define('lg_admin_users_nav','Staff');
define('lg_admin_mailboxes_nav','Email Postfächer');
define('lg_admin_status_nav','Statusarten');
define('lg_admin_groups_nav','Berechtigungsgruppe');
define('lg_admin_customize_admin_nav', 'Customize Admin');
define('lg_admin_themes_nav','Themes');
define('lg_admin_tools_nav','Schalter & Regeln');
define('lg_admin_data_nav','Planen');
define('lg_admin_customize_nav','Customize');
define('lg_admin_settings_nav','Einstellungen');
define('lg_admin_overview_nav','System Übersicht');
define('lg_admin_widgets_nav','Widgets');
define('lg_admin_integration_nav','Integration');
define('lg_admin_system_nav','System');
define('lg_helpdesknav','Postfach');
define('lg_portalnav','Portal');
define('lg_queue','Arbeitsplatz');
define('lg_myq','Meine Anfragen');
define('lg_subscriptions','Abonnement');
define('lg_reminders','Erinnerungen');
define('lg_darkmode_on', 'Dark Mode: On');
define('lg_darkmode_off', 'Dark Mode: Off');
define('lg_todayboard','ToDo Board');
define('lg_wallboard','Wandtafel');
define('lg_filter_requests_nav','Filter erstellen');
define('lg_responses_nav','Antworten');
define('lg_orderkb_nav','Bestellung ausführen');
define('lg_sidebar_show', 'Show Sidebar');
define('lg_sidebar_hide', 'Hide Sidebar');
define('lg_newrequest','Erstelle Anfrage');
define('lg_forum','Forum');
define('lg_reports','Reports');
define('lg_search_tab', 'Search');
define('lg_search','ID oder Kunde');
define('lg_search_history','Such History');
define('lg_search_kb','Knowledge Books');
define('lg_search_forum','Suche: Forum');
define('lg_kb','Wissensdatenbank');
define('lg_responses', 'Antworten');
define('lg_admin_tools_sysinfo','System Information');
define('lg_admin_tools_filtermgmt','Filter Management');
define('lg_admin_tools_jobsmgmt', 'Failed Jobs');
define('lg_admin_tools_responsemgmt','Antworten Management');
define('lg_admin_tools_archive','Archivierungstool');
define('lg_admin_tools_errorlog','Fehler Log');
define('lg_admin_tools_email','Email Templates');
define('lg_admin_tools_templates','Portal Templates');
define('lg_admin_tools_reqfields','benutzerdefinierte Felder');
define('lg_admin_tools_mailrules','Mail Regeln');
define('lg_admin_tools_auto','Automation Regel');
define('lg_admin_tools_triggers','Schalter');
define('lg_admin_tools_portals','weitere Portale');
define('lg_admin_integration_surveytools','Umfragetools');
define('lg_custom_pages','benutzerdefinierte Seiten');
define('lg_admin_integrations','Integrationen');
define('lg_admin_customer_tools', 'Customer Tools');

/*****************************************
MAIL SUBJECTS
 *****************************************/
define('lg_mailsub_cc','HelpSpot: Anfrage Benachrichtigung');
define('lg_mailsub_new','HelpSpot: neue Anfrage');
define('lg_mailsub_mailrule','HelpSpot: Mail Regel Benachrichtigung');
define('lg_mailsub_automation','HelpSpot: Automation Benachrichtigung');
define('lg_mailsub_existing','HelpSpot: Anfrage Update');
define('lg_mailsub_reminder','HelpSpot: Anfrage Erinnerung');

define('lg_mail_newstaffsub','Ihre %s Accountinformationen');

define('lg_feed_viewlink','Komplette Anfrage ansehen');
define('lg_feed_customer','Kundendetails');
define('lg_feed_reqinfo','Anfrageninformationen');
define('lg_feed_reqhistory','Anfragenhistorie');
define('lg_feed_cid','Kunden ID');
define('lg_feed_cemail','Email');
define('lg_feed_cphone','Telefon');
define('lg_feed_cname','Name');
define('lg_feed_status','Status');
define('lg_feed_assign','Zugewiesen an');
define('lg_feed_category','Kategorie');
define('lg_feed_createdby','erstellt von');
define('lg_feed_helpdeskfilters','Help Desk Filters');
define('lg_feed_update','Aktualisieren');
define('lg_feed_request','neue Anfrage');
define('lg_feed_notification','Benachrichtigung');
define('lg_feed_log','Event Log');

/*****************************************
PLACEHOLDERS
 *****************************************/
define('lg_insertplaceholder','Platzhalter einfügen');
define('lg_insertplaceholderopt','Platzhalter einfügen (optional)');
define('lg_inserttemplatetag','Template Tag einfügen');
define('lg_placeholderspopup_reqid','Anfragen ID');
define('lg_placeholderspopup_acckey','Access Key');
define('lg_placeholderspopup_replyabove','"Reply Above" Text');
define('lg_placeholderspopup_custfirst','Kunden Vorname');
define('lg_placeholderspopup_custlast','Kunden Nachname');
define('lg_placeholderspopup_custid','Kunden ID');
define('lg_placeholderspopup_custemail','Kunden Email');
define('lg_placeholderspopup_custphone','Kunde Telefonnummer');
define('lg_placeholderspopup_status','Status');
define('lg_placeholderspopup_category','Kategorie');
define('lg_placeholderspopup_urgent','Wichtig');
define('lg_placeholderspopup_openclosed','Offen/Geschlossen');
define('lg_placeholderspopup_dateopened','Eröffnungsdatum');
define('lg_placeholderspopup_datenow','Datum jetzt (aktuelles Datum/Zeit)');
define('lg_placeholderspopup_assignedfirst','zugewiesener Staff: Vorname');
define('lg_placeholderspopup_assignedlast','zugewiesener Staff: Nachname');
define('lg_placeholderspopup_assignedfull','zugewiesener Staff: Name');
define('lg_placeholderspopup_assignedlastfirst','zugewiesener Staff: Nachname, Vorname');
define('lg_placeholderspopup_assignedemail','zugewiesener Staff: Email');
define('lg_placeholderspopup_assignedphone','zugewiesener Staff: Telefon');
define('lg_placeholderspopup_loggedinfirst','angemeldeter Staff: Vorname');
define('lg_placeholderspopup_loggedinlast','angemeldeter Staff: Nachname');
define('lg_placeholderspopup_loggedinfull','angemeldeter Staff: Name');
define('lg_placeholderspopup_loggedinlastfirst','angemeldeter Staff: Nachname, Vorname');
define('lg_placeholderspopup_loggedinemail','angemeldeter Staff: Email');
define('lg_placeholderspopup_loggedinphone','angemeldeter Staff: Phone');
define('lg_placeholderspopup_customfield','benutzerdefiniertes Feld');
define('lg_placeholderspopup_orgname','Firmenname Name');
define('lg_placeholderspopup_helpdeskurl','Help Desk URL');
define('lg_placeholderspopup_reqformurl','Anfragen Formular URL');
define('lg_placeholderspopup_reqcheckurl','Anfragen Check URL');
define('lg_placeholderspopup_kburl','Wissensdatenbank URL');
define('lg_placeholderspopup_forum','Forum URL');
define('lg_placeholderspopup_subject','Email Betreffzeile');
define('lg_placeholderspopup_origsubject','Original Email Betreffzeile');
define('lg_placeholderspopup_mobilelink','Mobile app request link');
define('lg_placeholderspopup_initialrequest','Anfragen Notiz');
define('lg_placeholderspopup_trackerid','Tracking ID - {#####}');
define('lg_placeholderspopup_message','Notiz');
define('lg_placeholderspopup_lastcustomernote','Letzte Notiz von Kunde');
define('lg_placeholderspopup_fullpublichistory','öffentliche Notizhistorie (inclusive jetztige)');
define('lg_placeholderspopup_fullpublichistory_ex','öffentliche Notizhistorie (exclusive jetzige)');
define('lg_placeholderspopup_requestcheckurl','URL um Anfrage zu überprüfen');
define('lg_placeholderspopup_accesskey','Access key');
define('lg_placeholderspopup_label','Email label');
define('lg_placeholderspopup_reqdetails','Kurzbeschreibung anfordern (Text format)');
define('lg_placeholderspopup_reqdetailshtml','Kurzbeschreibung anfordern (HTML format)');
define('lg_placeholderspopup_staffname','Staff Name');
define('lg_placeholderspopup_postername','Name of forum poster');
define('lg_placeholderspopup_topic','Topic');
define('lg_placeholderspopup_replyurl','Topic URL');
define('lg_placeholderspopup_email','User Email');
define('lg_placeholderspopup_password','User Password');
define('lg_placeholderspopup_helpspoturl','HelpSpot Login URL');
define('lg_placeholderspopup_portalemail','Portal Login Email');
define('lg_placeholderspopup_portalpassword','Portal Login Password');
define('lg_placeholderspopup_reseturl','Password Reset URL');
define('lg_placeholderspopup_newportalpassword','New Portal Password');

/*****************************************
PORTAL
 *****************************************/
//These must be available outside of the portal
define('lg_portal_req_did','This is what I DID');
define('lg_portal_req_expected','This is what I EXPECTED to happen');
define('lg_portal_req_actual','This is what ACTUALLY happened');
define('lg_portal_req_additional','Additional Information');
define('lg_portal_re','RE');
define('lg_portal_req_simple','Details');

/*****************************************
SPECIAL
 *****************************************/
// Mail import
define('lg_no_subject','kein Betreff');
define('lg_loop_break','Anfrage %s steckt möglicherweise in einer Mailschlaufe fest mit %s.');
define('lg_autoreply_loop_break','Die Mailbox wurde durch ein "auto reply mail loop" behindert mit %s.');
define('lg_history_over_limit', 'Request %s is over the max limit for notes and the email from %s is now discarded.');

/*****************************************
CALENDAR
 *****************************************/
define('lg_cal_fdow','1'); // first day of week for this locale; 0 = Sunday, 1 = Monday, etc.
define('lg_cal_gotoday','Go Heute');
define('lg_cal_today','Heute');
define('lg_cal_wk','wk');
define('lg_cal_weekend','0,6'); // 6 = Saturday, 0 = Sunday, 1 = Monday, etc.
define('lg_cal_am','am');
define('lg_cal_pm','pm');
define('lg_cal_mn_jan','Januar');
define('lg_cal_mn_feb','Februar');
define('lg_cal_mn_mar','März');
define('lg_cal_mn_apr','April');
define('lg_cal_mn_may','Mai');
define('lg_cal_mn_jun','Juni');
define('lg_cal_mn_jul','July');
define('lg_cal_mn_aug','August');
define('lg_cal_mn_sep','September');
define('lg_cal_mn_oct','Oktober');
define('lg_cal_mn_nov','November');
define('lg_cal_mn_dec','Dezember');
define('lg_cal_dn_su','Sonntag');
define('lg_cal_dn_mo','Montag');
define('lg_cal_dn_tu','Dienstag');
define('lg_cal_dn_we','Mittwoch');
define('lg_cal_dn_th','Donnerstag');
define('lg_cal_dn_fr','Freitag');
define('lg_cal_dn_sa','Samstag');
define('lg_cal_sdn_su','So');
define('lg_cal_sdn_mo','Mo');
define('lg_cal_sdn_tu','Di');
define('lg_cal_sdn_we','Mi');
define('lg_cal_sdn_th','Do');
define('lg_cal_sdn_fr','Fr');
define('lg_cal_sdn_sa','Sa');

/*****************************************
Notifications
 *****************************************/
define('lg_not_email_send_error', 'Email send error for request');
define('lg_not_see_details', 'See Details');
define('lg_not_dismiss', 'Dismiss');
