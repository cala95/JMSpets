<?php ob_start();?>
<?php session_start();?>


<?php 


        $_SESSION['username'] = null;
        $_SESSION['password'] = null;
        $_SESSION['firstname'] = null;
        $_SESSION['lastname'] = null;
        $_SESSION['role'] = null;

        if(isset($_SESSION['phone']) && isset($_SESSION['email']))
        {
                $_SESSION['phone'] = null;
                $_SESSION['email'] = null;
        }


        header("Location: index.php");




?>