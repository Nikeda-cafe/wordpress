<?php get_header(); ?>
    <?php if(have_posts()){ while(have_posts()){ the_post(); ?>
        <main class="mycontainer">
            <?php the_content(); ?>
        </main>
    <?php }} ?>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>