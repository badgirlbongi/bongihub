<html>
<head><title>Welcome Page</title></head>
<body>
    <?php
          $name = $_POST["name"];

          if ($name == NULL)
          {
            echo "Please enter your name";
          }
          else
          {
            echo "Hello, " . $name;
          }    
    ?>
</body>
</html>