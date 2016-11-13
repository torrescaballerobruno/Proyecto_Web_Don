<?php  
    if( empty($_POST['valorCaja1']) || empty($_POST['valorCaja2'] )){
      header("Location: ./error.html");
    exit();

    }else{

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "RegistrosWeb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT correo FROM Usuario WHERE nombre = '".$_POST['valorCaja1']."'";
      $result = $conn->query($sql);
      $line = mysql_fetch_array($result, MYSQL_ASSOC);

      if ($result->num_rows > 0) {
          // output data of each row
        echo "\t\t<td>$line</td>\n";
      } else {
          echo "0 results";
      }
      $conn->close();
    }
    

?>