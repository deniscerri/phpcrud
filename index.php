<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Employee Management [Dashboard] </title>
    </head>
    <style>
        .forma{
        text-align: center;
        }
        .button{
        background-color:  #66b3ff;
        border: 1px blue;
        font-size: 100%;
        }

        .mirmbajtja{
        padding: 30px;
        margin: 20px;
        }
    </style>
    <body>
        <?php 
            $mysqli = new mysqli('localhost', 'root', 'password', 'emp_db') or die(mysql_error($mysqli));
            $result = $mysqli->query("select * from employees") or die($mysqli->error);

        ?>
            <div>
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Gender</td>
                        <td>Country</td>
                        <td>City</td>
                        <td>Position</td>
                        <td colspan= "2">Actions</td>
                    </tr>
                    <?php while($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row["firstName"]; ?></td>
                        <td><?php echo $row["lastName"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["country"]; ?></td>
                        <td><?php echo $row["city"]; ?></td>
                        <td><?php echo $row["position"]; ?></td>
                        <td> <button>Edit</button><button>Delete</button></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
    </body>
</html>
