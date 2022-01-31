<?php
session_start();

$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}
else{
    echo "connection established";
}

if(isset($_POST['submit1']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
     $sql="SELECT * from `busreservation`.`admin_login` where username='$uname' and password='$password' and confirm_password='$confirm_password'";
    $result=mysqli_query($con, $sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: details_add_by_admin.php");
    }
    else{
        echo "<script> alert('Username or Password is incorrect')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Mukta&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Mukta&display=swap" rel="stylesheet">
    <link rel="php" href="logindetails.php">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .container form {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
             /* width: 50%;
            height: 50% ; 
            justify-content: center;
            align-items: center; 
            align-self: center; */
        }

        form input {
            padding: 15px;
            width: 100%;
            height: 100%; 
            border-radius: 15px;
            font-size: 20px;
        }

        form label {
            font-family: 'Bakbak One', cursive;
            font-family: 'Mukta', sans-serif;
            font-size: 150%;
            font-weight: 800;
            width: 100%;
            height: 100%;
        }

        .heading {
            text-align: center;
            font-family: 'Bakbak One', cursive;
            font-family: 'Mukta', sans-serif;
            font-size: 3.2rem;
            color: #faeef6;
            text-shadow: 2px 2px rgb(90, 117, 128);
        }
        
        form{
            display: flex;
        }
        #submit{
            margin: 1.2rem;
            font-size: 1.2rem;
            font-weight: 900;
            padding: 10px;
            box-sizing: border-box;
            box-shadow: rgba(137, 185, 185, 0.212) 0.2rem 0.1rem;
            text-shadow: rgba(96, 12, 107, 0.137) 0.2rem 0.2rem;
            text-align: center;
            height: 30%;
            width: 40%;
        }
        #reset{
            margin-right: 10px;
            font-size: 20px;
            font-weight: 900;
            padding: 10px;
            box-sizing: border-box;
            box-shadow: rgba(137, 185, 185, 0.212) 5px 5px;
            text-shadow: rgba(96, 12, 107, 0.137) 1px 1px;
            text-align: center;
            height: 30%;
            width: 40%;
        }

        html{
            height: 100%;
            width: 100%;
            place-items: center;
        }  
        body {
            background: url(images/login_background.jpg) no-repeat center center/cover;
            box-sizing: border-box;
            height: 100%;
            width: 100%;
            place-items: center;
         }
         #submit:hover,#reset:hover{
             background-color: rgba(16, 48, 58, 0.178);
             color: white;
             font-size: 22px;
             font-weight: 900;
             cursor:pointer;
         }
    </style>
</head>

<body>
    <h1 class="heading">Admin Login</h1>
    <div class="container">
        <form action="" method="post">
            <label for="">Username</label>
            
            <input type="text" name="username" required>
            <label for="">Password</label>
            <input type="password" name="password" required>
            <label for="">Confirm Password</label>
            <input type="password" name="confirm_password" required>
            <div>
                <input type="submit" id="submit" value="SUBMIT" name="submit1">
                <input type="reset" id="reset" value="RESET">
            </div>
        </form>
    </div>
</body>

</html>