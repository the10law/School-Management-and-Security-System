if(isset($_POST['fdate']) && isset($_POST['tdate']) )
{
	$_SESSION['fdate']=$_POST["fdate"];
  $_SESSION['tdate']=$_POST["tdate"];
}
$fdate=$_SESSION['fdate'];
$tdate=$_SESSION['tdate'];
	$con=$_SESSION['con'];
    $sql="SELECT * FROM attendance_log WHERE date1>='$fdate' AND date1<='$tdate'";
    $result=mysqli_query($con,$sql);
      ?>
      <h2>
      <table border="1">
          <tr>
               <th>Institute ID</th>     
               <th>RFID Number</th>
               <th>REGD. No.</th>
               <th>Date</th>
               <th>Time</th>
               <th>Present Status</th>
               <th>SMS Status</th>
          </tr>
          <?php 
               while ($row=mysqli_fetch_assoc($result))  
               { ?>
                    
                    <tr>
                    	<td> <?php echo $row['institute_id']; ?></td>
                      <td> <?php echo $row['rfid']; ?></td>
                      <td> <?php echo $row['regno']; ?></td>
                      <td> <?php echo $row['date1']; ?></td>
                      <td> <?php echo $row['time1']; ?></td>
                      <td> <?php echo $row['present_stat'];?></td>
                      <td> <?php echo $row['msg_stat']; ?></td>
                    </tr>
             <?php }  ?>
          
     </table>  
</h2>