<?php foreach($categoria->result() as $row): ?>
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->bg_categoria; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row->nome_categoria; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <span>Categoria</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>