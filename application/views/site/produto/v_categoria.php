<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Departamentos</h4>
                            <ul>
                                <?php $this->M_select->list_categorias();?>
                            </ul>
                        </div>
                        
                        
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Últimos Produtos</h4>
                                <div class="latest-product__slider owl-carousel">
                                    
                                        <?php 
                                        $count = 0; 
                                        foreach($last->result() as $row): 
                                            if($count == 0){
                                                echo '<div class="latest-prdouct__slider__item">';
                                            }
                                        ?>
                                        <a href="#" class="latest-product__item">
                                            <div class="row"> 
                                            <div class="latest-product__item__pic_ col-md-4">
                                                <img src="<?php echo base_url().$row->imagem_produto; ?>" class="img-fluid img-responsive" alt="">
                                            </div>
                                            <div class="latest-product__item__text col-md-8">
                                                <h6><?php echo $row->titulo_produto; ?></h6>
                                                <span><?php echo $row->preco_produto; ?></span>
                                            </div>
                                            </div>
                                        </a>
                                        <?php 
                                        $count++;
                                        if($count == 3){
                                          echo '</div>' ;
                                            $count =0;
                                        }
                                        endforeach;
                                        
                                        ?>
                                   
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Promoção</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                
                                <?php foreach($promocao->result() as $row): ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="<?php echo base_url(); ?><?php echo $row->imagem_produto; ?>">
                                            
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?php echo $row->nome_categoria; ?></span>
                                            <h5><a href="#"><?php echo $row->titulo_produto; ?></a></h5>
                                            <div class="product__item__price"><?php echo $row->preco_produto; ?> </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Ordenar Por</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span><?php echo $produtos_num; ?></span> Produtos Encontrados</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php foreach($produtos->result() as $row): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->imagem_produto; ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#"><?php echo $row->titulo_produto; ?></a></h6>
                                    <h5><?php echo $row->preco_produto; ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ;?>
                        
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->