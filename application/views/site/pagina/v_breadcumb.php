<?php foreach($pagina->result() as $row): ?>
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->bg_pagina; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row->nome_pagina; ?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>