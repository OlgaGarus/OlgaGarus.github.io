<?php 
define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'New_base');

  $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  if ($mysqli === false)
  {
    die("произошла ощибка " . mysqli_connect_error());
  } 

  ?>  