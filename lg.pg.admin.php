<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_home_admin_title','Administrator Homepage');
define('lg_home_admin_newhelpspot','Eine neue HelpSpot Version ist verfügbar');
define('lg_home_admin_download','Download');
define('lg_home_admin_releasenotes','Notizen');
define('lg_home_admin_instructions','Instruktionen');
define('lg_home_admin_permwarning','Die Installationsfiles (oder andere) scheinen vom Server beschreibbar zu sein (777). Bitte Zugriffsberechtigungen anpassen um das Schadenpotential zu vermindern.');

define('lg_home_admin_install','HelpSpot Installation');
define('lg_home_admin_renew','Erneuern');
define('lg_home_admin_licupload','Neue Lizenz uploaden');
define('lg_home_admin_licuploadok','Neue Lizenz wurde heraufgeladen');
define('lg_home_admin_licnotvalid','Lizenz nicht gültig. Bitte überprüfen ob die aktuellste Lizenz geuploadet wurde.');
define('lg_home_admin_toomanyusers','Es sind mehr aktive User registriert als die Lizenz zulässt. Bitte User deaktivieren oder die Lizenz anpassen.');
define('lg_home_admin_customerid','Kunden ID');
define('lg_home_admin_licusers','Staff/Lizenzen');
define('lg_home_admin_licsupport','Support läuft aus');
define('lg_home_admin_version','HelpSpot Version');
define('lg_home_admin_maintenance','Wartungsmodus Mode');
define('lg_home_admin_maintenance_desc','Aktiviert unverzüglich den Wartungmodus (System erhält keine Anfragen und Staff Login wird deaktiviert). Der Wartungsmodus wird automatisch aktiviert/deaktiviert während Upgrades.');
define('lg_home_admin_maintenance_button','Wartungsmodus aktivieren');
define('lg_home_admin_maintenance_button_conf','Sind Sie sicher?');
define('lg_home_admin_addlicenses','Lizenz hinzufügen');
define('lg_home_admin_unlimited','Seitenlizenz');
