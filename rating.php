<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="assets/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <img src="assets/images/user_icon.png" style="width: 300px;"> <!-- I did styling here because it didnt work in css with class or id -->
            <br>
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

$sql = "SELECT * FROM users ORDER BY Personid LIMIT 1;";
$insertSql = "INSERT INTO users (firstname, lastname,gender) VALUES ('$firstname', '$lastname', '$gender');";
mysqli_query($conn, $insertSql);

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
      echo $row["firstname"]. "   " . $row["lastname"]. "   " . $row["gender"]. "   " .$row["description"]. "<br>" ;
    }
    
  } 
           
 ?>
            <div>
            <form method="post" action="end.php">
             <ul>
                <li>
                   
                   
        <input type="submit" name="button"
                class="button" value="This is a Gryffondor" />
          
        <input type="submit" name="button"
                class="button" value="This is a Slytherin" />
                    <br>
                    <input type="submit" name="button"
                class="button" value="This is a Ravenclaw" />

                <input type="submit" name="button"
                class="button" value="This is a Hufflepuff" />
                </li>
            </ul>
            </form>
            </div>
        </div>
        <script src="assets/js/script.js">
        </script>
    </body>
</html> 
<?php
function cal_percentage($num_amount, $num_total) {
    $count1 = $num_amount / $num_total;
    $count2 = $count1 * 100;
    $count = number_format($count2, 0);
    return $count;
  }
?>
