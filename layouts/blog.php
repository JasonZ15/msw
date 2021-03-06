<div class="box">
	<?php 
	if (is_paged()) $is_paged = true;
	
	if(get_option('woo_exclude_video') == "true")
		$ex_vid = get_cat_id(get_option('woo_video_category'));
	  
	if (get_option('woo_slider_magazine_exclude') == "true") $exclude = get_option('woo_exclude'); // Get featured posts and exclude
	
	$args = array(	'post__not_in' => $exclude, 
					'cat' => '-'.$ex_vid,
					'paged'=> $paged ); 
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts($args);
	
	if (have_posts()) : $counter = 0;
	while (have_posts()) : the_post(); $counter++;
	?>
		<div class="post-alt blog" style="padding-bottom: 22px; border-bottom: 1px dotted #ddd;">
            <?php if ( get_option('woo_blog_excerpt') == "true" ) { ?><div class="entry"><?php woo_image('width='.get_option('woo_home_thumb_width').'&class=alignright'); ?> </div><?php } ?>
            
			<h2><a title="<?php _e('Permanent Link to','woothemes'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<p class="post_date"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="avatar_link"><?php echo get_avatar( get_the_author_meta('ID'), 32 ); ?></a>By <b><?php the_author_posts_link(); ?></b> | <?php the_time('F d, Y'); ?> | <span class="comments"><?php comments_popup_link(__('0 Comments','woothemes'), __('1 Comment','woothemes'), __('% Comments','woothemes')); ?></span><br /> <span class="singletags"><?php if (function_exists('the_tags')) { ?><?php the_tags('Tags: ', ', ', ''); ?><?php } ?></span><span class="clear" style="clear: left; display: block;"></span></p>
			<div class="entry">
				<?php if ( get_option('woo_blog_excerpt') == "true" ) { the_excerpt() ?>
					<p style="float: left;"><span class="continue"><a title="<?php _e('Permalink to ','woothemes'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>"><?php _e('Read More','woothemes'); ?></a></span></p>
				<?php } else { the_content(__('<span class="continue">Continue Reading</span>','woothemes')); } ?>
               
			</div>		 
		
		</div><!--/post-->		

	<?php endwhile; ?>	
    <?php endif; ?>	
	
	<div class="fix"></div>
	
    <div class="more_entries">
        <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
            <div class="fl"><?php previous_posts_link(__('&laquo; Newer Entries ','woothemes')) ?></div>
            <div class="fr"><?php next_posts_link(__(' Older Entries &raquo;','woothemes')) ?></div>
            <br class="fix" />
        <?php } ?> 
    </div>		
    
    <div class="fix" style="height:15px"></div>

</div>