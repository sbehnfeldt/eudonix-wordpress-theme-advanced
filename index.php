<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <h1>
            <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <small><?php bloginfo( 'description' ); ?></small>
        </h1>

        <form method="get" action="<?php esc_url( home_url( '/' ) ) ?>">
            <input type="text" name="s" placeholder="Search...">
        </form>
    </div>
</header>

<div class="container">
    <nav class="primary">
        <ul><?php $args = [
                'theme_location' => 'primary'
            ];
            wp_nav_menu( $args );
            ?>
        </ul>
    </nav>

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
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
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

<footer>
    <div class="container">
        <div class="copyright">
            &copy;2016
        </div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
