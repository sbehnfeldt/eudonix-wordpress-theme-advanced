<html <?php language_attributes(); ?>>
<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "head.php"); ?>
<body <?php body_class(); ?>>

<?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "header.php"); ?>

<div class="container">
    <?php load_template(get_template_directory() . DIRECTORY_SEPARATOR . "primary-menu.php"); ?>

    <div class="main">
        <main>
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                            Posted at <?php the_time( 'F j, Y g:i a' ); ?> by
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                                <?php the_author(); ?>
                            </a>
                            | Posted In
                            <?php
                            $categories = array_map( function ( $cat ) {
                                return sprintf( '<a href="%s">%s</a>', get_category_link( $cat->term_id ), $cat->name );
                            }, get_the_category() );
                            echo( implode( ', ', $categories ) );
                            ?>
                        </p>
                        <?php if (has_post_thumbnail() ): ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                    </article>
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
