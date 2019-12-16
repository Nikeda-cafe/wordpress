<?php get_header(); ?>
    <main class="mycontainer">
        <div class="myposthead">
            <h1>最新記事</h1>
            <p>RECENT</p>
        </div>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
            </article>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>