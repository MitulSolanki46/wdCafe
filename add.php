

<?php

    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $foodName = $_REQUEST['fdname'];
    $address = $_REQUEST["location"];


if(empty($name)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die(" <h1>please enter the Name <h1>");
}

if(empty($email)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Email");
}

if(empty($phone)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Number");
}

if(empty($foodName)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Foodname");
}

if(empty($address)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Address");
}


// include('config.php');
$servername = "localhost";
$username = "root";
$password="";
$dbname = "cafe";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed :".mysqli_connect_error()."please try again !");
}
// INSERT INTO `orderlist` (`id`, `name`, `email`, `phone`, `foodName`, `address`) VALUES (NULL, 'mitul', 'mitulsolanki566@gmail.com', '7041598989', 'pizza and garlic bread', 'nandan 1 chandkheda ahmedabad');
$sql = "INSERT INTO `orderlist` (`name`, `email`, `phone`, `foodName`, `address`) VALUES ('$name', '$email', '$phone', '$foodName', '$address')";

if(mysqli_query($conn,$sql)){
    echo "<h3 style='color:green;text-align:center;'>data is successfuly saved in database</h3>";
    }
    else{
    die("data is not succesfully inserted");
    }

mysqli_close($conn);


?>

<?php
  include 'menu.html';
?>




