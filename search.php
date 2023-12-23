<html <?php language_attributes(); ?>>
<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "head.php"); ?>
<body <?php body_class(); ?>>

<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "header.php"); ?>

<div class="container">
    <?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "primary-menu.php"); ?>

    <div class="main">
        <main class="search">
            <h1>
                Search Results
            </h1>

            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                <?php get_template_part('content') ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php echo wpautop( 'Sorry, no posts were found!' ) ?></p>
            <?php endif; ?>
        </main>
        <?php get_template_part('sidebar'); ?>
    </div>
</div>

<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "footer.php"); ?>


</body>
</html>
