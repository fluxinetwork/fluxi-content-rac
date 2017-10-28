<?php 	

	/**
	 * get_bloc_focus
	 *
	 *  @type	function
	 *  @date	23/01/17
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF focus fields
	 */

	function get_bloc_focus (){

		$fluxi_content_focus = get_sub_field('titre_focus');		

		if( $fluxi_content_focus ):

			if ( get_field('groupe_de_dossier') == 'cop23' ) :

				$fluxi_content_focus = '<div class="fc-item fc-focus fc-focus--cop23"><div class="fc-focus__content l-postHeader">';
				$fluxi_content_focus .= '<img src="'. get_bloginfo('template_url') .'/app/img/fossil-of-the-day.png" class="fc-focus__content__img">';

			else :

				$fluxi_content_focus = '<div class="fc-item fc-focus"><div class="fc-focus__content l-postHeader">';

			endif;

			$fluxi_content_focus .= '<h2 class="l-postHeader__title t-post-title">'.get_sub_field('titre_focus').'</h2>';
			$fluxi_content_focus .= '<p class="l-postHeader__excerpt t-post-excerpt">'.get_sub_field('texte_focus').'</p>';

			if( get_sub_field('ajouter_lien_focus') == 1 ) {
				$fluxi_content_focus .= '<a href="'.get_sub_field('url_lien').'" class="l-postHeader__link c-link">'.get_sub_field('texte_lien').'</a>';
			}

			$fluxi_content_focus .= '</div></div>';

			return $fluxi_content_focus;

		endif;	

	}
		
?>
