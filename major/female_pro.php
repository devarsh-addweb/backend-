<?php 
include 'header_a.php';
include 'conn.php';

$q="SELECT * FROM female";
$check=mysqli_query($conn,$q);



?>


<table class="table table-hover mt-3" align="center" cellpadding="5" cellspacing="5" style="border: ; width: 50%; background-color:;">
	<tr>
		<th>FEMALE_ID</th>
		<th>PRO_NAME</th>
		<th>PRO_CODE</th>
		<th>PRO_PRICE</th>
		<th>PRO_IMG_F</th>
		<th>PRO_IMG_S</th>
		<th>PRO_IMG_T</th>
		<th>PRO_DESCRIPTION</th>
		<th>PRO_ENTER_TIME</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php 
		while($row=mysqli_fetch_assoc($check))
		{
			?>
				<tr>
					<th><?php echo $row['female_id']; ?></th>
					<th><?php echo $row['pro_name']; ?></th>
					<th><?php echo $row['pro_code']; ?></th>
					<th><?php echo $row['pro_price']; ?></th>
					<th><?php echo "<img src=".$row['pro_img_f']." " ?></th>
					<th><?php echo "<img src=".$row['pro_img_s']." " ?></th>
					<th><?php echo "<img src=".$row['pro_img_t']." " ?></th>
					<th><?php echo $row['pro_description']; ?></th>
					<th><?php echo $row['pro_enter_time']; ?></th>
					<th><a href="delete.php?female_id=<?php echo $row['female_id']; ?>">DELETE</a></th>
					<th><a href="female_edit.php?female_id=<?php echo$row['female_id']; ?>">UPDATE</a></th>
				</tr>
			<?php
		}
	?>
	</table>



<?php 
include 'footer.php';
?>