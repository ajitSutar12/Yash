<?php
    include_once('../config/config.php');
    $getCustomerDetails = mysqli_query($con,"select * from material_master");
    while($row = mysqli_fetch_assoc($getCustomerDetails))
    {
        $id = $row['id'];
?>
<tr>
    <td><a href="editMaterial.php?id=<?php echo $id;?>"><i class="ti-pencil-alt" style="color:green">  </i></a><i class="ti-trash" style="color:red" onClick="deleteCustomer(<?php echo $id?>)"></i></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['unit'];?></td>
    <td><?php echo $row['hsn'];?></td>
    <td><?php echo $row['sgst'];?></td>
    <td><?php echo $row['cgst'];?></td>
    <td><?php echo $row['igst'];?></td>
    <td><?php echo $row['weight'];?></td>
</tr> 
<?php }?>

