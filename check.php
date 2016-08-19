 <?php
if (isset($_POST['submitcontact'])) {
    $email = $_POST['full_name'];
    $pass = $_POST['pass'];
    // $toAdmin=true;
    session_start();

    if (!empty($email) && !empty($pass)) { 
        if ($email=="admin@code.edu.az" && $pass=="123456") {
            $_SESSION['giris']='true';
          header('Location:admin.php');

        }else{
            $_SESSION['msj'] = "The Email and Password does not match";
            header('Location:index.php');
        }

    }else{
        $_SESSION['msj'] = 'Do not keep the input blank!';
        header('Location:index.php');
    }
}else{
    header('Location:index.php');
}

?>

<!--
 submitcontact-a click olunaraq gelibse if {true} olur ve icine daxil olur. eks halda link ile daxil olmaq isteyirlerse onda else ishe dushur ve index-e gerdir.
 -->