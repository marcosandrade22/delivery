<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
       
        <form method="post" action="<?php echo base_url(); ?>adm_artigos/store" />
        
        <div class="row">
          <input type='hidden' name="id_artigo" value="<?= set_value('id_artigo') ? : (isset($id_artigo) ? $id_artigo : ''); ?>">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label>Titulo do Artigo</label>
                    <input required type="text" name="titulo_artigo" value="<?= set_value('titulo_artigo') ? : (isset($titulo_artigo) ? $titulo_artigo : ''); ?>" class="form-control" />
                </div>
                
            <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria_artigo" class="form-control">
                        
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
                    <label>Imagem do artigo</label>
                   <input id="fieldID" type="text"  name="imagem_artigo" class="form-control" value="<?= set_value('imagem_artigo') ? : (isset($imagem_artigo) ? $imagem_artigo : ''); ?>">
                    <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=fieldID" class="iframe-btn" type="button">Escolher Imagem</a>
                </div>
             
             <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                    <label>Status</label>
                    <select name="status_artigo" class="form-control">
                        <?php
                        if($status_artigo == 1){
                        ?>
                        <option selected value="1">Ativo</option>
                        <option value="0">Inativo</option>
                        <?php 
                        }elseif($status_artigo == 0){
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
                    <label>Destaque</label>
                    <select name="destaque_artigo" class="form-control">
                        <?php
                        if($destaque_artigo == 1){
                        ?>
                        <option selected value="1">Sim</option>
                        <option value="0">Não</option>
                        <?php 
                        }elseif($destaque_artigo == 0){
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
                    <label>Texto do artigo</label>
                    
                    <textarea id="artigo" required name="texto_artigo" class="form-control">
                    <?= set_value('texto_artigo') ? : (isset($texto_artigo) ? $texto_artigo : ''); ?>
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

    <script>
    var editor = CKEDITOR.replace( 'artigo',{
	filebrowserBrowseUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserUploadUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/file/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    //CKFinder.setupCKEditor( editor );
    </script>