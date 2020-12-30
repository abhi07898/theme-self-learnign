<?php get_header();?>
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
                        <!-- <div class="post">
                            <h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
                            <p class="meta">Posted by <a href="#">Someone</a> on July 8, 2011
                                &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                            <div class="entry">
                                <p><img src="images/img03.jpg" width="143" height="143" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, consectetuer nisl felis ac diam. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at,  non, purus. Mauris vitae nisl nec metus  consectetuer.</p>
                            </div>
                        </div>
                        <div class="post">
                            <h2 class="title"><a href="#">Consectetuer hendrerit urnaelit</a></h2>
                            <p class="meta">Posted by <a href="#">Someone</a> on July 8, 2011
                                &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                            <div class="entry">
                                <p><img src="images/img04.jpg" width="143" height="143" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Proin imperdiet est. Pellentesque ornare eleifend nunc. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. </p>
                            </div>
                        </div>
                        <div class="post">
                            <h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2>
                            <p class="meta">Posted by <a href="#">Someone</a> on July 8, 2011
                                &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
                            <div class="entry">
                                <p><img src="images/img02.jpg" width="143" height="143" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. </p>
                            </div>
                        </div> -->
                    </div>
                    <!-- end #content -->
<?php get_sidebar();?>
<?php get_footer();?>					
