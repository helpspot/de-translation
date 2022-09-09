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

define('lg_conditional_remcon','Remove condition');
define('lg_conditional_addcon','Add condition');
define('lg_conditional_phpregex','PHP Regular Expression einfügen');
define('lg_conditional_ftwarning','Vorsicht mit einer Volltextsuche in einem Filter; Die Ausführung ist sehr Datenbank intensiv.');
define('lg_conditional_ftwarning2','Counts cannot be displayed in the workspace for filters using full text search');

define('lg_conditional_mr_to','An');
define('lg_conditional_mr_from','Von');
define('lg_conditional_mr_cc','Cc');
define('lg_conditional_mr_subject','Betreff');
define('lg_conditional_mr_headers','Headers');
define('lg_conditional_mr_emailbody','Email body');
define('lg_conditional_mr_customerid','Kunden ID');
define('lg_conditional_mr_mailbox','Postfach');
define('lg_conditional_mr_hasattach','mit Anhang');
define('lg_conditional_mr_urgent','ist Wichtig');
define('lg_conditional_mr_spam','ist SPAM');
define('lg_conditional_mr_notspam','ist kein SPAM');

define('lg_conditional_mr_is','ist');
define('lg_conditional_mr_isnot','ist nicht');
define('lg_conditional_mr_begins','beginn mit');
define('lg_conditional_mr_ends','endet mit');
define('lg_conditional_mr_contains','beinhaltet');
define('lg_conditional_mr_notcontain','beinhaltet nicht');
define('lg_conditional_mr_matches','stimmt überein');

define('lg_conditional_mra_setcat','setzt Kategorie/Staff');
define('lg_conditional_mra_setcustom','setzt benutzderdefiniertes Feld');
define('lg_conditional_mra_close','schliesst Anfrage');
define('lg_conditional_mra_setstatus','setzt Status');
define('lg_conditional_mra_markurgent','markiert als Wichtig');
define('lg_conditional_mra_marknoturgent','markiert als nicht Wichtig');
define('lg_conditional_mra_movetotrash','in Papierkorb verschieben');
define('lg_conditional_mra_movetoinbox','in Postfach verschieben');
define('lg_conditional_mra_notify','Emailbenachrichtigung senden an');
define('lg_conditional_mra_instantreply','direkte Antwort');
define('lg_conditional_mra_addprivatenote','private Notiz hinzufügen');

