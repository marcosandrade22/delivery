
<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
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
</section>