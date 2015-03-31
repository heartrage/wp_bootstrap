<?php get_header(); ?>

<?php // this codeblock contains all the code required to add the 'top_menu' (menu must be defined in funtions.php and have menu items & have the navwalker included) and the required markup to a WordPress theme.
?>
    <!-- START menu -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo get_bloginfo('name') ?></a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse">
                <?php
                wp_nav_menu(array(
                        'menu' => 'top_menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_page_menu',
                        'walker' => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </div>
    </nav>
    <!-- END menu -->

<?php get_footer(); ?>