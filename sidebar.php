</div>
<!-- 2カラムレイアウト 左側部分 end -->
<!-- 2カラムレイアウト 右側部分 start -->
<aside class="mymenu">
    <div class="mycontainer">
        <div class="alignwide mymenu-columns">
            <section class="myprofile">
                <h2>PROFILE</h2>
                <figure>
                    <img src="<?php echo get_theme_file_uri('profile.jpg'); ?>" alt="profile">
                </figure>
                <strong><?php the_author_meta('display_name') ?></strong>
                <p><?php the_author_meta('description') ?></p>
            </section>
            <?php
                if (is_active_sidebar("sidebar-1")){
                    dynamic_sidebar("sidebar-1"); 
                }
            ?>
        </div>
    </div>
</aside>
<!-- 2カラムレイアウト 右側部分 end -->
</div>
<!-- 2カラムflex親要素 end-->