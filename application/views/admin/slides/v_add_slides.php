<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
     
        <form method="post" action="<?php echo base_url(); ?>adm_slides/store" />
        
      
          <input type='hidden' name="id_slide" value="<?= set_value('id_slide') ? : (isset($id_slide) ? $id_slide : ''); ?>">
         
            
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Nome do Slide</label>
                    <input required type="text" name="nome_slide" value="<?= set_value('nome_slide') ? : (isset($nome_slide) ? $nome_slide : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Ordem</label>
                    <input required type="text" name="ordem_slide" value="<?= set_value('ordem_slide') ? : (isset($ordem_slide) ? $ordem_slide : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Link do Slide</label>
                    <input required type="text" name="link_slide" value="<?= set_value('link_slide') ? : (isset($link_slide) ? $link_slide : ''); ?>" class="form-control" />
                    </div>
                    </div>
                 
                 </div>   
            
                    <div class="row">
                            <div class="col-md-4"> 
                            <div class="form-group">
                                <label>Imagem do Slide</label>
                                <input id="fieldID" type="text"  name="imagem_slide" class="form-control" value="<?= set_value('imagem_slide') ? : (isset($imagem_slide) ? $imagem_slide : ''); ?>">
                                <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=fieldID" class="iframe-btn" type="button">Escolher Imagem</a>
                            </div>
                            </div>


                            <div class="col-md-4">
                            <div class="form-group">
                               <label>Texto 1</label>
                                    <input required type="text" name="texto_1" value="<?= set_value('texto_1') ? : (isset($texto_1) ? $texto_1 : ''); ?>" class="form-control" />
                               </div>
                            </div>
                   
                            <div class="col-md-4">
                          <div class="form-group">
                              <label>Texto 2</label>
                                   <input required type="text" name="texto_2" value="<?= set_value('texto_2') ? : (isset($texto_2) ? $texto_2 : ''); ?>" class="form-control" />

                          </div>
                          </div>
                    </div>
         
            
            <div class="form-group">
            <input type="submit" value="SALVAR" class="btn btn-info" />
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