<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Upload Books</title>
</head>
<body>
   <!-- Nav bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bglavender">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Let's Read</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/categories.html">Action</a></li>
                            <li><a class="dropdown-item" href="/categories.html">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/categories.html">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="feedbackform.php">Feedback</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn animated-btn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
<?php
        $sql="SELECT * FROM `sub_catagory`";
        $result_sub=mysqli_query($conn,$sql);
        $sql_cat="SELECT * FROM `catagories`";
        $result_cat=mysqli_query($conn,$sql_cat);
        // Connecting the table
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $book_name=$_POST['book_name'];
            $author=$_POST['author'];
            $publisher=$_POST['publisher'];
            $pub_date=$_POST['pub_date'];
            $sub_id=$_POST['sub-id'];
            $cat_id=$_POST['cat-id'];
            $ratings=$_POST['ratings'];
            $isbn=$_POST['isbn'];
            $pages=$_POST['pages'];
            // File details
            $cover_target_dir="uploads/cover/";
            $cover_target_file= $cover_target_dir . basename($_FILES["book_cover_file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($cover_target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["book_cover_file"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($cover_target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            
            // Check file size
            if ($_FILES["book_cover_file"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
             {
                echo "Sorry, only JPG, JPEG, PNG files are allowed.";
                $uploadOk = 0;
            }
           // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["book_cover_file"]["tmp_name"], $cover_target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["book_cover_file"]["name"])). " has been uploaded.";
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
            }
            $book_target_dir = "uploads/book/";
            $book_target_file = $book_target_dir . basename($_FILES["book_file"]["name"]);
            move_uploaded_file($_FILES["book_file"]["tmp_name"], $book_target_file);

            $query="INSERT INTO `books`(`book_name`, `author`, `publisher`, `publishing_date`, `sub_id`, `cat_id`, `ratings`, `isbn`, `total_pages`, `book_file_url`,`book_cover_url`)
             VALUES ('$book_name','$author','$publisher','$pub_date','$sub_id','$cat_id','$ratings','$isbn','$pages','$book_target_file','$cover_target_file') ";
            $result=mysqli_query($conn,$query);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry is sucessfully submitted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                
            }
            else{
    
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Your entry is not sucessfully submitted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }

?>
    <div class="container mt-5 shadow-lg feedback-container">
        <div class="row">
            <div class="col-md-3"></div>

                    <h1 class="text-black">Upload Book</h1>  
                    <hr> 
                    <form action="create_book.php" method='post' enctype="multipart/form-data">
                        <div class="mb-3 text-black">
                            <label for="books" class="form-label">Book Name</label>
                            <input type="text" class="form-control" name="book_name" id="books">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" id="author">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control" name="publisher" id="publisher">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="pub_date" class="form-label">Publishing Date</label>
                            <input type="number" class="form-control" min="0" max="3000" name="pub_date" id="pub_date">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="sub-id" class="form-label">Subject</label>
                            <select class="form-select" name="sub-id" id="sub-id">
                                <option selected>-Select</option>
                                <?php while($row1 = mysqli_fetch_array($result_sub)):; ?>
                                <option value="<?php echo $row1[0] ?>"><?php echo $row1[1]; ?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="mb-3 text-black">
                        <label for="cat-id" class="form-label">Category</label>
                            <select class="form-select" name="cat-id" id="cat-id">
                                <option selected>-Select</option>
                                <?php while($row2 = mysqli_fetch_array($result_cat)):; ?>
                                <option value="<?php echo $row2[0] ?>"><?php echo $row2[1]; ?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                        <div class="mb-3 text-black">
                            <label for="ratings" class="form-label">Ratings</label>
                            <input type="number" class="form-control" min="0" max="5" name="ratings" id="ratings">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="number" class="form-control" min='0' max='9999999999999' name="isbn" id="isbn">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="pages" class="form-label">Total Pages</label>
                            <input type="number" class="form-control" min='1' max='5000' name="pages" id="pages">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="book_cover_file" class="form-label">Book cover</label>
                            <input type="file" class="form-control" name="book_cover_file" id="book_cover_file" accept=".jpg, .png, .jpeg">
                        </div>
                        <div class="mb-3 text-black">
                            <label for="book_file" class="form-label">Book file</label>
                            <input type="file" class="form-control" name="book_file" id="book_file" accept=".pdf">
                        </div>
                        <div class="col-auto button">
                            <button type="submit" class='btn btn-primary'>Upload</button>
                        </div>
                    </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>