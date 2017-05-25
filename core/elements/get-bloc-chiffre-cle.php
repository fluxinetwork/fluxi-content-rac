<?php 	

	/**
	 * get_bloc_chiffre_cle
	 *
	 *  @type	function
	 *  @date	23/01/17
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF relation field
	 */

	function get_bloc_chiffre_cle() {

		$id = get_sub_field('select_chiffre_cle')[0];	

		if( $id ):

			$fluxi_chiffre_cle = '<div class="fc-chiffre fc-item">';

				$fluxi_chiffre_cle .= '<div class="fc-chiffre__wrap"><div class="fc-chiffre__wrap__chiffre">';
					$fluxi_chiffre_cle .= get_field('chiffre_cle', $id);
				$fluxi_chiffre_cle .= '</div></div>';

				$fluxi_chiffre_cle .= '<div class="fc-chiffre__txt">';
					$fluxi_chiffre_cle .= get_field('description', $id);
				$fluxi_chiffre_cle .= '</div>';

			$fluxi_chiffre_cle .= '</div>';

			return $fluxi_chiffre_cle;

		endif;	

	}
		
?>
