<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_categories_title','Kategorien');	
define('lg_admin_categories_showdel','inaktive Kategorien darstellen');
define('lg_admin_categories_noshowdel','zurück zu Kategorien');
define('lg_admin_categories_cathelp','Kategorien werden genutzt um Kunden Anfragen zu Gruppieren.');
define('lg_admin_categories_category','Kategorie name');
define('lg_admin_categories_categorygroup','Kategorie gruppieren');
define('lg_admin_categories_nogroup','keine Gruppen');
define('lg_admin_categories_staffmem','Kategorie Staff');
define('lg_admin_categories_staffdesc','Staff Mitglieder können Anfragen innerhalb dieser Kategorie bearbeiten');
define('lg_admin_categories_defcontact','Standart Staff Kontakt');
define('lg_admin_categories_autoassign','automatische Anfragenzuweisung');
define('lg_admin_categories_autoassignex','Jede Anfrage (zugewiesen oder neu erstellt) in der Inbox wird anhand der Formel einem Staff zugewiesen.');
define('lg_admin_categories_aaoff','Aus');
define('lg_admin_categories_visibility','Sichtbar');
define('lg_admin_categories_aadefault','an Standart Kontakt');
define('lg_admin_categories_aarandom','zufälliger Kategorie Staff');
define('lg_admin_categories_aarandomboth','zufälliger Kategorie Staff (ohne Administratoren)');
define('lg_admin_categories_aaleast','Kategorie Staff mit am wenigsten Anfragen');
define('lg_admin_categories_aaleastboth','Kategorie Staff mit am wenigsten Anfragen(ohne Administratoren)');
define('lg_admin_categories_aarr','Round Robin (even distribution)');
define('lg_admin_categories_aarrnoadmin','Round Robin (even distribution, ohne Administratoren)');
define('lg_admin_categories_reportingtags','Reporting Tags');
define('lg_admin_categories_customfields','benutzerdefinierte Felder');
define('lg_admin_categories_customfieldsdesc','Wählt die benutzerdefinierten Felder aus, welche erscheinen wenn diese Kategorie für eine Anfrage gesetzt wird');
define('lg_admin_categories_customfields_none','Diese Installation hat zurzeit keine benutzerdefinierten Felder. Benutzerdefinierte Felder anlegen Admin->Organize.');
define('lg_admin_categories_websub','Die Kategorie wird im Web Formular dargestellt');
define('lg_admin_categories_public','Öffentlich');
define('lg_admin_categories_private','Privat');
define('lg_admin_categories_addcat','eine Kategorie hinzufügen');
define('lg_admin_categories_addbutton','Kategorie hinzufügen');
define('lg_admin_categories_editcat','Bearbeiten: ');
define('lg_admin_categories_editbutton','Anpassungen Speichern');
define('lg_admin_categories_er_cat','Kategorie auswählen');
define('lg_admin_categories_er_staff','Mindestens einen Staff für diese Kategorie auswählen');
define('lg_admin_categories_er_catexists','Eine Kategorie mit diesem Namen existiert bereits');
define('lg_admin_categories_er_inmailbox','Diese Kategorie ist der Mailbox zugewiesen und kann nicht gelöscht werden');
define('lg_admin_categories_fbadded','Kategorie hinzugefügt');	
define('lg_admin_categories_fbedited','Kategoriue bearbeitet');
define('lg_admin_categories_fbdeleted','Kategorie gelöscht');	
define('lg_admin_categories_fbundeleted','Kategorie wiederhersgestellt');	
define('lg_admin_categories_colid','ID');
define('lg_admin_categories_colcat','Kategorie');
define('lg_admin_categories_colgrouping','Gruppierung');
define('lg_admin_categories_coldefcon','Standart Kontakt');
define('lg_admin_categories_colwf','öffentlich');
define('lg_admin_categories_colassign','Autozuweisung');
define('lg_admin_categories_coldel','Kategorie deaktivieren');
define('lg_admin_categories_coldelwarn','Wirklich diese Kategorie deaktivieren?');
?>