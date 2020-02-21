<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

$link = "http://ideasforblogging.com";

$con=mysqli_connect("localhost","musthafa","password");

mysqli_select_db($con,"loginsystem");

if(isset($_REQUEST["submit"]))
{
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"]; 

    $query = mysqli_query($con, "SELECT * FROM logindetails WHERE username = '$username' && password = '$password'");

    $rowcount = mysqli_num_rows($query);
    if($rowcount == true){
        echo "<a href='".$link."'>link</a>";
        header('Location: http://ideasforblogging.com');
    }
    else{
        echo "wrong";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
        <a class="navbar-brand" href="#">PHP Login</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li><li class="nav-item"><a class="nav-link" href="">Contact</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" id="searchbutton" type="submit">Search</button>
    </form>
        </div>
    </nav>

    <div class="container">
                    <form method="POST">
                            <div class="form-group">
                                <h3 class="form-heading">Login to your account</h3>
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" id="username" required="required">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="password" id="pwd" required="required">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" name="submit">Login</button>
                        </form>
            </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
