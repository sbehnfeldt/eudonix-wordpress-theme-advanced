<?php if ( is_search() || is_archive() ): ?>
    <div class="archive-post">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p>Posted on: <?php the_time( 'F j, Y g:i a' ) ?></p>
    </div>
<?php else: ?>
    <article class="post post-gallery">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
<?php endif; ?>