<?php

	require __DIR__ . DIRECTORY_SEPARATOR . 'pc-config.php';

	if( php_sapi_name()== "cli" ) {

		for( $c = 1; $c < $argc; $c++ ) {

			$param = explode( "=", $argv[ $c ], 2 );
			$_GET[ $param[ 0 ] ] = $param[ 1 ];

		}

	} else {}

	if( ( isset( $_GET[ 'url' ] )&& strlen( $_GET[ 'url' ] ) > 0 )|| ( isset( $_GET[ 'host' ] )&& strlen( $_GET[ 'host' ] ) > 0 ) ) {

		if( isset( $_GET[ 'url' ] )&& strlen( $_GET[ 'url' ] ) > 0 ) {

			$url = $_GET[ 'url' ];
			$host = parse_url( $_GET[ 'url' ], PHP_URL_HOST );

		} else {

			$host = $_GET[ 'host' ];
			$url = 'https://' . $host;

		}

		if( ! is_dir( $tmp ) ) {

			mkdir( $tmp ) or die( 'error1' );

		} else {}

		$dir = $tmp . DIRECTORY_SEPARATOR . $host;

		if( ! is_dir( $dir ) ) {

			mkdir( $dir ) or die( 'error2' );

		} else {}

		$cookie_files = array_diff( scandir( $dir, SCANDIR_SORT_DESCENDING ), array( '.', '..' ) );

		$last_cookie_file = array_shift( $cookie_files );

		$today = date( 'Y-m-d' );

		if( $last_cookie_file== $today ) {

			$json = file_get_contents( $dir . DIRECTORY_SEPARATOR . $last_cookie_file );

		} else {

			$console_log = shell_exec( $phantomjs . " " . __DIR__ . DIRECTORY_SEPARATOR . "pc.js '" . $url . "' '" . $user_agent . "'" );

			$lines = explode( PHP_EOL, $console_log );

			$cookies = array();

			foreach( $lines as $line ) {

				$cookie_pair = explode( '=', $line );

				$cookies[ $cookie_pair[ 0 ] ] = $cookie_pair[ 1 ];

			}

			$json = json_encode( $cookies );

			file_put_contents( $dir . DIRECTORY_SEPARATOR . $today, $json );

		}

		print $json;

	} else {}

?>
