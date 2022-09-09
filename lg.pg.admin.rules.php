<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_rules_title','Mailregeln');
define('lg_admin_rules_namecol','Regel Name');
define('lg_admin_rules_add','eine Mailregel hinzufügen');
define('lg_admin_rules_button','Regel hinzufügen');
define('lg_admin_rules_buttonedit','Regel speichern');
define('lg_admin_rules_edit','Regel bearbeiten');
define('lg_admin_rules_name','Name');
define('lg_admin_rules_anyall','Wenn %s der folgenden Kriterien zutreffen');
define('lg_admin_rules_then','diese Aktionen ausführen');
define('lg_admin_rules_any','keine');
define('lg_admin_rules_all','alle');
define('lg_admin_rules_colid','ID');
define('lg_admin_rules_del','Regel deaktivieren');
define('lg_admin_rules_delwarn','Diese Regel wirklich deaktivieren?');
define('lg_admin_rules_showdel','Inaktive Regeln anzeigen');
define('lg_admin_rules_noshowdel','zu Regeln zurück');
define('lg_admin_rules_noname','Bitte vergeben Sie für diese Regel einen Namen');
define('lg_admin_rules_fbinactive','Regel wurde deaktiviert');
define('lg_admin_rules_fbrestored','Regel wiederhersgestellt');
define('lg_admin_rules_fbadded','Regel hinzugefügt');
define('lg_admin_rules_fbedited','Regel bearbeitet');
define('lg_admin_rules_sorttitle','Meilregel Reihenfolge');
define('lg_admin_rules_note','Regel word nur auf neue Mails von neuen Anfragen angewendet; alle Antworten auf diese Anfragen werden nicht berücksichtigt.');
define('lg_admin_rules_hourlabel','Regel aktiv');
define('lg_admin_rules_anyhours','ganze Zeit');
define('lg_admin_rules_bizhours','nur zu Öffnungszeiten');
define('lg_admin_rules_offhours','nur ausserhalb der Öffnungszeiten');
define('lg_admin_rules_options', 'Options');
define('lg_admin_rules_options','Optionen');
