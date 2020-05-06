
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
        <a href="<?php echo base_url(); ?>adm_usuarios/novo_usuario" class="btn btn-info">
        Novo Usuário
        </a><hr>
        usuarios cadastrados <?php echo $usuarios_num; ?>
        
        <table id="usuarios" class="table table-bordered ">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Status</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $row): ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    
                    <td><?php echo $row->nome; ?></td>
                    
                    <td><?php echo $row->email_usuario; ?></td>
                    
                    <td><?php 
                    if($row->status ==1 ){
                        echo "Ativo";
                    }else{
                    echo "Inativo";
                    }
                    ?></td>
                    
                    
                    <td>
                        <a class="btn btn-info" href="adm_usuarios/edit_senha/<?php echo $row->id; ?>" >Senha</a>
                        
                        <a class="btn btn-success" href="adm_usuarios/edit/<?php echo $row->id; ?>" >Editar</a>
                        <a href="javascript:void(0)" onclick="delete_usuario(<?php echo $row->id; ?>)" class="btn btn-danger" >Apagar</a>
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

    
  function delete_usuario(id)
{
    if(confirm('Tem certeza que deseja excluir este usuario?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('adm_usuarios/ajax_delete/')?>/"+id,
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
</script>