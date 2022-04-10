<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
$name=$_REQUEST['name'];


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$pdf='
<h1>Hello '.$name.'!</h1>
<h3 style="color:red">Helow World!!!</h3>

';
$dompdf->loadHtml($pdf);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait'); //landscape or portrait

// Render the HTML as PDF
$dompdf->render();


// Output the generated PDF to Browser
$dompdf->stream();


?>