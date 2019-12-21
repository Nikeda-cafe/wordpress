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
    <header class="myhead mycontainer">
        <div class="alignwide">
            <a href="<?php echo home_url("/"); ?>"><?php bloginfo("name") ?></a> 
            <p><?php bloginfo("description") ?></p>
        </div>
    </header>
