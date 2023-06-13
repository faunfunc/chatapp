<?php

    session_start();

    if(!isset($_SESSION['email'])){
        header('location: ../login.php');
    }

    require_once 'dbh.inc.php';


    if(isset($_POST['text-send'])){
        $text = htmlspecialchars($_POST['text']);
        $id = ($_SESSION['id']);

        if(!empty($_POST['text'])){

            // $sender_id = $_SESSION['id']

            $sql = "INSERT INTO messages(message) VALUES(?)";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header('location: ../chat.php?error=stmtfailed');
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $text);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header('location: ../chat.php?success=message-sent');
                exit();
            }
        }
        else {
            header('location: ../chat.php?error=no-message');
        }

        $sql = "SELECT * FROM messages WHERE message AND id = ?,?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../chat.php?error=stmterror');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $text, $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        else {
            header('location: ../chat.php?error=nodatafound');
            exit();
        }
        mysqli_stmt_close($stmt);

    }
    // else {
    //     header('location: ../chat.php?error=invalid-action');
    //     exit();
    // }