<?php
require './essential/dbconnect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <title>DBMS Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <nav>
            <div class="div-class">
                <p><input type="text" placeholder="Search" width="30px"></p>
            </div>

        <div class="main">
            <div class="logo">
                <img src="./7.png" alt="" >
            </div>
            <ul>
                <li><a href="#" class="button1" id="button1">LOGIN</a></li>
                <li><a href="./essential/logout.php" class="button2">LOGOUT</a></li>
                <li><a href="#" >SIGNUP</a></li>
            </ul>
        </div>
        <!-- <div class="textyy">
            <a href="#" class="button" id="button">LOGIN</a>
        </div> -->

        
        <div>
        <?php
                session_start();
                if(isset($_SESSION['loggedin'])){
                    if($_SESSION['loggedin']=="true"){
                    echo "<br>yes";
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Hi '. $_SESSION['usn'] .' </strong>  You logged in successfully
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    }
                    else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Incorrect credentials </strong>  You Shouldnt be here!!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    }
                }



        ?>
        </div>
            </nav>
    </header>




    <div class="popup">
        <div class="popup-content">
            <form method="post" action="./essential/login.php">
            <img src="./cancel.jpeg" alt="Close" class="close">
            <input type="text" placeholder="Username" name="usn">
            <input type="password" placeholder="Password" name="pass">
            <input type="submit" class="button" value="Log in">
            </form>
        </div>
    </div>








    <script>
        document.getElementById("button1").addEventListener("click",function(){
            document.querySelector(".popup").style.display="flex";
        })
        
        document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display="none";
        })
    </script>
</body>
</html>