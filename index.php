<?php include "resource/php/read.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management [Dashboard]</title>
    <link rel="stylesheet" href="resource/css/styles.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <div class="container">
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0; 
                        while($rows = mysqli_fetch_assoc($result)){
                            $i++;
                    ?>
                        <tr>
                            <td><?php echo $i?></td>
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
        <a href="views/createEmployee.php"><button id="createEmp" type="button" value="Create Employee">Create Employee</button></a> <br>
    </div>
</body>
</html>