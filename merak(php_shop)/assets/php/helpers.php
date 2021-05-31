<?php
/**
 * This file describes the auxiliary functions.
 *
 * @package helpers.php
 */

/**
 * The function is intended for output of arrays.
 *
 * @param mixed $data - Accepts the mass to be output.
 * @param bool  $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                             to view it you will need to add "?x" to the url. Default parameter = "FALSE".
 */
function ar( $data, $production = false ) {
	if ( $production ) {
		if ( isset( $_GET['x'] ) ) {
			echo '<pre>';
			print_r( $data );
			echo '<pre>';
		}
	} else {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
}

/**
 * Shields all threatening characters.
 *
 * @param string $str The tape to be shielded.
 *
 * @return string
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

/**
 * This function redirects the user to the page specified in the parameter.
 *
 * @param string $url url address to which redirect will be performed.
 */
function lb_redirect( $url ) {
	header( 'Location:' . $url );
	die();
}

/**
 * Add notice in Session['notice'].
 *
 * @param string $type type.
 * @param string $message message.
 */
function lb_add_notice( $type, $message ) {
	$_SESSION['notice'][ $type ][] = $message;
}

/**
 * Print notice from Session['notice'].
 *
 * @param $type
 */
function lb_print_notice( $type ) {
	$arr_notice = $_SESSION['notice'][ $type ];
	$type_class = '';
	
	if ( 'error' === $type ) {
		$type_class = 'alert-danger';
	} else if ( 'success' === $type ) {
		$type_class = 'alert-success';
	}
	
	if ( ! empty( $arr_notice ) ) { ?>

		<div class="alert <?php echo $type_class; ?> text-center mt-3" role="alert">
			<?php foreach ( $arr_notice as $value ) :?>
				<p>
					<?php echo $value;?>
				</p>
			<?php endforeach; ?>
		</div>
		
		<?php
	}
	unset( $_SESSION['notice'][ $type ] );
}
