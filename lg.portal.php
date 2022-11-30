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

define('lg_portal_phonesupport','Telefonsupport');	
define('lg_portal_home','Home');	
define('lg_portal_submitrequest','Anfrage einreichen');	
define('lg_portal_checkrequest','bestehende Anfrage ansehen');
define('lg_portal_create_login', 'Konto anlegen');
define('lg_portal_loginrequired', 'Login notwendig');
define('lg_portal_login_forgot', 'Passwort vergessen');
define('lg_portal_requesthistory','Anfragenhistorie');
define('lg_portal_accessidheader','Ihr Zugriffsschlüssel');
define('lg_portal_accessnote','Der Zugriffsschlüssel oben kann benutzt werden um den Status der Anfrage zu überprüfen. <br> Für einen schnellen Zugriff kann diese Seite in den Favoriten abgelegt werden.');
define('lg_portal_updatebox','Gibt es neuere Informationen? Nutzen Sie die Box weiter unten und aktualisieren Sie Ihre Anfrage.');
define('lg_portal_kb','Wissensdatenbank');	
define('lg_portal_kbprinter','Druckversion');
define('lg_portal_downloads','Downloads');
define('lg_portal_relatedpages','meist angesehen');
define('lg_portal_search','Suche');
define('lg_portal_helpfulpages','hilfreichste Wissensbeiträge');
define('lg_portal_highlightedpages','Hervorgehobene Wissensbeiträge');
define('lg_portal_searchkb','Wissensdatenbank');
define('lg_portal_tags','Wissens Tags');
define('lg_portal_searchtags','meist genutzte Tags');
define('lg_portal_searchforum','Forum');
define('lg_portal_helpful','hilfreich');
define('lg_portal_nothelpful','nicht hilfreich');
define('lg_portal_hasvoted','Wir danken Ihnen für Ihre Bewertung');
define('lg_portal_sticky','Sticky');
define('lg_portal_email','Email');
define('lg_portal_postreply','Antworten auf einen Post');
define('lg_portal_reply','Antworten');
define('lg_portal_to','An');
define('lg_portal_subject','Betreff');
define('lg_portal_message','Nachricht');
define('lg_portal_yourname','Ihr Name');
define('lg_portal_youremail','Ihre Email');
define('lg_portal_sendemail','Email senden');
define('lg_portal_yourpost','Ihr Post');
define('lg_portal_postername','Name');
define('lg_portal_posteremail','Email');
define('lg_portal_posterurl','Ihre Webseite');
define('lg_portal_er_topic','Bitte wählen Sie ein Thema');
define('lg_portal_er_message','Bitte hinterlassen Sie eine Nachricht');
define('lg_portal_er_name','Bitte hinterlassen Sie einen Namen');
define('lg_portal_er_unique_email', 'Der Benutzername existiert bereits. <a href=index.php?pg=login.forgot>Setzen Sie Ihr Passwort zurück.</a>');
define('lg_portal_er_validcaptcha','Bitte geben Sie das Sicherheitswort ein');
define('lg_portal_er_validrecaptcha','Bitte kreuzen Sie an, dass Sie kein Roboter sind.');
define('lg_portal_prev','vorherige Seite');
define('lg_portal_next','nächste Seite');
define('lg_portal_emailupdate','über Antworten via Email benachrichtigen');
define('lg_portal_request','Eine Anfrage senden');
define('lg_portal_req_account','Konto ID');
define('lg_portal_req_name','Name');
define('lg_portal_req_file_upload','ein unterstütztes Dokument anhängen (optional)');
define('lg_portal_req_note','Bitte füllen Sie das ganze Formular detailliert zu Ihrer Anfrage aus. Ein Mitarbeiter wird sich schnellst möglich mit Ihnen in Verbindung setzen.');
define('lg_portal_req_firstname','Vorname');
define('lg_portal_req_lastname','Nachname');
define('lg_portal_req_email','Email');
define('lg_portal_req_cc_email', 'Auch per Email benachrichtigen');
define('lg_portal_req_phone','Telefon');
define('lg_portal_req_subject','Betreff');
define('lg_portal_req_urgent','Ist diese Anfrage dringend?');
define('lg_portal_req_category','Wie würden Sie diese Anfrage kategorisieren?');
define('lg_portal_req_yes','Ja');
define('lg_portal_req_no','Nein');
define('lg_portal_req_submitrequest','Anfrage absenden');
define('lg_portal_req_update','Aktualisierung mitteilen');
define('lg_portal_req_updaterequest','Aktualisierung vornehmen');
define('lg_portal_req_detailsheader','Anfragedetails');
define('lg_portal_req_generalerror','Beim Absenden ist ein Fehler aufgetreten. Bitte probieren Sie es erneut.');
define('lg_portal_req_required','Dies ist ein Pflichtfeld');
define('lg_portal_req_numberreq','Der Wert muss nummerisch sein');
define('lg_portal_req_validemail','Bitte eine korrekte Emailadresse angeben');
define('lg_portal_req_enterkey','Geben Sie Ihren Zugriffsschlüssel ein, um den Stand einer Anfrage zu überprüfen.');
define('lg_portal_subjectdefaultnew','Informationen zu Ihrer Anfrage');
define('lg_portal_req_login','Anmelden um die ganze Anfragehistorie anzusehen');
define('lg_portal_create_login_ex', 'Konto anlegen, um die ganze Anfragehistorie zu sehen.');
define('lg_portal_login_forgot_ex', 'Passwort zurücksetzen');
define('lg_portal_req_emailpassword','Passwort erstellen oder neu setzen');
define('lg_portal_req_logincreate', 'Konto anlegen');
define('lg_portal_req_loginemail','Email');
define('lg_portal_req_loginusername','Benutzername');
define('lg_portal_req_loginpassword','Passwort');
define('lg_portal_req_loginpassword_confirm', 'Passwort bestätigen');
define('lg_portal_req_loginbutton','Anmelden');
define('lg_portal_req_createbutton', 'Konto anlegen');
define('lg_portal_req_pw_reset_link', 'Link zum Zurücksetzen des Passworts senden');
define('lg_portal_req_loginfailed','Login fehlgeschlagen. Bitte erneut probieren.');
define('lg_portal_req_logout','Abmelden');
define('lg_portal_req_changepassword','Passwort wechseln');
define('lg_portal_req_newpassword','neues Passwort');
define('lg_portal_req_confirm','Bestätigen');
define('lg_portal_req_save','Speichern');
define('lg_portal_req_sending','Speichern...');
define('lg_portal_req_passwordsaved','Password gespeichert');
define('lg_portal_req_passwordposterror','Passwort konnte nicht gespeichert werden');
define('lg_portal_req_passworderror','Passwörter müssen übereinstimmen. Bitte erneut probieren.');
define('lg_portal_req_emailempty','Bitte EMailadresse angeben');
define('lg_portal_req_emailerror','Bitte eine gültige Emailadresse angeben');
define('lg_portal_req_passwordsent','Link zum Zurücksetzen wurde via Email versendet. Bitte überprüfen Sie Ihr Postfach.');
define('lg_portal_norequesthistory','Für diese Email sind keine Anfragen vorhanden.');

