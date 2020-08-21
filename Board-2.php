<?php

$link = mysqli_connect("localhost", "root", "root", "board");

mysqli_query($link, "set names utf-8");  

$sql = "SELECT * FROM list ";

$result = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "Time：{$row['Time']}<br>";
    echo "Name：{$row['Name']}<br>";
    echo "Message：{$row['Message']}<br>";
?>

<img src="<?= $row['Picture'] ?>" width="100" />

<br><HR>
    
<?php } ?>

</body>
</html>