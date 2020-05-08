<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <?= set_value('nome_categoria') ? : (isset($nome_categoria) ? $nome_categoria : ''); ?>
               
            </div>
            <div class="card-body">
        <form method="post" action="<?php echo base_url(); ?>adm_categorias/store" />
         <input type='hidden' name="id_categoria" value="<?= set_value('id_categoria') ? : (isset($id_categoria) ? $id_categoria : ''); ?>">
        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                    <label><b>Nome da Categoria</b></label>
                    <input required type="text" name="nome_categoria" value="<?= set_value('nome_categoria') ? : (isset($nome_categoria) ? $nome_categoria : ''); ?>" class="form-control" />
                </div>


                <div class="form-group">
                    <label><b>Imagem Miniatura</b></label>
                    <input id="fieldID" type="text"  name="imagem_categoria" class="form-control" value="<?= set_value('imagem_categoria') ? : (isset($imagem_categoria) ? $imagem_categoria : ''); ?>">
                    <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=fieldID" class="iframe-btn" type="button">Escolher Imagem</a> <br>(imagem que será exibida como Miniatura da categoria)
                </div>
                
                <div class="form-group">
                    <label><b>Background da categoria</b></label>
                    <input id="BgID" type="text"  name="bg_categoria" class="form-control" value="<?= set_value('bg_categoria') ? : (isset($bg_categoria) ? $bg_categoria : ''); ?>">
                    <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=BgID" class="iframe-btn" type="button">Escolher Imagem</a> <br>(imagem que será exibida na página da categoria como imagem de fundo).
                </div>
              

            <div class="form-group">
            <input type="submit" value="SALVAR" class="btn btn-info" />
            </div>
            </div>
            <script>
                $(function(){
            	$('.iframe-btn').fancybox({
            		  'width'	: 600,
            		  'minHeight'	: 600,
            		  'type'	: 'iframe',
            		  'autoScale'   : true
                 });
              });
             </script>
        </div>
    </form>
   </div>
        </div>
</div>
