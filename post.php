<?php 
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="post.css" >
    <title>post</title>
</head>
<body>
    <div class="container">
        <hr>
        <h1>Create Post</h1>
        <hr>
        <div class="card">
            <h4><u>Instructions</u></h4>
            <ul>
                <li>Use simple and correct english</li>
                <li>Information should be valid</li>
                <li>No use of vagulity language</li>
            </ul>
        </div><br>

        <div class="card">
            <div class="container">
            <form method="POST" action="post.php" enctype="multipart/form-data"><br>
                <input type="text" name="username" class="form-control" placeholder="Username" required /><br>
                <label>Select blog category</label>
                <select class="form-control" name="blog_type"> 
                <option value="">--Select blog type--</option> 
                <?php 
                $select_blog_type = "SELECT name FROM categories"; 
                $result = mysqli_query($conn, $select_blog_type); 
                if($result->num_rows > 0){ 
                    while($row = $result->fetch_assoc()){ 
                        echo '<option value="' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '</option>'; 
                    } 
                } 
                else { 
                    echo "0 results"; 
                }
                
                ?>
                </select><br>
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Your title goes here..." required>
                <label>Upload Image</label>
                <input type="file" name="upload" class="form-control upload-btn" value="Upload" required>
                <label>Blog</label>
                <textarea name="blog" class="form-control" placeholder="Enter your blog post..." required></textarea><br>
                <input type="submit" name="submit" class="submit-btn" value="Submit post">
            </form>
            <?php
            
            if(!$conn){
                //die("Connection failed" . mysqli_connect_error());
            }
            else{
                //echo "Connection established";
            }
            //insertting data to blog table
            if(isset($_POST["username"]) && isset($_POST["blog_type"]) && isset($_POST["title"]) && isset($_FILES["upload"]) && isset($_POST["blog"])){
                $user_id = 2;
                $title = $_POST["title"];
                $blog = $_POST["blog"];

                $targetDir = "assets/images";
                $targetFile = $targetDir . basename($_FILES["upload"]["name"]);
                $uploadOk = 1;

                $sql = "SELECT content FROM posts WHERE content = '$blog'";
                $result = mysqli_query($conn, $sql);
                if($result->num_rows > 0){
                    '<div class="alert alert-danger" role="alert">
                                        Blog already exists
                                        </div>';
                    //echo "Blog already exists";
                }
                else{
                    $check = getimagesize($_FILES["upload"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".<br>";
                        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
                            echo '<div class="alert alert-danger" role="alert">
                                        Sorry, only JPG, JPEG, PNG, & GIF files are allowed.
                                        </div>';
                            //echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.<br>";
                            $uploadOk = 0;
                        }
                        else{
                            if (file_exists($targetFile)) {
                                echo '<div class="alert alert-danger" role="alert">
                                        Sorry, file already exists.
                                        </div>';
                                //echo "Sorry, file already exists.<br>";
                                $uploadOk = 0;
                            }
                            else{
                                if (move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFile)) {
                                    $sql2 = "INSERT INTO posts(user_id, title, content, category_id, image_url) VALUES('$user_id', '$title','$blog',2, '$targetFile')";
                                    if(mysqli_query($conn, $sql2)){
                                        echo '<div class="alert alert-success" role="alert">
                                        Post submitted successfully
                                        </div>';
                                       //echo "Post submitted successfully";
                                    }
                    
                                } else {
                                    echo '<div class="alert alert-danger" role="alert">
                                    Sorry, there was an error uploading your file.
                                    </div>';
                                    //echo "Sorry, there was an error uploading your file.<br>";
                                }
                            }
                        }
                    } 
                    else {
                        echo '<div class="alert alert-danger" role="alert">
                              File is not an image.
                               </div>';
                        //echo "File is not an image.<br>";
                        $uploadOk = 0;
                    }
                    
                }
            }
            else{
                echo "not set";
            }
            ?>
            </div>

        </div>
    </div>
    
</body>
</html>