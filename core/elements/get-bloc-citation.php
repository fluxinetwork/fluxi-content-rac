<?php

	/**
	 * get_bloc_citation
	 *
	 *  @type	function
	 *  @date	16/06/16
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF citation fields
	 */

	function get_bloc_citation(){		
		
		$fluxi_content_citation = get_sub_field('citation');		
		
		if($fluxi_content_citation):

			$fluxi_content_citation = '<blockquote class="fc-item fc-blockquote"><div class="fc-blockquote__content"><h2 class="t-post-title fc-blockquote__title">'.$fluxi_content_citation.'</h2></div></blockquote>';

			return $fluxi_content_citation;	

		endif;	
		
	}

?>