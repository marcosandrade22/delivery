<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <?= set_value('nome_pagina') ? : (isset($nome_pagina) ? $nome_pagina : ''); ?>
               
            </div>
            <div class="card-body">
     
        <form method="post" action="<?php echo base_url(); ?>adm_paginas/store" />
        
      
          <input type='hidden' name="id_pagina" value="<?= set_value('id_pagina') ? : (isset($id_pagina) ? $id_pagina : ''); ?>">
         
            
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Nome da Página</label>
                    <input required type="text" name="nome_pagina" value="<?= set_value('nome_pagina') ? : (isset($nome_pagina) ? $nome_pagina : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group">
                    <label><b>Background da Página</b></label>
                    <input id="BgID" type="text"  name="bg_pagina" class="form-control" value="<?= set_value('bg_pagina') ? : (isset($bg_pagina) ? $bg_pagina : ''); ?>">
                    <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=BgID" class="iframe-btn" type="button">Escolher Imagem</a> <br>(imagem que será exibida na página como imagem de fundo).
                    </div>
                    
                    </div>
                    
                 </div> 
                 <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                    <label>Exibir no Menu superior</label>
                    <select name="menu_top_pagina" class="form-control">
                        <?php
                        if($menu_top_pagina == 1){
                        ?>
                        <option selected value="1">Sim</option>
                        <option value="0">Não</option>
                        <?php 
                        }elseif($menu_top_pagina == 0){
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