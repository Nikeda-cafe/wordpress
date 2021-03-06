<?php get_header(); ?>
    <main class="mycontainer">
        <div class="alignwide">
            <div class="myposthead">
                <h1>最新記事</h1>
                <p>RECENT</p>
            </div>
            <div class="mypostlist">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <?php the_posts_pagination(array(
            'prev_text' => '<span class="dashicons dashicons-undo"></span><span class="screen-reader-text">前へ</span',
            'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-redo"></span>'   
        ) ); ?>
    </main>
    <p><?php echo naoto(3); ?></p>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
