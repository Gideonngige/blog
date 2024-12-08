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
            <form>
                <table width="100%">
                    <tr>
                    <td>
                        <label>Firstname</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname" required>
                    </td>
                    <td>
                        <label>Lastname</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" required>
                    </td>
                    </tr>
                </table>
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="e.g johndoe@gmail.com" required>
                <label>Select blog category</label>
                <select class="form-control" name="blog-type">
                    <option value="">Select blog category</option>
                    <option value="tech">Technology</option>
                    <option value="politics">Politics</option>
                    <option value="sports">Sports</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="health">Health</option>
                    <option value="science">Science</option>
                    <option value="finance">Finance</option>
                    <option value="other">Other</option>
                </select><br>
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Your title goes here..." required>
                <label>Upload Image</label>
                <input type="button" name="upload" class="upload-btn" value="Upload" required>
                <label>Blog</label>
                <textarea name="blog" class="form-control" placeholder="Enter your blog post..." required></textarea><br>
                <input type="submit" name="submit" class="submit-btn" value="Submit post">
            </form>
            </div>

        </div>
    </div>
    
</body>
</html>