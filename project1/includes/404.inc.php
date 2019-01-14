<?php
/**
 * Created by PhpStorm.
 * User: amit
 * Date: 03/04/18
 * Time: 3:18 PM
 */

$included_files = get_included_files();
error_log( sprintf( 'Malicious traffic detected: 404_not_found %s:%s',
    addslashes( $_SERVER['REQUEST_URI'] ),
    reset( $included_files )
) );


/*
if ( ! headers_sent() ) {
    header( "HTTP/1.1 404 Not Found" );
}
*/
