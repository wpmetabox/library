/**
 * This snippet auto generates post title for submitted posts.
 * It's useful when you don't want users to enter post title.
 */
 
add_filter( 'rwmb_frontend_insert_post_data', function( $data, $config ) {
    if ( $config['id'] = 'your-meta-box-id' ) {
        $data['post_title'] = date( 'Y-m-d' );
    }
    return $data;
}, 10, 2 );
