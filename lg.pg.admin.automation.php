<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_automation_title','Automation Regel');
define('lg_admin_automation_namecol','Regel Name');
define('lg_admin_automation_add','Automationsregel hinzufügen');
define('lg_admin_automation_button','Regel hinzufügen');
define('lg_admin_automation_buttonedit','Regel speichern');
define('lg_admin_automation_anyall','Wenn %s der folgenden Kriterien zutreffen');
define('lg_admin_automation_edit','Regel bearbeiten');
define('lg_admin_automation_name','Name');
define('lg_admin_automation_then','Aktionen ausführen');
define('lg_admin_automation_any','keine');
define('lg_admin_automation_all','alle');
define('lg_admin_automation_colid','ID');
define('lg_admin_automation_options','Optionen');
define('lg_admin_automation_options_directcallonly','Nur Regel ausführen, wenn tasks2.php direkt aufgerufen wird mit dieser Regel ID.');
define('lg_admin_automation_options_directcallonlyex','Normalerweise werden alle Regeln ausgeführt, wenn tasks2.php ausgeführt wird. Wird diese Option aktiviert, wird die Regel nicht ausgeführt wenn tasks2.php ausgeführt wird. Es sei denn, tasks2.php wird direkt ausgerufen mit der ID dieser Regel. <br /><a href="https://support.helpspot.com/index.php?pg=kb.page&id=143" target="_blank">Details - tasks2.php mit Single ID (EN)</a>.');
define('lg_admin_automation_del','Regel deaktivieren');
define('lg_admin_automation_delwarn','Sind Sie sicher, dass Sie diese Regel deaktivieren möchten?');
define('lg_admin_automation_showdel','Inaktive Regeln anzeigen');
define('lg_admin_automation_noshowdel','Zurück zu den Regeln');
define('lg_admin_automation_noname','Bitte einen Namen für diese Regel setzen');
define('lg_admin_automation_nottested','Die Regel muss zuerst getestet werden, bevor diese gespeichert werden kann.');
define('lg_admin_automation_fbinactive','Regel deaktiviert');
define('lg_admin_automation_fbrestored','Regel wiederhergestellt');
define('lg_admin_automation_fbadded','Regel hinzugefügt');
define('lg_admin_automation_fbedited','Regel bearbeitet');
define('lg_admin_automation_sorttitle','Automations Regel Reihenfolge');
define('lg_admin_automation_note','Automationsregeln nutzen um Anfragen zu eskalieren, Staff und Kunden zu informieren, Zugehörigkeiten zu wechseln und vieles mehr. Achtung, Automationsregeln können ungewollte Aktionen auslösen, wenn diese nicht korrekt hinterlegt werden. Es sollte immer sichergestellt werden, dass die gewünschten Kriterien einwandfrei funktionieren, bevor diese Gespeichert werden. Eine ausgeführte Regel kann nicht wieder rückgängig gemacht werden.');
define('lg_admin_automation_confirm','Sind Sie sicher, dass Sie diese Regel speichern möchten? Die Regel wird gleich ausgeführt..');
?>
