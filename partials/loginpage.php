<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>
    <!-- Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bglavender">
        <div class="container-fluid">
            <a class="navbar-brand page-name" href="index.php">Let's Read</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partials/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropdown-toggle" href="/categories.php" data-bs-toggle="dropdown"
                             aria-expanded="false">Educational</a>
                          
                            </li>
                            <li><a class="dropdown-item" href="/categories.php">Story</a></li>
                            <li><a class="dropdown-item" href="/categories.php">Novels</a></li>
                            <li><a class="dropdown-item" href="/categories.php">News</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partials/feedback.php">Feedback</a>
                    </li>7
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn animated-btn" type="submit">Search</button>
                </form>
                <div class="mx-2">
                    <script scr="js/signup.js"></script>
                    <button class="btn btn-primary"  data-bs-target="#login">Login</button>
                    <button class="btn btn-primary"  data-bs-target="#signup" 
                    onclick="window.location.href='http://localhost/library/library/partials/signup.php'" >
                    SignUp</button>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- php code -->
    <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email= $_POST['email'];
        $password   = $_POST['password'];
        $query      = "SELECT * FROM `user` WHERE email_id = '$email';";
        $resultSet  = mysqli_query($conn, $query); //Syntax error: mysqli_query(connection,query);
        if(mysqli_num_rows($resultSet) > 0){
            $row    = mysqli_fetch_assoc($resultSet);
            if($row['password'] == $password){ // if you are using encryption like md5 or anything else then you have to add in this line accordingly
                echo "Good, Logged In!";
            }else{
                echo "Oh No, password not correct!";
            }
        }else{
            echo "Please enter correct email!";
        }
    }
    ?>
    <!-- main content -->
    <div class="container mt-5 pt-5 ">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card shadow-lg">
                    <div class="card-body card-color">
                        <form action="loginpage.php" method="post" class="row g-3">
                            <h4>Login</h4>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe"> Remember me</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary float-end" id="login">Login</button>
                            </div>
                        </form>
                        <hr class="mt-4">
                        <div class="col-12">
                            <p class="text-center mb-0">Have not account yet? <a href="/signup.php">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>