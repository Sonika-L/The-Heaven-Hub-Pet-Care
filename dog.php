
<?php 
if(isset( $_POST ['submit'])){
    $name= $_POST ['name'];
    $phno = $_POST ['phno'];
    $location = $_POST ['location'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'petadopt';

    $con = mysqli_connect($host, $user, $pass, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



    $qry = "INSERT INTO adoptp ( name , phone , city ) VALUES ( '$name' , '$phno' , '$location')";
    mysqli_query($con,$qry);
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: linear-gradient(#3bd8ee,#92edd2,#00d4ff);">
    <form action="#" method="POST">
        <div class="pet">
            <form action="#" method="POST"></form>
            <h1> Please Enter your details</h1>
            <p>Your name 
            </p>
            <input type="text" name="name">
            <p>Phone number</p>
            <input type="text" name="phno">
            <p>
            Location 
            <br>
            <input type="text" name="location" palaceholder="city name"></p>
            <p>
                <input type="submit" name="submit" class="sub" value="Submit">
            </p>
            <p>Not interested to adopt <a href="adopt.php">Go back</a></p>
    </form>
        </div>


    </form>
</body>
</html>
dog.php
Displaying dog.php.