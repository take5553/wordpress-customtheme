<?php
add_theme_support('post-thumbnails');

function get_dinner() {

    $the_query = new WP_Query( array(
        'orderby' => 'rand',
        'posts_per_page' => '1',
        'category_name' => 'cooking',
        ) );

    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post();

            echo "<a href=" . get_permalink() . "><h1>" . the_title('','',FALSE) . "</h1></a>";
            if ( has_post_thumbnail()) {
                the_post_thumbnail( 'thumbnail' );
            } else {
                echo '<img src=' . get_template_directory_uri() . '/image/rs-no_image_yoko.jpg" alt="No Image">';
            }
            
        endwhile;
    endif;
}