<?php 
	if ( ! function_exists( 'avril_lite_info' ) ) :
		function avril_lite_info() {
	$hs_info				= get_theme_mod('hs_info','1');		
	$info_first_icon_setting= get_theme_mod('info_first_icon_setting','fa-clock-o'); 
	$info_title				= get_theme_mod('info_title','Opening Hours');
	$info_description		= get_theme_mod('info_description','Monday-Friday: 09:00-22:00');
	$info_link				= get_theme_mod('info_link','#');
	
	$info_second_icon_setting= get_theme_mod('info_second_icon_setting','fa-home'); 
	$info_title2			= get_theme_mod('info_title2','Our Location');
	$info_description2		= get_theme_mod('info_description2','California Floor, USA 1208');
	$info_link2				= get_theme_mod('info_link2','#');
	
	$info_third_icon_setting= get_theme_mod('info_third_icon_setting','fa-calendar');	
	$info_title3			= get_theme_mod('info_title3','Booking Now');
	$info_description3		= get_theme_mod('info_description3','+00-245-152-5500'); 
	$info_link3				= get_theme_mod('info_link3','#');	 
if($hs_info == '1') {		
?> 
<div id="info-section" class="info-section">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="info-area">
                    <div class="svg-clip-art">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none"><path stroke-width="0" d="M0 0 C50 100 50 100 100 0 L100 100 0 100"></path></svg>
                    </div>
                    <ul class="info-wrapper wow fadeInUp">
                        <li class="info-first">
                            <aside class="widget widget-contact">
                                <div class="contact-area">
                                    <div class="contact-icon">
                                        <i class="fa <?php echo esc_attr( $info_first_icon_setting ); ?>"></i>
                                    </div>
                                    <a href="<?php echo esc_url( $info_link ); ?>" class="contact-info">
                                        <span class="text"><?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title)); ?></span>
                                        <span class="title"><?php /* translators: %s: Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description)); ?></span>
                                    </a>
									<?php if ( ! empty( $info_link ) ) : ?>
										<div class="contact-more">
											<a class="btn-arrow" href="<?php esc_url( $info_link ); ?>"><?php esc_html_e('Read More','clever-fox'); ?></a>
										</div>
									<?php endif; ?>	
                                </div>
                            </aside>
                        </li>
                        <li class="info-second">
                            <aside class="widget widget-contact">
                                <div class="contact-area">
                                    <div class="contact-icon">
                                        <i class="fa <?php echo esc_attr( $info_second_icon_setting ); ?>"></i>
                                    </div>
                                    <a href="<?php echo esc_url( $info_link2 ); ?>" class="contact-info">
                                        <span class="text"><?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title2)); ?></span>
                                        <span class="title"><?php /* translators: %s: Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description2)); ?></span>
                                    </a>
									<?php if ( ! empty( $info_link2 ) ) : ?>
										<div class="contact-more">
											<a class="btn-arrow" href="<?php esc_url( $info_link2 ); ?>"><?php esc_html_e('Read More','clever-fox'); ?></a>
										</div>
									<?php endif; ?>	
                                </div>
                            </aside>
                        </li>
                        <li class="info-third">
                            <aside class="widget widget-contact">
                                <div class="contact-area">
                                    <div class="contact-icon">
                                        <i class="fa <?php echo esc_attr( $info_third_icon_setting ); ?>"></i>
                                    </div>
                                    <a href="<?php echo esc_url( $info_link3 ); ?>" class="contact-info">
                                        <span class="text"><?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title3)); ?></span>
                                        <span class="title"><?php /* translators: %s: Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description3)); ?></span>
                                    </a>
									<?php if ( ! empty( $info_link3 ) ) : ?>
										<div class="contact-more">
											<a class="btn-arrow" href="<?php esc_url( $info_link3 ); ?>"><?php esc_html_e('Read More','clever-fox'); ?></a>
										</div>
									<?php endif; ?>		
                                </div>
                            </aside>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php	
}} endif; 
if ( function_exists( 'avril_lite_info' ) ) {
	$section_priority = apply_filters( 'avril_section_priority', 12, 'avril_lite_info' );
	add_action( 'avril_sections', 'avril_lite_info', absint( $section_priority ) );
}