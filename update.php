<?php
require "security.php";
    //get the id
    //retrieve the movie
    //display details
    //update the movie
if (isset($_GET["id"])){
    $id = $_GET["id"];
    require "DB.php";
    $sql = "select * from movies where movie_id = $id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["price"])){
    $price = $_REQUEST["price"];
    $quantity = $_REQUEST["quantity"];
    $id = $_REQUEST["id"];
    require 'DB.php';
    $sql = "update movies set price=$price, quantity=quantity+$quantity where movie_id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:show.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Movie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php
require "navbar.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">


            <div class="card">
                <div class="card-header">
                    Updating Movie <?php echo $title; ?>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    <img src="<?php echo $cover; ?>" width="200" alt="">
                    </div>
                    <?php
                    if (isset($message)){
                        echo "<p class='text-danger'>$message</p>";
                    }
                    ?>

                    <form action="update.php" method="post">


                        <input type="hidden" name="id" value="<?=$movie_id?>">

                        <div class="form-group">
                            <label for="title">Quantity</label>
                            <input min="1" type="number" class="form-control" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Price</label>
                            <input min="0" type="number" step="0.50" class="form-control" name="price" required>
                        </div>


                        <button class="btn btn-info btn-block">Save Movie</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>