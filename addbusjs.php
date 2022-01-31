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
// else{
//     echo "connection established";
// }

if(isset($_POST['submit1']))
{
    $busnumb=$_POST['numm'];
    $busname=$_POST['namm'];

    $sql="INSERT INTO `busreservation`.`addbus` (`busnumber`, `busname`) VALUES ('$busnumb', '$busname');";
    if($con->query($sql) == true){
        echo "Added New Bus";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

    // $sql="SELECT * from `busreservation`.`addbus` where username='$uname' and password='$password' and confirm_password='$confirm_password'";
    $sql="SELECT * from `busreservation`.`addbus`";
    $result=mysqli_query($con, $sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['busnumber'] = $row['busnumber'];
        $_SESSION['busname'] = $row['busname'];
        header("Location: addbus.php");
    }
    else{
        echo "<script> alert('Cant Add Bus')</script>";
    }
}
?>

<!-- <script>
const form = document.querySelector("form");
const tbodyEle=document.querySelector("tbody");


function onAdd(e)
{
    e.preventDefault();
    const busnum=document.getElementById("busnumber").value;
    const busnam=document.getElementById("busname").value;
    tbodyEle.innerHTML+=`
    <tr>
        <td>${busnum}</td>
        <td>${busnam}</td>
        <td><button class="edit-btn" >Edit</button></td>
        </tr>
        `;
        
    } 
    form.addEventListener("submit",onAdd);
    </script> -->