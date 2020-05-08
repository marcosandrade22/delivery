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
        <form method="post" action="<?php echo base_url(); ?>adm_usuarios/store" />
         <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
        <div class="row">
            
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nome</label>
                    <input required type="text" name="nome" value="<?= set_value('nome') ? : (isset($nome) ? $nome : ''); ?>" class="form-control" />
                </div>
                
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <?php
                        if($status == 1){
                        ?>
                        <option selected value="1">Ativo</option>
                        <option value="0">Inativo</option>
                        <?php 
                        }elseif($status == 0){
                            ?>
                        <option  value="1">Ativo</option>
                        <option selected value="0">Inativo</option>
                        <?php
                        }
                        ?>
                        
                    </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label>email</label>
                    <input required type="email" value="<?= set_value('email') ? : (isset($email) ? $email : ''); ?>" name="email" class="form-control" />
                </div>
            </div>
            <div class="form-group">
            <input type="submit" value="SALVAR" class="btn btn-info" />
            </div>
                  
        </div>
        </form>
        
    </div>
    </div>
</div>