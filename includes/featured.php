<div id="wooslider" class="wooslider">
	<div class="slider-container">

		<?php 
			$featposts = get_option('woo_feat_entries'); // Number of featured entries to be shown
		    $ex_feat = get_cat_id(get_option('woo_featured_category'));
			$the_query = new WP_Query('cat=' . $ex_feat . '&showposts=' . $featposts . '&orderby=post_date&order=desc');
		?>

		<div class="slider-shelf" style="left: 300px;"></div>


			<div class="slider-shelf-content" style="left: 350px;">
				<?php
				    $counter = 1; $count = 0;
				    while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
					$class = 'thumbnail" title="'.$counter; ?>
					<div style="height: 70px;">
					<?php woo_image('key=image&height=58&width=68&class=' . $class .'&id=' . get_the_id() .'&link=img&meta=' . get_the_title()); 
				?>
				<div style="font: normal 11px/12px Arial;padding-top: 12px;"><?php echo get_the_title(); ?></div></div>
	            <?php $shownposts[$count] = $post->ID; $count++; ?>				
				<?php $counter++; $count++; ?>
				<?php endwhile; ?>
			</div>

			<?php 
			$counter = 1;
			$slider_height = 270;
			$slider_height = get_option("woo_carousel_height");
			while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
			?>

		    <div class="slide slide-<?php echo $counter; ?>">
		        <a href="<?php the_permalink() ?>" title="<?php _e('Read the full story','woothemes'); ?>" class="open"><?php woo_get_image('image','595', $slider_height,'slider-img',90,get_the_id(),'img'); ?></a>   
		        <div class="slide-content slide-content-<?php echo $counter; ?>">
		            <div class="slide-content-inner-<?php echo $counter; ?>">
		                <h3><?php the_title(); ?></h3>
		                <p><?php $text = strip_tags(get_the_excerpt(), '<a><strong>');
						if (strlen($text) > 20) {
$text = substr($text,0,strpos($text,' ',20)); } ;
echo $text . ' ...';				
						 ?></p>
		            </div>
		        </div>
		    </div>

			<?php $counter++; ?>
			<?php endwhile; ?>
		    <?php if (get_option('woo_exclude') <> $shownposts) update_option("woo_exclude", $shownposts); ?>
				
		</div>

	<div class="slider-nav">
		<span class="slider-left"></span>
		<span class="slider-right"></span>
	</div>
</div>
