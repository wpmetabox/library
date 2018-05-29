<?php
/**
 * This snippet disables comments on submitted posts
 */

add_filter( 'rwmb_frontend_insert_post_data', function( $data, $config ) {
    if ( 'meta-box-id' == $config['id'] ) {
        $data['comment_status'] = 'closed';
    }
    return $data;
}, 10, 2 );
 
