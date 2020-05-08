<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <?= set_value('nome_site') ? : (isset($nome) ? $nome : ''); ?>
               
            </div>
            <div class="card-body">
     
        <form method="post" action="<?php echo base_url(); ?>adm_loja/store" />
        
      
          
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Nome da Loja</label>
                    <input required type="text" name="nome_site" value="<?= set_value('nome_site') ? : (isset($nome) ? $nome : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                     <div class="col-md-6">
                    <div class="form-group">
                    <label>Email</label>
                    <input required type="email" name="email_site" value="<?= set_value('email_site') ? : (isset($email) ? $email : ''); ?>" class="form-control" />
                    </div>
                    </div>
                    
                 </div>  
        
                 <div class="row">
                     <div class="col-md-6">
                    <div class="form-group">
                        <label>Endereço</label>
                        <input required type="text" name="endereco_site" value="<?= set_value('endereco_site') ? : (isset($endereco) ? $endereco : ''); ?>" class="form-control" />
                        </div>
                    </div>
                     
                     
                     <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Telefone</label>
                        <input required type="text" name="telefone_site" value="<?= set_value('telefone_site') ? : (isset($telefone) ? $telefone : ''); ?>" class="form-control" />
                        </div>
                        </div>
                         
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Frete</label>
                        <input required type="text" name="frete_site" value="<?= set_value('frete_site') ? : (isset($frete) ? $frete : ''); ?>" class="form-control" />
                        </div>
                        </div>
                         
                     </div>
                     </div>
                    
                     
                    
                 </div> 
        
                <div class="row">
                     <div class="col-md-6">
                    <div class="form-group">
                            <label><b>Logomarca</b></label>
                            <input id="fieldID" type="text"  name="logo_site" class="form-control" value="<?= set_value('logo_site') ? : (isset($logo) ? $logo : ''); ?>">
                            <a href="<?php echo base_url(); ?>assets/file/filemanager/dialog.php?field_id=fieldID" class="iframe-btn" type="button">Escolher Imagem</a> 
                        </div>
                         
                     </div>
                    
                    
                    <div class="col-md-6">
                        <div class="row"> 
                            <div class="col-md-6">
                                <label>Facebook</label>
                                <input required type="text" name="facebook_site" value="<?= set_value('facebook_site') ? : (isset($facebook) ? $facebook : ''); ?>" class="form-control" />
                            </div>
                            
                            <div class="col-md-6">
                                <label>Instagram</label>
                                <input required type="text" name="instagram_site" value="<?= set_value('instagram_site') ? : (isset($instagram) ? $instagram : ''); ?>" class="form-control" />
                            </div>
                        </div>  
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <label>Informações do Site</label>

                           <textarea id="artigo" required name="info_site" class="form-control">
                           <?= set_value('info_site') ? : (isset($info) ? $info : ''); ?>
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