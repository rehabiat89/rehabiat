<?php  
	if ( ! function_exists( 'fiona_blog_slider' ) ) :
	function fiona_blog_slider() {
	$slider_hs 				= get_theme_mod('slider_hs','1');	
	$slider_category_id 	= get_theme_mod('slider_category_id');
	if($slider_hs == '1'){
?>	     
	<section id="slider-section" class="slider-wrapper section-14">
		<div class="main07 main-slider">
           <?php 	
				$args = array( 'post_type' => 'post', 'category_name' => $slider_category_id,'posts_per_page' => 4,'ignore_sticky_posts' => true ) ; 	
					query_posts( $args );
					if(query_posts( $args ))
					{	
					while(have_posts()):the_post(); 
					
			?>
            <div class="item">
				<?php do_action( 'fiona_blog_post_format_img_video' ); ?>
                <div class="theme-slider">
                    <div class="theme-table">
                        <div class="theme-table-cell">
                            <div class="av-container">                                
                                <div class="theme-content text-left">
									<div class="posted-on post-date">
										<a href="<?php echo esc_url(get_month_link(get_post_time('J'),get_post_time('M'))); ?>"><span><?php echo esc_html(get_the_date('j')); ?></span><?php echo esc_html(get_the_date('M')); ?></a>
									</div>
									<div class="cover-slider">
										<div class="author-sub-date">
											<span class="author-name">
												<?php  $user = wp_get_current_user(); ?>
												<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>" title="Author: <?php esc_html(the_author()); ?>" class="author meta-info hide-on-mobile"> <span class="author-image" style="background-image: url('<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>');"></span><?php esc_html(the_author()); ?></a>
											</span>
										</div>
										<ul class="post-categories"><li><a href="<?php esc_url(the_permalink()); ?>"><?php the_tags('','',''); ?></a></li></ul>
										<?php     
											if ( is_single() ) :
											
											the_title('<h1 class="post-title">', '</h1>' );
											
											else:
											
											the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
											
											endif; 
										?>
										<?php
											//content
											do_action( 'fiona_blog_post_format_img_video_content' );
										?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
				endwhile; 
				}
			?>
        </div>
        <div class="controls slider-nav" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
	        <button type="button" class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"><i class="fa fa-arrow-left"></i></button>
	        <button type="button" class="next" data-controls="next" aria-controls="customize" tabindex="-1"><i class="fa fa-arrow-right"></i></button>
	    </div>
    </section>
	
<?php	
}} endif;
add_action('fiona_blog_slider', 'fiona_blog_slider');	