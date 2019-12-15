<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article <?php post_class("mycontainer"); ?>>
            <div class="myposthead">
                <?php the_category(); ?>
                <h1><?php the_title(); ?></h1>
                <time datetime="<?php echo get_the_date(DATE_W3C) ?>">
                    <?php $date = new DateTime("2019-12-14"); echo $date -> format("Y年m月d日"); ?>
                </time>
            </div>
            <?php the_content(); ?>
            <?php the_post_navigation(); ?>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>