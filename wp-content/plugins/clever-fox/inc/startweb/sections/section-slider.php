<?php
/**
 * Slider section for the homepage.
 */
if ( ! function_exists( 'start_startkit_slider' ) ) :
	function start_startkit_slider() {
		
	$slider					= get_theme_mod('slider',startweb_get_slider_default()); 
	$slider_opacity			= get_theme_mod('slider_opacity','0.6'); 
	$hide_show_slider		= get_theme_mod('hide_show_slider','1'); 
	
	if($hide_show_slider == '1') {
		if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
?>
	  	<div id="slider" class="main-sliders startweb-slider">
			<div class="row">
				<div class="col-md-12">
					<div class="header-slider owl-carousel owl-theme">
						<?php
							foreach ( $slider as $slide_item ) {
								$title = ! empty( $slide_item->title ) ? apply_filters( 'startkit_translate_single_string', $slide_item->title, 'slider section' ) : '';
								$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'startkit_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
								$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'startkit_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
								$text = ! empty( $slide_item->text ) ? apply_filters( 'startkit_translate_single_string', $slide_item->text, 'slider section' ) : '';
								$button = ! empty( $slide_item->text2) ? apply_filters( 'startkit_translate_single_string', $slide_item->text2,'slider section' ) : '';
								$link = ! empty( $slide_item->link ) ? apply_filters( 'startkit_translate_single_string', $slide_item->link, 'slider section' ) : '';
								$image = ! empty( $slide_item->image_url ) ? apply_filters( 'startkit_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
								$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'startkit_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
								$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'startkit_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
						?>
						<div class="header-single-slider">
							<figure>
								<?php if ( ! empty( $image ) ) : ?>
								<img src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
								<?php endif; ?>
								<div class="content" style="background: rgba(20, 20, 20,<?php echo esc_html($slider_opacity); ?>);">
									<div class="slide-table">
										<div class="slide-table-cell">                                        
											<div class="container">
												<div class="row slide-<?php echo esc_attr($align); ?>" >
													<?php if ( ! empty( $image2 ) ) : ?>
													<div class="col-md-7 my-auto">
													<?php else : ?>
													<div class="col-md-12 my-auto">
													<?php endif; ?>
														<div class="slide-content startkit">
															<?php if ( ! empty( $subtitle ) ) : ?>
																<h1 class="fadeInUp delay-1 animated"><?php echo esc_html( $subtitle ); ?></h1>
															<?php endif; ?>
															
															<?php if ( ! empty( $subtitle2 ) ) : ?>
																<h4 class="fadeInUp delay-2 animated"><?php echo esc_html( $subtitle2 ); ?></h4>
															<?php endif; ?>
															<?php if ( ! empty( $text ) ) : ?>
																<p class="fadeInUp delay-3 animated"><?php echo esc_html( $text ); ?></p>
															<?php endif; ?>
															<?php if ( ! empty( $button ) ) : ?>
																<a href="<?php echo esc_url( $link ); ?>" class="boxed-btn fadeInUp delay-4 animated"><?php echo esc_html( $button ); ?><i class="fa fa-long-arrow-right"></i></a>
															<?php endif; ?>	
														</div>
													</div>
													
													<?php if ( ! empty( $image2 ) ) : ?>
														<div class="col-md-5 my-auto mx-auto">
															<div class="startkit-img flipInY delay-2 animated">
																<img src="<?php echo esc_url( $image2 ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
															</div>
														</div>
													<?php endif; ?>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</figure>
						</div>
						<?php } ?>
                    </div>
                </div>
				<ul id="carousel-custom-indicator" class="owl-dots list-inline text-center custom-indicators position-absolute bottom-0 w-100 mb-0 d-none d-sm-none d-md-block d-lg-block">
					<?php
						foreach ( $slider as $slide_item ) {
							$title = ! empty( $slide_item->title ) ? apply_filters( 'startkit_translate_single_string', $slide_item->title, 'slider section' ) : '';
							$icon = ! empty( $slide_item->icon_value ) ? apply_filters( 'startkit_translate_single_string', $slide_item->icon_value, 'slider section' ) : '';
					?>
						<li class="list-inline-item">
							<button class="border-0 font-weight-bold d-flex align-items-center"><span class="fa <?php echo esc_attr( $icon ); ?> icon icon-xs mr-2"></span> <?php echo esc_html( $title ); ?>
							</button>
						</li>
					<?php } ?>
				</ul>
            </div>
        </div>
		<?php } ?>
		<?php 
	}}
	endif;
if ( function_exists( 'start_startkit_slider' ) ) {
$section_priority = apply_filters( 'startkit_section_priority', 11, 'start_startkit_slider' );
add_action( 'startkit_sections', 'start_startkit_slider', absint( $section_priority ) );

}