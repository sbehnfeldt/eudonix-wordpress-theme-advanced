<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ) ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ) ?>
<?php get_template_part( "primary-menu" ); ?>

<div class="container">
    <div class="main">
        <main class="archive">
            <h1>Archive:
                <?php
                if ( is_category() ) {
                    single_cat_title();
                } elseif ( is_author() ) {
                    the_post();
                    echo 'Archives By Author: ' . get_the_author();
                    rewind_posts();
                } elseif ( is_tag() ) {
                    single_tag_title();
                } elseif ( is_day() ) {
                    echo 'Archives By Day: ' . get_the_date();
                } elseif ( is_month() ) {
                    echo 'Archives By Month: ' . get_the_date( 'F Y' );
                } elseif ( is_year() ) {
                    echo 'Archives By Year: ' . get_the_date( 'Y' );
                } else {
                    echo 'Archives';
                }
                ?>
            </h1>

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

<?php get_template_part( "footer" ); ?>
</body>
</html>
