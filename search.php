<html <?php language_attributes(); ?>>
<?php get_template_part('head'); ?>
<body <?php body_class(); ?>>

<?php get_template_part('header'); ?>

<div class="container">
    <?php get_template_part('primary-menu'); ?>

    <div class="main">
        <main class="search">
            <h1>
                Search Results
            </h1>

            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php echo wpautop( 'Sorry, no posts were found!' ) ?></p>
            <?php endif; ?>
        </main>
        <?php get_template_part( 'sidebar' ); ?>
    </div>
</div>

<?php load_template( get_template_directory() . DIRECTORY_SEPARATOR . "footer.php" ); ?>


</body>
</html>
