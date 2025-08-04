<?php 
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if($email == 'admin@example.com' && $pass == 'admin@sms')
        {
                session_start();
                $_SESSION['login']=true;
                header('location:../dashboard.php');
                exit();
        }
        else{
            echo 'Invalid credential';
        }

    }
