<?php  include $_SERVER['DOCUMENT_ROOT'] . "/phpcrud/dbconn.php";

$sql = "SELECT * FROM employees ORDER BY id ASC";
$result = mysqli_query($conn, $sql);



if(isset($_POST['search'])){

    $search = "SELECT * FROM employees WHERE firstName LIKE '%".$_POST['search']."%' OR lastName LIKE '%".$_POST['search']."%'";
    $result = mysqli_query($conn, $search);

    $html = '';
    while($row =mysqli_fetch_assoc($result))
    {
        $html.='<tr class="searchRow">';
        $html.= '<td >'.$row['id'].'</td>';
        $html.= '<td >'.$row['firstName'].'</td>';
        $html.= '<td>'.$row['lastName'].'</td>';
        $html.= '<td>'.$row['email'].'</td>';
        $html.= '<td>'.$row['phone'].'</td>';
        $html.= '<td>'.$row['gender'].'</td>';
        $html.= '<td>'.$row['country'].'</td>';
        $html.= '<td>'.$row['city'].'</td>';
        $html.= '<td>'.$row['position'].'</td>';
        $html.= '<td><a href="views/updateEmployee.php?id='.$row['id'].'"><ion-icon name="create"></ion-icon></a></td>';
        $html.= '<td><a href="resource/php/delete.php?id='.$row['id'].'"><ion-icon name="trash"></ion-icon></a></td>';
        $html.='</tr>';
    }

    echo $html;
}

if(isset($_POST['sort'])){

    $query = 'SELECT * FROM employees';
    $class = 'defaultRow';

    if($_POST['query'] != ''){
        $query.=" WHERE firstName LIKE '%".$_POST['query']."%' OR lastName LIKE '%".$_POST['query']."%'";
        $class = 'searchRow';
    }

    $query.= " ORDER BY ".$_POST['key']." ".$_POST['sort']."";
    $result = mysqli_query($conn, $query);

    

    $html = '';
    $i = 0;
    while($row =mysqli_fetch_assoc($result))
    {
        $i++;
        $html.='<tr class="'.$class.'">';
        $html.= '<td >'.$row['id'].'</td>';
        $html.= '<td >'.$row['firstName'].'</td>';
        $html.= '<td>'.$row['lastName'].'</td>';
        $html.= '<td>'.$row['email'].'</td>';
        $html.= '<td>'.$row['phone'].'</td>';
        $html.= '<td>'.$row['gender'].'</td>';
        $html.= '<td>'.$row['country'].'</td>';
        $html.= '<td>'.$row['city'].'</td>';
        $html.= '<td>'.$row['position'].'</td>';
        $html.= '<td><a href="views/updateEmployee.php?id='.$row['id'].'"><ion-icon name="create"></ion-icon></a></td>';
        $html.= '<td><a href="resource/php/delete.php?id='.$row['id'].'"><ion-icon name="trash"></ion-icon></a></td>';
        $html.='</tr>';
    }

    echo $html;
}



