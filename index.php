<?php
require ('header.php');
?>
<main>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php
                if ( isset($_SESSION['userId']) ){
                    ?>

                    <p>Login</p>

                    <?php
                }else{

                    ?>

                    <p>Log - out</p>

                    <?php

                }
                ?>

            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

</main>

<?php
require ('footer.php');
?>
