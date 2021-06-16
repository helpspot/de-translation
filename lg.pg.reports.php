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

define('lg_reports_title', 'Reports');
define('lg_reports_my_reports', 'My Reports');
define('lg_reports_my_reports_none', 'No saved reports yet');
define('lg_reports_reqs_over_time', 'Requests Over Time');
define('lg_reports_reqs_over_time_desc', 'Filterable and groupable aggregated request counts');
define('lg_reports_speed_to_first', 'First Response Speed');
define('lg_reports_speed_to_first_grouped', 'First Response Speed (Segmented)');
define('lg_reports_speed_to_first_desc', 'How long customers wait before receiving their first reply');
define('lg_reports_productivity', 'Productivity Overview');
define('lg_reports_productivity_desc', 'Insights into your speed to respond and resolve requests.');
define('lg_reports_speed_to_first_spec', 'This report includes only requests that have at least 1 public staff response. Requests with no public staff responses are not included.');
define('lg_reports_speed_to_first_assignment', 'First Assign Speed');
define('lg_reports_speed_to_first_assignment_desc', 'How long before the request is initially assigned');
define('lg_reports_speed_to_first_assignment_spec', 'This report includes only requests which have been assigned. Unassigned requests are not included.');
define('lg_reports_replies_to_close', 'Replies by Count');
define('lg_reports_replies_to_close_desc', 'Request count by number of staff replies in each');
define('lg_reports_replies_to_close_spec', 'Use Open/Closed = closed to see how many replies it takes to close a request');
define('lg_reports_interactions', 'Interactions Over Time');
define('lg_reports_interactions_desc', 'The type and number of notes over time, based on note date');
define('lg_reports_resolution_speed', 'Resolution Speed');
define('lg_reports_resolution_speed_grouped', 'Resolution Speed (Segmented)');
define('lg_reports_resolution_speed_desc', 'The time it takes to close a request');
define('lg_reports_tt_over_time', 'Total Over Time');
define('lg_reports_tt_over_time_desc', 'Aggregate time tracker events');
define('lg_reports_tt_events', 'Time Events');
define('lg_report_searches_no_results', 'Searches/Few Results');
define('lg_report_searches_agg', 'Aggregate Searches');
define('lg_report_dash_requests', 'Requests Today');
define('lg_reports_matrix', 'Comparison Matrix');
define('lg_reports_matrix_desc', 'Compare related elements into a spreadsheet like grid.');

