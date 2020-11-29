<?php get_header(); ?>

    <main>
        <div class="wrapper">
            <div class="container articles">
                <div class="category_title">
                    <p><?php single_cat_title(); ?>カテゴリー　記事一覧</p>
                </div>
                <?php get_template_part('articles'); ?>
            </div>
            <div class="container sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>