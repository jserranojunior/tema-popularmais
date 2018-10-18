<? include('header.php'); ?>

<? 
  $args = array(
    'cat' => '5',
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );

   
query_posts($args);
$count = 0;
?>

<div class="row">
    <div class="main col-md-9">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                   
                    <div class="carousel-inner">


                        

                        <?php if(have_posts()) : while(have_posts()) : the_post(); 
                        $count += 1;
                        ?>
                        <div class="carousel-item <? if($count == 1){ echo('active'); } ?> ">
                                <?php the_post_thumbnail('post-thumbnail', array('size'=> '300px','class' => 'd-block w-100')); ?>
                        
                         
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-slide">
                                        <? the_title(); ?>
                                </h5>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php else : get_404_template();  endif; ?>
                        
                       
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>







        <div class="row">
            <? 
  $args = array(
    'cat' => '5',
    'post_type' => 'post',
    'posts_per_page' => 16,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );

   
query_posts($args);
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




    <div class="sidebar col-md-3">
        <div class="row">
            <div class="col">


                <div class="btn btn-sm btn-outline text-warning logo-menu"><i class="fas fa-headphones"></i></div>
                <div class="btn btn-sm btn-outline text-primary logo-menu"><i class="fab fa-facebook-square"></i></div>
                <div class="btn btn-sm btn-outline text-danger logo-menu"><i class="fab fa-instagram"></i></div>
                <div class="btn btn-sm btn-outline text-primary logo-menu"><i class="fab fa-twitter"></i></div>
                <div class="btn btn-sm btn-outline text-success logo-menu"><i class="fab fa-whatsapp"></i></div>


            </div>
        </div>



        <div class="row">
            <div class="col">
                <form>
                    <input class="form-control" type="search" placeholder="Busca" aria-label="Search">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="relogio">
                    <span class="day_month_year"></span>:
                    <SPAN ID="Clock">00:00:00</SPAN>
                </div>
            </div>
        </div>


        <div class="row justify-content-md-center">
            <div class="col">
                <div class="facebook-like text-center">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpopularmaisbr%2F&tabs&width=250&height=136&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="250" height="136" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe> </div>
            </div>
        </div>


        <div class="row">
            <div class="col text-center">
                <a href="#">
                    <img class="img-fluid img-sidebar-google-play" src="<?php bloginfo('template_directory'); ?>/img/disponivel-google-play.png" alt="">
                </a>
            </div>
        </div>
    </div>

</div>

<? include('footer.php'); ?>