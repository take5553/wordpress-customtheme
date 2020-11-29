<?php get_header(); ?>

    <main>
        <div class="wrapper">
            <div class="container noarticles">
                <h2>404 Not Found</h2>
                <p>お探しのページは見つかりませんでした。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/image/rs-pose_syazai_man.png" alt="404">
                <a href="<?php echo esc_url( home_url() ); ?>">トップページ</a>
            </div>
            <div class="container sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>