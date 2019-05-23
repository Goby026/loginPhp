<?php
require ('header.php');
?>
<main>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Registro</h3>
                <?php
                if (isset($_GET['error'])){
                    if ($_GET['error'] === 'emptyfields'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Debe indicar todos los campos!
                        </div>
                        <?php
                    }else if($_GET['error'] === 'invalidmailuid'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Email y usuario incorrecto!
                        </div>
                        <?php
                    }else if($_GET['error'] === 'invalidmail'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Correo es incorrecto!
                        </div>
                        <?php
                    }else if($_GET['error'] === 'invaliduid'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Usuario incorrecto!
                        </div>
                        <?php
                    }else if($_GET['error'] === 'passwordcheck'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Las contraseñas no coinciden!
                        </div>
                        <?php
                    }else if($_GET['error'] === 'usertaken'){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            El usuario indicado ya existe!
                        </div>
                        <?php
                    }
                }else if(isset($_GET['signup'])) {
                    if($_GET['signup'] === 'success') {
                        ?>
                        <div class="alert alert-success" role="alert">
                            Usuario registrado exitosamente!
                        </div>
                        <?php
                    }
                }
                ?>
                <form action="includes/signup.inc.php" method="post">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" type="text" class="form-control" id="username" placeholder="Nombre de usuario">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Correo electrónico">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="repeatPassword">Repeat Password</label>
                        <input name="re-password" type="password" class="form-control" id="repeatPassword" placeholder="Repetir Password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="signup-submit">Registrar</button>
                </form>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

</main>

<?php
require ('footer.php');
?>
