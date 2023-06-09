<?php

    function emptyInputSignup($fname, $lname, $email, $pwd) {
        $result;

        if(empty($fname) || empty($lname) || empty($email) || empty($pwd)){
            $result = true;
        }
        else {
            $fname = htmlspecialchars($fname);
            $lname = htmlspecialchars($lname);
            $email = htmlspecialchars($email);
            $pwd = htmlspecialchars($pwd);

            $result = false;
            
        }

        return $result;
    }

    function InvalidEmail($email) {
        $result;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    function EmailExists($conn, $email) {
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../index.php?error=stmterror');
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;

        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    
    }

    function InvalidPwdLen($pwd) {
        $result;

        if(!(strlen($pwd) >= 8)){
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    function createUser($conn, $fname, $lname, $email, $pwd) {
        //created a template to be inserted
        $sql = "INSERT INTO users(first_name, last_name, email, pswd) VALUES(?, ?, ?, ?)";
        //create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        // prepare the prepared statement
       if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../index.php?error=stmtfailed');
            exit();
       }
       else {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        //bind parameters to the placeholders
            mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd);
        //run parameters inside the database
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header('location: ../index.php?error=success');
            exit();
       }


    }