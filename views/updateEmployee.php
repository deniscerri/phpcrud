<?php include '../resource/php/update.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management [Update]</title>
    <link rel="stylesheet" href="../resource/css/styles.css">
</head>
<body>
    <div class="container">
        <form action="../resource/php/update.php" method="post">
            <h3>Update </h3>
            <label for="firstName">Emri:</label><br>
                <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>"><br>
            <label for="lastName">Mbiemri:</label><br>
                <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>"><br>
            <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
            <label for="phone">Phone:</label><br>
                <input type="value" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br>
            <label for="gender">Gender:</label><br>
                <input type="text" id="gender" name="gender" value="<?php echo $row['gender']; ?>"><br>
            <label for="country">Country:</label><br>
                <input type="text" id="country" name="country" value="<?php echo $row['country']; ?>"><br>
            <label for="city">City:</label><br>
                <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>"><br>
            <label for="position">Position:</label><br>
                <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>"><br>
            
            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"><br>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>