define('lg_reports_total', 'Total');
define('lg_reports_xaxis', 'X Axis Data');
define('lg_reports_yaxis', 'Y Axis Data');
define('lg_reports_active_only', 'Active Only');
define('lg_reports_active_only_exp', 'Some fields such as assigned user and category may have inactive values, an employee who no longer works with you for example. This setting determines if those inactive values are displayed or not.');
define('lg_reports_portal', 'Portal');
define('lg_reports_timetracker', 'Time Tracker');
define('lg_reports_graph', 'Graph');
define('lg_reports_data', 'Data');
define('lg_reports_customize', 'Save + Email');
define('lg_reports_filterconditions', 'Save this report to be able to quickly reuse it with all filters and options set.');
define('lg_reports_error', 'there was an error generating this report');
define('lg_reports_from', 'From');
define('lg_reports_to', 'To');
define('lg_reports_limit', 'Limit');
define('lg_reports_groupabove', 'Group Above');
define('lg_reports_speedby', 'Speed By');
define('lg_reports_speedby_hour', 'Hours');
define('lg_reports_speedby_min', 'Minutes');
define('lg_reports_billable', 'Billable');
define('lg_reports_billable_all', 'All');
define('lg_reports_billable_is', 'Billable');
define('lg_reports_billable_isnt', 'Not Billable');
define('lg_reports_basedon', 'Based On');
define('lg_reports_basedon_open', 'Open Date');
define('lg_reports_basedon_close', 'Closing Date');
define('lg_reports_grouping_date_hour', 'Date: Hour');
define('lg_reports_grouping_date_day', 'Date: Day');
define('lg_reports_grouping_date_month', 'Date: Month');
define('lg_reports_grouping_date_year', 'Date: Year');
define('lg_reports_grouping_opendate_hour', 'Open Date: Hour');
define('lg_reports_grouping_opendate_day', 'Open Date: Day');
define('lg_reports_grouping_opendate_month', 'Open Date: Month');
define('lg_reports_grouping_opendate_year', 'Open Date: Year');
define('lg_reports_grouping_agg_hour', 'Hour of Day');
define('lg_reports_grouping_agg_day', 'Day of Week');
define('lg_reports_grouping_agg_month', 'Month of Year');
define('lg_reports_grouping_notecreator', 'Note Creator');
define('lg_reports_grouping_trackerstaff', 'Staffer');
define('lg_reports_grouping_customerid', 'Customer ID');
define('lg_reports_grouping_customer_email', 'Customer Email');
define('lg_reports_grouping_category', 'Category');
define('lg_reports_grouping_status', 'Status');
define('lg_reports_grouping_assigned', 'Assigned User');
define('lg_reports_grouping_contactvia', 'Contacted Via');
define('lg_reports_grouping', 'Grouping');
define('lg_reports_grouping_tracker', 'Tracker Details');
define('lg_reports_grouping_reqhistory', 'Note Details');
define('lg_reports_grouping_reqdetails', 'Request Details');
define('lg_reports_grouping_aggtime', 'Aggregate Time');
define('lg_reports_grouping_customfields', 'Custom Fields');
define('lg_reports_grouping_catreptags', 'Category Reporting Tags');
define('lg_reports_hourcalcon', 'Calculate Based On');
define('lg_reports_usebizhours', 'Business Hours Only');
define('lg_reports_allhours', 'All Hours');
define('lg_reports_allhours_exp', 'The calculation is done by simply subtracting the open time from the time of the first response. Business hours are not factored in.');
define('lg_reports_usebizhours_exp', '<b>Business hours can be set in Admin->Settings->Business Hours</b><br />Determining if a time is in business hours is a surprisingly complicated task. HelpSpot does its best to use a reasonable set of assumptions in the calculation of business hours, but they should still be viewed as approximate values.
											 <br /><br />The basic rules we apply are:
											 <ul>
											 	<li>Manually opened requests are not included</li>
											 	<li>Requests with no responses are not included</li>
											 	<li>Replies done via automated means such as triggers or rules are not included</li>
											 	<li>If a request is opened in business hours, but the first response is outside hours the closest previous business hour is used as the first response time.</li>
											 	<li>If a request is opened outside business hours, but the first response is in hours the closest next business hour is used as the opened time.</li>
											 	<li>If neither is in business hours the next business hour from the opened date is used and the closest previous business hour is used for the first response time.</li>
											 </ul>');
define('lg_reports_resolution_allhours_exp', 'The calculation is done by simply subtracting the open time from the time of the request being closed. Business hours are not factored in.');
define('lg_reports_resolution_usebizhours_exp', '<b>Business hours can be set in Admin->Settings->Business Hours</b><br />Determining if a time is in business hours is a surprisingly complicated task. HelpSpot does its best to use a reasonable set of assumptions in the calculation of business hours, but they should still be viewed as approximate values.
	<br /><br />The basic rules we apply are:
		<ul>
			<li>If a request is opened in business hours, but is closed outside hours the closest previous business hour is used as the resolution time.</li>
			<li>If a request is opened outside business hours, but the request is resolved in business hours the closest next business hour is used as the opened time.</li>
			<li>If neither is in business hours the next business hour from the opened date is used and the closest previous business hour is used for the closed time.</li>
		</ul>');
define('lg_reports_assignment_allhours_exp', 'The calculation is done by simply subtracting the open time from the time the request is assigned to a staff member. Business hours are not factored in.');
define('lg_reports_assignment_usebizhours_exp', '<b>Business hours can be set in Admin->Settings->Business Hours</b><br />Determining if a time is in business hours is a surprisingly complicated task. HelpSpot does its best to use a reasonable set of assumptions in the calculation of business hours, but they should still be viewed as approximate values.
	<br /><br />The basic rules we apply are:
	<ul>
		<li>Requests with no assignment are not included</li>
		<li>If a request is opened in business hours, but the assignment is outside hours the closest previous business hour is used as the assignment time.</li>
		<li>If a request is opened outside business hours, but the assignment is in hours the closest next business hour is used as the opened time.</li>
		<li>If neither is in business hours the next business hour from the opened date is used and the closest previous business hour is used for the assignment time.</li>
	</ul>');
define('lg_reports_chartlabel_requests','Requests');
define('lg_reports_chartlabel_requeststoday','Requests Today');
define('lg_reports_chartlabel_replies','Reply Count');
define('lg_reports_chartlabel_median','Median');
define('lg_reports_chartlabel_average','Average');
define('lg_reports_chartlabel_medianwinfo','Median (hours)');
define('lg_reports_chartlabel_averagewinfo','Average (hours)');
define('lg_reports_chartlabel_staffpub','Staff Public');
define('lg_reports_chartlabel_staffpriv','Staff Private');
define('lg_reports_chartlabel_customer','Customer Note');
define('lg_reports_chartlabel_trackertime','Tracker Time');
define('lg_reports_chartlabel_trackertime_hrs','Tracker Time (hours)');
define('lg_reports_chartlabel_last','Last');
define('lg_reports_run','Run Report');
define('lg_reports_er_title','Please provide a title for this report');
define('lg_reports_er_folder','Please select/create a folder for this report');
define('lg_reports_save','Save Report');
define('lg_reports_resave','Save Changes');
define('lg_reports_deletereport','Delete Report');
define('lg_reports_reportsaved','Report Saved');
define('lg_reports_resavedone','Changes Saved');
define('lg_reports_filters','Filters');
define('lg_reports_years','Years');
define('lg_reports_months','Months');
define('lg_reports_email','Email');
define('lg_reports_portal_primary','Primary');
define('lg_reports_otheremail','Other Email');
define('lg_reports_export','Export CSV');
define('lg_reports_greaterthan','Greater than');

define('lg_reports_emptygroup_unassigned', 'Unassigned');
define('lg_reports_emptygroup_customer', 'Customer');
define('lg_reports_emptygroup_empty', 'Empty');

define('lg_reports_stats', 'Statistics');
define('lg_reports_average', 'average');
define('lg_reports_median', 'median');
define('lg_reports_statsaverage', 'Average');
define('lg_reports_statsmedian', 'Median');
define('lg_reports_statsmin', 'Min');
define('lg_reports_statsmax', 'Max');
define('lg_reports_statssum', 'Sum');
define('lg_reports_na', 'N/A');

define('lg_reports_col_grouping', 'Grouping');

define('lg_reports_analysis', 'Analysis');
define('lg_reports_eventdate', 'Event Date');
define('lg_reports_person', 'Staff Member');
define('lg_reports_customer', 'Customer');
define('lg_reports_customerid', 'Customer ID');
define('lg_reports_desc', 'Description');
define('lg_reports_hoursmin', 'Hrs:Min');
define('lg_reports_xrequest', 'Request');
define('lg_reports_seconds', 'Seconds');

define('lg_reports_searchquery', 'Search Query');
define('lg_reports_resultcount', '# Results');
define('lg_reports_searchcount', '# Searches');
define('lg_reports_searchportal', 'Secondary Portal');

define('lg_reports_staff', 'Staff');
define('lg_reports_responses', 'Response Usage');
define('lg_reports_response_title', 'Response Title');
define('lg_reports_response_creator', 'Creator');
define('lg_reports_response_count', 'Count');
define('lg_reports_response_by', 'Response Used By');
define('lg_reports_response_anystaff', 'Any Staffer');

define('lg_reports_customers', 'Customers');
define('lg_reports_customer_activity', 'Customer Activity');
define('lg_reports_customer_unique_email', 'Email Address');
define('lg_reports_customer_unique_name', 'Name');
define('lg_reports_customer_unique_id', 'Customer ID');
define('lg_reports_customer_requests', 'Requests');
define('lg_reports_customer_uniqueby', 'Unique By');

define('lg_reports_kb_helpful','KB Helpfulness');
define('lg_reports_kb_helpful_book','Book');
define('lg_reports_kb_helpful_page','Page');
define('lg_reports_kb_helpful_count','Count');
define('lg_reports_kb_helpful_orderby','Order By');
define('lg_reports_kb_helpful_type_helpful','Helpful');
define('lg_reports_kb_helpful_type_not','Not Helpful');

define('lg_reports_name','Report Name');
define('lg_reports_details','Report Details');
define('lg_reports_myfolder','My Reports');
define('lg_reports_addfolder','Add Folder');
define('lg_reports_folder','In Folder');
define('lg_reports_sharing','Sharing');
define('lg_report_perms','Who else can view this');
define('lg_filter_reports_addfolder','Add Folder');
define('lg_report_myreports','My Reports');
define('lg_report_saved_reports','Saved Reports');
define('lg_reports_nofolder','-Top Level (no folder)');

define('lg_reports_email_label', 'Email This Report');
define('lg_reports_email_on', 'Enable Emailing the report');
define('lg_reports_email_time', 'at/on');
define('lg_reports_email_schedule', 'Schedule');
define('lg_reports_email_data_range', 'Data Range');
define('lg_reports_email_to', 'Staff to email');
define('lg_reports_email_external', 'Outside emails');
define('lg_reports_email_external_txt', 'Separate with a comma or a new line.');
define('lg_reports_email_external_error', 'The following emails are invalid: ');
?>
