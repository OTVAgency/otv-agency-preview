<?php get_header(); ?>
<main id="main" class="section"><div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>><h1><?php the_title(); ?></h1><?php the_content(); ?></article>
<?php endwhile; else : ?><p><?php esc_html_e( 'No content found.', 'otv-agency' ); ?></p><?php endif; ?>
</div></main>
<?php get_footer(); ?>
