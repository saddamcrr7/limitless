<div class="post-nav">
    <div class="previous">
        <?php if( get_previous_post() ) : ?> 
        <span class="label">Previous</span>
        <?php previous_post_link('%link'); ?>
<?php endif; ?>  
    </div><!--/.previous--> 
    <div class="next">
        <?php if( get_next_post( ) ) : ?> 
        <span class="label">Next</span>
        <?php next_post_link('%link'); ?> 
<?php endif; ?> 
    </div><!--/.next--> 
</div><!--/.post-nav--> 