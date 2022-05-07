<?php   
include("header.php");
?>

<center><h1><b><font color="orange">-{ ZON Klien }-</font></b></h1></center>
<br/><br/>

 <p style="text-align:right"><a href="add_client.php"><span class="fa fa-plus-square"><b>+</b> Add New Client</span></a></a>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <?php    	 
         $queryi="SELECT * FROM client ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei);
		  
		
		  
		$queryo="SELECT * FROM client ORDER BY Client_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();
	while($rowo = mysql_fetch_array($resourceo)){
 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowo['Client_ID']."</td>
 <td>".$rowo['Client_Name']."</td>
 <td>".$rowo['Client_Company']."</td>
 <td>".$rowo['Client_Email']."</td> 
 <td>".$rowo['Client_Phone']."</td> 
 <td><center>".$rowo['Loyalty']."</center></td> 
 <td><center>".$rowo['Loyalty_history']."</center></td> 
 <td><center><a href=\"updateprofile.php?id=".$rowo['Client_ID']."\">edit</a></center></td> </tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table id=\"example\" class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Email</th>
                                            <th>Phone</th> 
                                            <th>Loyalty Level</th>
                                            <th>Loyalty History</th>
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