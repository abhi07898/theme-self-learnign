<?php
/*
* thistemplate is used to display home page
* Template Name: Homepage Template
*/
get_template_part( 'template-part/about', 'header' );
    get_header();

?>
        <div id="page">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <div id="content">
                        <?php if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();?>
                            
                        <div class="post">
                            <h2 class="title"><a href="<?php echo get_the_permalink(get_the_ID())  ?>"><?php the_title();?> </a></h2>
                            <p class="meta">Posted by <a href="#"><?php the_author();?></a> <?php the_date();?>
                                &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                            <div class="entry">
                                <p><?php the_content();?> </p>
                            </div>
                        </div>
                        <?php 
                            endwhile;
                        else :
                            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                        endif;?>
                    </div>
                    <!-- end #content -->
<?php get_sidebar();?>
<?php get_footer();?>	
<?php get_template_part( 'template-part/about', 'footer' );				

?>