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

define('lg_admin_mailboxes_title','Postfach');
define('lg_admin_mailboxes_nomailboxes','Kein Postfach erstelt');
define('lg_admin_mailboxes_view','Ansicht');
define('lg_admin_mailboxes_edit','Bearbeiten');
define('lg_admin_mailboxes_preview','Vorschau');
define('lg_admin_mailboxes_showdel','inaktive Postfächer darstellen');
define('lg_admin_mailboxes_noshowdel','zurück zu Postfächer');
define('lg_admin_mailboxes_options','Optionen');
define('lg_admin_mailboxes_emailtemplates','Email Vorlagen');
define('lg_admin_mailboxes_insertdefault','Standartwert übernehmen');
define('lg_admin_mailboxes_trackidmissing','Tracking ID (##TRACKING_ID##) is missing from the subject line of Public Note to Customer. Omitting this will prevent HelpSpot from correctly threading responses.');
define('lg_admin_mailboxes_explain', 'Configuring a mailbox allows HelpSpot to accept mail from a specified email account.');
define('lg_admin_mailboxes_help','Configuring a mailbox allows HelpSpot to check mail from a specified email account. Incoming messages are filtered for spam and turned into requests.
									Administrators can opt to specify automated assignment to categories and corresponding default staff member. ');
define('lg_admin_mailboxes_mailbox','Mailbox');
define('lg_admin_mailboxes_archive', 'Archive Mail');
define('lg_admin_mailboxes_archive_note', 'With this enabled mail will be moved to a "helpspot_archive_folder" instead of deleting the email. This only works with imap.');
define('lg_admin_mailboxes_archive_note_oauth', 'Mail will be moved to the "archived" folder instead of to the trash.');
define('lg_admin_mailboxes_deletemsg', 'Note: HelpSpot deletes emails from the mailbox if this is disabled.');
define('lg_admin_mailboxes_mbuser','Username');
define('lg_admin_mailboxes_mbhost','Host Name');
define('lg_admin_mailboxes_mbpass','Passwort');
define('lg_admin_mailboxes_mbpass_confirm','Passwort bestätigen');
define('lg_admin_mailboxes_mbport','Port');
define('lg_admin_mailboxes_mbconnectionoptions', 'Connection Options');
define('lg_admin_mailboxes_mbtype','Account Typ');
define('lg_admin_mailboxes_mbsecurity','Security Typ');
define('lg_admin_mailboxes_mbsecurityex','wird für sichere Mailverbindungen benutzt');
define('lg_admin_mailboxes_recommended','(empfohlen)');
define('lg_admin_mailboxes_secure','(sicher)');
define('lg_admin_mailboxes_secure_recommended','(sicher, empfohlen)');
define('lg_admin_mailboxes_replyname','Account Name');
define('lg_admin_mailboxes_replyto','Antwort an');
define('lg_admin_mailboxes_replyemail','Antwort an Email Account');
define('lg_admin_mailboxes_replyemailnote','Der Email Account welcher zu diesem Postfach gehört z.B.: support@mydomain.com');
define('lg_admin_mailboxes_replynamenote','Abesendername welcher in versendeten Mails steht');
define('lg_admin_mailboxes_enablear','Automatische Antwort aktivieren');
define('lg_admin_mailboxes_etar','Automatische Antwort');
define('lg_admin_mailboxes_etpublic','Öffentliche Notiz für Kunden');
define('lg_admin_mailboxes_etexternal','externe Notizen');
define('lg_admin_mailboxes_etreqcreatedbyform','Anfrage erstellt über das Portal Formular');
define('lg_admin_mailboxes_etreqcreatedbyform_note','Info: Dieses Template wird nur für sekundäre Portale genutzt, bei welchen das Postfach als "Sende Emails von" definiert wurde.');
define('lg_admin_mailboxes_enablearnote','automatische Antwort auf alle Emails welche an diese Mailbox gesendet werden.');
define('lg_admin_mailboxes_mbusernote','z.B.: bjones, bjones@mycompany.com');
define('lg_admin_mailboxes_mbhostnote','z.B.: pop.mycompany.com, mail.mycompany.com');
define('lg_admin_mailboxes_mbpassnote','Account Passwort (nur eingeben wenn wechsel)');
define('lg_admin_mailboxes_mbpassnote_confirm','Account Passwort bestätigen');
define('lg_admin_mailboxes_mailboxnote','üblicherweise INBOX');
define('lg_admin_mailboxes_mbportnote','üblicherweise 110 für POP3, 143 - IMAP, 995 - POP3S, 993 - IMAPS');
define('lg_admin_mailboxes_mbtypenote','üblicherweise POP3 or IMAP');
define('lg_admin_mailboxes_msgnote','Templates hier werden die Versionen unter <a href="admin.php?pg=admin.tools.email">system email templates</a> überschreiben.');
define('lg_admin_mailboxes_defcat','Standart Kategorie');
define('lg_admin_mailboxes_defcatnote','Ein Email auf dieses Postfach wird automatisch dieser Kategorie zugewiesen.');
define('lg_admin_mailboxes_nodefault','kein Standart');
define('lg_admin_mailboxes_testmailbox','Postfacheinstellungen testen');
define('lg_admin_mailboxes_testmailboxex','Dieser Test überprüft das Postfach auf die korrekten Einstellungen. Der Server muss so konfiguriert sein, dass tasks.php jede Minute ausgeführt wird, um Mails zu erhalten (nur wenn selber gehostet).');
define('lg_admin_mailboxes_testing','Testen ...');
define('lg_admin_mailboxes_testnotesecure','Dieses Postfach benötigt möglicherweise eine Sichere Verbindung:');
define('lg_admin_mailboxes_testnotepop','übliche POP Einstellungen: POP3S, Port 995, SSL-no validate');
define('lg_admin_mailboxes_testnoteimap','übliche IMAP Einstellungen: IMAPS, Port 993, SSL-no validate');
define('lg_admin_mailboxes_smtppass_msg','Leer lassen wenn nicht anders');
define('lg_admin_mailboxes_addbox','ein Postfach hinzufügen');
define('lg_admin_mailboxes_addbutton','Postfach hinzufügen');
define('lg_admin_mailboxes_editbox','Bearbeiten: ');
define('lg_admin_mailboxes_editbutton','Anpassungen Speichern');
define('lg_admin_mailboxes_savetoview','Speichern um Änderungen anzusehen');
define('lg_admin_mailboxes_samplesubject','RE: Kundenbetreff');
define('lg_admin_mailboxes_deletemsg','Info, HelpSpot löscht die Mails nach dem Import aus dem Postfach.');
define('lg_admin_mailboxes_er_mailbox','<br>Bitte Postfach eingeben');
define('lg_admin_mailboxes_er_username','<br>Bitte Username eingeben');
define('lg_admin_mailboxes_er_hostname','<br>Bitte Hostname eingeben');
define('lg_admin_mailboxes_er_pass','<br>Bitte Passwort eingeben');
define('lg_admin_mailboxes_er_pass_confirm','<br>Bitte Passwort erneut eingeben');
define('lg_admin_mailboxes_er_passbadsymbol','<br>Ihr Passwort darf kein @ beinhalten');
define('lg_admin_mailboxes_er_type','<br>Bitte Account Typ festlegen');
define('lg_admin_mailboxes_er_port','<br>Bitte Portnummer angeben');
define('lg_admin_mailboxes_er_autoname','<br>Bitte Accountname angeben');
define('lg_admin_mailboxes_er_autoemail','<br>Bitte eine Antwort angeben für Postfach');
define('lg_admin_mailboxes_er_autoemail2','<br>Das Postfach darf nicht gleich lauten wie die Mailadresse eines Helpspot Users.');
define('lg_admin_mailboxes_er_autoresp','<br>Automatische Antwort wurde ausgewählt, jedoch keine Antwortnachricht verfasst.');
define('lg_admin_mailboxes_fbadded','Postfach hinzugefügt');
define('lg_admin_mailboxes_fbedited','Postfach bearbeitet');
define('lg_admin_mailboxes_fbdeleted','Postfach wurde deaktiviert');
define('lg_admin_mailboxes_fbundeleted','Postfach wiederhergestellt');
define('lg_admin_mailboxes_fbdeleted_outgoing', 'Mailbox could not be deleted because it is set as the default outgoing email account. Please first remove this mailbox as the default at Admin > Settings > Email Integration before deactivating this mailbox.');
define('lg_admin_mailboxes_fbundeleted', 'Mailbox restored');
define('lg_admin_mailboxes_outbound','Outbound Email');
define('lg_admin_mailboxes_outboundex','Es können die standart SMTP Einstellungen des Systems genutzt werden (Admin - Einstellungen) oder es werden für dieses Postfach spezifische SMTP Einstellungen gesetzt.');
define('lg_admin_mailboxes_outbounduse','nutzbare SMTP Einstellungen');
define('lg_admin_mailboxes_outboundinternal','System Standart');
define('lg_admin_mailboxes_outboundcustom','Benutzerdefiniert');
define('lg_admin_mailboxes_noimap','Die PHP IMAP Erweiterung ist nicht installiert. Diese muss installiert sein um die email integration zu nutzen.');
	define('lg_admin_mailboxes_colid','ID');
	define('lg_admin_mailboxes_colbox','Postfach');
	define('lg_admin_mailboxes_coldel','Postfach deaktivieren');
	define('lg_admin_mailboxes_coldelwarn','Dieses Postfach wirklich deaktivieren?');
define('lg_admin_mailboxes_msgdefault','##DARÜBER ANTWORTEN##

Vielen Dank für Ihre Anfrage. Wir haben Ihre Anfrage erhalten, welche zurzeit von unseren Mitarbeitern bearbeitet wird. Die Information weiter unten Hilft Ihnen sich über den Stand Ihrer Anfrage zu informieren.

Anfrage Online überprüfen: ##REQUESTCHECKURL##&id=##ACCESSKEY##
Zugriffsschlüssel:  ##ACCESSKEY##

___________________________________________________
Vergessen Sie nicht unsere anderen Hilfestellungen:
Wissensdatenbank: ##KNOWLEDGEBOOKURL##
Forum: ##FORUMURL##');
define('lg_admin_mailboxes_msgdefault_html','
<html>
<body>
##DARÜBER ANTWORTEN##

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Anfrage Erhalten</td>
<td align="right">
<a href="##REQUESTCHECKURL##&id=##ACCESSKEY##">Den kompletten Verlauf ansehen</a>
</td>
</tr>
</table>

<br />

<p>Vielen Dank für Ihre Anfrage. Wir haben Ihre Anfrage erhalten, welche zurzeit von unseren Mitarbeitern bearbeitet wird. Die Information weiter unten Hilft Ihnen sich über den Stand Ihrer Anfrage zu informieren.</p>

<br />

<p>Anfrage Online überprüfen: <a href="##REQUESTCHECKURL##&id=##ACCESSKEY##">##REQUESTCHECKURL##&id=##ACCESSKEY##</a><br />
Zugriffsschlüssel: ##ACCESSKEY##</p>

<hr width="80%">

<p>Vergessen Sie nicht unsere anderen Hilfestellungen:<br />
Wissensdatenbank: <a href="##KNOWLEDGEBOOKURL##">##KNOWLEDGEBOOKURL##</a></p>

</body>
</html>
');

define('lg_admin_mailboxes_oauth_instructions', 'Instructions');
define('lg_admin_mailboxes_oauth_label_auth_token', 'Authentication Credentials');
define('lg_admin_mailboxes_oauth_label_auth_token_ex', 'The authentication credentials created at <a target="_blank" href="https://auth.helpspot.com">https://auth.helpspot.com</a>');
define('lg_admin_mailboxes_oauth_instruction_msg', '<strong>HelpSpot requires authentication credentials to retrieve emails from %s</strong>.
                <br><br> To configure this mailbox:
                <ol>
                    <li>Generate credentials using the <a target="_blank" href="https://auth.helpspot.com">HelpSpot Email Authentication service</a>.</li>
                    <li>Copy and paste the generated credentials below.</li>
                </ol>');
define('lg_admin_mailboxes_oauth_credentials_placeholder', 'Value encrypted, add new credentials here to overwrite');
