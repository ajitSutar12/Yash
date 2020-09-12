<?php
    include_once('../config/config.php');
    $getCustomerDetails = mysqli_query($con,"select * from customer_master");
    while($row = mysqli_fetch_assoc($getCustomerDetails))
    {
        $id = $row['id'];
?>
<tr>
    <td><a href="editCustomer.php?id=<?php echo $id;?>"><i class="ti-pencil-alt" style="color:green">  </i></a><i class="ti-trash" style="color:red" onClick="deleteCustomer(<?php echo $id?>)"></i></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['gst'];?></td>
    <td><?php echo $row['pan'];?></td>
</tr> 
<?php }?>

