<?php
/*
Template Name: Fysiska butiker
*/
get_header();
?>

<section>
    <div class="stores">
        <?php
        query_posts(array(
            'post_type' => 'stores'
        )); ?>

        <?php
        while (have_posts()) : the_post(); ?>

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p><?php the_content(); ?></p>
        <?php
        endwhile; ?>

    </div>
</section>


<?php
get_footer();
