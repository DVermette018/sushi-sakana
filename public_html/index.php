<!DOCTYPE html>
<html lang="en">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Sakana";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
  <?php include "header.php" ?>
  
  <?php include "home.php" ?>


    


</html>