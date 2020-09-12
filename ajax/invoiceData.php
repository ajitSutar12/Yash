<?php
    include_once('../config/config.php');
    $count = 1;
    $getCustomerDetails = mysqli_query($con,"SELECT DISTINCT i.invoice_id,i.invoice_date,c.name FROM `invoice_master` as i INNER JOIN customer_master as c on c.id = i.cust_id");
    while($row = mysqli_fetch_assoc($getCustomerDetails))
    {
        $id = $row['invoice_id'];
?>
<tr>
    <!-- <td><?php echo $count;?></td> -->
    <td><a href="editBill.php?id=<?php echo $id;?>"><i class="ti-pencil-alt" style="color:green">  </i></a></td>
    <td><?php echo $row['invoice_id'];?></td>
    <td><?php echo $row['invoice_date'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><a href="invoice.php?invoiceID=<?php echo $id;?>"><i class="ti-printer"></i></a></td>
</tr> 
<?php $count++; }?>

