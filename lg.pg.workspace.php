<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_workspace_title','Arbeitsplatz');

define('lg_workspace_options','Optionen');

define('lg_workspace_filterop','Filter Optionen');
define('lg_workspace_mkdefault','als Standart Arbeitsplatz setzen');
define('lg_workspace_edit','Filter bearbeiten');
define('lg_workspace_delete','Filter löschen');
define('lg_workspace_grid','Tabellenansicht');
define('lg_workspace_stream','Note Stream');
define('lg_workspace_report','Report Ansicht');
define('lg_workspace_triage','Request Triage');
define('lg_workspace_rss','RSS Feed');
define('lg_workspace_export','CSV Export');
define('lg_workspace_triagepanel','Triaging');
define('lg_workspace_triageassign','zuweisen');
define('lg_workspace_triagecategory','Kategorie');
define('lg_workspace_triageassignto','zuweisen an');
define('lg_workspace_deleteconf','Möchten Sie diesen Filter wirklich löschen?');
define('lg_workspace_merge','Zusammenfügen');
define('lg_workspace_movetotrash','Papierkorb');
define('lg_workspace_changestatus','Status');
define('lg_workspace_markspam','SPAM');
define('lg_workspace_marknotspam','als NOT SPAM definieren');
define('lg_workspace_nottrash','In Posteingang wiederherstellen');
define('lg_workspace_close','Schliessen');
define('lg_workspace_respond','Batch Antwort');
define('lg_workspace_markdelspam','SPAM löschen');
define('lg_workspace_moveto','neu zuweisen');
define('lg_workspace_selectcat','Kategorie auswählen');
define('lg_workspace_assignto','zuweisen an');
define('lg_workspace_selstatus','Status auswählen');
define('lg_workspace_closestatus','Geschlossen-status auswählen');
define('lg_workspace_selmerge','Alle ausgewählten Anfragen zusammenfügen in:');
define('lg_workspace_customize','Spalten anpassen');
define('lg_workspace_notemail','Vereinzelte Anfragen wurden nicht als SPAM markerit, da diese nicht übers Web Formular erstellt wurden.');
define('lg_workspace_notemailqm','Vereinzelte Anfragen wurden nicht als SPAM markerit, da diese nicht übers Web Formular erstellt wurden.');
define('lg_workspace_spammessage','Info: Spam sollte gelöscht werden um den Spamfilter anzulernen.');
define('lg_workspace_spammessageoff','Info: Der Spamfilter ist auf OFF gesetzt unter Admin->Einstellungen->Email Integration. In dieser Konfiguration wird Spam gelöscht, jedoch der Spamfilter nicht angelernt.');
define('lg_workspace_trashmessage','Anfragen im Papierkorn werden gelöscht %s. Gelöschte Anfragen können nicht wiederhergestellt werden.');
define('lg_workspace_trashmessagenever','Anfragen im Papierkorb werden nicht gelöscht.');
define('lg_workspace_stuckmsg','HelpSpot ist es nicht möglich ein oder mehrere Mails aus dem Postfach zu holen.');
define('lg_workspace_stuckmsg3','Um diese Meldung zu entfernen, bitte zeitnah die erforderliche Mail manuell via Webmail oder Desktop Client löschen.');
define('lg_workspace_stuckmsg2','Möglicher Grund für diesen Fehler kann sein, dass zuwenig PHP Speicher zur Verfügung steht, das Mail nicht sauber formatiert ist um geparst zu werden. Weitere Informationen: <a href="https://support.helpspot.com/index.php?pg=kb.page&id=34" target="_blank">Mail kann nicht geparst werden (EN)</a>.');
define('lg_workspace_stucklist','Stuck Email List');
define('lg_workspace_stuckbox','Mailbox');
define('lg_workspace_stuckfrom','Email von');
define('lg_workspace_stuckdate','Datum');
define('lg_workspace_stuckviewdetails','Details ansehen');
define('lg_workspace_stuckretry','Bereinigen und erneut versuchen');
define('lg_workspace_markunread_msg','als ungelesen markiert');
define('lg_workspace_markread_msg','als gelesen markiert');
define('lg_workspace_batchchange','Batch wird verarbeitet');
define('lg_workspace_viewable','Sichtbar für');
define('lg_workspace_viewable_onlyme','Nur Ich');
define('lg_workspace_viewable_permstaff','freigegebener Staff');
define('lg_workspace_viewable_everyone','Jede/r');
define('lg_workspace_viewable_group','Gruppe');
?>
