<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
     
        <form method="post" action="<?php echo base_url(); ?>adm_paginas/store" />
        
      
          <input type='hidden' name="id_pagina" value="<?= set_value('id_pagina') ? : (isset($id_pagina) ? $id_pagina : ''); ?>">
         
            
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Nome da Página</label>
                    <input required type="text" name="nome_pagina" value="<?= set_value('nome_pagina') ? : (isset($nome_pagina) ? $nome_pagina : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                 </div>   
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <label>Texto da Página</label>

                           <textarea id="artigo" required name="texto_pagina" class="form-control">
                           <?= set_value('texto_pagina') ? : (isset($texto_pagina) ? $texto_pagina : ''); ?>
                           </textarea>
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