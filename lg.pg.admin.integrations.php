<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_integrations_title','Integrationen');
define('lg_admin_integrations_header','Daten ganz einfach auf über 500 andere Apps publizieren');
define('lg_admin_integrations_info','Helpspot verknüpfen mit 500+ anderen Apps und Services, welche Zapier anbietet.');
define('lg_admin_integrations_learn_zapier','Lerne Zapier kennen');
define('lg_admin_integrations_docs','HelpSpot Zapier Documentation');

define('lg_admin_thermostat_header','Send NPS surveys to your customers with ');
define('lg_admin_thermostat_connect','Save Thermostat API Token');
define('lg_admin_thermostat_learn_about','Learn About Thermostat');
define('lg_admin_thermostat_get_token', 'Get an API Token');
define('lg_admin_thermostat_label_api_token', 'Thermostat API Token');
define('lg_admin_thermostat_token_value', 'placeholder="<token hidden>

Enter a new (or empty) token to update (or remove) the Thermostat API token."');
?>
