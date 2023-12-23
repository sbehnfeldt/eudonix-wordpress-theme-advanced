<header>
    <div class="container">
        <h1>
            <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <small><?php bloginfo( 'description' ); ?></small>
        </h1>

        <?php $action = home_url('/'); ?>
        <?php $action = esc_url($action); ?>
        <form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
            <input type="text" name="s" placeholder="Search...">
        </form>
    </div>
</header>
