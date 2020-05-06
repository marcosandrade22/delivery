

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url(); ?>"><span> </span><?php echo $nome_site ;?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
          <?php $this->M_select->list_paginas();?>


         <li class="drop-down"><a href="">Blog</a>
            <ul>
            <?php $this->M_select->list_categorias();?>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>contato">Contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