define('lg_portal_check','Check');	
define('lg_portal_invalidkey','Der Zugriffsschlüssel ist nicht gültig.');	
define('lg_portal_requestclosed','Diese Anfrage ist geschlossen und nicht mehr öffentlich sichtbar. Wenn Sie eine neue Anfrage erstellen möchten, klicken Sie auf den Link unterhalb oder melden Sie sich an, um Ihre Anfragenhistorie anzusehen.');
define('lg_portal_closedsubmitnew','neue Anfrage erstellen');
define('lg_portal_closedlogin','Login');
define('lg_portal_closedor','oder');
define('lg_portal_checkboxchecked','ausgewählt');
define('lg_portal_checkboxempty','nicht ausgewählt');

define('lg_portal_spamredirect','moderierter Beitrag');
define('lg_portal_spamrenote','Dieser Beitrag wurde für einen Moderator gekennzeichnet. Der Beitrag wird in Kürze sichtbar, nachdem ein Administrator / Moderator diesen überprüft hat.');
define('lg_portal_spamreturn','Klick für Zurück');
define('lg_portal_captcha','Bitte das Sicherheitswort eingeben');
define('lg_portal_recaptcha','Bitte das Sicherheitswort eingeben');
define('lg_portal_recaptcha_changewords','Wörter wechseln');

define('lg_portal_maintenance_title','Wartungsmodus');
define('lg_portal_maintenance_note','Die Plattform ist zurzeit aufgrund von Wartungsarbeiten nicht verfügbar. Bitte versuchen Sie es etwas später erneut.');

define('lg_portal_password_reset','Ein neues Passwort für Ihren Account wurde angelegt. Bitte überprüfen Sie Ihr Postfach.');

define('lg_portal_tagsearch','Tag');
define('lg_portal_tagsearch_books','übereinstimmende Wissensbeiträge');

define('lg_portal_agree_terms_privacy', 'Ich akzeptiere die <a href="%s" target="_blank">Servicebedingungen</a> und <a href="%s" target="_blank">der Datenschutzerklärungen</a>');
define('lg_portal_agree_terms', 'Ich akzeptiere die <a href="%s" target="_blank"> Servicebedingungen </a>');
define('lg_portal_agree_privacy', 'Ich akzeptiere die <a href="%s" target="_blank">Datenschutzerklärungen</a>');
define('lg_portal_req_terms', 'Sie müssen den Bedingungen zustimmen');
