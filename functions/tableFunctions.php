<?php

function getTable($rows, $headers) {
		?>

		<table border="1">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th class="table-header-custom" ><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row) { ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++) {?>
			    	<?php if ($k == 0){ ?>
			    		<td class="table-row-custom"><?php echo '<a href=#?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td class="table-row-custom"><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php } ?>
			    </tr>
			<?php } ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "categories";
	$headers[] = "name";
    $headers[] = "type";
	$headers[] = "source";
	return $headers;
}

function getHeaderTableCategorie() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "categories";
	return $headers;
}

function getHeaderTableUser() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "addresses_id";
	$headers[] = "role";
    $headers[] = "firstname";
	$headers[] = "lastname";
	$headers[] = "date_of_birth";
	$headers[] = "email";
	return $headers;
}

?>





 