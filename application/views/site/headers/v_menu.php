<!-- Humberger Begin -->
   <div class="humberger__menu__overlay"></div>
   <div class="humberger__menu__wrapper">
       <div class="humberger__menu__logo">
           <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url().$info->row()->logo_site; ?>" alt="<?php echo $info->row()->nome_site; ?>"></a>
       </div>
       <div class="humberger__menu__cart">
           <ul>
              <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>-->
               <li><a href="<?php echo base_url().'cart'; ?>"><i class="fa fa-shopping-bag"></i> </a></li>
           </ul>
           
       </div>
       <div class="humberger__menu__widget">
           
           <div class="header__top__right__auth">
               <a href="#"><i class="fa fa-user"></i> Login</a>
           </div>
       </div>
       <nav class="humberger__menu__nav mobile-menu">
           <ul>
               <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
              
               <li><a href="#">Categorias</a>
                   <ul class="header__menu__dropdown">
                      <ul>
                        <?php $this->M_select->list_categorias();?>
                        </ul>
                   </ul>
               </li>
               <?php $this->M_select->list_paginas_top();?>
              <li><a href="<?php echo base_url(); ?>contato">Contato</a></li>
           </ul>
       </nav>
       <div id="mobile-menu-wrap"></div>
       <div class="header__top__right__social">
              <?php if($info->row()->facebook_site){?>
                                <a target="_blank" href="<?php echo $info->row()->facebook_site; ?>"><i class="fa fa-facebook"></i></a>
                                <?php } ?>
                                <?php if($info->row()->instagram_site){?>
                                <a target="_blank" href="<?php echo $info->row()->instagram_site; ?>"><i class="fa fa-instagram"></i></a>
                                <?php } ?>
          
       </div>
       <div class="humberger__menu__contact">
           <ul>
               <li><i class="fa fa-envelope"></i><?php echo $email_site; ?></li>
               <li><?php echo $telefone_site; ?></li>
           </ul>
       </div>
   </div>
   <!-- Humberger End -->

   <!-- Header Section Begin -->
   <header class="header">
       <div class="header__top">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-md-6">
                       <div class="header__top__left">
                           <ul>
                               <li><i class="fa fa-envelope"></i> <?php echo $email_site; ?></li>
                               <li><?php echo $telefone_site; ?></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                       <div class="header__top__right">
                           <div class="header__top__right__social">
                               <?php if($info->row()->facebook_site){?>
                                <a target="_blank" href="<?php echo $info->row()->facebook_site; ?>"><i class="fa fa-facebook"></i></a>
                                <?php } ?>
                                <?php if($info->row()->instagram_site){?>
                                <a target="_blank" href="<?php echo $info->row()->instagram_site; ?>"><i class="fa fa-instagram"></i></a>
                                <?php } ?>

                           </div>

                           <div class="header__top__right__auth">
                               <a href="#"><i class="fa fa-user"></i> Login</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container">
           <div class="row">
               <div class="col-lg-3">
                   <div class="header__logo">
                       <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url().$info->row()->logo_site; ?>" alt="<?php echo $info->row()->nome_site; ?>"></a>
                   </div>
               </div>
               <div class="col-lg-6">
                   <nav class="header__menu">
                       <ul >
                           <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
              
                           <li><a href="#">Categorias</a>
                               <ul class="header__menu__dropdown">
                                  <ul>
                                    <?php $this->M_select->list_categorias();?>
                                    </ul>
                               </ul>
                           </li>
                           <?php $this->M_select->list_paginas_top();?>
                          <li><a href="<?php echo base_url(); ?>contato">Contato</a></li>
                       </ul>
                   </nav>
               </div>
               <div class="col-lg-3">
                   <div class="header__cart">
                       <ul>
                          <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>-->
                           <li><a href="<?php echo base_url().'cart'; ?>"><i class="fa fa-shopping-bag"></i><span id="dot-bag"></span> </a></li>
                        </ul>
                      
                   </div>
               </div>
           </div>
           <div class="humberger__open">
               <i class="fa fa-bars"></i>
           </div>
       </div>
   </header>
   <!-- Header Section End -->
