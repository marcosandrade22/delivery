<header class="header">

       <div class="container">
           <div class="row">
               <div class="col-lg-3">
                   <div class="header__logo">
                       <a href="<?php echo base_url(); ?>"><?php echo $nome_site ;?></a>
                   </div>
               </div>
               <div class="col-lg-9">
                   <nav class="header__menu">
                       <ul>
                         <li ><a href="<?php echo base_url(); ?>adm_artigos">Artigos</a></li>
                         <li><a href="<?php echo base_url(); ?>adm_categorias">Categorias</a></li>
                           <li><a href="<?php echo base_url(); ?>adm_produtos">Produtos</a></li>
                         <li><a href="<?php echo base_url(); ?>adm_slides">Slides</a></li>
                         <li><a href="<?php echo base_url(); ?>adm_paginas">Páginas</a></li>
                         <li><a href="<?php echo base_url(); ?>adm_usuarios">Usuários</a></li>
                         <li><a href="<?php echo base_url('login/logout'); ?>">Sair</a></li>

                       </ul>
                   </nav>
               </div>

           </div>

       </div>
   </header>
   <!-- Header Section End -->
