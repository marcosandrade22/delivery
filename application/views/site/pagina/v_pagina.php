<section class="artigo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php foreach($pagina->result() as $row): ?>
                <div class="content-artigo">
                    
                    <div class="title-artigo">
                        <?php echo $row->nome_pagina; ?>
                    </div>
                    
                    <div class="texto-artigo">
                       <?php echo $row->texto_pagina; ?> 
                    </div>
                </div>
                
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>