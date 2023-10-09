<?php
/*
Template Name: Om oss-sida
*/
get_header();
?>
<h1>
    <?php the_title(); ?>
</h1>
<?php the_content(); ?>
<section class="team-section">
    <h2><?php the_field('title') ?></h2>
    <?php if (have_rows('members')) :
        while (have_rows('members')) : the_row();
    ?>
            <section class="team-section__container">
                <article class="team-section__container__text">
                    <h4>
                        <?php the_sub_field('name'); ?>
                    </h4>
                    <p>
                        <?php the_sub_field('description') ?>
                    <p>
                </article>
                <img class="team-section__container__img" src="<?php the_sub_field('image') ?>">
            </section>
    <?php
        endwhile;
    endif;
    ?>

</section>
<?php
get_footer();
