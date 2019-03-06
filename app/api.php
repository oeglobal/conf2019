<?php

require get_template_directory() . '../../../../plugins/gravityforms/entry_detail.php';

function rest_get_conference_entry( $request ) {
    $form_id  = $request->get_param('form_id');
    $entry_id = $request->get_param('entry_id');

    $form = GFAPI::get_form( $form_id );
    $lead = GFAPI::get_entry( $entry_id );


    ob_start();
    GFEntryDetail::lead_detail_grid( $form, $lead );
    $html = ob_get_contents();
    ob_end_clean();

    return array( 'html' => $html );
}

function cp_api_init() {
    register_rest_route( 'conference/v1', '/entry/(?P<form_id>\d+)/(?P<entry_id>\d+)', array(
        'methods'  => 'GET',
        'callback' => 'rest_get_conference_entry',
        'permission_callback' => function () {
            return current_user_can( 'edit_others_posts' );
        }
    ) );
}

add_action( 'rest_api_init', 'cp_api_init' );
