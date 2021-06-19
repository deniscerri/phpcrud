<?php include '../resource/php/update.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management [Update]</title>
    <link rel="stylesheet" href="../resource/css/styles.css">
    <script src="../resource/js/form.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form id="update" action="../resource/php/update.php" method="post" onsubmit="return validateCreation();">
            
            <div class="card-body">
            <h3>Update Employee</h3>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="firstName">First Name:</label><br>
                        <input class="form-control" type="text" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>"><br>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="lastName">Last Name:</label><br>
                        <input class="form-control" type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>"><br>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="email">Email:</label><br>
                        <input class="form-control" type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="phone">Phone:</label><br>
                        <input class="form-control" type="value" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="gender">Gender:</label><br>
                        <select class="form-control" name="gender">
                            <?php if($row['gender'] == 'M'){?>
                                <option value="M" selected> Male </option><br>
                                <option value="F"> Female </option><br>
                                <option value="-"> Other </option><br>
                                <option value="" style="display:none;"></option>
                            <?php }elseif($row['gender'] == 'F'){ ?>
                                <option value="M"> Male </option><br>
                                <option value="F" selected> Female </option><br>
                                <option value="-"> Other </option><br>
                                <option value="" style="display:none;"></option>
                            <?php }else{ ?>
                                <option value="M"> Male </option><br>
                                <option value="F"> Female </option><br>
                                <option value="-" selected> Other </option><br>
                                <option value="" style="display:none;"></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="country">Country:</label><br>
                        <input class="form-control" type="text" id="country" name="country" value="<?php echo $row['country']; ?>"><br>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="city">City:</label><br>
                        <input class="form-control" type="text" id="city" name="city" value="<?php echo $row['city']; ?>"><br>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label" for="position">Position:</label><br>
                        <input class="form-control" type="text" id="position" name="position" value="<?php echo $row['position']; ?>"><br>
                    </div>
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>"><br>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <a href="../index.php"><button class="button" type="button" value="Create Employee">Go Back</button></a>
                        <button class="button" type="submit" value="Create Employee" name="update">Update</button><br>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>
