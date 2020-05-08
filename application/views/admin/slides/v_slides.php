
<script>
$(document).ready( function () {
    $('#usuarios').DataTable();
} );
</script>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pagina; ?></h1>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo base_url(); ?>adm_slides/novo_slide" class="btn btn-info">
                Novo Slide
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
        <table id="usuarios" class="table table-bordered ">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>ordem</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slides as $row): ?>
                <tr>
                    <td><?php echo $row->id_slide; ?></td>
                    
                    <td><?php echo $row->nome_slide; ?></td>
                     <td><?php echo $row->ordem_slide; ?></td>
                    <td>
                       <a class="btn btn-success" href="adm_slides/edit/<?php echo $row->id_slide; ?>" >Editar</a>
                        <a href="javascript:void(0)" onclick="delete_slide(<?php echo $row->id_slide; ?>)" class="btn btn-danger" >Apagar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
     </div>
            </div>
        </div>
</div>
<script>
    function reload_table()
{
    location.reload();
}

    
  function delete_slide(id)
{
    if(confirm('Tem certeza que deseja excluir este slide?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('adm_slides/ajax_delete/')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
               // $('#modal_form').modal('hide');
               alert('Apagado com sucesso');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Erro ao deletar');
            }
        });
 
    }
}  
</script><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

