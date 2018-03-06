<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_groups_title','Berechtigungs Gruppen');	
define('lg_admin_groups_addcat','Eine Gruppe hinzufügen');
define('lg_admin_groups_addbutton','Gruppe hinzufügen');
define('lg_admin_groups_delbutton','Gruppe löschen');
define('lg_admin_groups_delbuttonwarn','Sind Sie sicher, dass Sie diese Gruppe löschen möchten? Dies kann nicht Rückgängig gemacht werden.');
define('lg_admin_groups_delbuttoncant','Gruppe beinhaltet noch min. einen Staff. Kann nicht gelöscht werden.');
define('lg_admin_groups_editcat','Bearbeiten: ');
define('lg_admin_groups_editbutton','Änderungen speichern');
define('lg_admin_groups_adminmsg','Administrator Level kann nicht bearbeitet werden');

define('lg_admin_groups_permissions','Modul Berechtigungen');
define('lg_admin_groups_permissionsaccess','Zugriffsberechtigungen');
define('lg_admin_groups_fModuleReports','Reports');
define('lg_admin_groups_fModuleForumsPriv','private Forum anzeigen');
define('lg_admin_groups_fModuleKbPriv','private Wissensbeiträge anzeigen');
define('lg_admin_groups_fViewInbox','Arbeitsplatz Postfach');

define('lg_admin_groups_fCanBatchRespond','Batch antwort auf Anfragen');
define('lg_admin_groups_fCanMerge','Anfragen zusammenführen');
define('lg_admin_groups_fCanViewOwnReqsOnly','Nur eigene Anfragen können angesehen werden');
define('lg_admin_groups_fCanViewOwnReqsOnlyex','Diese Berechtigung limitiert die Darstellung (auch Such/Filterergebnisse) nur auf die eigenen Anfragen.');
define('lg_admin_groups_fLimitedToAssignedCats','Limitiert die Darstellung nur auf die zugewiesenen Kategorien');
define('lg_admin_groups_fLimitedToAssignedCatsex','Der Benutzer kann nur andere Benutzer sehen und denen zuweisen, solange diese in der selben Kategorie sind.');
define('lg_admin_groups_fCanAdvancedSearch','Zugriff auf die erweiterte Suche');
define('lg_admin_groups_fCanManageSpam','SPAM verwalten (markieren und löschen)');
define('lg_admin_groups_fCanManageTrash','Papierkorb verwalten (markieren und löschen)');
define('lg_admin_groups_fCanManageKB','Wissensdatenbank verwalten (erstellen, bearbeiten, löschen)');
define('lg_admin_groups_fCanManageForum','Manage forums  (erstellen, bearbeiten, löschen)');


define('lg_admin_groups_colid','ID');
define('lg_admin_groups_colgroup','Name');
define('lg_admin_groups_colclonegrp','Gruppe klonen');
define('lg_admin_groups_colclone','klonen');

define('lg_admin_groups_fbdeleted','Gruppe löschen');	
define('lg_admin_groups_fbedited','Gruppe editieren');	
define('lg_admin_groups_fbadded','Gruppe hinzufügen');
define('lg_admin_groups_er_groups','Bitte Gruppennamen einfügen');

?>