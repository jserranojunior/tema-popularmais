<? include('header.php'); ?>

<div class="row">
    <div class="main col-md-9">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">

<p>Postado em <?php the_time('d/M/Y') ?>

<div class="row">
    <div class="col">
    <h2 class="text-danger"><?php the_title(); ?></h2>
    </div>
</div>
                     
                    <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                    <?php the_post_thumbnail('post-thumbnail', array('size'=> '300px','class' => 'img-thumb-inicial img-fluid')); ?>
                        
                    <p><?php the_content(); ?></p>
                </div>
                 
                <?php comments_template(); ?>
                     
            <?php endwhile; else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>


<!-- fim main -->
        </div>
    <? include('sidebar.php') ?>
    
</div>

<? include('footer.php'); ?>