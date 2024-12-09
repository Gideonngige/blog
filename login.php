<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="login.css" />
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <h2>Login</h2><hr>
            <form action="login.php" method="post">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required  />
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
                <p><a href="">Forgot password?</a></p>
                <input type="submit" class="btn btn-custom" value="Login" />
                <p>Do not have account? <a href="">Register here</a></p>

            </form>

        </div>
    </div>
    
</body>
</html>