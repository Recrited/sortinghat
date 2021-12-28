<?php
$firstname = $_GET["firstname"];
$lastname = $_GET["familyname"];
$gender = $_GET["gender"];

 $hostname = "ID362551_sortinghat.db.webhosting.be"; 
 $dbUser = "ID362551_sortinghat"; 
 $dbPassword = "Dx5l9OE23g9gfDpg9470"; 
 $dbName = "ID362551_sortinghat";
 $port = 3306; 
 $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $port);

 if ($conn == false)
{
    echo "Cannot connect to database";
    die();
}
$sql = "SELECT * FROM users;";
$result = $conn->query($sql);
$users = mysqli_query($conn, $sql)->fetch_all(MYSQLI_ASSOC);

$insertSql = "INSERT INTO users (firstname, lastname,gender) VALUES ('$firstname', '$lastname', '$gender');";
mysqli_query($conn, $insertSql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "refresh" content = "3; url = rating.php" />
    <title>Document</title>
    <link href="assets/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
    <h1 class="heading1">
        User Added to our Database ! 
    </h1>
    </div>
</body>
</html>