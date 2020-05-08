    

 <!-- Featured Section Begin -->
 <section class="featured spad" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produtos</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row featured__filter">
                <?php foreach($produtos as $row): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    
                    <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->imagem_produto; ?>">
                            
                        <form id="frmCart">
                            
                        <?php
			$in_session = "0";
                        if(!empty($this->session->cart_item)) {
                            $session_code_array = array_keys($this->session->cart_item);
                           if(in_array($row->codigo_produto,$session_code_array)) {
                                $in_session = "1";
                            }
                        }
			?>
                     
                       </form>
                             <ul class="featured__item__pic__hover">
                                 <div class="quantity">
                                <div class="pro-qty">
                                    <input id="qty_<?php echo $row->id_produto; ?>" type="text" value="1">
                                </div>
                                </div>
                                <input type="button" id="add_<?php echo $row->id_produto; ?>" value="Adicionar ao Carrinho" class="btnAddAction cart-action primary-btn2" onClick = "cartAction('add','<?php echo  $row->id_produto;  ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
                                <input type="button" id="added_<?php echo  $row->id_produto; ?>" disabled value="Adicionado ao Carrinho" class="btnAdded primary-btn2 added-btn"   <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
                            </ul>
                        </div>
                       
                        <a href="<?php echo base_url().'produtos/detalhe/'.$row->url_amiga; ?>">
                        <div class="featured__item__text">
                            <h6><?php echo $row->titulo_produto; ?></h6>
                            <h5>R$ <?php echo $row->preco_produto; ?></h5>
                        </div>
                        </a>
                        
                        
                    </div>
                </div>
                <?php endforeach; ?>
               
               
                
              
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Categorias</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    
                    <?php foreach($categorias as $row): ?>
                     <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->imagem_categoria; ?>">
                            <h5><a href="<?php echo base_url().'produtos/categoria/'.$row->id_categoria; ?>"><?php echo $row->nome_categoria; ?></a></h5>
                        </div>
                    </div>
                    
                    <?php endforeach; ?>
                    
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->