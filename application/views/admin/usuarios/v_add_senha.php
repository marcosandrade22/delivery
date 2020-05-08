<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <?= set_value('titulo_produto') ? : (isset($titulo_produto) ? $titulo_produto : ''); ?>
               
            </div>
            <div class="card-body">
        <form method="post" action="<?php echo base_url(); ?>adm_usuarios/store_senha" />
         <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
        <div class="row">
            
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Senha</label>
                    <input required type="password" name="password" " class="form-control" />
                </div>
            
            <div class="form-group">
            <input type="submit" value="SALVAR" class="btn btn-info" />
            </div>
            </div>
            
        </div>
    </form>
 </div>
    </div>
</div>