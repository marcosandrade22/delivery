<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
<body class="body-login">
<div class="row container-login">
<div class="container ">
    <div class="row ">
        <div class="col-md-6 row-login centered">

            <div class="avatar-login">
                <img src="<?php base_url(); ?>assets/img/user.png" class="img-fluid " />
            </div>
            <div class="title-login">
                <h5 class="white">Acesso - <?php echo $nome_site; ?></h5>
            </div>


            <form action="<?php echo base_url(); ?>login/logar" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="ACESSAR" class="btn btn-info btn-block"/>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