define('lg_conditional_at_userid','Kunden ID');
define('lg_conditional_at_xrequest','Anfrage ID');
define('lg_conditional_at_email','Email');
define('lg_conditional_at_fname','Vorname');
define('lg_conditional_at_lname','Nachname');
define('lg_conditional_at_phone','Telefon');
define('lg_conditional_at_openvia','Kontaktiert via');
define('lg_conditional_at_status','Status');
define('lg_conditional_at_open','Offen/Geschlossen');
define('lg_conditional_at_urgent','ist Wichtig');
define('lg_conditional_at_not_urgent','ist nicht Wichtig');
define('lg_conditional_at_urgency','Wichtigkeit');
define('lg_conditional_at_category','Kategorie');
define('lg_conditional_at_reportingtags','Reporting Tags');
define('lg_conditional_at_unassigned','nicht zugewiesen');
define('lg_conditional_at_currentlyloggedin','Angemeldete User');
define('lg_conditional_at_assignedto','Zugewiesen an');
define('lg_conditional_at_acwasever','war jemals zugewiesen an');
define('lg_conditional_at_acfromto','erneut zugewiesen von/an');
define('lg_conditional_at_acreassignedby','erneut zugewiesen von');
define('lg_conditional_at_openedby','geöffnet von');
define('lg_conditional_at_updatedby','aktualisiert von (use with other conditions)');
define('lg_conditional_at_relativedate','Relatives Datum seit eröffnet');
define('lg_conditional_at_relativedateclosed','Relatives Datum seit geschlossen');
define('lg_conditional_at_relativedatetoday','Anfrage aktualisiert');
define('lg_conditional_at_relativedatelastpub','Anfrage öffentlich aktualisiert');
define('lg_conditional_at_relativedatelastcust','Anfrage von Kunde aktualisiert');
define('lg_conditional_at_today','Heute');
define('lg_conditional_at_tomorrow','Morgen');
define('lg_conditional_at_yesterday','Gestern');
define('lg_conditional_at_dateset','Datum ist gesetzt');
define('lg_conditional_at_datenotset','Datum ist nicht gesetzt');
define('lg_conditional_at_past7','letzten 7 Tage');
define('lg_conditional_at_past14','letzten 14 Tage');
define('lg_conditional_at_past30','letzten 30 Tage');
define('lg_conditional_at_past60','letzten 60 Tage');
define('lg_conditional_at_past90','letzten 90 Tage');
define('lg_conditional_at_past365','letzten 365 Tage');
define('lg_conditional_at_next7','nächste 7 Tage');
define('lg_conditional_at_next14','nächste 14 Tage');
define('lg_conditional_at_next30','nächste 30 Tage');
define('lg_conditional_at_next90','nächste 90 Tage');
define('lg_conditional_at_next365','nächste 365 Tage');
define('lg_conditional_at_thisweek','diese Woche (So - Sa)');
define('lg_conditional_at_thismonth','diesen Monat');
define('lg_conditional_at_thisyear','dieses Jahr');
define('lg_conditional_at_lastweek','letzte Woche (So - Sa)');
define('lg_conditional_at_lastmonth','letzter Monat');
define('lg_conditional_at_lastyear','letztes Jahr');
define('lg_conditional_at_nextweek','nächte Woche (So - Sa)');
define('lg_conditional_at_nextmonth','nächster Monat');
define('lg_conditional_at_nextyear','nächstes Jahr');
define('lg_conditional_at_beforedate','eröffnet vor Datum');
define('lg_conditional_at_afterdate','eröffnet nach Datum');
define('lg_conditional_at_closedbeforedate','geschlossen vor Datum');
define('lg_conditional_at_closedafterdate','geschlossen nach Datum');
define('lg_conditional_at_title','Emailbetreff');
define('lg_conditional_at_mailbox','Postfach');
define('lg_conditional_at_portal','Portal');
define('lg_conditional_at_portal_default','primäres Portal');
define('lg_conditional_at_sincecreated','Minuten seit Erstellung');
define('lg_conditional_at_sinceclosed','Minuten seit Abschluss');
define('lg_conditional_at_sincelastupdate','Minuten seit letzter Aktualisierung');
define('lg_conditional_at_sincelastpubupdate','Minuten seit letztem öffentlicher Aktualisierung');
define('lg_conditional_at_sincelastcustupdate','Minuten seit letzter Kunden aktualisiert');
define('lg_conditional_at_speedtofirstresponse','Minuten seit erster Antwort (ganze Zeit)');
define('lg_conditional_at_pubupdates','Anzahl öffentlicher Aktualisierungen');
define('lg_conditional_at_lastreplyby','letzte öffentliche Antwort von');
define('lg_conditional_at_lastreplyby_cust','Kunde');
define('lg_conditional_at_lastreplyby_staff','ein Staff Mitglied');
define('lg_conditional_at_acting_person_cust','Kunde');
define('lg_conditional_at_search','Anfragenhistorie Volltext Suche für');
define('lg_conditional_at_wheresql','Benutzderdefinierte "wo" clause (SQL)');
define('lg_conditional_at_subcondand','ALLES trifft zu');
define('lg_conditional_at_subcondor','NICHTS trifft zu');
define('lg_conditional_at_testcond','Einstellungen testen');
define('lg_conditional_at_showall','alle Resultate anzeigen lassen');
define('lg_conditional_at_openreq','Anfrage eröffnen');
define('lg_conditional_at_stafftonotify','Staff');
define('lg_conditional_at_externalemail','Email Adresse');
define('lg_conditional_at_assignedstaffer','Zugewiesener Staff');
define('lg_conditional_at_mailboxselect','Versendet von');
define('lg_conditional_at_subject','Betreff');
define('lg_conditional_at_frommailbox','Von Postfach erhalten (wenn Verfügbar)');
define('lg_conditional_at_calcmin','Berechnete Minuten');
define('lg_conditional_at_notifysms','Ebenfalls SMS Benachrichtigung versenden');
define('lg_conditional_at_notifyexternal','An externe email adresse senden');

