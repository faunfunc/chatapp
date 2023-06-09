<?php

    if(isset($_POST['register'])){


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd =  $_POST['pwd'];
        

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($fname, $lname, $email, $pwd) !== false){
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        if(InvalidEmail($email) !== false){
            header('location: ../index.php?error=invalidemail');
            exit();
        }

        if(EmailExists($conn, $email) !== false){
            header('location: ../index.php?error=emailexists');
            exit();
        }

        if(InvalidPwdLen($pwd) !== false){
            header('location: ../index.php?error=Invalidpasswordlength');
            exit();
        }

        createUser($conn, $fname, $lname, $email, $pwd);




    }

    else {
        header('location: ../index.php');
        exit();
    }