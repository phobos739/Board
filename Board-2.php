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
    <title>Board-2</title>
</head>
<body>

<table border="1">
<tbody>
<tr>
<td>Picture</td>
<td>Name</td>
<td>Message</td>
<td>Time</td>
</tr>


<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><img src="<?= $row['Picture'] ?>" width="100" /></td>
<td><?= $row["Name"]; ?></td>
<td><?= $row["Message"]; ?></td>
<td><?= $row["Time"]; ?></td>
</tr>
<?php } ?>


</tbody>
</table>
</body>
</html>