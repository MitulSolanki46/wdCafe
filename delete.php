<?php


$phone = $_REQUEST['phone'];


include('config.php');
		
$sql="delete from `orderlist` where phone ='" . $phone . "'";


$result = mysqli_query($conn,$sql);
if($result){
    echo " <br><h3 style='color: #006400;text-align:center;'>Your order cancel successfully!!!</h3><br><br>";
}
else{
    echo "unable to cancel order . Please try again !";
}




include("menu.html");

?>