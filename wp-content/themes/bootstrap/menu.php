<!--menu -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
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