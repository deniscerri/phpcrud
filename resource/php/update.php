<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpcrud/dbconn.php";
    if(isset($_GET['id'])){
        $empID = $_GET['id'];
        $sql = "SELECT * FROM employees WHERE id=".$empID;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
    }else if(isset($_POST["update"])){
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $position = $_POST['position'];

        $sql= "UPDATE employees SET firstName='$firstName',lastName='$lastName',
        email='$email',phone='$phone',gender='$gender',country='$country',city='$city',position='$position' where id=".$id;
        
        $response = mysqli_query($conn, $sql);
        if($response){
            header('Location: ../../index.php?success=SucessfullyUpdatedEmployee');
        }else{
            header('Location: ../../index.php?error=FailedUpdatingEmployee');
        }
        
    }
?>
