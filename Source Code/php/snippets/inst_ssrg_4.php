?>
<h2>
	<form name="f1" method="POST">
<?php
     $con=$_SESSION['con'];     
     $regno= $_SESSION["regno"];
         $sql="SELECT * FROM attendance_log WHERE regno='$regno'";
     $result=mysqli_query($con,$sql);
        ?>
     <table border="1">
          <tr>
               <td>RFID Number:</td>  
      <td>Regd. No.:</td>   
      <td>Date:</td>
      <td>Time:</td>
      <td>Entry:</td> 
      <td>SMS Status</td>
          </tr>
          <?php 
               while ( $row=mysqli_fetch_assoc($result)) 
               {?>
                    <tr>
                         <td><?php echo $row['rfid']; ?></td>
                        <td><?php echo $row['regno']; ?></td>
                        <td><?php  echo $row['date1']; ?></td>
                        <td><?php echo $row['time1']; ?></td>
                        <td><?php echo $row['present_stat']; ?></td>
                        <td><?php echo $row['msg_status'];  ?></td>           
                     </tr>
             <?php }
          ?>
          
     </table>  
</form>
</h2>