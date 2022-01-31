<?php
session_start();
$a=$_SESSION['username'];
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
    <script src="https://kit.fontawesome.com/5128bdb7d3.js" crossorigin="anonymous"></script>


    <style>
        *,
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            /* width: 100vw;
            height: 100vh; */
            min-height: 100%;
        }

        .details {
            max-width: 25%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-self: flex-start;
            background-color: #3885c5;
        }

        /* @media (min-width:0px) and (max-width: 955px) {
            .details{
                background-color: red;
                height: 200vh;
            }
        } */

        .details a {
            text-decoration: none;
            font-size: 1.7rem;
            font-family: 'Bakbak One', cursive;
            font-family: 'Mukta', sans-serif;
            color: white;
            margin-bottom: 1rem;
            margin-right: 2rem;
        }

        .logo_admin {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        .fa-user-shield {
            font-size: 5.5rem;
            color: white;
            text-shadow: black 5px 1px;
            opacity: 0.7;
        }

        .logo_admin span {
            color: white;
            font-size: 1.5rem;
            font-family: 'Mukta', sans-serif;
            font-family: 'Bakbak One', cursive;
        }

        .details a:hover {
            background-color: white;
            color: black;
            scroll-behavior: smooth;
        }

        .items {
            max-width: 75%;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .head-item {
            color: rebeccapurple;
            font-family: 'Bakbak One', cursive;
            font-family: 'Kite One', sans-serif;
            font-family: 'Lobster', cursive;
            margin-left: 1rem;
        }

        .span-item {
            color: #3885c5;
            font-family: 'Bakbak One', cursive;
            font-family: 'Lexend Deca', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Kite One', sans-serif;
            font-size: larger;
            text-shadow: 1px 0px slategrey;
        }


        .contents {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
        }


        .row-one {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 100%;
            font-family: 'Bakbak One', cursive;
            font-family: 'Kite One', sans-serif;
            font-family: 'Lexend Deca', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Aclonica', sans-serif;
            font-size: 1.7rem;
            font-weight: 900;

        }

        .row-two {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 100%;
            font-family: 'Bakbak One', cursive;
            font-family: 'Kite One', sans-serif;
            font-family: 'Lexend Deca', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Aclonica', sans-serif;
            font-size: 1.7rem;
            font-weight: 900;
        }

        .row-three {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 100%;
            font-family: 'Bakbak One', cursive;
            font-family: 'Kite One', sans-serif;
            font-family: 'Lexend Deca', sans-serif;
            font-family: 'Lobster', cursive;
            font-family: 'Aclonica', sans-serif;
            font-size: 1.7rem;
            font-weight: 900;
        }

        /* .contents a {
            text-decoration: none;
        } */

        .one1 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px rebeccapurple;
        }

        .two2 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px red;
        }

        .three3 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px violet;
        }

        .four4 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px sienna;
        }

        .five5 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px  darkgreen;
        }

        .six6 {
            padding: 1rem;
            margin-top: 2rem;
            margin-right: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px  #3885c5;
        }

        .one1 a{
            color: rebeccapurple;
        }
        .two2 a{
            color: red;
        }

        .three3 a{
            color: violet;
        }

        .four4 a{
            color: sienna;
        }
        .five5 a{
            color: darkgreen;
        }

        .six6 a{
            color: #3885c5;
        }



        .row-one,
        .row-two,
        .row-three a {
            text-align: right;
        }

        .one1 div,
        .two2 div,
        .three3 div,
        .four4 div,
        .five5 div,
        .six6 div {
            margin: 1.8rem;
        }

        .one1 .fa-bus{
            color: rebeccapurple;
            font-size:2.2rem;
        }
        .two2 .fa-minus-circle{
            color: red;
            font-size:2.2rem;
        }
        .three3 .fa-road{
            color: violet;
            font-size:2.2rem;
        }
        .four4 .fa-times-circle{
            color: sienna;
            font-size:2.2rem;
        }
        .five5 .fa-info-circle{
            color: darkgreen;
            font-size:2.2rem;
        }
        .six6 .fa-users{
            color: #3885c5;
            font-size: 2.2rem;
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
            <h1 class="head-item">Welcome
                <span class="span-item">
                    <?php echo $a ?>
                </span>
            </h1>

            <div class="contents">

                <div class="row-one">
                    <div class="one1">
                        <div><i class="fas fa-bus"></i>New Bus</div>
                        <div>
                            <a href="addbus.php" class="addbuses" >View More<i class="fas fa-arrow-right on1"></i></a>
                        </div>
                    </div>

                    <div class="two2">
                        <div><i class="fas fa-minus-circle"></i>Remove Bus</div>
                        <div>
                            <a href="removebus.php" class="deletebus">View More<i class="fas fa-arrow-right on2"></i></a>
                        </div>
                    </div>
                </div>


                <div class="row-two">
                    <div class="three3">
                        <div><i class="fas fa-road"></i>Add Route</div>
                        <div>
                            <a href="addroute.php" class="addroutes">View More<i class="fas fa-arrow-right on3"></i></a>
                        </div>
                    </div>

                    <div class="four4">
                        <div><i class="fas fa-times-circle"></i>Remove Route</div>
                        <div>
                            <a href="removeroute.php" class="deleteroute">View More<i class="fas fa-arrow-right on4"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row-two">
                    <div class="five5">

                        <div><i class="fas fa-info-circle"></i>Booking Detail</div>
                        <div>
                            <a href="bookingdetails.php" class="userbooking">View More<i class="fas fa-arrow-right on5"></i></a>
                        </div>
                    </div>
                    <div class="six6">
                        <div><i class="fas fa-users"></i>User Details</div>
                        <div>
                            <a href="userdetails.php" class="customerdetails">View More<i class="fas fa-arrow-right on6"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</body>

</html>