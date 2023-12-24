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
                        <?php global $post; if(page_is_parent() || $post->post_parent > 0): ?>
                        <nav class="nav sub-nav">
                            <ul>
                                <span class="parent-link">
                                    <a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a>
                                </span>

                        <?php $args = [
                            'child_of' => get_top_parent(),
                            'title_li' => ''
                        ]; ?>
                        <?php wp_list_pages($args) ?>
                            </ul>
                        </nav>
                        <?php endif; ?>

                        <h2><?php the_title(); ?></h2>
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