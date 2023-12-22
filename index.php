<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
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
            <a href="/"><?php bloginfo('name'); ?></a>
            <small><?php bloginfo('description'); ?></small>
        </h1>

        <form method="get" action="<?php esc_url(home_url('/')) ?>">
            <input type="text" name="s" placeholder="Search...">
        </form>
    </div>
</header>

<div class="container">
    <nav class="primary">
        <ul><?php $args = [
            'theme_location' => 'primary'
            ];
            wp_nav_menu($args);
        ?>
        </ul>
    </nav>

    <div class="main">
        <main class="block">
            <article class="post">
                <h2>Post 1</h2>
                <p class="meta">Posted at 10:00 on May 9 by admin</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores blanditiis consectetur cum
                    delectus
                    dolor eveniet, exercitationem id laudantium, maxime minima nihil numquam officia quos, ratione rerum
                    sapiente voluptas voluptates!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque fugit, incidunt ipsam
                    libero
                    magni
                    maxime nostrum pariatur qui, quidem reiciendis suscipit. Eligendi, excepturi incidunt laboriosam
                    maxime
                    quidem similique vero.</p>
                <a href="#" class="button">Read More</a>
            </article>

            <article class="post">
                <h2>Post 1</h2>
                <p class="meta">Posted at 10:00 on May 9 by admin</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores blanditiis consectetur cum
                    delectus
                    dolor eveniet, exercitationem id laudantium, maxime minima nihil numquam officia quos, ratione rerum
                    sapiente voluptas voluptates!</p>
                <a href="#" class="button">Read More</a>
            </article>

            <article class="post">
                <h2>Post 1</h2>
                <p class="meta">Posted at 10:00 on May 9 by admin</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores blanditiis consectetur cum
                    delectus
                    dolor eveniet, exercitationem id laudantium, maxime minima nihil numquam officia quos, ratione rerum
                    sapiente voluptas voluptates!</p>
                <a href="#" class="button">Read More</a>
            </article>
        </main>

        <div class="sidebar block">
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
