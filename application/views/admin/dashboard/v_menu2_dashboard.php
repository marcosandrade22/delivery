 <!-- ======= Header ======= -->
 <section> 
 <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span></span>Área Administrativa</a></h1>
        <small class="white">Seja Bem vindo <?php echo $this->session->userdata('Usuario'); ?></small>
      </div>

      <nav class="nav-menu d-none d-lg-block">
          
        <ul>
          <li ><a href="<?php echo base_url(); ?>adm_artigos">Artigos</a></li>
          <li><a href="<?php echo base_url(); ?>adm_categorias">Categorias</a></li>
          <li><a href="<?php echo base_url(); ?>adm_slides">Slides</a></li>
          <li><a href="<?php echo base_url(); ?>adm_paginas">Páginas</a></li>
          <li><a href="<?php echo base_url(); ?>adm_usuarios">Usuários</a></li>
          <li><a href="<?php echo base_url('login/logout'); ?>">Sair</a></li>
        

        </ul>
          
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 </section>
 