<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="border_outer article_outer">
        <div class="border_inner">
            <div class="article">
                <section>
                    <div class="article_header">
                        <h1><?php the_title(); ?></h1>
                        <p><time><?php echo get_the_date(); ?></time></p>
                    </div>
                    <div class="article_main">
                        <?php the_content(); ?>
                    </div>
                    <div class="article_comments">
                        <?php comments_template(); ?>
                    </div>
                    <div class="article_footer">
                        <p><?php the_category(); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>