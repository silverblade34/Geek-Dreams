<?php
   $servername = "localhost";
   $database = "geekdreams";
   $username = "root";
   $password = "FFmm123456";
   $conn=mysqli_connect($servername, $username, $password, $database);
   mysqli_set_charset($conn,"utf8");
   // Check connection

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   echo "Sus datos no lograron ser enviados correctamente";
}
?>
   
