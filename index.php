<? include('header.php'); ?>

<? 
  $slide = array(
    'cat' => '5',
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );

   
query_posts($slide);
$count = 0;
?>









        <div class="row">
            <? 
         
            ?>


            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

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

            <?php endwhile; ?>
            <?php else : get_404_template();  endif; ?>
        </div>


        <div class="row">
            <div class="col text-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">

                        <?php previous_posts_link( '<li class="page-item"> <span class="page-link"> Mais novos </span> </li>' ); ?>


                        <?php next_posts_link( '<li class="page-item"> <span class="page-link"> Mais antigos </span> </li>' ); ?>

                    </ul>
                </nav>
            </div>
        </div>

        <!-- fim main -->
    </div>
    <? include('sidebar.php') ?>

</div>

<? include('footer.php'); ?>