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

//OpenAI / HelpSpot AI
define('lg_admin_openai_title', 'HelpSpot AI Settings');
define('lg_admin_openai_header', 'Enable HelpSpot AI');
define('lg_admin_openai_label_api_key', 'OpenAI API Key');
define('lg_admin_openai_label_enabled', 'Enabled HelpSpot AI');
define('lg_admin_openai_label_api_model', 'OpenAI Model');
define('lg_admin_openai_label_api_key_info', 'Removing the hidden key after saving will remove the HelpSpot AI integration. Learn how to <a href="https://support.helpspot.com/index.php?pg=kb.page&id=673">create an Open AI key</a>.');
define('lg_admin_openai_label_api_language', 'Translation Language');
define('lg_admin_openai_label_api_language_ex', 'The language used when translating customer requests using the HelpSpot AI request history translate function. Learn more <a href="https://support.helpspot.com/index.php?pg=kb.page&id=675">here</a>.');
define('lg_admin_openai_connect', 'Save Settings');
define('lg_admin_openai_get_key', 'Get OpenAI API Key');
define('lg_admin_openai_learn_about', 'Learn More About HelpSpot AI');
define('lg_admin_openai_key_value', 'placeholder="<key hidden>

Enter a new key to update."');
define('lg_admin_openai_intro',
'<strong>Use an OpenAI API key to enable capabilities such as:</strong>
    <ul>
        <li>Take a reply and transform it into a fully formatted response.</li>
        <li>Adjust the tone of replies to customers.</li>
        <li>Make spelling and grammar improvements.</li> 
    </ul><i style="color:#9f1b3a">Please note: When HelpSpot AI is enabled request notes, drafts and history may be sent to Open AI for processing when AI functions are used.</i>');
define('lg_admin_openai_label_api_timeout', 'OpenAI API Timeout (in seconds)');