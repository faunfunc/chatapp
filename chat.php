<?php
    // session_start();
    include('includes/dbh.inc.php');
    include('includes/send.inc.php');

    // if(session_unset()){
    //     header('location: index.php');
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Convo</title>

    <style>
        .user-card-container {
            height: 400px;
            overflow: auto;
            scrollbar-width: thin;
        }
        .chat-card-container {
            height: 310px;
            overflow: auto;
            scrollbar-width: thin;
        }
    </style>

</head>
<body>

    <div class="container d-flex justify-content-center mt-5" style="min-height: 600px;">
        <div class="col-md-8">
            <div class="card shadow border-0 h-100">
                <div class="card-body signup-body">
                    <div class="row">
                        <div class="card-mt-4 p-3 shadow d-flex justify-content-between align-items-center">
                           <div class="pfp-and-status">
                           <img src="./assets/images/avatars/avatar1.jpg" style="width: 40px;" class="rounded-pill pfp" alt="pfp">
                                <i class="bi bi-dot"></i>
                           </div>
                           <?php
                                if(isset($_SESSION['email'])){
                                    $email = $_SESSION['email'];
                                    echo "<p> $email </p>";
                                }
                            ?>
                            <div class="search-bar w-40">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control border-0" name="username" placeholder="search users ">
                                    <button type="button" class="btn btn-search">Search</button>
                                </div>
                            </div>
                        <div class="btn btn-primary"><a href="./includes/logout.inc.php" class="nav-link w-10">log out</a></div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="chat-title d-flex justify-content-between">
                            <h2>users</h2>
                            <h2>chats</h2>
                        </div>
                        <!-- users -->
                        <div class="col-md-6">
                            <div class="card shadow mt-3 mb-2 user-card-container p-2">
                                <div class="card users-card shadow mb-1">
                                    <div class="pfp-and-status p-2">
                                        <img src="./assets/images/avatars/avatar1.jpg" style="width: 40px;" class="rounded-pill pfp" alt="pfp">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- chats -->
                        <div class="col-md-6">
                            <div class="card shadow-sm mt-3 p-1 chat-card-container">
                                <div class="card chat-box ms-auto text-start w-50 mt-1 mb-1 p-1">
                                    <!-- <p>hello</p> -->
                                    <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<p>". $row['message'] ."</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer shadow">
                                <form action="includes/send.inc.php" method="post" class="d-flex justify-content-between">
                                    <textarea name="text" rows="2" class="form-control w-75"></textarea>
                                    <button class="btn border-0" name="text-send"><i class="bi bi-send-fill"></i></button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>