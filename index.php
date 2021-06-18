<?php include "resource/php/read.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management [Dashboard]</title>
    <link rel="stylesheet" href="resource/css/styles.css">
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script src="resource/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="container">
        <div class="top">
            <input type="text" name="search" id="searchBar" placeholder="Search Here">
            <div class="sideButton">
                <a href="views/createEmployee.php"><button class="button" id="createEmp" type="button" value="Create Employee">Create Employee</button></a> <br>
            </div>
        </div>
        <div class="main">
            <?php if(mysqli_num_rows($result)) {?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Position</th>
                            <th colspan = 2 >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows = mysqli_fetch_assoc($result)){
                        ?>
                            <tr class="defaultRow">
                                <td><?php echo $rows['id']?></td>
                                <td><?php echo $rows['firstName']?></td>
                                <td><?php echo $rows['lastName']?></td>
                                <td><?php echo $rows['email']?></td>
                                <td><?php echo $rows['phone']?></td>
                                <td><?php echo $rows['gender']?></td>
                                <td><?php echo $rows['country']?></td>
                                <td><?php echo $rows['city']?></td>
                                <td><?php echo $rows['position']?></td>
                                <td>
                                    <?php echo '<a href="views/updateEmployee.php?id='.$rows['id'].'"><ion-icon name="create"></ion-icon></a>' ?>
                                </td>
                                <td>
                                    <?php echo '<a href="resource/php/delete.php?id='.$rows['id'].'"><ion-icon name="trash"></ion-icon></a>' ?>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            <?php }else{ echo 'No Employees Recorded.';}?> <br>
        </div>
    </div>
</body>
</html>