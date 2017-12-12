<?php 

	/**
	 * get_bloc_image
	 *
	 *  @type	function
	 *  @date	16/06/16
	 *  @since	1.0.0
	 *
	 *  @param  INT - $post_id
	 *  @return HTML - ACF image fields
	 */

	function get_bloc_image(){
		
		$image_only = get_sub_field('image');
		$img_full_url = $image_only['sizes']['large'];
		$template = get_post_meta(get_the_ID(), '_wp_page_template', true);
		if ( $template == 'page-templates/page-thematique.php' ) {
			$img_url = $image_only['sizes']['post'];
		} else {
			$img_url = $image_only['sizes']['medium'];
		}
		$image_caption = $image_only['caption'];	
		$fluxi_content_image = '';

		$fluxi_content_image .= '<a href="'.$img_full_url.'" class="js-is-lightbox fc-item"><figure class="fc-figure"><img class="fc-figure__img" src="'.$img_url.'" alt="'.$image_only['name'].'"/>';
				
			if(  $image_caption ):									
				$fluxi_content_image .= '<figcaption class="fc-figure__caption">'.$image_caption.'</figcaption>';
			endif;			 
		
		$fluxi_content_image .= '</figure></a>';

		return $fluxi_content_image;

	}	
?>
