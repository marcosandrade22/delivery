<main id="main">

<div class="container">
  <div class="row">

    <!-- menu lateral -->
    <div class="col-md-3">
      menu
    </div>
    <!-- end menu lateral -->

    <!-- content -->
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h3>Destaques</h3>
          </div>
        </div>

      </div>
      <div class="row">

          <?php foreach($destaques->result() as $row): ?>
        <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">

                <div class="content">
                    <div class="imagem-inter " style="background: url('<?php echo $row->imagem_artigo; ?>'); background-size: cover ">
                        <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>">
                            <div class="content-overlay"></div>
                            <div class="content-details fadeIn-top">
                                <h2 class="montserrat white"><?php echo $row->titulo_artigo; ?></h2>
                                <p>Blog Curso</p>
                            </div>
                        </a>
                    </div>
                </div>


            <div class="blog-meta">
              <span class="comments-type">
                <i class="fa fa-comment-o"></i>
                <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>"><?php echo $row->nome_categoria; ?></a>
              </span>
              <span class="date-type">
                <i class="fa fa-calendar"></i><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?>
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>"><?php echo $row->titulo_artigo; ?></a>
              </h4>
              <p>
                   <?php echo word_limiter($row->texto_artigo, 25); ?>
              </p>
            </div>
            <span>
              <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>" class="ready-btn">Leia Mais</a>
            </span>
          </div>
          <!-- Start single blog -->
        </div>
        <!-- End Left Blog-->
        <?php endforeach; ?>


      </div>
    </div>
    <!-- end content -->

  </div>
</div>
<!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Destaques</h2>
              </div>
            </div>
          </div>
          <div class="row">

              <?php foreach($destaques->result() as $row): ?>
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">

                    <div class="content">
                        <div class="imagem-inter " style="background: url('<?php echo $row->imagem_artigo; ?>'); background-size: cover ">
                            <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>">
                                <div class="content-overlay"></div>
                                <div class="content-details fadeIn-top">
                                    <h2 class="montserrat white"><?php echo $row->titulo_artigo; ?></h2>
                                    <p>Blog Curso</p>
                                </div>
                            </a>
                        </div>
                    </div>


                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>"><?php echo $row->nome_categoria; ?></a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>"><?php echo $row->titulo_artigo; ?></a>
                  </h4>
                  <p>
                       <?php echo word_limiter($row->texto_artigo, 25); ?>
                  </p>
                </div>
                <span>
                  <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>" class="ready-btn">Leia Mais</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <?php endforeach; ?>


          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->


 <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area ultimas-noticias">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Últimas Notícias</h2>
              </div>
            </div>
          </div>
          <div class="row">

              <?php foreach($noticias->result() as $row): ?>
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12 ">
              <div class="single-blog box-noticia">

                 <div class="content ">
                        <div class="imagem-inter " style="background: url('<?php echo $row->imagem_artigo; ?>'); background-size: cover ">
                            <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>">
                                <div class="content-overlay"></div>
                                <div class="content-details fadeIn-top">
                                    <h2 class="montserrat white"><?php echo $row->titulo_artigo; ?></h2>
                                    <p>Blog Curso</p>
                                </div>
                            </a>
                        </div>
                    </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>"><?php echo $row->nome_categoria; ?></a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>"><?php echo $row->titulo_artigo; ?></a>
                  </h4>
                  <p>
                      <?php echo word_limiter($row->texto_artigo, 25); ?>
                  </p>
                </div>
                <span>
                  <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>" class="ready-btn">Leia Mais</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <?php endforeach; ?>


          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->



</main><!-- End #main -->
