<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>



<h2><?php the_field('the_ingrdients', 537); ?></h2>
<?php
$value = get_field( "the_ingrdients", 537 );
?>
<?php
add_action( 'pre_get_posts', 'add_reviews_to_frontpage' );
 

?>

<?php if( $ingredients ): ?>
		<div id="objective-number" class="acf-number">
			<div class="marker" data="<?php echo $ingredients[' ']; ?>" data="<?php echo $carbohydrates[' ']; ?>"></div>
		</div>
		<?php endif; ?>



 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
 
        <?php
        // Start the loop.
		
		
		// Display field value
the_field( 'ingredients' );

// Return field value
get_field( 'ingredients' );
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
			
		


 
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
    
    
    
    <?php

get_header();
the_post();


// vars
$ingredients = get_field('ingredients');
$carbohydrates = get_field('carbohydrates');

?>

<div class="wrap">
	
	<div id="objective-hero">
		
		<?php if( $ingredients ): ?>
		<div id="objective-text area" class="acf-map">
			<div class="marker" data="<?php echo $ingredients[' ']; ?>" data="<?php echo $carbohydrates[' ']; ?>"></div>
		</div>
		<?php endif; ?>
		
		
		<?php if( $carbohydrates ): ?>
			<img class="carbohydrates" data="<?php echo $carbohydrates[' ']; ?>" data="<?php echo $carbohydrates[' ']; ?>" />
		<?php endif; ?>
		<h2><?php the_field('ingredient'); ?> </h2>
		<h2><?php the_title(); ?></h2>
        <h2><?php the_field('field_5d45426a82118', 537); ?></h2>

		<h3><?php the_field('date'); ?> from <?php the_field('start_time'); ?> to <?php the_field('end_time'); ?></h3>
		<h4><?php echo $ingredients['number']; ?></h4>
		
	</div>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_content(); ?>
		</main>
	</div>
	
</div>
<div id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('objective'); ?></h1>
            <h2><?php the_field('ingredient'); ?> </h2>
			<p><?php the_content(); ?></p>
            
            <?php endwhile; // end of the loop. ?>
        
 
 
<?php get_footer(); ?>



 

