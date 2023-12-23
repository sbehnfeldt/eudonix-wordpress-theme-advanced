<html <?php language_attributes(); ?>>
<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "head.php"); ?>
<body <?php body_class(); ?>>

<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "header.php"); ?>

<div class="container">
    <?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "primary-menu.php"); ?>

    <div class="main">
        <main class="archive">
            <h1>
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_author()) {
                    the_post();
                    echo 'Archives By Author: ' . get_the_author();
                    rewind_posts();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_day()) {
                    echo 'Archives By Day: ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Archives By Month: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Archives By Year: ' . get_the_date('Y');
                } else {
                    echo 'Archives';
                }
                ?>
            </h1>

            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                <?php get_template_part('content') ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php echo wpautop( 'Sorry, no posts were found!' ) ?></p>
            <?php endif; ?>
        </main>

        <div class="sidebar">
            <h3>Sidebar Head</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda delectus magni unde ut?
                Corporis dolore enim fugiat incidunt libero minima quae quis sed tempore unde, ut voluptatum? Vel,
                voluptate.</p>
            <a href="#" class="button">More</a>
        </div>
    </div>
</div>

<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "footer.php"); ?>


</body>
</html>
