<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/style.css">
    <title>Welcome to Online Library</title>
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partials/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="partials/about.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partials/feedback.php">Feedback</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn animated-btn" type="submit">Search</button>
                </form>
                <?php
                    session_start();

                    // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                    // {
                    //     // header("location: login.php");
                    // }
                    // else{
                        
                    // }
                    ?>
                    <div class="mx-2">
                        <!-- <script scr="js/signup.js"></script> -->
                        <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true):?>
                         <button class="btn btn-primary"  data-bs-target="#login"
                            onclick="window.location.href='http://localhost/library/library/partials/loginpage.php'">
                            Login</button>
                         <button class="btn btn-primary"  data-bs-target="#signup" 
                            onclick="window.location.href='http://localhost/library/library/partials/signup.php'" >  
                            SignUp</button>
                        
                        <?php else: ?>
                            <div class="navbar-collapse collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"> 
                                        <img src="assests/icons8-user-50.png"> 
                                        <?php echo "Welcome ". $_SESSION['email']?></a>
                                </li>
                            </ul>
                            <button class="btn btn-primary"  data-bs-target="#login"
                             onclick="window.location.href='http://localhost/library/library/partials/logout.php'">
                             Logout</button>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </nav>
    <!-- Our code starts here -->
   

        <!-- Carousel starts here -->
    
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assests/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block welcome-note">
                <h3><strong>Welcome to <em>Let's Read!</em></strong></h3>
                <p>Read,Learn,Inspire</p>
                <button class="btn btn-danger"><a href="#" >Books</a></button>
                <button class="btn btn-primary"><a href="#" >News</a></button>
                
            </div>
          </div>
          <div class="carousel-item">
            <img src="assests/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block welcome-note">
                <h3><strong>Welcome to <em>Let's Read!</em></strong></h3>
                <p>Read,Learn,Inspire</p>
                <button class="btn btn-danger">Books</button>
                <button class="btn btn-primary">News</button>
                
            </div>
          </div>
          <div class="carousel-item">
            <img src="assests/2.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block welcome-note">
                <h3><strong>Welcome to <em>Let's Read!</em></strong></h3>
                <p>Read,Learn,Inspire</p>
                <button class="btn btn-danger">Books</button>
                    <button class="btn btn-primary">News</button>
                   
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Cards starts here -->
      <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">#book1</strong>
                        <h3 class="mb-0">Book 1</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Read</a>
                        <a href="#" class="stretched-link">Download</a>
                        
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/ncert_phyII.jpg" alt="">

                    </div>
                </div>

            </div>
            
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">#book2</strong>
                        <h3 class="mb-0">Book 2</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/The Jungle Book.jpg" alt="">

                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">#book3</strong>
                        <h3 class="mb-0">book 3</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/python.jpg" alt="">

                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative card-color">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">#book4</strong>
                        <h3 class="mb-0">book 4</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">add book here</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/merchant_of_venice.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2022 Let's Read, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>