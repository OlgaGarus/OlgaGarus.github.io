<?php
$title = "авторизация";
include_once("components/head.php");

include_once("components/header.php"); 

if(isset($_POST['login']) && isset($_POST['password']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        echo '<h3>тут будет логин '.$login.'</h3>';
        echo '<h3>тут будет пароль '.$password.'</h3>'; 
        
       include_once("bd_config.php");
       //$sql = "SELECT * FROM users WHERE login = '$login' and  password = '$password'";
       $sql = "INSERT INTO users(login, password) VALUES ('$login', '$password')"; 
       $result =  $mysqli->query($sql);

    //if($result->num_rows == 0)
     //{
      //   echo "Ошибка авторизации";
      //  }
      //  else
      //  {
            
      //      echo "Успешный вход!";
      // } 
    
     // while($row = $result->fetch_row())
      //{

      //foreach($row as $item)
     // {
       //   echo  "из БД: ".$item;
      //}
      //echo "<br>";
    

       
       
        //echo "12345".$result->fetch_row()[1];
        
       //$sql = "INSERT INTO users(login, password) VALUES ('$login', '$password')"; 
        
        //if($result->num_rows == 0)
       // {
       //     echo "Ошибка авторизации";
       // }
       // else
        //{
            
        //    echo "Успешный вход!";
       // } 
    
    }
?>
<main>
<form method="post" action="login.php">
<input type="text" name = "login">
<input type="password" name = "password">
<input type="submit" value = "отправить данные">
</form>
</main>

<?php
include_once("components/footer.php");
?> 