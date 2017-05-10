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

			$fluxi_content_citation = '<blockquote class="fc-item fc-blockquote">'.$fluxi_content_citation.'</blockquote>';

			return $fluxi_content_citation;	

		endif;	
		
	}

?>