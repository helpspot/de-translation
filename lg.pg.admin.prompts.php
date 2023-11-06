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

define('lg_admin_ai_title', 'HelpSpot AI Prompts');
define('lg_admin_ai_add_prompt', 'Add a Prompt');
define('lg_admin_ai_addbutton', 'Add Prompt');
define('lg_admin_ai_edit_prompt', 'Edit: ');
define('lg_admin_ai_editbutton', 'Save Edits');
define('lg_admin_ai_showdel', 'Show Inactive Prompts');
define('lg_admin_ai_noshowdel', 'Return to Prompts');
define('lg_admin_ai_colid', 'ID');
define('lg_admin_ai_col_name', 'Prompt Name');
define('lg_admin_ai_col_folder', 'Folder');
define('lg_admin_prompts_addfolder', 'Add Folder');
define('lg_admin_ai_coldel', 'Make Prompt Inactive');
define('lg_admin_ai_coldelwarn', 'Are you sure you want to make this prompt inactive?');
define('lg_admin_prompt_fbdeleted', 'Prompt deleted');
define('lg_admin_prompt_fbundeleted', 'Prompt restored');
define('lg_admin_ai_fbedited', 'Prompt edited');
define('lg_admin_ai_fbadded', 'Prompt added');
define('lg_admin_prompt_name_er_ai', 'Please fill in prompt name');
define('lg_admin_prompt_system_er_ai', 'Please fill in AI Role');
define('lg_admin_prompt_user_er_ai', 'Please fill in Action Prompt');
define('lg_admin_prompt_system_message', 'Describe the AI\'s Role');
define('lg_admin_prompt_system_message_instructions','Instruct HelpSpot AI on how it should behave. e.g. "You are a professional customer service representative".');
define('lg_admin_prompt_user_message', 'Action Prompt');
define('lg_admin_prompt_user_message_instructions','Provide a prompt for HelpSpot AI to respond to. For examples view the <a href="https://support.helpspot.com/index.php?pg=kb.page&id=671">documentation</a>.');
define('lg_admin_prompt_kb_available', 'Available in Knowledge Books');
define('lg_admin_prompt_request_available', 'Available on Request Screen');
define('lg_admin_ai_uses','# of times used');
define('lg_aiplaceholders_input_text','Input text from Request or KB');
define('lg_aiplaceholders_customer_first_name','Customer first name');
define('lg_aiplaceholders_customer_last_name','Customer last name');
define('lg_aiplaceholders_staff_first_name','Staff first name');
define('lg_aiplaceholders_staff_last_name','Staff last name');
