<?php


function send_mail($to,$sub,$body,$from)
{
$to_mail=$to;

$subject=$sub;

$body_=$body;

$header="From:$from";

mail($to_mail,$subject,$body_,$header)
}
$to_mail="asadul7733@gmail.com";

$subject="Localhost";

$body="3rd mail from localhost";

$header="From:mytest7733@gmail.com";
 if(mail($to_mail,$subject,$body,$header)) {
    echo "Email sent";
 } else {
     echo "Send failed";
 }
?>