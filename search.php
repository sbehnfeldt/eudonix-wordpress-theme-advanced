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
                    <div class="archive-post">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p>Posted on: <?php the_time('F j, Y g:i a') ?></p>
                    </div>
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
