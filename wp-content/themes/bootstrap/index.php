<!--header-->
<?php get_header(); ?>
<!--/-->

<!--menu-->
<?php get_template_part( 'menu' ); // Navigation bar (main_menu.php) ?>
<!---->


<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <?php if(have_posts()):while (have_posts()):the_post();  ?>
                <!--выводим заголовок записи-->
                <h1><a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h1>

                <!--выводим дату-->
                <?php the_time('d.m.Y'); ?>

                <!--выводим миниатюру-->
                <?php the_post_thumbnail('thumbnail', ''); ?>

                <!-- выводим анонс-->
                <p><?php the_excerpt();  ?></p>

            <?php endwhile; ?>
                <!--    post navigation-->
            <?php else: ?>
                <!--    no post found-->
            <?php endif; ?>

        </div>
        <!-- вывод виджета-->
        <div class="col-xs-4"><?php get_sidebar('sidebar'); ?></div>
    </div>
</div>

<!--footer-->
<?php get_footer(); ?>
<!--/-->
