
  <?php
  try
      {
        $connection = new PDO('mysql:host=localhost;dbname=exphp;charset=utf8', 'root', 'root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      }
  catch (Exception $e)
      {
          die('Erreur : ' . $e->getMessage());
      }
  ?>


  <?php
  $connection = mysqli_connect('localhost', 'root', 'root');
  if (!$connection){
      die("Database Connection Failed" . mysqli_error($connection));
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  $select_db = mysqli_select_db($connection, 'exphp');
  if (!$select_db){
      die("Database Selection Failed" . mysqli_error($connection));
  }
