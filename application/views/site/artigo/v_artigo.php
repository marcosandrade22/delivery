<script id="dsq-count-scr" src="//blog-curso-1.disqus.com/count.js" async></script>
<section class="artigo">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php foreach($artigo->result() as $row): ?>
                <div class="content-artigo">
                    
                    <div class="title-artigo">
                        <?php echo $row->titulo_artigo; ?>
                    </div>
                    <div class="breadcrumb-artigo">
                        Criado em <span><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?> </span>
                        por <span><?php echo $row->nome; ?></span> 
                         <br> 
                                    Categoria: 
                                    <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>">
                                        <?php echo $row->nome_categoria; ?>
                                    </a>
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
                    
                    <div class="img-artigo">
                        <img class="img-fluid" src="<?php echo $row->imagem_artigo; ?>" alt="<?php echo $row->titulo_artigo.' - '.$alt; ?>"/>
                    </div>
                    
                    <div class="texto-artigo">
                       <?php echo $row->texto_artigo; ?> 
                    </div>
                </div>
               <?php endforeach; ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://blog-curso-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
            
            </div>
            
            <div class="col-md-4">
                <div class="box1">
                    <div class="title-box">
                    <h2>Relacionados</h2>
                    </div>
                    <div class="content-box">
                        <?php foreach ($relacionados->result() as $row): ?>
                        
                        <div class="row row-box">
                            <div class="col-md-4 img-box">
                                <img class="img-fluid" src="<?php echo $row->imagem_artigo; ?>"  alt="<?php echo $row->titulo_artigo.' - '.$alt; ?>"/>
                            </div>
                            <div class="col-md-8 content-box">
                                <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>">
                                <div class="title-content-box">
                                    <?php echo $row->titulo_artigo; ?>
                                </div>
                                </a>
                                <div class="breadcumb-box">
                                     Criado em <span><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?> </span>
                                    por <span><?php echo $row->nome; ?></span>
                                    <br> 
                                    Categoria: 
                                    <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>">
                                        <?php echo $row->nome_categoria; ?>
                                    </a>
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
                
                
                 <div class="box2">
                    <div class="title-box">
                    <h2>Você também pode gostar</h2>
                    </div>
                    <div class="content-box">
                        <?php foreach ($gostar->result() as $row): ?>
                        
                        <div class="row row-box">
                            <div class="col-md-4 img-box">
                                 <img class="img-fluid" src="<?php echo $row->imagem_artigo; ?>" />
                            </div>
                            <div class="col-md-8 content-box">
                                <a href="<?php echo base_url(); ?>artigos/detalhe/<?php echo $row->url_amiga;?>">
                                <div class="title-content-box">
                                    <?php echo $row->titulo_artigo; ?>
                                </div>
                                </a>
                                <div class="breadcumb-box">
                                     Criado em <span><?php echo date('d/m/Y', strtotime($row->data_criacao)); ?> </span>
                                    por <span><?php echo $row->nome; ?></span><br> 
                                        
                                       <br> 
                                    Categoria: 
                                    <a href="<?php echo base_url(); ?>artigos/categoria/<?php echo $row->id_categoria; ?>">
                                        <?php echo $row->nome_categoria; ?>
                                    </a>
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