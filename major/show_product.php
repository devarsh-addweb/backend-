<?php 
include 'header_a.php';
include 'conn.php';

$q="SELECT * FROM product";
$check=mysqli_query($conn,$q);



?>


<table class="table table-hover mt-3" align="center" cellpadding="5" cellspacing="5" style="border: ; width: 50%; background-color: #e5ffc9;">
	<tr>
		<th>PRO_ID</th>
		<th>PRO_NAME</th>
		<th>PRO_CODE</th>
		<th>PRO_PRICE</th>
		<th>PRO_IMG</th>
		<th>PRO_IMG_S</th>
		<th>PRO_IMG_T</th>
		<th>PRO_DESCRIPTION</th>
		<th>CURRENT_DATE</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php 
		while($row=mysqli_fetch_assoc($check))
		{
			?>
				<tr>
					<th><?php echo $row['pro_id']; ?></th>
					<th><?php echo $row['pro_name']; ?></th>
					<th><?php echo $row['pro_code']; ?></th>
					<th><?php echo $row['pro_price']; ?></th>
					<!-- <th><img src="<?php  $row['$pro_img']; ?> " style="width: 200px; height: 100px;"></th> -->
					<th><?php echo "<img src=".$row['pro_img']; ?></th>
					<th><?php echo $row['pro_img_s']; ?></th>
					<th><?php echo $row['pro_img_t']; ?></th>
					<th><?php echo $row['pro_decs']; ?></th>
					<th><?php echo $row['currrent_date']; ?></th>
					<th><a href="delete.php?id=<?php echo$row['pro_id']; ?>">DELETE</a></th>
					<th><a href="edit.php?id=<?php echo$row['pro_id']; ?>">UPDATE</a></th>
				</tr>
			<?php
		}
	?>
	</table>



<?php 
include 'footer.php';
?>