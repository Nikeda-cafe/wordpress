<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article <?php post_class("mycontainer"); ?>>
            <div class="myposthead">
                <?php the_category(); ?>
                <h1><?php the_title(); ?></h1>
                <time datetime="<?php echo get_the_date(DATE_W3C) ?>">
                    <?php echo date("Y年m月d日"); ?>
                </time>
            </div>
            <?php the_content(); ?>
            <?php the_post_navigation(); ?>
        </article>
    <?php endwhile; endif; ?>
    <?php wp_footer(); ?>
</body>
</html>