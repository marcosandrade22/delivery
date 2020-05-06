<section class="artigo">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="title-artigo">
                        Contato
                </div>
                <form method="post" action="<?php echo base_url(); ?>sendmail" >
                    <div class="form-group">
                        <label>Nome</label>
                        <input required type="text" name="nome" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label>email</label>
                        <input required type="email" name="email" class="form-control" />
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Mensagem</label>
                        <textarea class="form-control" name="mensagem" >
                            
                        </textarea>
                    </div>
                    
                    <input type="submit" value="Enviar" class="btn btn-info" />
                
                
                </form>

            </div>
            
            <div class="col-md-4">
                <div class="box2">
                    <div class="title-box">
                    <h2>Nossos Contatos</h2>
                    </div>
                    <div class="content-box">
                        <p>
                        Entre em contato conosco através do formulário ao lado ou através de nossos canais de contato.
                        </p>
                        <ul>
                            <li>Telefone : (21) 0000-0000</li>
                            <li>Email: teste@teste.com</li>
                           
                        </ul>
                        <hr>
                        <p>
                            <b>Endereço</b><br>
                            Rua tatatatalls, Nº 000<br>
                            Bairro : tal <br>
                            Rio de Janeiro - RJ
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>