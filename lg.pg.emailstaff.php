<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_emailpopup_sendbutton','Email senden');
define('lg_emailpopup_subject','Betreff');
define('lg_emailpopup_body','Nachricht');
define('lg_emailpopup_failed','Versenden von Mail nicht möglich');
define('lg_emailpopup_success','Email senden');

define('lg_emailstaff_title','Email Staff');
define('lg_emailstaff_select','Staffauswahl für Mailversand');
?>