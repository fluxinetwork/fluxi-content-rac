<?php

	/**
	 * get_bloc_publication
	 *
	 *  @type	function
	 *  @date	18/01/17
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF titles fields
	 */

	function get_bloc_publication(){
			
		$link_dl = get_sub_field('fluxi_publi_fichier');

		if ( $link_dl ) :

			$visuel = get_sub_field('visuel');
			$visuel_url = $visuel['sizes']['publication'];

			$fluxi_content_publication =  '<div class="fc-item">';

			$fluxi_content_publication .=  '<div class="c-separator">';
			$fluxi_content_publication .=  '<div class="c-separator__label">'. get_sub_field('titre_publication') .'</div>';
			$fluxi_content_publication .=  '<div class="c-separator__line"></div>';
			$fluxi_content_publication .=  '</div>';

			$fluxi_content_publication .= '<a href="'.$link_dl.'" class="l-centerCol c-publication mgnTop--m" target="_blank">';
				$fluxi_content_publication .= '<div class="c-publication__couverture" style="background-image: url('. $visuel_url .')">';
					$fluxi_content_publication .= '<div class="c-publication__couverture__decor"></div>';
					$fluxi_content_publication .= '<div class="c-publication__couverture__reliure"></div>';
				$fluxi_content_publication .= '</div>';
				$fluxi_content_publication .= '<div class="c-publication__button">';
					$fluxi_content_publication .= '<a href="'.$link_dl.'" class="c-button c-button--cta" target="_blank"><i class="icon-download c-button__icon"></i>Télécharger</a>';
				$fluxi_content_publication .= '</div>';
			$fluxi_content_publication .= '</a>';

			$fluxi_content_publication .= '</div>';

			return $fluxi_content_publication;
			
		endif;
		
	}

?>
