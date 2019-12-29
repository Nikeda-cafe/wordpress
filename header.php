<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(is_single()){ ?>
        <meta property='og:site_name' content='<?php bloginfo("name") ?>'>        
        <meta property="og:locale" content="ja_JP">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php the_title(); ?>">
        <meta property="og:url" content="<?php the_permalink(); ?>">
        <meta property="og:description" content="<?php wp_strip_all_tags(get_the_excerpt()) ?>">

        <?php if(has_post_thumbnail()){ ?>
            <?php $img = get_post_thumbnail_id(); ?>
            <meta property='og:image' content='<?php echo esc_url(wp_get_attachment_url( $img )) ?>'>
            <meta property='og:image:width' content='<?php echo esc_attr( wp_get_attachment_metadata($img)["width"]); ?>'>
            <meta property='og:image:height' content='<?php echo esc_attr( wp_get_attachment_metadata($img)['height']) ?>'>
        <?php } ?>
    <?php } ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="myhead mycontainer">
        <div class="alignwide">
            <a href="<?php echo home_url("/"); ?>"><?php bloginfo("name") ?></a> 
            <p><?php bloginfo("description") ?></p>
        </div>
    </header>
    <?php if(has_nav_menu( "primary" )): ?>
    <nav class="mynav">
        <div class="mycontainer">
            <div class="alignwide">
                <?php wp_nav_menu( array(
                    "theme_location" => "primary"
                ) ); ?>
            </div>
        </div>
    </nav>
    <?php endif; ?>

