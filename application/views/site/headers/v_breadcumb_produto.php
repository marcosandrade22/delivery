<?php foreach($produto as $row): ?>
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url(); ?><?php echo $row->bg_categoria; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row->titulo_produto; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>