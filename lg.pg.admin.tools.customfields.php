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

define('lg_admin_cfields_title', 'Custom Request Fields');
define('lg_admin_cfields_create', 'Create a Custom Request Field');
define('lg_admin_cfields_create2', 'Create a Custom Request Field: Step 2');
define('lg_admin_cfields_createnote', 'Adding a custom field is a 2 step process. First pick the type of field and then you will enter specifics about the field.');
define('lg_admin_cfields_dropdowndesc', 'Optimal for obtaining a standardized response');
define('lg_admin_cfields_selsamp', 'Sample Value ');
define('lg_admin_cfields_textdesc', 'Optimal for short description');
define('lg_admin_cfields_checkboxdesc', 'Ideal for marking a request for further filtering/action');
define('lg_admin_cfields_lrgtextdesc', 'Optimal for larger blocks of text where more detail is required');
define('lg_admin_cfields_textsamp', 'Sample Text Field');
define('lg_admin_cfields_lrgtextsamp', 'Sample Large Text Field');
define('lg_admin_cfields_numtextdesc', 'Use for numeric values');
define('lg_admin_cfields_numtextsamp', '30');
define('lg_admin_cfields_decimaldesc', 'Use for decimal values');
define('lg_admin_cfields_decimalsamp', '5.62');
define('lg_admin_cfields_regexdesc', 'Match the input against a regular expression (ex: US Zip Code)');
define('lg_admin_cfields_regexsamp', '/^\d{5}([\-]\d{4})?$/');
define('lg_admin_cfields_ajaxdesc', 'Populate text box based on data dynamically retrieved via AJAX. Cannot be a public field.');
define('lg_admin_cfields_datedesc', 'A calendar date');
define('lg_admin_cfields_datetimedesc', 'A calendar date and time');
define('lg_admin_cfields_drilldowndesc', 'Multi-level selection list with 2 or more levels');
define('lg_admin_cfields_step2', 'Go To Step 2');
define('lg_admin_cfields_createfield', 'Create Field');
define('lg_admin_cfields_savefield', 'Save Field');
define('lg_admin_cfields_timenote', 'This process may take several minutes. Please do not perform any other actions until the process completes.');
define('lg_admin_cfields_reqfield', 'This is a required field');
define('lg_admin_cfields_webform', 'Show this field on the public request form');
define('lg_admin_cfields_fieldname', 'Field Name');
define('lg_admin_cfields_textsize', 'Size of database column');
define('lg_admin_cfields_textsizedesc', 'A number betwen 1 and 200');
define('lg_admin_cfields_lrgtextrows', 'Number of rows for the text box');
define('lg_admin_cfields_ajaxurl', 'AJAX data URL');
define('lg_admin_cfields_ajaxurldesc', 'The URL of the script or file which returns data in the format specified <a href="https://support.helpspot.com/index.php?pg=kb.page&id=158" target="_blank">here</a>.');
define('lg_admin_cfields_decimalplaces', 'Number of decimal places to store');
define('lg_admin_cfields_regexexpression', 'Javascript Regular Expression');
define('lg_admin_cfields_regexexpressiondesc', 'Your expression must be a javascript compatible regular expression.');
define('lg_admin_cfields_regextest', 'Test');
define('lg_admin_cfields_regextestvaluedesc', 'Test the expression');
define('lg_admin_cfields_regexreq', 'Expression required');
define('lg_admin_cfields_regexvalid', 'Expression is invalid and causes a javascript error, please fix');
define('lg_admin_cfields_drilldown', 'Drill Down List');
define('lg_admin_cfields_drillmanage', 'Manage List');
define('lg_admin_cfields_drillview', 'Preview List');
define('lg_admin_cfields_drilladdalert', 'You may only add one list item at a time');
define('lg_admin_cfields_drillremovealert', 'Are you sure you want to delete this element? Any sub elements will also be removed.');
define('lg_admin_cfields_drillquotes', 'Quotes are not allowed in a drill down list');
define('lg_admin_cfields_removeitem', 'Are you sure you want the remove this item?');
define('lg_admin_cfields_options', 'Options');
define('lg_admin_cfields_visibility', 'Custom Field Visibility');
define('lg_admin_cfields_visibility_cat', 'Visible in selected categories');
define('lg_admin_cfields_visibility_all', 'Always visible (across all categories)');
define('lg_admin_cfields_addlistitem', 'Add Item');
define('lg_admin_cfields_enterlistitem', 'Add List Items');
define('lg_admin_cfields_closecolors', 'Close');
define('lg_admin_cfields_fbadded', ' Custom field added');
define('lg_admin_cfields_fbdeleted', 'The field has been deleted');
define('lg_admin_cfields_fbnotdeleted', 'The field has not been deleted. Check the error log.');
define('lg_admin_cfields_fbedited', ' has been edited');
define('lg_admin_cfields_moved', 'The field has been moved');
define('lg_admin_cfields_edit', 'Edit: ');
define('lg_admin_cfields_delete', 'Delete Custom Field');
define('lg_admin_cfields_delwarn', 'Are you sure you want to delete this field? This cannot be undone. If you do not want to proceed click cancel. <ol><li>All data associated with this field will be lost!</li><li>This may affect filters/triggers/automation rules/mail rules</li><li>This operation can take some time</li></ol>');
define('lg_admin_cfields_colname', 'Name');
define('lg_admin_cfields_colid', 'ID');
define('lg_admin_cfields_coltype', 'Type');
define('lg_admin_cfields_colreq', 'Required');
define('lg_admin_cfields_colpub', 'Public');
define('lg_admin_cfields_erfieldname', 'Please enter a name for the field');
define('lg_admin_cfields_textsize_msg', 'Note this change only affects the displayed field size. Check the <a href=\"https://support.helpspot.com/index.php?pg=kb.page&id=537\" target=\"_blank\">Administrator Manual</a> for more information about changing the database field size.');
