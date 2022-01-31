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



$iddelete=$_GET['busnumber'];
$deletequery = "delete from `busreservation`.`addbus` where busnumber='$iddelete'";
$query = mysqli_query($con,$deletequery);
?>
<script>
    alert("data deleted successfully");
    window.location.href = "removebus.php";
</script>

