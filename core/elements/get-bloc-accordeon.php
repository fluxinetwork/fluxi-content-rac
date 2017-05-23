<?php 	

	/**
	 * get_bloc_accordeon
	 *
	 *  @type	function
	 *  @date	23/01/17
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF accordeon fields
	 */

	function get_bloc_accordeon (){

		$fluxi_content_accordeon = get_sub_field('titre_accordeon');		

		if( $fluxi_content_accordeon ):

			$fluxi_content_accordeon = '<div class="fc-accordeon fc-item js-accordeon">';

			$fluxi_content_accordeon .= '<div class="fc-accordeon__header">';
			$fluxi_content_accordeon .= '<h2 class="t-post-title">'.get_sub_field('titre_accordeon').'</h2>';
			$fluxi_content_accordeon .= '<span class="fc-accordeon__header__icon js-accordeon-icon" aria-hidden="true">+</span>';
			$fluxi_content_accordeon .= '</div>';

			if( have_rows('contenu_accordeon') ):				

				$fluxi_content_accordeon .= '<div class="fc-accordeon__content js-accordeon-content">';

				while( have_rows('contenu_accordeon') ): the_row(); 

					if ( get_row_layout() == 'liste' ):					

						$fluxi_content_accordeon .= get_bloc_liste ();

					elseif( get_row_layout() == 'texte' ):

						$fluxi_content_accordeon .= get_bloc_texte ();

					endif;

				endwhile;

				$fluxi_content_accordeon .= '</div>';

			endif;

			$fluxi_content_accordeon .= '</div>';

			return $fluxi_content_accordeon;

		endif;	

	}
		
?>
