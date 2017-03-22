<?php

	/**
	 * get_bloc_titre
	 *
	 *  @type	function
	 *  @date	16/06/16
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF titles fields
	 */

	function get_bloc_titre(){
			
		$texte_titre = get_sub_field('texte_titre');

		if( $texte_titre ):
			
			$fluxi_content_titre = '<h2 class="fc__title">'.$texte_titre.'</h2>';

			return $fluxi_content_titre;
		
		endif;
		
	}

?>