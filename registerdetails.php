<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}

$fullname = $_POST['fullnames'];
$uname = $_POST['unames'];
$email = $_POST['emails'];
$gender = $_POST['gender_name'];
$phone = $_POST['phones'];
$password = $_POST['passwords'];
$confirm_pw = $_POST['confirm_passwords'];

echo $gender;


$sql = "INSERT INTO `busreservation`.`register_info` (`fullname`, `username`, `email`, `phone`, `password`, `confirm_password`, `gender`, `time`) VALUES ('$fullname','$uname', '$email', '$phone', '$password', '$confirm_pw', '$gender', current_timestamp());"; 

// $sql="INSERT INTO `busreservation`.`register_info` (`fullname`, `username`, `email`, `phone`, `password`, `confirm_password`, `gender`, `time`) VALUES ('$fullname', '$uname', '$email', '$phone', '$password', '$confirm_pw', '$gender', current_timestamp());";
if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
?>

</body>
</html>
