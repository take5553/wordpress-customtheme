<?php get_header(); ?>

    <main>
        <div class="wrapper">
            <div class="container articles">
                <?php get_template_part('article'); ?>
            </div>
            <div class="container sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>