<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_forums_manage','Manage');
define('lg_forums_order','Order');
define('lg_forums_saveorder','Save Order');
define('lg_forums_orderchanged','Order changed');
define('lg_forums_addforum','Manage Forums');
define('lg_forums_title','Forums');
define('lg_forums_spamtitle','Forum SPAM');
define('lg_forums_public','Public Forums');
define('lg_forums_private','Private Forums');
define('lg_forums_forum','Forum');
define('lg_forums_topic','Topic');
define('lg_forums_message','Message');
define('lg_forums_desc','Description');
define('lg_forums_author','Author');
define('lg_forums_post','Post');
define('lg_forums_postcount','Posts');
define('lg_forums_postreply','Post Reply');
define('lg_forums_posttopic','Post Topic');
define('lg_forums_latesttopics','Newest %s Topics');
define('lg_forums_latestposts','Newest %s Posts');
define('lg_forums_closed','Closed');
define('lg_forums_closedtopdesc','No more replies will be accepted');
define('lg_forums_updatetopic','Update Topic');
define('lg_forums_sticky','Topic is sticky');
define('lg_forums_stickydesc','The topic will always appear at the top of the topic list');
define('lg_forums_kudelcheck','Are you sure you want to remove this person from the list of know users?');

define('lg_forums_name','Forum Name');
define('lg_forums_choosemods','Choose Moderators');
define('lg_forums_modsdesc','Moderators have administrative rights over the exchanges within the forum.');
define('lg_forums_forumtype','Forum Type');
define('lg_forums_forumtype_public','Public');
define('lg_forums_forumtype_private','Private');
define('lg_forums_privatelabeldesc','Private forums are only accessible to users with HelpSpot accounts.');
define('lg_forums_closeddesc','Closing prevents the addition of new topics and posts.');
define('lg_forums_addbutton','Add Forum');
define('lg_forums_editbutton','Save Changes');
define('lg_forums_edit','Edit:');
define('lg_forums_er_noname','Please provide a name for the forum');
define('lg_forums_er_notopic','Please provide a topic');
define('lg_forums_er_nopost','Please type a message');
define('lg_forums_er_nopostername','Please provide a name');
define('lg_forums_added','Forum added');
define('lg_forums_updated','Forum updated');
define('lg_forums_deleteforum','Delete Forum');
define('lg_forums_deleted','Forum deleted');
define('lg_forums_deletetopic','Delete Topic');
define('lg_forums_deletetopicspam','Delete Topic as SPAM');
define('lg_forums_deletetopicwarn','Are you sure you want to delete this topic? This cannot be undone.');
define('lg_forums_deletetopicwarnspam','Are you sure you want to delete this topic? Doing so will help train the forums against future SPAM.');
define('lg_forums_deletepost','Delete Post');
define('lg_forums_lastpostdelete','This is the only post in the topic and cannot be deleted without deleting the entire topic');
define('lg_forums_deletepostspam','Delete Post as SPAM');
define('lg_forums_deletepostwarn','Are you sure you want to delete this post? This cannot be undone.');
define('lg_forums_deletepostspamwarn','Are you sure you want to delete this post as SPAM? Doing so will help train the forums against future SPAM.');
define('lg_forums_deleteforumcheck','Are you sure you want to delete this forum? This is irreversible and may take several minutes to complete.');
define('lg_forums_createtopic','Create a New Topic');
define('lg_forums_postername','Name');
define('lg_forums_posteremail','Email');
define('lg_forums_ip','IP');
define('lg_forums_subbyemail','Subscribed via email');
define('lg_forums_opsys','Operating System');
define('lg_forums_browser','Browser');
define('lg_forums_posterurl','Website URL');
define('lg_forums_emailupdate','Subscribe to replies via email');
define('lg_forums_modtopiccontrol','Moderator Topic Controls');
define('lg_forums_topicclosed','This topic is closed');
define('lg_forums_forumclosed','This forum is closed');
define('lg_forums_modpost','Moderate Post');
define('lg_forums_turnreq','Turn into Request');
define('lg_forums_knownuser','Known User');
define('lg_forums_mgknownuser','Manage Known User');
define('lg_forums_mgknownuserdesc','Marking a forum visitor as a known user allows moderators to appropriately label that person for all forum visitors to see.');
define('lg_forums_mgknownuserremove','Remove');
define('lg_forums_kunewlabel','OR use a new label');
define('lg_forums_kuexistinglabels','Choose an Existing Label');
define('lg_forums_kusaveuser','Save Known User');
define('lg_forums_opml','Forum RSS Feeds');
define('lg_forums_exportopml','Export feeds as OPML');

define('lg_forums_initlabels','Help Desk Team Member,Customer, Expert User, Moderator');

define('lg_forums_spam_mod','Moderated SPAM');
define('lg_forums_spam_prob','Probability');
define('lg_forums_spam_markdelspam','Delete SPAM');
define('lg_forums_spam_marknotspam','Mark as NOT SPAM');
define('lg_forums_spam_submit','Submit');
define('lg_forums_spam_deleted','Posts deleted, filter trained');
define('lg_forums_spam_notdeleted','Posts removed from SPAM queue, filter trained');
define('lg_forums_spam_spammessage','note: spam must be deleted in order to train the spam filter');
define('lg_forums_meta_web','Web');
define('lg_forums_meta_email','Email');
define('lg_forums_batchchange','Processing Batch');
?>