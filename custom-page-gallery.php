<?php
/*--
Template Name: Custom Page Gallery
*/

 get_header(); ?>
	page		
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="panel">
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					</div>    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; WP_reset_postdata();?>
			<?php $gallery = new WP_Query(Array(
				'post_type' => '$gallery'
				));?>
				  <?php  while($gallery -> have_posts()) : $gallery ->the_post(); ?>
				  	
<div class="large-6 columns">
    <div class="panel">
    <?php the_post_thumbnail('thumbnail' );?>
          <?php the_title();?>
          
    </div>
    </div> <!--large 6 -->
				  	  <?php endwhile;  ?>
    				</div> <!-- end #main -->
  
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>