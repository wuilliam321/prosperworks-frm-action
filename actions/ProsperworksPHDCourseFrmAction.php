<?php

class ProsperworksPHDCourseFrmAction extends FrmFormAction {
	function __construct() {
		$action_ops = array(
		    'classes'   => 'dashicons dashicons-welcome-learn-more',
		    'limit'     => 99,
		    'active'    => true,
		    'priority'  => 50,
		);
		
	    $this->FrmFormAction('create_prosperwork_phd_course_lead', __('Lead for PHD Course Form (Prosperwork)', 'formidable'), $action_ops);
	}

	/**
	* Get the HTML for your action settings
	*/
	function form( $form_action, $args = array() ) {
	    extract($args);
	    $action_control = $this;
	    $filename = plugin_dir_path(__FILE__) . '../templates/ProsperworksPHDCourseFrmTemplate.php';
			include( $filename );
	}
	
	/**
	* Add the default values for your options here
	*/
	function get_defaults() {
	    return array(
	    		'api_url' => 'https://api.prosperworks.com/developer_api/v1/leads',
	    		'api_app' => 'developer_api',
	        'first_name' => '[82]',
	        'last_name' => '[83]',
	        'email' => '[86]',
	        'phone' => '[85]',
	        'company' => '[84]',
	        'tags' => '[104]',
	        'course_date' => '[87]',
	        'address1' => '[89]',
	        'address2' => '[90]',
	        'city' => '[91]',
	        'state' => '[92]',
	        'postal_code' => '[95]',
	        'attendees' => '[100]',
	        'comments' => '[101]',
	    );
	}
}

