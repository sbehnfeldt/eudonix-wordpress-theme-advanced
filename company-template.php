<?php
/*
 Template Name: Company Layout
 */
?>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ) ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ) ?>

<div class="container">
    <?php get_template_part("primary-menu" ); ?>

    <div class="main">
        <main>
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <article class="page">
                        <h2><?php the_title(); ?></h2>
                        <p class="phone">Call Us: 1-800-555-5555</p>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php echo wpautop( 'Sorry, no posts were found!' ) ?></p>
            <?php endif; ?>
        </main>
        <?php get_template_part( 'sidebar' ) ?>
    </div>
</div>

<?php get_template_part( 'footer' ) ?>
</body>
</html>


