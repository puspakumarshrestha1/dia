<!-- <SCRIPT language=javascript>
function open2()
{
//window.open("contact.htm","","toolbars=no,width=525,height=400")
window.open("about.html","","toolbars=no,width=420,height=300,resize=no")
//moveTo(300,300);
}
//-->
<!-- </SCRIPT> --> -
<?php
// $name = $HTTP_POST_VARS["txt1"];
// $from = $HTTP_POST_VARS["txt2"];
// $mobile =$HTTP_POST_VARS["TXT3"];
$name = $_POST['txt1'];
$from= $_POST['txt2'];
$mobile= $_POST['txt3'];
$msg= $_POST['content'];
$mailto = "theabperspectives@gmail.com";
$subject = "Feedback from Diacreatives.com";
$todayis = date("l, F j, Y, g:i a") ;
// echo "<br>";
$message = "$todayis [EST] \n";


//$txt ="Name : ". $name . "\r\n From : " . $from . "\r\n Mobile number :". $mobile . "\r\n E-mail sent on:". $message . "\r\n For: ". $mailto . "\r\n Message :" . $msg;

// $content = "Feedback posted by: $name($from)\n"."e-mail sent on: $message\n"."for: $mailto\n"."message:$msg\n";
//  $fromaddress = "From: noreply@diacreatives.com \r\n"
// .'Reply-To: $from';

// mail($mailto,$subject,$txt,$fromaddress);

// $txt = "Feedback posted by:" .$name($from) ."\r\n"."e-mail sent on:". $message."\r\n"."$mobile\n"."for:". $mailto."\r\n"."message:".$msg."\r\n";



//$headers = "From: noreply@diacreatives.com" . $from ."\r\n";

// mail($mailto,$subject,$txt,$fromaddress);



// if($email!=NULL){
//     mail($mailto,$subject,$txt,$headers);
// }





$txt = "Feedback posted by: $name($from)\n"."e-mail sent on: $todayis\n"."for: $mailto\n"."message:$msg\n";
$fromaddress = "From: noreply@diacreatives.com\r\n"
 .'Reply-To:'. $from;

mail($mailto,$subject,$txt,$fromaddress);



// echo " $message\n";
// echo "<br>";
// echo "<P>Mail has been sent!</p>";

// echo "Posted by:  ". $name;
// echo "<br>";

// echo "The address posted from: ".$from;
// echo "<br>";


// echo "The address posted to:" .$mailto;
// echo "<br>";

// echo "The content is:".$msg;

//redirect
header("Location:Thankyou.html");

?>


