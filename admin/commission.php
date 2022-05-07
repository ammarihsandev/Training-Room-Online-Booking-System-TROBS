<?php   
include("header.php");
?>

<center><h1><b><font color="orange">-{ ZON COMMISSION }-</font></b></h1></center>
<br/><br/>
    <?php    	 
 $queryi="SELECT * FROM booking ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei); 
		  
		$queryo="SELECT * FROM booking WHERE Jumlah_Hari LIKE '%hari' AND Comm_status LIKE '%aid' ORDER BY Booking_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();

		   
$queryo1= "SELECT count(*) as mines FROM booking WHERE Jumlah_Hari = '2 hari' AND Comm_status = 'Unpaid'";
		  $resourceo1=mysql_query($queryo1,$link);
 $unpaid= mysql_fetch_array($resourceo1);

$queryo2= "SELECT count(*) as mines FROM booking WHERE Jumlah_Hari = '1 hari' AND Comm_status = 'Unpaid'";
		  $resourceo2=mysql_query($queryo2,$link);
 $unpaid1= mysql_fetch_array($resourceo2); 

 $tunpaid = ($unpaid['mines']*2)+$unpaid1['mines'];

$queryo3= "SELECT count(*) as mines FROM booking WHERE Jumlah_Hari = '2 hari' AND Comm_status = 'Paid'";
		  $resourceo3=mysql_query($queryo3,$link);
 $paid= mysql_fetch_array($resourceo3); 

$queryo4= "SELECT count(*) as mines FROM booking WHERE Jumlah_Hari = '1 hari' AND Comm_status = 'Paid'";
		  $resourceo4=mysql_query($queryo4,$link);
 $paid1= mysql_fetch_array($resourceo4); 

 
 $tpaid = ($paid['mines']*2)+$paid1['mines'];

$a = $tpaid*20;
$b = $tunpaid*20;
$c = $tpaid*5;
$d = $tunpaid*5;

echo "<hr>";

echo " Total Paid Commission to PIC = RM ".$a."<br/>";
echo " Total Unpaid Commission = RM ".$b;
echo "<hr>";
echo " Total Paid Commission to Web Admin = RM ".$c."<br/>";
echo " Total Unpaid Commission = RM ".$d;
echo "<hr>";


	while($rowo = mysql_fetch_array($resourceo)){

         $queryq="SELECT * FROM client WHERE Client_ID = ".$rowo['Client_ID']."";
		  $resourceq=mysql_query($queryq,$link);
		  $rowq = mysql_fetch_array($resourceq);
 


if ($rowo['Jumlah_Hari'] == "2 hari")
{  
$comma = 40;
$commb = 10;   
}
else if ($rowo['Jumlah_Hari'] == "1 hari")
{  
$comma = 20;
$commb = 5;   
}


 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowq['Client_Name']."</td>
 <td>".$rowo['Booking_Date']."</td>
 <td>".$rowo['Jumlah_Hari']."</td>  
 <td>RM ".$comma."</td>
 <td>RM ".$commb."</td>
 <td>".$rowo['Comm_status']."</td>
 <td><center><a href=\"update_commission.php?id=".$rowo['Booking_ID']."\">update status</a></center></td> </tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table id=\"example\" class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Tarikh</th>
                                            <th>Duration</th>  
                                            <th>PIC Commission</th>
                                            <th>WD Commission</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>".$username_string."  </tbody>
                                </table></div></div>";

?>


<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
		$('#example').dataTable( {
    "pageLength": 50
});

</script>