<!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php foreach($info->result() as $row): ?>
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo base_url().$row->logo_site; ?>" alt=""></a>
                        </div>
                        <ul>
                            <li><small>Endereço</small><br><?php echo $row->endereco_site; ?></li>
                            <li>Telefone: <?php echo $row->telefone_site; ?></li>
                            <li>Email: <?php echo $row->email_site; ?></li>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Páginas</h6>
                        <ul>
                            <?php $this->M_select->list_paginas();?>
                        </ul>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Social</h6>
                        <p>Acompanhe nossas redes sociais.</p>
                        
                        <div class="footer__widget__social">
                              <?php if($info->row()->facebook_site){?>
                                <a target="_blank" href="<?php echo $info->row()->facebook_site; ?>"><i class="fa fa-facebook"></i></a>
                                <?php } ?>
                                <?php if($info->row()->instagram_site){?>
                                <a target="_blank" href="<?php echo $info->row()->instagram_site; ?>"><i class="fa fa-instagram"></i></a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                                <div class="footer__copyright__text"><p>
                            
                            </p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


  <!-- Js Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/mixitup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script>
    $(document).ready(function() {
     var url="produtos/ajax_dot";
       jQuery("#dot-cart").load(url);
        jQuery("#dot-bag").load(url);
    });
</script>
        



</body>

</html>
