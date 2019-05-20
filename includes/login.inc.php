<?php

if ( isset($_POST['login-submit']) ){

    require "./dbh.inc.php";//conexion

    $username = $_POST['username'];
    $password = $_POST['password'];

    if( empty($username) || empty($password) ){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt, $sql) ){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else{

            mysqli_stmt_bind_param($stmt, "ss", $username, $username);//string=s, Integer=i, Blob=b, Double=d
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

//                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            if ( $row = mysqli_fetch_assoc($result) ){

                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck  == false){
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }else if ($pwdCheck  == true){

                    session_start();

                    $_SESSION['userId'] = $row['iduser'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: ../index.php?success=success");
                    exit();

                }else{
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }


            }else{
                header("Location: ../index.php?error=nouser");
                exit();
            }

            header("Location: ../index.php?success=success");
            exit();

        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}else{
    header("Location: ../index.php");
    exit();
}
