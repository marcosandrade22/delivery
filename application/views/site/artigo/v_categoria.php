    <section class="artigo">
    <div class="container">
                <div class="title-categoria">
                <h3>
                    <?php echo $categoria; ?>
                </h3>
                </div>
        <div class="row">
            
            <div class="col-md-8">
                
              <?php foreach($artigos->result() as $row): ?>
                
                <div class="row box-pagina">
                    <div class="col-md-4">
                        <div class="img-artigo">
                            <a href="<?php echo base_url(); ?>produtos/detalhe/<?php echo $row->url_amiga;?>">
                            <img class="img-fluid" src="<?php echo $row->imagem_artigo; ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="title-artigo-pagina">
                        <a href="<?php echo base_url(); ?>produtos/detalhe/<?php echo $row->url_amiga;?>">
                        <?php echo $row->titulo_artigo; ?>
                        </a>
                        </div>
                        <div class="breadcrumb-artigo-pagina">
                        Criado em <span><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?> </span>
                        por <span><?php echo $row->nome; ?></span> <br>
                         
                                    Categoria: 
                                    <a href="<?php echo base_url(); ?>produtos/categoria/<?php echo $row->id_categoria; ?>">
                                        <?php echo $row->nome_categoria; ?>
                                    </a> 
                                    
                                    Acessado : <?php
                                    if($row->acessos_artigo == 0){
                                        echo 'Nenhuma vez';
                                    }elseif($row->acessos_artigo == 1){
                                        echo $row->acessos_artigo.' Vez.';
                                    }elseif($row->acessos_artigo > 1){
                                    echo $row->acessos_artigo.' Vezes.'; 
                                    
                                    }
                                    ?> 
                        </div>
                        <div class="texto-artigo-pagina">
                            <?php echo word_limiter($row->texto_artigo, 25); ?> 
                        </div>
                    </div>
                </div>
                <div class="content-artigo">
                    
                    
                    
                    
                   
                    
                    
                </div>
               <?php endforeach; ?>
                
                
            
            </div>
            
            <div class="col-md-4">
               <div class="box2">
                    <div class="title-box">
                    <h2>Você também pode gostar</h2>
                    </div>
                    <div class="content-box">
                        <?php foreach ($relacionados->result() as $row): ?>
                        
                        <div class="row row-box">
                            <div class="col-md-4 img-box">
                                 <img class="img-fluid" src="<?php echo $row->imagem_artigo; ?>" />
                            </div>
                            <div class="col-md-8 content-box">
                                <a href="<?php echo base_url(); ?>produtos/detalhe/<?php echo $row->url_amiga;?>">
                                <div class="title-content-box">
                                    <?php echo $row->titulo_artigo; ?>
                                </div>
                                </a>
                                <div class="breadcumb-box">
                                     Criado em <span><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?> </span>
                                    por <span><?php echo $row->nome; ?></span><br> 
                                        
                                       <br> 
                                    Categoria: <?php echo $row->nome_categoria; ?>
                                    <br>
                                    Acessado : <?php
                                    if($row->acessos_artigo == 0){
                                        echo 'Nenhuma vez';
                                    }elseif($row->acessos_artigo == 1){
                                        echo $row->acessos_artigo.' Vez.';
                                    }elseif($row->acessos_artigo > 1){
                                    echo $row->acessos_artigo.' Vezes.'; 
                                    
                                    }
                                    ?> 
                                </div>
                                <div class="btn-box">
                                    
                                </div>
                                
                            </div>     
                        </div>
                            
                        
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>