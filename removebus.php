<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server, $username, $password);
if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}
// else{
//     echo "connection established";
// }

session_start();
$a=$_SESSION['username'];

if(isset($_POST['submit1']))
{
    $busnumb=$_POST['numm'];
    $busname=$_POST['namm'];
    if($busname!=NULL && $busnumb!=NULL)
    {
        
        $sql="INSERT INTO `busreservation`.`addbus` (`busnumber`, `busname`) VALUES ('$busnumb', '$busname');"; 
        if($con->query($sql) == true){
                echo '<script type="text/javascript">';
                echo 'alert("New Bus Successfully Added");';
                echo 'window.location.href="addbus.php";';
                echo '</script>';
                // header("Location:addbus.php");
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
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
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Mukta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Mukta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Kite+One&family=Lobster&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&family=Prompt:ital,wght@0,500;1,400&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&family=Prompt:ital,wght@0,500;1,400&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/5128bdb7d3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&family=Nunito:ital,wght@1,500&family=Prompt:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="addbuscss.css">

    <style>
        .tablediv{
            margin-top:2.5rem;
        }
        #delete-btn{
            color: red;
            border-radius: 1rem;
            width: 5rem;
            height: 2rem;
            font-size: 1rem;
            font-family: 'Nunito', sans-serif;
            font-weight : 900;
            background-color: blue;
            color: white;
            opacity: 0.8;
}
#delete-btn:hover{
    background-color:white;
    color: blue;
    /* opacity: 0.5; */
    cursor: pointer;
}


    </style>
</head>

<body>
    <div class="container">

        <div class="details">

            <div class="logo_admin">
                <i class="fas fa-user-shield"></i>
                <span>@admin</span>
            </div>
            <a href="addbus.php"><i class="fas fa-bus"></i>Add New Bus</a>
            <a href="removebus.php"><i class="fas fa-minus-circle"></i>Delete a Bus</a>
            <a href="addroute.php"><i class="fas fa-road"></i>Add New Route</a>
            <a href="removeroute.php"><i class="fas fa-times-circle"></i>Delete a Route</a>
            <a href="bookingdetails.php"><i class="fas fa-info-circle"></i>Users Booking Details</a>
            <a href="userdetails.php"><i class="fas fa-users"></i>Customer Details</a>
        </div>

        <div class="items">
            <div class="head-div">
                <h1 class="head-item">Welcome
                    <span class="span-item">
                        <?php echo $a ?>
                    </span>
                </h1>
            </div>

            <!-- <form action="" method="post">
                <input type="text" placeholder="Bus Number" name="numm" id="busnumber" required>
                <input type="text" placeholder="Bus Name" name="namm" id="busname" required>
                <button class="submit1" name="submit1">Add Bus</button>
            </form> -->

            <div class="tablediv">
                <table class="css-serial">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bus Number</th>
                            <th>Bus Name</th>
                            <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectquery="SELECT * from `busreservation`.`addbus`";
                            $query=mysqli_query($con, $selectquery);
                            $nums = mysqli_num_rows($query); 
                            $counter=0;
                            while($res = mysqli_fetch_array($query))
                            {
                                $counter++;
                         ?>

                        <tr>
                           <td>
                                <?php echo $counter ?>
                           </td>
                           <td>
                                <?php echo $res['busnumber'] ?>
                           </td>
                           <td>
                                <?php echo $res['busname'] ?>
                           </td>
                           <td>
                                <a href="deletebus.php?busnumber=<?php echo $res['busnumber'];?>"><button id="delete-btn">Delete</button></a>
                           </td >
                        </tr> 
                          
                        <?php 
                             }
                        ?>
                    </tbody> 
                </table>
            </div>

        </div>

        <!-- <script src="addbusjs.php">

        </script> -->
</body>

</html>