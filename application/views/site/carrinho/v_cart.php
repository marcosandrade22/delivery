
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
                <div class="col-lg-8">
                    <div class="shoping__cart__table" id="cart_content">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produtos</th>
                                    <th>Preço</th>
                                    <th>Qtd.</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $total_geral = 0;
                                foreach($this->session->cart_item as $row): ?>
                                
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?php echo $row['nome']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $row['preco']; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <?php echo $row['quantidade']; ?>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?php 
                                        $total = $row['quantidade']*$row['preco'];
                                        echo $total;
                                        $total_geral = $total_geral+$total;
                                        ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a onClick="cartAction('remove','<?php echo $row["codigo_produto"]; ?>')" class="btnRemoveAction cart-action">
                                       <span class="icon_close"></span>
                                        </a>
                                    </td>
                                </tr>
                                
                                <?php endforeach; ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="shoping__cart__btns">
                        <a href="<?php echo base_url(); ?>" class="primary-btn cart-btn">CONTINUAR COMPRANDO</a>
                        <a href="javascript:void(0)" onClick="cartAction('empty','');" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Apagar Carrinho</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shoping__checkout">
                        <h5>TOTAL DO PEDIDO</h5>
                        <ul>
                            <li>Subtotal <span>R$ <?php echo $total_geral; ?></span></li>
                            <li >Frete <span>R$ <?php 
                            if(!isset($this->session->cart_item)){
                            $frete = 0;
                            }else{
                            $frete = 5; 
                            }
                            echo $frete; ?></span></li>
                            <li>Total <span>R$ <?php echo $total_geral+$frete; ?></span></li>
                        </ul>
                        <a <?php if(!isset($this->session->cart_item)){ ?> style="display: none"<?php } ?> href="#" class="primary-btn">FINALIZAR PEDIDO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->