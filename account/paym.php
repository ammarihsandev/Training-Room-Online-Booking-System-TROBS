<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<center><h1><b><font color="orange">-{ Update Payment Information }-</font></b></h1></center>
<br/><br/>

<?php 

	 $detail=$_REQUEST['detail'];
	 $amount=$_REQUEST['amount'];
	 $order_id=$_REQUEST['order_id'];
	 $name=$_REQUEST['name']; 
	 $email=$_REQUEST['email']; 
	 $phone=$_REQUEST['phone']; 
	 $Booking_Time=$_REQUEST['Booking_Time']; 
	 $Client_ID=$_REQUEST['Client_ID']; 
	 $Program=$_REQUEST['Program']; 
	 $Peserta=$_REQUEST['Peserta']; 
	 $duration=$_REQUEST['duration']; 
	 $price=$_REQUEST['price']; 
	 $Susun_Atur=$_REQUEST['Susun_Atur']; 
	 $makan=$_REQUEST['makan']; 
	 $Detail=$_REQUEST['Detail']; 
	 $Keterangan=$_REQUEST['Keterangan']; 
	 
	

$query = "INSERT INTO booking(Booking_ID, Booking_Date, Client_ID, Program, Total_Peserta, Jumlah_Hari, Price, Susun_Atur, Makanan_TCI, Detail, Keterangan) VALUES('".$order_id."', '".$Booking_Time."',  '".$Client_ID."', '".$Program."','".$Peserta."', '".$duration."', '".$price."', '".$Susun_Atur."', '".$makan."', '".$Detail."', '".$Keterangan."')";
		
		  if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> Your Booking inserted successfully. </p>.<p> Please Make Payment to Our Account or <a href=\"program.php\" class=\"alert-link\">Click Here</a> To view all booking information.</p>
                            </div></center><br/><br/><br/><br/><br/><br/>
";} 

$emails="ask@mytrainingcube.com";
$ToEmail =$email;
$ToSubject = "Zon Cubic – Permohonan Tempahan Telah Dibuat";
$EmailBody =   "

Dear Mr/Ms $name,\n
You just created a booking request as follow: \n
\n
Time: $Booking_Time \n
Name: $name \n
Room style: $Susun_Atur \n
Pax: $Peserta \n
Total Price: $price \n
 \n
Please finish your booking by trasnfering to the account below: \n
 \n
Nama Akaun: AINSTUDIO.co \n
No Akaun: 123-456-78-9-0 \n
Bank: ABC Bank  \n

\n\n";

$Message = $EmailBody;
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$emails."\r\n";
mail($ToEmail,$ToSubject,$Message, $headers);




$emails2="hello@ammarihsan.my.id";
$ToEmail2 ="hello@ammarihsan.my.id";
$ToSubject2 = "New booking created";
$EmailBody2 =   "

Dear admin,
$name just book a training room.ere are the details:\n
\n
Booking Time: $Booking_Time \n
Program: $Program \n
ROom style: $Susun_Atur ($duration) \n
Food: $makan \n
Quantity: $Peserta \n
 \n
TOtal Price: $price \n 
\n\n";

$Message2 = $EmailBody2;
$headers2 .= "Content-type: text; charset=iso-8859-1\r\n";
$headers2 .= "From:".$emails2."\r\n";
mail($ToEmail2,$ToSubject2,$Message2, $headers2);


	 ?>
	

          <?php
include("footer.php");
?>