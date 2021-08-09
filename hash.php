<?php
$vrt = md5("hello");

if(isset($_POST['submit'])){
	$vrt1 = md5($_POST['word']);

	if($vrt == $vrt1){
		?>
		<script type="text/javascript">
			window.alert('Strings match decrypt');
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('Strings do not match');
		</script>
		<?php
	}
}

?>

<form method="POST">
	<input type="text" name="word">
	<input type="submit" name="submit">
</form>