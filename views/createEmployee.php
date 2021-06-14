<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Employee Management [Create]</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../resource/js/script.js"></script>
    <link rel="stylesheet" href="../resource/css/styles.css">
</head>
<body>
    <div class="container">
        <button type="button" class="button" id="goBack" name="back"><a href="../index.php">Back</a></button>
        <form id="create" action="../resource/php/create.php" method="post" onsubmit="return validateCreation();">
            <h3>Create </h3>
            <label for="firstName">First Name:</label><br>
                <input type="text" id="firstName" name="firstName"><br>
            <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName"><br>
            <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
            <label for="phone">Phone: [Format +(Prefix)(9-digit-number)]</label><br>
                <input type="value" id="phone" name="phone"><br>
            <label for="gender">Gender:</label><br>
                <input type="radio" name="gender" value="M"> Male<br>
                <input type="radio" name="gender" value="F"> Female<br>
                <input type="radio" name="gender" value="-"> Other<br>
                <input type="radio" name="gender" value="" style="display:none;" checked>
            <label for="country">Country:</label><br>
                <input type="text" id="country" name="country"><br>
            <label for="city">City:</label><br>
                <input type="text" id="city" name="city"><br>
            <label for="position">Position:</label><br>
                <input type="text" id="position" name="position"><br>
            
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"> <br>
            <button type="submit" class="button" id="createEmp" name="create">Create</button>
        </form>
    </div>
</body>
</html>
