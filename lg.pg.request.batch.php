<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_request_batch_title','Batch Anfrage verarbeiten');
define('lg_request_batch_instr','Seite nicht verlassen bis der Prozess abgeschlossen wurde.');
define('lg_request_batch_processed','%s von %s abgeschlossen');
define('lg_request_batch_processing','Verarbeitung...');
define('lg_request_batch_complete_link','Zum Batchfilter');
define('lg_request_batch_smtp','SMTP Fehler, Email nicht versendet');
define('lg_request_batch_ergeneral','Fehler, Anfrage nicht aktualisiert');
define('lg_request_batch_batch','Batch');
define('lg_request_batch_batchhistory','Batch History');
?>