<?php
if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO users(`user_id`, `names`, `email`, `password`) 
                      VALUES (null,'$username','$email','$password')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-info">Register Here</div>


                <div class="card-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button class="btn btn-info btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>