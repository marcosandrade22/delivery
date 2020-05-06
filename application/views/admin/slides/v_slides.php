
<script>
$(document).ready( function () {
    $('#usuarios').DataTable();
} );
</script>
<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
        <a href="<?php echo base_url(); ?>adm_slides/novo_slide" class="btn btn-info">
        Novo Slide
        </a><hr>
       
        
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

</section>
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

