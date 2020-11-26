<?php
get_header();


    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="wrap">
                <h2 class="header_heading"><a class="header_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <!-- <h2><?php the_title(); ?></h2> -->
                <div class="content"><?php the_content(); ?></div>
            </div>
        </div>
    <?php endwhile;
    else :
        echo '<p>There are no Post!</p>';
    endif;

get_footer();

?>