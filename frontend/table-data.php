<?php 
require_once '../config.php';

$database = new Database();
$data = $database->show();

if($data->num_rows < 1){
?>

<tr>
  <td colspan="10" align="center"> No data found </td>
</tr>

<?php
}

foreach ($data as $key => $entry) {
	?>
	<tr>
  	  <td scope="col"><?php echo $entry['ID']; ?></td>
      <td scope="col"><?php echo $entry['receipt_id']; ?></td>
      <td scope="col"><?php echo $entry['items']; ?></td>
      <td scope="col"><?php echo $entry['phone']; ?></td>
      <td scope="col"><?php echo $entry['amount']; ?></td>
      <td scope="col"><?php echo $entry['buyer']; ?> </td>
      <td scope="col"><?php echo $entry['buyer_email']; ?></td>
      <td scope="col"><?php echo $entry['city']; ?></td>
      <td scope="col"><?php echo $entry['entry_by']==1?'Abdullah':'Ahmad' ?></td>
      <td scope="col">
      	<a href="edit.php?id=<?php echo $entry["ID"]; ?>" class="btn btn-info btn-sm">Edit</a>
      	<a href="../process/delete.php?id=<?php echo $entry["ID"]; ?>" class="btn btn-danger btn-sm"  onclick="return confirm('are you sure?')">Delete</a>
      </td>
  	</tr>
	<?php
}
