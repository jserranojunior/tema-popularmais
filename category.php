<? include('header.php'); ?>
<div class="row">
    <div class="main col-md-9">

        <div class="row">
<?php 

// Check if there are any posts to display
if ( have_posts() ) : ?>  
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<div class="col-md-5 col-lg-3 col-sm-12">
                <a class="text-danger" href="<? the_permalink(); ?>">
                    <div class="card float-center">
                        <div class="float-center text-center ">
                            <?php the_post_thumbnail('post-thumbnail', array('size'=> '300px','class' => 'img-thumb-inicial img-fluid')); ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-danger titulo-posts-inicial">
                                <? the_title(); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
<?php endwhile; 

else: ?>
 
<?php endif; ?>
</div>

    </div><!-- fim main -->
    <? include('sidebar.php') ?>    
</div>

<? include('footer.php'); ?>