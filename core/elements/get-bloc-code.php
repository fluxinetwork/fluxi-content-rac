<?php

	/**
	 * get_bloc_code
	 *
	 *  @type	function
	 *  @date	17/06/16
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF code fields
	 */

	function get_bloc_code(){
			
		$code = get_sub_field('code', false, false);

		if( $code ):

			$output = '<div class="fitvid fc-item">';
			$output .= $code;
			$output .= '</div>';
			return $output;
	
		endif;
		
	}

?>