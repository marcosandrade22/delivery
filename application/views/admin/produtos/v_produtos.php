 <script >
$(document).ready(function() {
    $('#artigos').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        stateSave: true,
        "ajax": {
            "url": "<?php echo site_url('adm_produtos/ajax_list')?>",
            "type": "POST"
        },
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sFirst": "Início",
                "sPrevious": "Anterior",
                "sNext": "Próximo",
                "sLast": "Último"
            }
 } 
  });
} );
</script>
<section class="pagina">
<div class="row">
    <div class="container">
        <div class="title-pagina">
            <?php echo $pagina; ?>
        </div>
        <hr>
        <a href="<?php echo base_url(); ?>adm_produtos/novo_produto" class="btn btn-info">
        Novo Produto
        </a><hr>
  
        
        <table id="artigos" class="table table-bordered ">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Titulo</td>
                    <td>Categorias</td>
                     <td>Preço</td>
                    <td>Promoção</td>
                    <td>Destaque</td>
                    <td>Status</td>
                    <td>Ações</td>
                    
                </tr>
            </thead>
            <tbody>
                
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
            url : "<?php echo site_url('adm_produtos/ajax_delete/')?>/"+id,
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