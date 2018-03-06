<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_search_customer','Kunden');
define('lg_search_data','Volltext');
define('lg_search_advanced','Detailiert');
define('lg_search_tags','Knowledge Tags');
define('lg_search_tagspick','Tag hinzufügen');
define('lg_search_tagsnone','Keine Tags zur Suche hinzugefügt');
define('lg_search_tips','Search Tips');
define('lg_search_fulltext','Volltextsuche');
define('lg_search_saveasfilter','als Filter speichern');
define('lg_search_saveasfilterlabel','Filter Name');
define('lg_search_saveasfilterex','Info: Weiterführende Filter können unter "Arbeitsplatz - Filter Anfragen" erstellt werden');
define('lg_search_reporttimeclosed','Anfragen geschlossen zwischen');
define('lg_search_reporttime','Anfrage geöffnet zwischen');

define('lg_search_title','Suche');
define('lg_search_cust_title','Kundenhistorie Suche');
define('lg_search_cust_titletips','Kundenhistorie Suchtipps');
define('lg_search_info','Datensuche');
define('lg_search_infotips','Volltextsuchtipps');
define('lg_search_all','Alle Bereiche');
define('lg_search_requests','Anfragen');
define('lg_search_forums','Forum');
define('lg_search_wild','* benutzen für Wildcard suche. z.B. yahoo*, *yahoo.com, *yahoo*');
define('lg_search_boolsearching','Boolean suche möglich: + muss sein, - muss nicht, "Satzsuche"');
define('lg_search_request','Anfrage');
define('lg_search_my_tip1','+ benutzen für "muss beinhalten" z.B. +printer +password');
define('lg_search_my_tip2','- benutzen für "muss nicht beinhalten" z.B. -printer -password');
define('lg_search_my_tip3','" " benutzen um nach einem String zu suchen z.B. "mein Passwort vergessen"');
define('lg_search_my_tip4','* als Wildcard benutzen z.B. ""print*"');
define('lg_search_my_tip5','Kombinationsmöglichkeiten z.B. +Drucker +Papier -Canon oder "Drucker Papier" -Canon');
define('lg_search_ms_tip1','AND benutzen um mehrere Wörter als Kriterium zu definieren z.B. printer AND paper');
define('lg_search_ms_tip2','OR benutzen um eines der Wörter als Kriterium zu definieren z.B. printer OR paper');
define('lg_search_ms_tip3','Kombination AND/OR z.B. (Drucker AND Papier) OR Canon');
define('lg_search_ms_tip4','" " benutzen für Sätze z.B. "lost my password');
define('lg_search_ms_tip5','* als Wildcard nutzen z.B. "print*" (Anführungszeichen notwendig)');
define('lg_search_pg_tip1','" " benutzen für Sätze z.B. "lost my password');

// Added for SphinxSearch
define('lg_search_sphinx_tip1','Use * as a wildcard: print*');
define('lg_search_sphinx_tip2','Use - or ! for must not contain: -printer, -password, !printer, !password');
define('lg_search_sphinx_tip3','Use = for must exact form: lost all =passwords (ensures passwords is plural)');
define('lg_search_sphinx_tip4','Use @ to search specific fields: @sEmail "ian@userscape.com", @(sEmail,sTitle) *userscape. Surround the search term with double quotes when searching full email addresses.');
define('lg_search_sphinx_tip5','Valid fields: sFirstName, sLastName, fOpenedVia, sEmail, sPhone, sUserId (for Customer ID), tNote, Custom# (e.g. Custom5)');
define('lg_search_sphinx_tip6','More search modifiers for <a href="http://sphinxsearch.com/docs/current.html#extended-syntax" target="_blank">SphinxSearch are explained here</a>.');
?>