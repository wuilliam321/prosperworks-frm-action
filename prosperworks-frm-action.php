<?php
/*
Plugin Name: Formidable Prosperworks Form Action
Plugin URI: https://github.com/wuilliam321/prosperworks-frm-action
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/** Start the Form Contact LEAD creation */
add_action('frm_registered_form_actions', 'register_create_prosperwork_contact_lead_action');
function register_create_prosperwork_contact_lead_action( $actions ) {
    $actions['create_prosperwork_contact_lead'] = 'ProsperworksContactFrmAction';
    $className = plugin_dir_path(__FILE__) . '/actions/ProsperworksContactFrmAction.php';
    include_once($className);
    
    return $actions;
}

add_action('frm_trigger_create_prosperwork_contact_lead_action', 'create_prosperwork_contact_lead_trigger', 10, 4);
function create_prosperwork_contact_lead_trigger($action, $entry, $form) {
  $fields = $action->post_content;
  $values = $entry->metas;
  $data = [];

  foreach ($fields as $key => $value) {
    $value = str_replace(']', '', str_replace('[', '', $value));
    if (isset($values[$value])) {
      $data[$key] = $values[$value];
    }
  }

  $post_data = [
    "name" => $data["first_name"] . ' ' . $data["last_name"],
    "email" => [
      "email" => $data["email"],
      "category" => "work"
    ],
    "phone_numbers" => [
      [
        "number" => str_replace(' ', '-', str_replace(')', '', str_replace('(', '', $data["phone"]))),
        "category" => "work"
      ]
    ],
    "address" => [
      "city" => $data["city"],
      "state" => $data["state"],
      "postal_code" => "",
      "country" => "US"
    ],
    "company_name" => $data["company"],
    "tags" => array_values($data["tags"]),
    "details" => "CONTACT FORM: " . $data["message"]
  ];

  $url_string = json_encode($post_data);
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $fields['api_url'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $url_string,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "x-pw-accesstoken: " . $fields['api_token'],
    "x-pw-application: " . $fields['api_app'],
    "x-pw-useremail: " . $fields['api_email']
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    error_log('ERROR:' . $err);
  }
}

/** End the Form Contact LEAD creation */

/** Start the Free PHD course LEAD creation */
add_action('frm_registered_form_actions', 'register_create_prosperwork_phd_course_lead_action');
function register_create_prosperwork_phd_course_lead_action( $actions ) {
    $actions['create_prosperwork_phd_course_lead'] = 'ProsperworksPHDCourseFrmAction';
    $className = plugin_dir_path(__FILE__) . '/actions/ProsperworksPHDCourseFrmAction.php';
    include_once($className);
    
    return $actions;
}

add_action('frm_trigger_create_prosperwork_phd_course_lead_action', 'create_prosperwork_phd_course_lead_trigger', 10, 4);
function create_prosperwork_phd_course_lead_trigger($action, $entry, $form) {
  $fields = $action->post_content;
  $values = $entry->metas;
  $data = [];

  foreach ($fields as $key => $value) {
    $value = str_replace(']', '', str_replace('[', '', $value));
    if (isset($values[$value])) {
      $data[$key] = $values[$value];
    }
  }

  $post_data = [
    "name" => $data["first_name"] . ' ' . $data["last_name"],
    "email" => [
      "email" => $data["email"],
      "category" => "work"
    ],
    "phone_numbers" => [
      [
        "number" => str_replace(' ', '-', str_replace(')', '', str_replace('(', '', $data["phone"]))),
        "category" => "work"
      ]
    ],
    "company_name" => $data["company"],
    "custom_fields" => [
      [
        "custom_field_definition_id" => 75108,
        "value" => date('m/d/Y', strtotime($data["course_date"]))
      ],
      [
        "custom_field_definition_id" => 75109,
        "value" => floatval($data["attendees"])
      ],
    ],
    "address" => [
      "street" => $data["address1"] . ' ' . $data["address2"],
      "city" => $data["city"],
      "state" => $data["state"],
      "postal_code" => $data["postal_code"],
      "country" => "US"
    ],
    "tags" => array_values($data["tags"]),
    "details" => 'FREE PHD COURSE FORM: ' . $data["comments"]
  ];

  $url_string = json_encode($post_data);
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $fields['api_url'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $url_string,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "x-pw-accesstoken: " . $fields['api_token'],
    "x-pw-application: " . $fields['api_app'],
    "x-pw-useremail: " . $fields['api_email']
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    error_log('ERROR:' . $err);
  }
}

/** End the Form PHD Course LEAD creation */

/** Start the Form Suggested Specifications LEAD creation */
add_action('frm_registered_form_actions', 'register_create_prosperwork_suggested_specifications_lead_action');
function register_create_prosperwork_suggested_specifications_lead_action( $actions ) {
    $actions['create_prosperwork_suggested_specifications_lead'] = 'ProsperworksSEFrmAction';
    $className = plugin_dir_path(__FILE__) . '/actions/ProsperworksSEFrmAction.php';
    include_once($className);
    
    return $actions;
}

add_action('frm_trigger_create_prosperwork_suggested_specifications_lead_action', 'create_prosperwork_suggested_specifications_lead_trigger', 10, 4);
function create_prosperwork_suggested_specifications_lead_trigger($action, $entry, $form) {
  $fields = $action->post_content;
  $values = $entry->metas;
  $data = [];

  foreach ($fields as $key => $value) {
    $value = str_replace(']', '', str_replace('[', '', $value));
    if (isset($values[$value])) {
      $data[$key] = $values[$value];
    }
  }

  $post_data = [
    "name" => $data["first_name"] . ' ' . $data["last_name"],
    "email" => [
      "email" => $data["email"],
      "category" => "work"
    ],
    "phone_numbers" => [
      [
        "number" => str_replace(' ', '-', str_replace(')', '', str_replace('(', '', $data["phone"]))),
        "category" => "work"
      ]
    ],
    "company_name" => $data["company"],
    "custom_fields" => [
      [
        "custom_field_definition_id" => 75110,
        "value" => array_values($data["document_specification"])
      ],
      [
        "custom_field_definition_id" => 75111,
        "value" => array_values($data["document_format"])
      ],
    ],
    "tags" => array_values($data["tags"]),
    "details" => 'SUGGESTED SPECIFICATIONS FORM'
  ];

  $url_string = json_encode($post_data);
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $fields['api_url'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $url_string,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "x-pw-accesstoken: " . $fields['api_token'],
    "x-pw-application: " . $fields['api_app'],
    "x-pw-useremail: " . $fields['api_email']
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    error_log('ERROR:' . $err);
  }
}

/** End the Form Suggested Specifications LEAD creation */