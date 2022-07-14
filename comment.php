<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet/style.css">


    <!-- added -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- added -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Welcome to Online Library</title>
</head>

<body>
    <!-- Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bglavender">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php"> Let's Read</a>
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
                        <a class="nav-link" href="partials/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropdown-toggle" href="/categories.php"
                                    data-bs-toggle="dropdown" aria-expanded="false">Educational</a>

                            </li>
                            <li><a class="dropdown-item" href="/categories.php">Story</a></li>
                            <li><a class="dropdown-item" href="/categories.php">Novels</a></li>
                            <li><a class="dropdown-item" href="/categories.php">News</a></li>
                            <li><a class="dropdown-item" href="/categories.php">Journal & reasearch papers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partials/feedbackform.php">Feedback</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" method="get" action="search.php">
                    <input class="form-control me-2" type="search" placeholder="Search for books" aria-label="Search">
                    <button class="btn animated-btn" type="button">Search</button>
                    
                </form> -->
                <div class="mx-2">
                    <!-- <script scr="js/signup.js"></script> -->
                    <button class="btn btn-primary" data-bs-target="#login"
                        onclick="window.location.href='http:/Library_project/partials/login.php'">Login</button>
                    <button class="btn btn-primary" data-bs-target="#signup"
                        onclick="window.location.href='http:/Library_project/partials/signup.php'">SignUp</button>

                </div>
            </div>
        </div>
    </nav>
    <!-- Our code starts here -->


    <!-- Carousel starts here -->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Let's Read!</h3>
                    <button class="btn btn-danger">Books</button>
                    <button class="btn btn-success"
                        onclick="window.location.href='http:/Library_project/news/news.html'">News</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Let's Read!</h3>

                    <button class="btn btn-danger">Books</button>
                    <button class="btn btn-success"
                        onclick="window.location.href='http:/Library_project/news/news.html'">News</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Let's Read!</h3>

                    <button class="btn btn-danger">Books</button>
                    <button class="btn btn-success"
                        onclick="window.location.href='http:/Library_project/news/news.html'">News</button>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
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
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/The Jungle Book.jpg"
                            alt="">

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
                        <img class="bd-placeholder-img" width="200" height="250" src="assets/merchant_of_venice.jpg"
                            alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonials -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="sec-heading text-center">
                        <h6>" Client's Says "</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients-carousel owl-carousel">
                    <div class="single-box">
                        <div class="img-area"><img alt="" class="img-fluid"
                                src="https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="content">
                            <h4>Jason Doe</h4>
                            <h7>Researcher,University of California</h7>

                            <p>"I have found this library to be very useful.Thankyou!"</p>
                        </div>
                    </div>
                    <div class="single-box">
                        <div class="img-area"><img alt="" class="img-fluid"
                                src="https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="content">
                            <h4>Dave Wood</h4>
                            <h6>Student,Stanford University</h6>
                            <p>"This library has been quite useful for me.I found a wide range of contents here."</p>
                            <section class="rating-star">
                                 <div class="icons">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-o"></i>

                                    </div>
                            </section> 
                        </div>
                    </div>
                    <div class="single-box">
                        <div class="img-area"><img alt="" class="img-fluid"
                                src="https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="content">
                            <h4>Matt Demon</h4>
                            <h6>Teacher,Cambridge University</h6>
                            <p>"I found the ebooks i was searching for and would recommend to my students as well."</p>
                             <section class="rating-star">
                                 <div class="icons">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    </div>
                            </section> 
                        </div>
                    </div>
                    <div class="single-box">
                        <div class="img-area"><img alt="" class="img-fluid"
                                src="https://images.pexels.com/photos/1270076/pexels-photo-1270076.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="content">
                            <!-- <span class="rating-star"><i class="icofont-star"></i><i class="icofont-star"></i><i
                                    class="icofont-star"></i><i class="icofont-star"></i><i
                                    class="icofont-star"></i></span> -->
                                <h4>jimmy kimmel</h4>
                                <h6>Professor,Massachusets Institute of Technology</h6>
                                <p>"Good resources!"</p>
                                <section class="rating-star">
                                 <div class="icons">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                            </section> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
    <script>
    $('.clients-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 450,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2
            },
            1200: {
                items: 2
            },
            1920: {
                items: 2
            }
        }
    });
    </script>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2022–2023 Let's Read, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <section class="foot">
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>

</html>