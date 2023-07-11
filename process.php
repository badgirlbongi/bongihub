<html>
<head><title>Welcome Page</title></head>
<body>
    <?php
          $id = $_POST["id"];
          $name = $_POST["name"];
          $surname = $_POST["surname"];
          $emailaddress = $_POST["emailaddress"];
          $cellno = $_POST["cellno"];

          if ($id == NULL||$name == NULL||$surname == NULL||$emailaddress == NULL||$cellno == NULL)
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