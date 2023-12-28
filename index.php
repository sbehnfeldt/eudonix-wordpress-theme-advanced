<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ) ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ) ?>
<?php get_template_part("primary-menu" ); ?>

<div class="container">

    <div class="main">
        <main>
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
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
