<?php

class ProsperworksSEFrmAction extends FrmFormAction {
	function __construct() {
		$action_ops = array(
		    'classes'   => 'dashicons dashicons-category',
		    'limit'     => 99,
		    'active'    => true,
		    'priority'  => 50,
		);
		
	    $this->FrmFormAction('create_prosperwork_suggested_specifications_lead', __('Lead for Suggested Specifications Form (Prosperwork)', 'formidable'), $action_ops);
	}

	/**
	* Get the HTML for your action settings
	*/
	function form( $form_action, $args = array() ) {
	    extract($args);
	    $action_control = $this;
	    $filename = plugin_dir_path(__FILE__) . '../templates/ProsperworksSEFrmTemplate.php';
			include( $filename );
	}
	
	/**
	* Add the default values for your options here
	*/
	function get_defaults() {
	    return array(
	    		'api_url' => 'https://api.prosperworks.com/developer_api/v1/leads',
	    		'api_app' => 'developer_api',
	        'first_name' => '[108]',
	        'last_name' => '[109]',
	        'email' => '[112]',
	        'phone' => '[111]',
	        'company' => '[110]',
	        'tags' => '[114]',
	        'document_specification' => '[121]',
	        'document_format' => '[126]'
	    );
	}
}

