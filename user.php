<?php
include_once("components/head.php");
$title = "Физико-Математическая Научная Конференция";
include_once("components/header.php"); 
?> 
<main>
<table border = "1">
    <tr><h3>
        
        <td>ФИО</td>
        <td>телефон</td>
        <td>email</td>
        <td>секция</td>
        <td>дата рождения</td>
        <td>доклад</td>
        <td>Тема</td>
</h3>
    </tr>


  
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
    </table>
    </main>
    <?php
        include_once("components/footer.php");
        ?>