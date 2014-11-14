<?php 

/*
Template Name: Custom Gallery Grid
*/

get_header(); ?>
Custo gallery Grid
<div id="content-wrap">


<div class="twelve columns" id="content">
	<!-- Skip Nav -->
	<a id="main"></a>

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row">
	<ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-2">

			<?php $args = array( 
				'post_type' => 'post',
				'category__and' =>47,
			
				'posts_per_page' => -1,
				'orderby' =>'title',
				'order' => 'asc',
				
			   );
	
				$loop = new WP_Query( $args );	if( $loop -> have_posts() ) { while ( $loop -> have_posts() ) {
				
				$loop -> the_post();
									    
				 ?>
									    
			<li <?php post_class();?>>
	<div class="row panel" data-equalizer>							
	<div class="small-12 medium-6 large-6 columns" data-equalizer watch>
			<?php 

                  $image = get_field('image');

                  if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
</div>
		<div class="small-12 medium-6 large-6 columns" data-equalizer watch>	
			<?php the_field('content'); ?>
		</div>
			
			 </li>
										
										 <?php
									    
									    }			
									wp_reset_query();
								} ?>
   </div>
	</div>
</ul>
	
<p><?php the_tags(); ?></p>
	
	
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	




<?php //get_sidebar(); ?>

</div><!--initial row-->

</div> <!-- content wrap ->
		
<?php get_footer(); ?>