<?php

	/**
	 * get_bloc_sous_titre
	 *
	 *  @type	function
	 *  @date	17/01/17
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF titles fields
	 */

	function get_bloc_sous_titre(){
			
		$sous_titre = get_sub_field('sous_titre');		

		if( $sous_titre ):
		
			$fluxi_content_sous_titre = '<h3 class="t-fw--700 fc_subtitle">'.$sous_titre.'</h3>';

			return $fluxi_content_sous_titre;
		
		endif;
		
	}

?>