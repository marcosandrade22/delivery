<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>
          <div style="margin-bottom: 20px">
               <a href="<?php echo base_url(); ?>adm_loja/edit" class="btn btn-info">
                 Editar Configuração
                </a>
          </div>
            
          <div class="row">
                <div class="col-md-4">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informações da Loja </h6>
                </div>
                <div class="card-body">
                     <small>Nome da Loja</small>
                        <h3><?php echo $config->row()->nome_site; ?></h3>
                        
                        <small>Telefone:</small>
                        <b><?php echo $config->row()->telefone_site; ?></b><br>
                        <small>Email:</small>
                        <b><?php echo $config->row()->email_site; ?></b>
                        <small>Informações gerais:</small>
                        <b><?php echo $config->row()->info_site; ?></b><br>
                </div>
                </div>
                </div>
              
              
                <div class="col-md-4">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Entrega</h6>
                </div>
                <div class="card-body">
                    <small>Frete</small>
                    <h3><?php echo $config->row()->frete_site; ?></h3>
                </div>
                </div>
                </div>
            
            
            
        
            </div>