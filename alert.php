<?php 
if (isset($_SESSION["alert"])) { ?>
	<div class="alert alert-warning alert-dismissible fade show">
		<?php echo $_SESSION["alert"] ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php
unset($_SESSION["alert"]);
 }
 ?>