<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpcrud/dbconn.php";

if (isset($_POST['create'])) {
      
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $position = $_POST['position'];
    
    $sql = "INSERT INTO employees(firstName, lastName, email, phone, gender, country, city, position) 
            VALUES('$firstName', '$lastName', '$email', '$phone', '$gender', '$country', '$city', '$position')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../../index.php?success=SuccessfullyCreatedEmployee");
    }else {
        header("Location: ../../index.php?error=ErrorCreatingEmployee");
    }

}
