<?php
    include_once('../config/config.php');
    $count = 1;
    $getCustomerDetails = mysqli_query($con,"SELECT DISTINCT i.challan_id,i.challan_date,c.name FROM `challan_master` as i INNER JOIN customer_master as c on c.id = i.cust_id");
    while($row = mysqli_fetch_assoc($getCustomerDetails))
    {
        $id = $row['challan_id'];
?>
<tr>
    <!-- <td><?php echo $count;?></td> -->
    <td><a href="editChallan.php?id=<?php echo $id;?>"><i class="ti-pencil-alt" style="color:green">  </i></a></td>
    <td><?php echo $row['challan_id'];?></td>
    <td><?php echo $row['challan_date'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><a href="p_challan.php?challan_id=<?php echo $id;?>"><i class="ti-printer"></i></a></td>
</tr> 
<?php $count++; }?>

