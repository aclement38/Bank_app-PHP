
<?php include('header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<table class="table">
				<thead>
					<th>ID</th>
					<th>USERNAME</th>
					<th>DEPOSITE</th>
					<th>CARD</th>
				</thead>
				<tbody>
					<?php 
						while($row = mysqli_fetch_assoc($query)){
							$id = $row['id'];
							$username = $row['username'];
							$deposite = $row['deposite'];
							$card = $row['card'];
							?>
							<tr>
								<td><?php echo "$id"; ?></td>
								<td><?php echo "$username"; ?></td>
								<td><?php echo "$deposite"; ?></td>
								<td><?php echo "$card"; ?></td>
							</tr>
							<?php 
						}


					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>