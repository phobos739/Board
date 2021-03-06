<?php 

if (isset($_POST["submit"])) {

    $Name = $_POST["name"];

    $Message = $_POST["message"];
    
    if (file_exists("./upload/" . $_FILES["image"]["name"])) {

        echo $_FILES["image"]["name"] . " already exists. ";

    } else {

        move_uploaded_file(

            $_FILES["image"]["tmp_name"],

            "./upload/" . $_FILES["image"]["name"]

        );        

    }

    $Picture = "./upload/" . $_FILES["image"]["name"];

    $link = mysqli_connect("localhost", "root", "root", "board");

    mysqli_query($link, "set names utf-8");    
    
    $sql = "INSERT INTO `list` (`Name`, `Message`, `Picture`) VALUES ('$Name', '$Message', '$Picture')";
    
    mysqli_query($link, $sql);    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- 樣式參考https://bootstrapformbuilder.com/ -->
    <form enctype="multipart/form-data" method="post" action="">
    <div class="container">
        <h2>Borad</h2><br>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="name">Name：</label> 
            <div class="col-10">
            <input id="name" name="name" type="text" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-2 col-form-label">Message：</label> 
            <div class="col-10">
            <textarea id="message" name="message" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
        <label for="text" class="col-2 col-form-label">Picture：</label> 
            <div class="col-10">
            <input id="picture" type="file" name="image" class="file">
            </div>
        </div>        

        <div class="form-group row">
            <div class="offset-6 col-6">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>            
        </div>

    </div>

    </form>
</body>
</html>




