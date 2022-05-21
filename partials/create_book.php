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
<?php
        // Connect to the database
        $servername= "localhost";
        $username= "root";
        $password= "";
        $database= "library";

        //create a connection
        $conn = mysqli_connect($servername, $username, $password, $database );
        if(!$conn){
            die("Sorry we fail to connect.". mysqli_connect_error());
        }
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
            $query="INSERT INTO `books`(`book_name`, `author`, `publisher`, `publishing_date`, `sub_id`, `cat_id`, `ratings`, `isbn`, `total_pages`)
             VALUES ('$book_name','$author','$publisher','$pub_date','$sub_id','$cat_id','$ratings','$isbn','$pages') ";
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
    <h1>Upload Book</h1>
    <form action="create_book.php" method='post'>
        <div>
            <label for="books">Book Name</label>
            <input type="text" name="book_name" id="books">
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" id="publisher">
        </div>
        <div>
            <label for="pub_date">Publishing Date</label>
            <input type="number" min="0" max="3000" name="pub_date" id="pub_date">
        </div>
        <div>
            <label for="sub-id">Subject</label>
            <select name="sub-id" id="sub-id">
                <?php while($row1 = mysqli_fetch_array($result_sub)):; ?>
                <option value="<?php echo $row1[0] ?>"><?php echo $row1[1]; ?></option>
                <?php endwhile;?>
            </select>
        </div>
        <div>
        <label for="cat-id">Category</label>
            <select name="cat-id" id="cat-id">
                <?php while($row2 = mysqli_fetch_array($result_cat)):; ?>
                <option value="<?php echo $row2[0] ?>"><?php echo $row2[1]; ?></option>
                <?php endwhile;?>
            </select>
        </div>
        <div>
            <label for="ratings">Ratings</label>
            <input type="number" min="0" max="5" name="ratings" id="ratings">
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="number" min='0' max='9999999999999' name="isbn" id="isbn">
        </div>
        <div>
            <label for="pages">Total Pages</label>
            <input type="number" min='1' max='5000' name="pages" id="pages">
        </div>
        <div>
            <button type="submit" >Upload</button>
        </div>
    </form>
</body>
</html>