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
