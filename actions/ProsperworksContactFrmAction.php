<?php

class ProsperworksContactFrmAction extends FrmFormAction {
	function __construct() {
		$action_ops = array(
		    'classes'   => 'dashicons dashicons-testimonial',
		    'limit'     => 99,
		    'active'    => true,
		    'priority'  => 50,
		);
		
	    $this->FrmFormAction('create_prosperwork_contact_lead', __('Lead for Contact Form (Prosperwork)', 'formidable'), $action_ops);
	}

	/**
	* Get the HTML for your action settings
	*/
	function form( $form_action, $args = array() ) {
	    extract($args);
	    $action_control = $this;
	    $filename = plugin_dir_path(__FILE__) . '../templates/ProsperworksContactFrmTemplate.php';
			include( $filename );
	}
	
	/**
	* Add the default values for your options here
	*/
	function get_defaults() {
	    return array(
	    		'api_url' => 'https://api.prosperworks.com/developer_api/v1/leads',
	    		'api_app' => 'developer_api',
	        'first_name' => '[8]',
	        'last_name' => '[9]',
	        'email' => '[73]',
	        'phone' => '[72]',
	        'city' => '[157]',
	        'state' => '[161]',
	        'company' => '[11]',
	        'message' => '[14]',
	        'tags' => '[12]'
	    );
	}
}

