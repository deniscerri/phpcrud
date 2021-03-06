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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="top">
            <input type="text" name="search" id="searchBar" placeholder="Search Here">
            <div class="sideButton">
                <a href="views/createEmployee.html"><button class="button" id="createEmp" type="button" value="Create Employee">Create Employee</button></a> <br>
            </div>
        </div>
        <div class="main">
            <?php if(mysqli_num_rows($result)) {?>
                <div class="table-responsive">
                    <table class="table table-dark table-striped text-center table-hover">
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
                                $i = 0;
                                while($rows = mysqli_fetch_assoc($result)){
                                $i++;
                            ?>
                                <tr class="defaultRow">
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
                </div>
            <?php }else{ echo 'No Employees Recorded.';}?> <br>
        </div>
    </div>
    <footer>
        <div class="text-center">
            @ 2021 Denis ??erri, Adelajda Muzhaqi, Mikel Shevroja, Dajana Kuqi:
            <b><a target="_blank" href="https://github.com/deniscerri/phpcrud">PHP CRUD Project</a></b>
        </div>
    </footer>
</body>
</html>