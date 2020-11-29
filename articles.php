<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="border_outer article_outer">
        <div class="border_inner">
            <div class="article_summary">
                <div class="thumbnail">
                    <?php
                        if ( has_post_thumbnail()) {
                            the_post_thumbnail( 'thumbnail' );
                        } else {
                            echo '<img src=' . get_template_directory_uri() . '/image/rs-no_image_yoko.jpg" alt="No Image">';
                        }
                    ?>
                </div>
                <section>
                    <div class="article_summary_header">
                        <a href="<?php echo the_permalink( $post ); ?>"><h1><?php the_title(); ?></h1></a>
                        <p><time><?php echo get_the_date(); ?></time></p>
                    </div>
                    <div class="article_summary_main">
                        <?php the_content(); ?>
                    </div>
                    <div class="article_summary_footer">
                        <p><?php comments_number(); ?></p>
                        <p><?php the_category(); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>