define('lg_conditional_at_emailcustomer','Email Kunde');
define('lg_conditional_at_emailresults','Email Table of Results to');
define('lg_conditional_at_subscribestaff', 'Subscribe Staff');
define('lg_conditional_at_unsubscribestaff', 'Unsubscribe Staff');
define('lg_conditional_at_requestpush','Perform a Request Push');
define('lg_conditional_at_thermostat_send', 'Send a Thermostat Survey');
define('lg_conditional_at_thermostat_add_email', 'Add Email to Survey Campaign');
define('lg_conditional_at_thermostat_nps_score', 'Thermostat NPS Score');
define('lg_conditional_at_thermostat_csat_score', 'Thermostat CSAT Score');
define('lg_conditional_at_thermostat_feedback', 'Has Thermostat Feedback');
define('lg_conditional_at_thermostat_has_feedback', 'has feedback');
define('lg_conditional_at_thermostat_does_not_have_feedback', 'doesn\'t have feedback');
define('lg_conditional_at_norequestpush','You have not enabled any Request Push classes. <a href="http://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=153" target="_blank">Find out more about Request Push</a>.');
define('lg_conditional_at_webhook','POST a webhook to this URL:');
define('lg_conditional_at_webhook_no_history', 'POST a webhook (no history) to this URL:');
define('lg_conditional_at_pushto','Push To');
define('lg_conditional_at_pushcomment','Kommentar (optional)');
define('lg_conditional_at_lessthan','weniger als');
define('lg_conditional_at_greaterthan','mehr als');

define('lg_conditional_at_ogadvanced','erweitert');
define('lg_conditional_at_ogintegrations', 'Integrations');
define('lg_conditional_at_ogcustinfo','Kundeninformationen');
define('lg_conditional_at_ogreqdetails','Anfragedetails');
define('lg_conditional_at_ogassignmentchain','Zuordnungskette');
define('lg_conditional_at_ogcustomfields','benutzderdefiniertes Feld');
define('lg_conditional_at_ogdatetime','Datum & Zeit');
define('lg_conditional_at_ogsearch','Suche');
define('lg_conditional_at_ogother','Other');
define('lg_conditional_at_ognotifications','Benachrichtigungen');
define('lg_conditional_at_ogemaildetails','Email Details');

define('lg_conditional_at_otrigger','Spezifischer Trigger');
define('lg_conditional_at_acting_person','Person');
define('lg_conditional_at_notetype','Notiz Typ');
define('lg_conditional_at_notecontent','Notiz');

define('lg_conditional_tr_is','jetzt ist');
define('lg_conditional_tr_isnot','jetzt ist nicht');
define('lg_conditional_tr_begins','jetzt beginnt mit');
define('lg_conditional_tr_ends','jetzt endet mit');
define('lg_conditional_tr_contains','jetzt beinhaltet');
define('lg_conditional_tr_notcontain','jetzt beinhaltet nicht');
define('lg_conditional_tr_matches','jetzt stimmt überein');
define('lg_conditional_tr_lessthan','jetzt grösser als');
define('lg_conditional_tr_greaterthan','jetzt kleiner als');

define('lg_conditional_tr_changed','aktualisiert');
define('lg_conditional_tr_changed_to','aktualisiert auf');
define('lg_conditional_tr_changed_from','aktualisiert von');
define('lg_conditional_tr_notchanged','nicht aktualisiert');
define('lg_conditional_tr_notchanged_to','nicht aktualisiert auf');
define('lg_conditional_tr_notchanged_from','nicht aktualisiert von');

define('lg_conditional_tr_rt_is_selected','jetzt ausgewählt');
define('lg_conditional_tr_rt_is_not_selected','jetzt nicht ausgewählt');
define('lg_conditional_tr_rt_was_selected','ursprünglich ausgewählt');
define('lg_conditional_tr_rt_was_not_selected','ursprünglich nicht ausgewählt');

define('lg_conditional_tr_public','öffentlich');
define('lg_conditional_tr_private','privat');
define('lg_conditional_tr_external','extern');

define('lg_conditional_tr_livelookup','Live Lookup durchführen');
define('lg_conditional_tr_nolivelookup','Live Lookup einrichten: <a href="http://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=174" target="_blank">Mehr über Live Lookup (EN)</a>.');

define('lg_conditional_tr_webhook','POST a webhook to this URL:');
define('lg_conditional_tr_webhook_no_history', 'POST a webhook (no history) to this URL:');
define('lg_conditional_setreptags','Reporting Tags setzen');
