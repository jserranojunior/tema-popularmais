<? include('header.php'); ?>

        <div class="row">
            <div class="main col-md-9">
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://popularmais.com.br/wp-content/uploads/2018/10/FMI-afirma-que-protecionismo-dos-EUA-j%C3%A1-afeta-a-economia-global.jpg"
                                        alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-slide">
                                            Ex-vereador Nene do Vitória foi condenado a devolver mais de R$ 280 mil
                                            para a
                                            prefeitura de Campo Limpo Paulista
                                        </h5>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="http://popularmais.com.br/wp-content/uploads/2018/10/Observadores-da-miss%C3%A3o-da-OEA-chegam-ao-Brasil-para-as-elei%C3%A7%C3%B5es.jpg"
                                        alt="Observadores da missão da OEA chegam ao Brasil para as eleições">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-slide">Observadores da missão da OEA chegam ao Brasil para as
                                            eleições</h5>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://popularmais.com.br/wp-content/uploads/2018/09/Jana%C3%ADna-faz-apelo-a-Bolsonaro-%E2%80%9CGases-n%C3%A3o-podem-parar-chefe-de-Estado%E2%80%9D.jpg"
                                        alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-slide">Janaína faz apelo a Bolsonaro: “Gases não podem parar
                                            chefe de Estado”</h5>
                                    </div>
                                </div>
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
                    
                        <div class="col-md-5 col-lg-3 col-sm-12" >
                        <a class="text-danger" href="<? the_permalink(); ?>">
                            <div class="card float-center" >
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
                            <img class="img-fluid img-sidebar-google-play" src="<?php bloginfo("template_directory"); ?>/img/disponivel-google-play.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>

<? include('footer.php'); ?>