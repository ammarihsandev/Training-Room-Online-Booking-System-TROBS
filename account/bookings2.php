<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<?php
/**
 * This is a sample code for manual integration with senangPay
 * It is so simple that you can do it in a single file
 * Make sure that in senangPay Dashboard you have key in the return URL referring to this file for example http://myserver.com/senangpay_sample.php
 */

# please fill in the required info as below
$merchant_id = '938149637770878';
$secretkey = '6116-996';


# this part is to process data from the form that user key in, make sure that all of the info is passed so that we can process the payment
if(isset($_POST['detail']) && isset($_POST['amount']) && isset($_POST['order_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))
{
    # assuming all of the data passed is correct and no validation required. Preferably you will need to validate the data passed
    $hashed_string = md5($secretkey.urldecode($_POST['detail']).urldecode($_POST['amount']).urldecode($_POST['order_id']));
    
    # now we send the data to senangPay by using post method
    ?>
    <html>
    <head>
    <title>senangPay Sample Code</title>
    </head>
    <body onload="document.order.submit()">

<?php


$queryzs = "INSERT INTO booking(Booking_ID, Booking_Date, Client_ID, Program, Total_Peserta, Jumlah_Hari, Price, Susun_Atur, Makanan_TCI, Detail, Keterangan) VALUES('".$_POST['order_id']."', '".$_POST['Booking_Time']."',  '".$_POST['Client_ID']."', '".$_POST['Program']."','".$_POST['Peserta']."','".$_POST['duration']."','".$_POST['price']."','".$_POST['Susun_Atur']."', '".$_POST['makan']."', '".$_POST['Detail']."', '".$_POST['amount']."')";
mysql_query($queryzs,$link);
?>
        <form name="order" method="post" action="https://app.senangpay.my/payment/<?php echo $merchant_id; ?>">
            <input type="hidden" name="detail" value="<?php echo $_POST['detail']; ?>">
            <input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
            <input type="hidden" name="order_id" value="<?php echo $_POST['order_id']; ?>">
            <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
            <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
            <input type="hidden" name="hash" value="<?php echo $hashed_string; ?>">
        </form>
    </body>
    </html>
    <?php
}
# this part is to process the response received from senangPay, make sure we receive all required info
else if(isset($_GET['status_id']) && isset($_GET['order_id']) && isset($_GET['msg']) && isset($_GET['transaction_id']) && isset($_GET['hash']))
{
    # verify that the data was not tempered, verify the hash
    $hashed_string = md5($secretkey.urldecode($_GET['status_id']).urldecode($_GET['order_id']).urldecode($_GET['transaction_id']).urldecode($_GET['msg']));
    
    # if hash is the same then we know the data is valid
    if($hashed_string == urldecode($_GET['hash']))
    {
        # this is a simple result page showing either the payment was successful or failed. In real life you will need to process the order made by the customer
        if(urldecode($_GET['status_id']) == '1')
{
            echo "<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> Pengesahan Tempahan Tidak Berjaya. Sila Hubungi Kami untuk Maklumat Lanjut. </p>
</div></center>";
 $queryx = "SELECT * FROM booking WHERE Booking_ID = '".$_GET['order_id']."'";
    $resourcex=mysql_query($queryx,$link);
   $rowx = mysql_fetch_assoc($resourcex);
$status = "Paid | RM".$rowx['Keterangan'];
 $querytyu1="UPDATE booking SET Detail='".$status."' WHERE Booking_ID='".$_GET['order_id']."'";
		  mysql_query($querytyu1,$link);

 $queryx2 = "SELECT * FROM client WHERE Client_ID = '".$rowx['Client_ID']."'";
    $resourcex2=mysql_query($queryx2,$link);
   $rowx2 = mysql_fetch_assoc($resourcex2);



$emails="ask@mytrainingcube.com";
$ToEmail = $rowx2['Client_Email'];
$email = $rowx2['Client_Name'];
$t1 = $rowx['Detail'];
$t2 = $rowx['Booking_Date'];
$t3 = $rowx['Susun_Atur'];
$t4 = $rowx['Total_Peserta'];
$t5 = $rowx['Price'];

$ToSubject = "Zon Cubic – Pengesahan Tempahan Tidak Berjaya";


$EmailBody =   "

Kepada Tuan/Puan $email, \n
Pengesahan Tempahan Anda Tidak Berjaya. \n
Status telah bertukar kepada $status \n
 \n
Maklumat Tempahan anda adalah seperti berikut: \n
Tarikh:  $t2\n
Nama: $email \n
Susun Atur: $t3 \n
Pax: $t4 \n
Harga: $t5 \n 
 
\n\n";

$Message = $EmailBody;
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$emails."\r\n";
mail($ToEmail,$ToSubject,$Message, $headers);

}
        else
{
            echo "<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> Pengesahan Tempahan Anda Telah Berjaya </p>
</div></center>";
  $queryz = "SELECT * FROM booking WHERE Booking_ID = '".$_GET['order_id']."'";
    $resourcez=mysql_query($queryz,$link);
   $rowz = mysql_fetch_assoc($resourcez);



$status = "Fail | RM ".$rowz['Keterangan'];
 $querytyu="UPDATE booking SET Detail='".$status."' WHERE Booking_ID='".$_GET['order_id']."'";
		  mysql_query($querytyu,$link);

 $queryz2 = "SELECT * FROM client WHERE Client_ID = '".$rowz['Client_ID']."'";
    $resourcez2=mysql_query($queryz2,$link);
   $rowz2 = mysql_fetch_assoc($resourcez2);



$emails="ask@mytrainingcube.com";
$ToEmail = $rowz2['Client_Email'];
$email = $rowz2['Client_Name'];
$t1 = $rowz['Detail'];
$t2 = $rowz['Booking_Date'];
$t3 = $rowz['Susun_Atur'];
$t4 = $rowz['Total_Peserta'];
$t5 = $rowz['Price'];

$ToSubject = "Zon Cubic – Pengesahan Tempahan Telah Berjaya";


$EmailBody =   "

Kepada Tuan/Puan $email, \n
Kami telah menerima transaksi anda. \n
Status telah bertukar kepada $status \n
 \n
Maklumat Tempahan anda adalah seperti berikut: \n
Tarikh:  $t2\n
Nama: $email \n
Susun Atur: $t3 \n
Pax: $t4 \n
Harga: $t5 \n 
 
\n\n";

$Message = $EmailBody;
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$emails."\r\n";
mail($ToEmail,$ToSubject,$Message, $headers);



}
    }
    else
        echo 'Hashed value is not correct';
}
# this part is to show the form where customer can key in their information
else
{
    # by right the detail, amount and order ID must be populated by the system, in this example you can key in the value yourself
?>
    <html>
    <head>
    <title>Cubic Bilik Seminar Ampang</title>
    </head>
    <body><br/><Br/>
<br/>      <center> <div class="alert alert-success">
                                <p class="fa fa-info-circle"> Sorry... You Are on the Wrong Track... </p>
</div></center></center>
    </body>
    </html>
<?php
}
?>
<br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/> 
<?php
include("footer.php");
?>