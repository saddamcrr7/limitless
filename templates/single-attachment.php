<div <?php post_class(); ?> >
    <div class="post-inner">
        <div class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </div><!--/.post-header--> 
        <div class="post-content">
            <?php echo wp_get_attachment_image( $post->ID, 'full' ); ?>
            <?php echo wpautop( get_the_content()); ?>
        </div><!--/.post-content--> 
    </div><!--/.post-inner--> 
</div><!--/.post--> 