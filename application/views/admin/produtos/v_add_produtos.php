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
       
        <form method="post" action="<?php echo base_url(); ?>adm_produtos/store" />
        
        <div class="row">
          <input type='hidden' name="id_produto" value="<?= set_value('id_produto') ? : (isset($id_produto) ? $id_produto : ''); ?>">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label>Titulo do produto</label>
                    <input required type="text" name="titulo_produto" value="<?= set_value('titulo_produto') ? : (isset($titulo_produto) ? $titulo_produto : ''); ?>" class="form-control" />
                </div>
               
                 <div class="row">
                 <div class="col-md-6">
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria_produto" class="form-control">
                        
                        <?php echo $this->M_select->categorias($categoria); ?>
                        <!--
                            <?php
                        foreach($categorias as $row):
                        ?>
                        <option value="<?php echo $row->id_categoria; ?>"><?php echo $row->nome_categoria; ?></option>
                        
                        <?php 
                        endforeach;
                        ?>-->
                        
                    </select>
                    </div> 
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                        <label>Preço</label>
                         <input required type="text" name="preco_produto" value="<?= set_value('preco_produto') ? : (isset($preco_produto) ? $preco_produto : ''); ?>" class="form-control" />
                         </div>
                     </div>
                </div>
                
                
                   
            </div>
          
        
         <div class="col-md-6">
                <div class="form-group">
                    <label>Imagem do produto</label>
                   <input id="fieldID" type="text"  name="imagem_produto" class="form-control" value="<?= set_value('imagem_produto') ? : (isset($imagem_produto) ? $imagem_produto : ''); ?>">
                    <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=fieldID" class="iframe-btn" type="button">Escolher Imagem</a>
                </div>
             
             <div class="row">
                 <div class="col-md-4">
                 <div class="form-group">
                    <label>Status</label>
                    <select name="status_produto" class="form-control">
                        <?php
                        if($status_produto == 1){
                        ?>
                        <option selected value="1">Ativo</option>
                        <option value="0">Inativo</option>
                        <?php 
                        }elseif($status_produto == 0){
                            ?>
                        <option  value="1">Ativo</option>
                        <option selected value="0">Inativo</option>
                        <?php
                        }
                        ?>
                        
                    </select>
                </div>
                 </div>
                  <div class="col-md-4">
                 <div class="form-group">
                    <label>Promoção</label>
                    <select name="promocao_produto" class="form-control">
                        <?php
                        if($promocao_produto == 1){
                        ?>
                        <option selected value="1">Sim</option>
                        <option value="0">Não</option>
                        <?php 
                        }elseif($promocao_produto == 0){
                            ?>
                        <option  value="1">Sim</option>
                        <option selected value="0">Não</option>
                        <?php
                        }
                        ?>
                        
                    </select>
                </div>
                 </div>
                   
                  <div class="col-md-4">
                <div class="form-group">
                    <label>Destaque</label>
                    <select name="destaque_produto" class="form-control">
                        <?php
                        if($destaque_produto == 1){
                        ?>
                        <option selected value="1">Sim</option>
                        <option value="0">Não</option>
                        <?php 
                        }elseif($destaque_produto == 0){
                            ?>
                        <option  value="1">Sim</option>
                        <option selected value="0">Não</option>
                        <?php
                        }
                        ?>
                        
                    </select>
                </div>
                </div>
             </div>
         </div>
            
                  
        </div>
        
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                    <label>Descrição do produto</label>
                    
                    <textarea id="produto" required name="texto_produto" class="form-control">
                    <?= set_value('texto_produto') ? : (isset($texto_produto) ? $texto_produto : ''); ?>
                    </textarea>
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

<script>
    $(function(){
	$('.iframe-btn').fancybox({
		  'width'	: 600,
		  'minHeight'	: 600,
		  'type'	: 'iframe',
            heigh: 320,
		  'autoScale'   : true
     });
  });
 </script>

    <script>
    var editor = CKEDITOR.replace( 'produto',{
	filebrowserBrowseUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserUploadUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    //CKFinder.setupCKEditor( editor );
    </script>