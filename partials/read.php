<?php
    include 'connection.php';
    $read_sql="SELECT * FROM `books`;";
    $read_result=mysqli_query($conn,$read_sql);
    if($read_result){
        if(mysqli_num_rows($read_result)>0){
            if($row = mysqli_fetch_assoc($read_result)){

                $filename= $row['book_file_url'];
                header("Content-type: application/pdf");
                header("Content-Length: " . filesize($filename));
                header('Content-Disposition: inline; filename="' . $filename.'"');
                @readfile($filename);

            }
        }
    }
?>
