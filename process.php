<html>
<head><title>Welcome Page</title></head>
<body>
    <?php
          $id = $_POST["id"];
          $name = $_POST["name"];
          $surname = $_POST["surname"];
          $emailaddress = $_POST["emailaddress"];
          $cellno = $_POST["cellno"];

          if ($name == NULL)
          {
            echo "Please enter your details again";
          }
          else
          {
            echo "Hello, " . $name." with email address ".$emailaddress;
          }    
    ?>
</body>
</html>