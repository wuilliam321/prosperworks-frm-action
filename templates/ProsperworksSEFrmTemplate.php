<hr>
<table class="form-table frm-no-margin">
<caption><strong>Prosperworks Headers</strong></caption>
<tr>
    <th><label><?php _e( 'Prosperworks API URL', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('api_url') ) ?>" value="<?php echo esc_attr( $form_action->post_content['api_url'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('api_url') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Prosperworks API TOKEN', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('api_token') ) ?>" value="<?php echo esc_attr( $form_action->post_content['api_token'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('api_token') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Prosperworks APP', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('api_app') ) ?>" value="<?php echo esc_attr( $form_action->post_content['api_app'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('api_app') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Prosperworks user email', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('api_email') ) ?>" value="<?php echo esc_attr( $form_action->post_content['api_email'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('api_email') ) ?>" />
    </td>
</tr> 
</table>
<hr>
<table class="form-table frm-no-margin">
<caption><strong>Contact Form Fields</strong></caption>
<tr>
    <th><label><?php _e( 'First Name', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('first_name') ) ?>" value="<?php echo esc_attr( $form_action->post_content['first_name'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('first_name') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Last Name', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('last_name') ) ?>" value="<?php echo esc_attr( $form_action->post_content['last_name'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('last_name') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Email', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('email') ) ?>" value="<?php echo esc_attr( $form_action->post_content['email'] ); ?>" class="frm_not_email_to frm_email_blur large-text" id="<?php echo esc_attr( $this->get_field_id('email') ) ?>" />
    </td>
</tr>
<tr>
    <th><label><?php _e( 'Phone', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('phone') ) ?>" value="<?php echo esc_attr( $form_action->post_content['phone'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('phone') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Company', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('company') ) ?>" value="<?php echo esc_attr( $form_action->post_content['company'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('company') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Market Segment', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('tags') ) ?>" value="<?php echo esc_attr( $form_action->post_content['tags'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('tags') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Specification Document', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('document_specification') ) ?>" value="<?php echo esc_attr( $form_action->post_content['document_specification'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('document_specification') ) ?>" />
    </td>
</tr> 
<tr>
    <th><label><?php _e( 'Document Format', 'formidable' ) ?></label>
    </th>
    <td><input type="text" name="<?php echo esc_attr( $this->get_field_name('document_format') ) ?>" value="<?php echo esc_attr( $form_action->post_content['document_format'] ); ?>" class="frm_not_email_to large-text" id="<?php echo esc_attr( $this->get_field_id('document_format') ) ?>" />
    </td>
</tr> 
</table>
