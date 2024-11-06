<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><strong>Start Date:</strong> <?php the_field('start_date'); ?></p>
    <p><strong>End Date:</strong> <?php the_field('end_date'); ?></p>
    <p><strong>Description:</strong> <?php the_field('description'); ?></p>

    <?php if ( $image = get_field('cover_image') ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <?php if ( $link = get_field('application_link') ): ?>
        <p><a href="<?php echo esc_url($link); ?>" target="_blank">Apply Here</a></p>
    <?php endif; ?>

<?php endwhile; endif;
get_footer();
