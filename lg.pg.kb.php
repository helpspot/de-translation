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

define('lg_kb_title', 'Knowledge Books');
define('lg_kb_home', 'Books');
define('lg_kb_book', 'Book');
define('lg_kb_toc', 'Table of Contents');
define('lg_kb_tagcloud', 'Knowledge Tag Cloud');
define('lg_kb_highlighted', 'Highlighted Pages');
define('lg_kb_notags', 'No tags yet');
define('lg_kb_nohighlights', 'No highlights');
define('lg_kb_public', 'Public Knowledge Books');
define('lg_kb_private', 'Private Knowledge Books');
define('lg_kb_addbook', 'Add a Book');
define('lg_kb_bookorder', 'Order Books');
define('lg_kb_manage', 'Manage');
define('lg_kb_order', 'Order');
define('lg_kb_saveorder', 'Save Order');
define('lg_kb_orderchanged', 'Order changed');
define('lg_kb_deletekbcheck', 'Are you sure you want to delete this book? This is irreversible and may take several minutes to complete.');
define('lg_kb_addkb', 'Add a Knowledge Book');
define('lg_kb_addbutton', 'Add Knowledge Book');
define('lg_kb_editbutton', 'Save Changes');
define('lg_kb_edit', 'Edit:');
define('lg_kb_deletekb', 'Delete Book');
define('lg_kb_name', 'Book Name');
define('lg_kb_desc', 'Description');
define('lg_kb_descnote', 'This short description appears in the portal with the book title');
define('lg_kb_chooseeditors', 'Choose Book Editors');
define('lg_kb_editordesc', 'Editors can manage all book content, chapters, pages, and documents');
define('lg_kb_editors', 'Editors');
define('lg_kb_privatelabel', 'Private');
define('lg_kb_booktype', 'Book Type');
define('lg_kb_booktype_public', 'Public');
define('lg_kb_booktype_private', 'Private');
define('lg_kb_privatelabeldesc', 'Private books are only accessible to users with HelpSpot accounts.');
define('lg_kb_bookadded', 'Knowledge book added');
define('lg_kb_bookupdated', 'Knowledge book updated');
define('lg_kb_bookdel', 'Knowledge book deleted');
define('lg_kb_downloads', 'Downloads');
define('lg_kb_editbook', 'Edit Book');
define('lg_kb_addchap', 'Add Chapter');
define('lg_kb_editchap', 'Edit Chapter');
define('lg_kb_addpage', 'Add Page');
define('lg_kb_pagedata', 'Page Data');
define('lg_kb_pageid', 'ID');
define('lg_kb_createdon', 'Created On');
define('lg_kb_updatedon', 'Last Updated');
define('lg_kb_createdby', 'Created By');
define('lg_kb_lastupdateby', 'Last Update By');
define('lg_kb_helpfulness', 'Helpfulness');
define('lg_kb_highlightedlabel', 'Highlighted');
define('lg_kb_pagehidden', 'This page is hidden');
define('lg_kb_editpage', 'Edit Page');
define('lg_kb_viewinportal', 'View in Portal');
define('lg_kb_clearhelpful', 'reset');
define('lg_kb_clearhelpfulcheck', 'Are you sure you want to clear the votes? This cannot be undone.');
define('lg_kb_chapname', 'Chapter Title');
define('lg_kb_pagename', 'Page Title');
define('lg_kb_isappen', 'Is an Appendix');
define('lg_kb_appendesc', 'Appendices automatically appear at the end of a book and are not numbered.');
define('lg_kb_hidden', 'Hidden');
define('lg_kb_hiddendesc', 'Hidden chapters are only viewable to editors.');
define('lg_kb_hiddenpagedesc', 'Hidden pages are only viewable to editors.');
define('lg_kb_orderafter', 'Order in Chapter');
define('lg_kb_orderinbook', 'Order in Book');
define('lg_kb_inbook', 'Book');
define('lg_kb_firstchap', 'First chapter in the book');
define('lg_kb_after', 'After:');
define('lg_kb_deletechap', 'Delete Chapter');
define('lg_kb_deletechapwarn', 'Are you sure you want to delete this chapter? All the pages in the chapter will also be deleted. This is irreversible.');
define('lg_kb_firstpage', 'First page in the chapter');
define('lg_kb_deletepage', 'Delete Page');
define('lg_kb_deletepagewarn', 'Are you sure you want to delete this page? This is irreversible.');
define('lg_kb_pagebody', 'Page HTML');
define('lg_kb_pagedetails', 'Page Details');
define('lg_kb_highlight', 'Highlight Page');
define('lg_kb_highlightdesc', 'Makes the page more prominent in the table of contents.');
define('lg_kb_related', 'Related Pages');
define('lg_kb_addeditrelated', 'Select Related Pages');
define('lg_kb_download', 'Downloads');
define('lg_kb_adddownload', 'Add a File');
define('lg_kb_inchapter', 'Chapter');
define('lg_kb_deldoc', 'Delete');
define('lg_kb_deldoccheck', 'If you made changes to the page text please save them first. This really deletes the document and cannot be undone.');
define('lg_kb_savepages', 'Save Pages');
define('lg_kb_imageinsert', 'Image Upload / Selection');
define('lg_kb_uploadimage', 'Upload Image');
define('lg_kb_selectimagelabel', 'Select the image to insert');
define('lg_kb_noimages', 'No Images for This Page');
define('lg_kb_selectimage', 'Select Image');
define('lg_kb_deleteimage', 'Delete Image');
define('lg_kb_deleteimageconf', 'Are you sure you want to delete this image? If the image is used in the page already then the image will appear broken.');

define('lg_kb_er_noname', 'Please provide a name for the book');
define('lg_kb_nochapters', 'No Chapters Yet');
define('lg_kb_er_nochapname', 'Please provide a title for this chapter');
define('lg_kb_er_nopagename', 'Please provide a title for this page');
