<?php

	/**
	 * get_bloc_formateree
	 *
	 *  @type	function
	 *  @date	16/06/16
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF formateree fields
	 */

	function get_bloc_formateree(){
		
		global $isMobile;
		$type_module = get_sub_field('type_module');
		$fluxi_content_formateree = '';

		if( $type_module ):


			/**
			// MAP ORGANISME FORMATION
			*/
			if( $type_module == 'map_formateree' ):				

				$fluxi_content_formateree .= '
					<section class="l-row map__holder fullW">	
						<div class="l-col no-pdBottom">				
							<h2 class="c-section-title">Les organismes de formation membres du réseau Format’eree</h2>
							<div class="spinner map__holder__loader"></div>

							<div id="map" class="map-formateree"></div>

							<div class="map__holder__cards"></div>	
						</div>		
					</section>';


			/**
			// SLIDER OFFRE D'EMPLOI
			*/
			elseif( $type_module == 'slider_emploi' ):

				$fluxi_content_formateree .= '
				<section class="l-row bg-slider-formateree fullW">
				<div class="l-col">
				<div class="l-card-slider">
					<aside class="l-card-slider__aside">
						<div class="l-card-slider__aside__title">
							<span class="c-section-title">Les offres d\'emploi</span>
						</div>
						<div class="l-card-slider__aside__link">
							<a href="'.get_the_permalink(PAGE_OFFRES).'" class="c-link">Voir tout</a>
						</div>
						<div class="l-card-slider__aside__more l-card-slider__aside__more--follow">
							<a href="'.get_the_permalink(FORM_OFFRE).'?act=add" class="c-meta__meta"><i class="fa fa-plus c-meta__meta__icon" aria-hidden="true"></i>Postez votre offre</a>
						</div>
					</aside>

					<div class="l-card-slider__cards">
						<ul class="l-card-slider__cards__row">';
							
							$args = array(
								'post_type' => 'offres-emploi',
								'posts_per_page' => SLIDER_NB_POSTS,
								'post_status' => 'publish'
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

								$ob_type_de_poste = get_field_object('field_574dadcc3c7b1');
								$label_type_de_poste = $ob_type_de_poste['choices'][ get_field('type_de_poste') ];

								$code_postal = get_field('code_postal');
								$num_departement = substr($code_postal,0,-3);

								$categories = get_the_category();
								($categories ) ? $cat_name = $categories[0]->name : $cat_name = 'Non classé';

								$permalink = get_permalink();
								$date = get_the_date('d M Y');
								$title = limitString(get_the_title(), 0, LIMIT_STRING, ' [...]');

								$fluxi_content_formateree .= '<li class="l-card-slider__cards__row__col">';
								$fluxi_content_formateree .= '<a href="'.$permalink.'">';
								$fluxi_content_formateree .= '<article class="c-card c-card--emploi">';
								$fluxi_content_formateree .= '<header class="c-card__header">';
								$fluxi_content_formateree .= '<div class="c-card__header__tag">'.$label_type_de_poste.'</div>';
								$fluxi_content_formateree .= '<div class="c-card__header__tag">'.$num_departement.'</div>';
								$fluxi_content_formateree .= '<h5 class="c-card__header__cat">'.$cat_name.'</h5>';
								$fluxi_content_formateree .= '</header>';
								$fluxi_content_formateree .= '<div class="c-card__body">';
								$fluxi_content_formateree .= '<span class="t-meta">'.$date.'</span>';
								$fluxi_content_formateree .= '<h1 class="c-card__body__title">'.$title.'</h1>';
								$fluxi_content_formateree .= '</div>';
								$fluxi_content_formateree .= '<footer class="c-card__footer">';
								$fluxi_content_formateree .= '<span class="c-link c-link--more">Voir l\'offre</span>';
								$fluxi_content_formateree .= '</footer>';
								$fluxi_content_formateree .= '</article>';
								$fluxi_content_formateree .= '</a>';
								$fluxi_content_formateree .= '</li>';

							endwhile; endif; wp_reset_postdata();			
							

							$fluxi_content_formateree .= '
							<li class="l-card-slider__cards__row__col u-show@med">
								<a href="'.get_the_permalink(PAGE_OFFRES).'" class="c-ghostCard">
									<span class="c-link c-link--white">voir tout</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="l-card-slider__controls js-slider-controls">
						<button class="c-btnIcon c-btnIcon--controls js-slide" data-direction="prev"><i class="fa fa-chevron-left"></i></button>
						<button class="c-btnIcon c-btnIcon--controls js-slide" data-direction="next"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				</div>
				</section>';

			/**
			// SLIDER ACTUS
			*/ 
			elseif( $type_module == 'slider_actus' ):	

				$fluxi_content_formateree .= '
				<section class="l-row bg-slider-formateree fullW">
				<div class="l-col">
				<div class="l-card-slider js-slider">
					<aside class="l-card-slider__aside">
						<div class="l-card-slider__aside__title">
							<span class="c-section-title">L\'actualité de la transition<br><span class="t-fw--400 h5 u-show@large">#formations-emploi</span></span>
						</div>

						<div class="l-card-slider__aside__link">
							<a href="'.get_the_permalink(ALL_NEWS).'" class="c-link">Voir tout</a>
						</div>

						<div class="l-card-slider__aside__more l-card-slider__aside__more--follow">
							<a href="'.FACEBOOK.'" class="c-meta__meta" target="_blank"><i class="fa fa-facebook-square c-meta__meta__icon" aria-hidden="true"></i>Facebook</a>
							<a href="'.TWITTER.'" class="c-meta__meta" target="_blank"><i class="fa fa-twitter-square c-meta__meta__icon" aria-hidden="true"></i>Twitter</a>
						</div>

					</aside>

					<div class="l-card-slider__cards">
						<ul class="l-card-slider__cards__row">';

							$args = array(
								'post_type' => 'post',
								'posts_per_page' => SLIDER_NB_POSTS,
								'category_name'	=> 'formations-emploi',
								'post_status' => 'publish'
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

								$post_img_id = get_field('main_image');
								$post_img_array = wp_get_attachment_image_src($post_img_id, 'thumb2x', true);
								$post_img_url = $post_img_array[0];	

								$permalink = get_permalink();
								$date = get_the_date('d M Y');
								$title = limitString(get_the_title(), 0, LIMIT_STRING, ' [...]');

								$fluxi_content_formateree .= '<li class="l-card-slider__cards__row__col">';
								$fluxi_content_formateree .= '<a href="'.$permalink.'">';
								$fluxi_content_formateree .= '<article class="c-card">';
								$fluxi_content_formateree .= '<header class="c-card__header" style="background-image: url('.$post_img_url.');"></header>';
								$fluxi_content_formateree .= '<div class="c-card__body">';
								$fluxi_content_formateree .= '<span class="t-meta">'.$date.'</span>';
								$fluxi_content_formateree .= '<h1 class="c-card__body__title">'.$title.'</h1>';
								$fluxi_content_formateree .= '</div>';
								$fluxi_content_formateree .= '<footer class="c-card__footer">';
								$fluxi_content_formateree .= '<span class="c-link c-link--more">Lire la suite</span>';
								$fluxi_content_formateree .= '</footer>';
								$fluxi_content_formateree .= '</article>';
								$fluxi_content_formateree .= '</a>';
								$fluxi_content_formateree .= '</li>';						

							endwhile; endif; wp_reset_postdata();

							$fluxi_content_formateree .= '
							<li class="l-card-slider__cards__row__col u-show@med">
								<a href="'.get_the_permalink(ALL_NEWS).'" class="c-ghostCard">
									<span class="c-link c-link--white">voir tout</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="l-card-slider__controls js-slider-controls">
						<button class="c-btnIcon c-btnIcon--controls js-slide" data-direction="prev"><i class="fa fa-chevron-left"></i></button>
						<button class="c-btnIcon c-btnIcon--controls js-slide" data-direction="next"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				</div>
				</section>';

				$fluxi_content_formateree .= '<div class="formateree-mosaic fullW"><img src="'.get_bloginfo('template_url').'/app/img/photos-formateree.jpg" class="formateree-mosaic__img"></div>';

			else:
			
			endif;	


			return $fluxi_content_formateree;
		
		endif;
		
	}

?>