<?php
    error_reporting(0);
    $server="localhost";
    $username="root";
    $password="";
    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        die("connection to this database failed due to".mysqli_connect_error());
    }
    // else{
    //     echo "Connection established";
    // }

if(isset($_POST['submit1']) )   
{
        $idupdate=$_GET['busnumber'];
        
        $nuum=$_POST['busnumber'];
        $naam=$_POST['busname'];
        $query = "update `busreservation`.`addbus` set busnumber='$nuum',busname='$naam' where busnumber='$idupdate'";
        $updateres=mysqli_query($con, $query);
        // $showquery = "SELECT * FROM `busreservation`.`addbus` WHERE busnumber='$ids'";
    
        if($updateres)
        {
?>
<script>
    alert("data updated successfully");
    window.location.href = "addbus.php";

</script>
<?php
    }else{
?>
<script>
    alert("Could not update the data");
</script>>

<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bakbak+One&family=Kite+One&family=Lexend+Deca&family=Lobster&family=Nunito:ital,wght@1,500&family=Prompt:ital,wght@0,500;1,400&display=swap"
        rel="stylesheet">
    <title>Document</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }


        #container {
            display: flex;
            max-width: 100vw;
            max-height: 100vh;
            height: 100%;
            width: 100%;
            justify-content: center;
        }

        #container form {
            display:flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
             box-sizing: border-box;
        }

        form #numb{
            margin-top: 10rem;
            margin-left: 2rem;
            padding: 1rem;
            border-radius: 2rem;
            font-size: 0.9rem; 
            font-family: 'Lexend Deca', sans-serif;
            border: 2px solid rebeccapurple;
            font-weight: 800;
            box-shadow: 0px -1px blue;
        }
        form #nam{
            margin-top: 2rem;
            margin-left: 3rem;
            padding: 1rem;
            border-radius: 2rem;
            font-size: 0.9rem; 
            font-family: 'Lexend Deca', sans-serif;
            font-weight: 800;
            /* border-color: rebeccapurple; */
            border: 2px solid rebeccapurple;
            box-shadow: 0px 1px blue;
        }

        form label{
            margin-top: 1rem;
            font-size: 1.3rem;  
            font-family: 'Bakbak One', cursive;
            font-family: 'Kite One', sans-serif; 
            font-family: 'Nunito', sans-serif;
            font-family: 'Prompt', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Aclonica', sans-serif;

        }
        form #sub{
            /* padding: 1rem;
            width: 30%;
            border-radius: 60%; */
            margin-top: 2rem;
            width: 10rem;
            height: 2.5rem;
            padding: 0.3rem;
            border-radius: 3rem;
            border-spacing: 20px;
            font-size: 1rem;
            align-self: center;
            cursor: pointer;
            font-family: 'Kite One', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Lexend Deca', sans-serif;
            font-family: 'Bakbak One', cursive;
            background-color: #3885c5;
            color: white;
        }
        form #sub:hover{
            background-color:white ;
            color:#3885c5;
}


    </style>

</head>

<body>

    <div id="container">
        <form name="frmUser" method="POST" action="">
            <?php 
         
         $ids=$_GET['busnumber'];
         $showquery = "SELECT * FROM `busreservation`.`addbus` WHERE busnumber='$ids'";
         $result = mysqli_query($con, $showquery);
         $res = mysqli_fetch_array($result);
     ?>
            <div>
                <label for="numb">Bus Number</label>
                <input type="text" name="busnumber" id="numb" class="busnumber" value="<?php echo $res['busnumber']?>"
                    required />
            </div>
            <div>
                <label for="nam">Bus Name</label>
                <input type="text" name="busname" id="nam" class="busname" value="<?php echo $res['busname']?>"
                    required />
            </div>
            <input type="submit" id="sub" name="submit1" value="Update" class="submit1">
        </form>
    </div>
</body>

</html>