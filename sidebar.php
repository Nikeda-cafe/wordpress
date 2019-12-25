<aside class="mymenu">
    <div class="mycontainer">
        <div class="alignwide">
            <section class="myprofile">
                <h2>PROFILE</h2>
                <figure>
                    <img src="<?php echo get_theme_file_uri('profile.jpg'); ?>" alt="profile">
                </figure>
                <strong><?php the_author_meta('display_name') ?></strong>
                <p><?php the_author_meta('description') ?></p>
            </section>
            <?php
                if (is_active_sidebar("sidebar-1")):
                    dynamic_sidebar("sidebar-1"); 
                endif; 
            ?>
        </div>
    </div>
</aside>