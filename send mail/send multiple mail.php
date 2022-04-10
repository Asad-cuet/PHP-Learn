<?php
$to_mail=["asadul7733@gmail.com","u1911022@student.cuet.ac.bd"];
$subject="Test Mail";
$body="Hi Asad.Work Hard";
$header="From:mytest7733@gmail.com";
$limit=count($to_mail);
$i=0;
while ($i<$limit) {
    mail($to_mail[$i],$subject,$body,$header);
    echo "mail sent to ".$to_mail[$i]."<br>";
    $i++;
}
//