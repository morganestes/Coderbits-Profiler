<?php
	require_once dirname(__FILE__) . '/wp-load.php';

	global $wpdb;

	$action = $wpdb->escape($_POST['action']);

	switch ($action) {

		case 'save_fields':

			$active_fields = explode(',',$_POST['active_fields']);
			$inactive_fields = explode(',',$_POST['inactive_fields']);
			
			$active = update_option('coderbits_profiler_active_fields', serialize($active_fields));
			$inactive = update_option('coderbits_profiler_inactive_fields', serialize($inactive_fields));

			if ($active && $inactive) {
				echo 'Yes';
			} else {
				echo 'No';
			}

		break;

	}
?>