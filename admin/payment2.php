<?php   
include("header.php");
?>

<center><h1><b><font color="orange">-{ ZON Pembayaran}-</font></b></h1></center>
<br/><br/>
<?php

         $queryi="SELECT * FROM booking ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei);

		$queryo="SELECT * FROM payment ORDER BY Payment_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();
	while($rowo = mysql_fetch_array($resourceo)){
 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowo['Invois_No']."</td>
 <td>".$rowo['Payment_Time']."</td>
 <td>".$rowo['Payment_Detail']."</td>
 <td>".$rowo['Booking_Time']."</td> 
 <td>RM ".$rowo['Payment_cost']."</td>
 <td>RM ".$rowo['Payment_remaining']."</td>
 <td><a href=\"http://".$rowo['Payment_pdf']."\"><center><p class=\"fa fa-download\"><br/>Download<p></center></a></td></tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table id=\"example\" class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>No Invois</th>
                                            <th>Tarikh Invois</th>
                                            <th>Jenis</th>
                                            <th>Tarikh Sewaan</th>
                                            <th>Pembayaran</th> 
                                            <th>Balance</th>
                                            <th>Download</th>
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
</script>