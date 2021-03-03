<!DOCTYPE html>
<html>
<head>
	<title>Latihan b</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th></th>
		<?php for ($i =1; $i <= 5; $i++):?>
			<th>kolom <?= $i; ?></th>
		<?php endfor; ?>
	</tr>

	<?php for($j =1;  $j <=5; $j++): ?>
		<tr> 
			<th>baris <?= $j ?></th>
			<?php for ($i=1; $i <=5 ; $i++) : ?>

			<td><?php echo "baris $j,kolom $i"; ?></td>

		<?php endfor; ?>
	</tr>
<?php endfor; ?>
</table>
</body>
</html>