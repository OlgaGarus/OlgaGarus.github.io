<?php
include_once("components/head.php");
$title = "Физико-Математическая Научная Конференция";
include_once("components/header.php"); 
?> 
<main>
    <div class="container">
<div class="table-responsive">
<table class="table table-striped">
<thead>
    <tr><h3>
        
    <th scope="col">ФИО</th>
        <th scope="col">Телефон</th>
        <th scope="col">Email</th>
        <th scope="col">Секция</th>
        <th scope="col">Дата рождения</th>
        <th scope="col">Доклад</th>
        <th scope="col">Тема</th>
</h3>
    </tr>
    </thead>

    <tbody>
  
    <?php
    include_once("bd_config.php");
    $results = $mysqli->query("SELECT * FROM users ORDER BY ID DESC LIMIT 1");
    while($row = $results->fetch_row()) {
    print '<tr>';
    //print '<td>'.$row[0].'</td>';
    print '<td>'.$row[1].'</td>';
    print '<td>'.$row[2].'</td>';
    print '<td>'.$row[3].'</td>';
    print '<td>'.$row[4].'</td>';
    print '<td>'.$row[5].'</td>';
    print '<td>'.$row[6].'</td>';
    print '<td>'.$row[7].'</td>';
    print '</tr>';
    }
    $results->free();
    $mysqli->close();
    ?>
    </tbody>
    </table>
</div>
</div>
    </main>
    <?php
        include_once("components/footer.php");
        ?>