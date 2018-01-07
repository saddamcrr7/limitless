<?php 
get_header(); 
if( is_archive() ){
    get_template_part('/templates/archive-header');
}
if( is_search() ){
    get_template_part('/templates/search-header.php');
}
if( have_posts() ) :
    echo '<div class="loop-container">';
    while( have_posts() ) :
        the_post();
        if( is_home() || is_archive() ){
            get_template_part('/templates/archive', get_post_type());
        }else{
            get_template_part( '/templates/single', get_post_type() );
        }
    endwhile;
    echo '</div>';
    the_posts_pagination( );
endif;

get_footer();