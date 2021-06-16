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
define('lg_portal_create_login', 'Create an account');
define('lg_portal_loginrequired', 'Login Required');
define('lg_portal_login_forgot', 'Forgot Password');
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
define('lg_portal_hasvoted','Wir danken Ihne für Ihre Bewertung');
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
define('lg_portal_yourpost','Ihr post');
define('lg_portal_postername','Name');
define('lg_portal_posteremail','Email');
define('lg_portal_posterurl','Ihre Website');
define('lg_portal_er_topic','Bitte wählen Sie ein Thema');
define('lg_portal_er_message','Bitte hinterlassen Sie eine Nachricht');
define('lg_portal_er_name','Bitte einen Name hinterlassen');
define('lg_portal_er_unique_email', 'That username already exists. <a href=index.php?pg=login.forgot>Reset your password here.</a>');
define('lg_portal_er_validcaptcha','Bitte das Sicherheitswort eingeben');
define('lg_portal_er_validrecaptcha','Bitte ankreuzen, dass Sie kein Roboter sind.');
define('lg_portal_prev','vorherige Seite');
define('lg_portal_next','nächste Seite');
define('lg_portal_emailupdate','über Antworten via Email benachrichtigen');
define('lg_portal_request','Eine Anfrage senden');
define('lg_portal_req_account','Account ID');
define('lg_portal_req_name','Name');
define('lg_portal_req_file_upload','ein unterstütztes Dokument anhängen (optional)');
define('lg_portal_req_note','Bitte füllen Sie das ganze Formular detailiert zu Ihrer Anfrage aus und ein Mitarbeiter wird sich schnellst möglich mit Ihnen in Verbindung setzen.');
define('lg_portal_req_firstname','Vorname');
define('lg_portal_req_lastname','Nachname');
define('lg_portal_req_email','Email');
define('lg_portal_req_cc_email', 'Also Notify Email');
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
define('lg_portal_req_generalerror','Beim absenden ist ein Fehler aufgetreten. Bitte probieren Sie es erneut.');
define('lg_portal_req_required','Dies ist ein Pflichtfeld');
define('lg_portal_req_numberreq','Der Wert muss nummerisch sein');
define('lg_portal_req_validemail','Bitte eine korrekte Emailadresse angeben');
define('lg_portal_req_enterkey','Geben Sie Ihren Zugriffsschlüssel ein um den Stand einer Anfrage zu überprüfen.');
define('lg_portal_subjectdefaultnew','Informationen zu Ihrer Anfrage');
define('lg_portal_req_login','Anmelden um die ganze Anfragehistorie anzusehen');
define('lg_portal_create_login_ex', 'Create an account to view your request history');
define('lg_portal_login_forgot_ex', 'Reset Your Password');
define('lg_portal_req_emailpassword','Passwort erstellen oder neu setzen');
define('lg_portal_req_logincreate', 'Create an Account');
define('lg_portal_req_loginemail','Email');
define('lg_portal_req_loginusername','Username');
define('lg_portal_req_loginpassword','Passwort');
define('lg_portal_req_loginpassword_confirm', 'Confirm Password');
define('lg_portal_req_loginbutton','Anmelden');
define('lg_portal_req_createbutton', 'Create Account');
define('lg_portal_req_pw_reset_link', 'Send Password Reset Link');
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
define('lg_portal_req_passwordsent','Zurücksetzen Link wurde  via Email versendet. Bitte überprüfen Sie ihr Postfach.');
define('lg_portal_norequesthistory','Für diese Email sind keine Anfragen vorhanden.');

define('lg_portal_check','Check');	
define('lg_portal_invalidkey','Der Zugriffsschlüssel ist nicht gültig.');	
define('lg_portal_requestclosed','Diese Anfrage ist geschlossen und nicht mehr öffentlich sichtbar. Wenn Sie eine neue Anfrage erstellen möchten, clicken Sie auf den Link unterhalb oder meldetn Sie sich an um Ihre Anfragenhistorie anzusehen.');
define('lg_portal_closedsubmitnew','neue Anfrage erstellen');
define('lg_portal_closedlogin','Login');
define('lg_portal_closedor','oder');
define('lg_portal_checkboxchecked','ausgewählt');
define('lg_portal_checkboxempty','nicht ausgewählt');

define('lg_portal_spamredirect','moderierter Beitrag');
define('lg_portal_spamrenote','Dieser Beitrag wurde für einen Moderator gekennzeichnet. Der Beitrag wird in kürze sichtbar, nachdem ein Administrator / Moderator diesen überprüft hat.');
define('lg_portal_spamreturn','Click für Zurück');
define('lg_portal_captcha','Bitte das Sicherheitswort eingeben');
define('lg_portal_recaptcha','Bitte das Sicherheitswort eingeben');
define('lg_portal_recaptcha_changewords','Wörter wechseln');

define('lg_portal_maintenance_title','Wartungsmodus');
define('lg_portal_maintenance_note','Die Plattform ist zurzeit aufgrund von Wartungsarbeiten nicht verfügbar. Bitte versuchen Sie es etwas später erneut.');

define('lg_portal_password_reset','Ein neues Passwort für Ihren Account wurde angelegt. Bitte überprüfen Sie Ihr Postfach.');

define('lg_portal_tagsearch','Tag');
define('lg_portal_tagsearch_books','übereinstimmende Wissensbeiträge');

define('lg_portal_agree_terms_privacy', 'I agree to the <a href="%s" target="_blank">Terms of Service</a> and <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_agree_terms', 'I agree to the <a href="%s" target="_blank">Terms of Service</a>');
define('lg_portal_agree_privacy', 'I agree to the <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_req_terms', 'You must agree to the terms');
?>
