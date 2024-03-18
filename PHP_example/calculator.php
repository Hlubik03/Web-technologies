<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Kalkulátor</h1>

<form action="" method="post" class="row gy-2 gx-3 align-items-center">
	<div class="col-auto">
		<label class="visually-hidden" for="den">Deň</label>
		<input type="number" class="form-control mb-2 mr-sm-2" min="1" max="31" name="den" value="" required placeholder="Deň">
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="mesiac">Mesiac</label>
		<input type="number" class="form-control mb-2 mr-sm-2" min="1" max="12" name="mesiac" value="" required placeholder="Mesiac">
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="rok">Rok</label>
		<input type="number" class="form-control mb-2 mr-sm-2" min="2000" max="" value="" name="rok" required placeholder="Rok">
	</div>	

<?php

?>
	<div class="col-auto">
		<label class="visually-hidden" for="hodnota">Hodnota</label>
		<input type="text" class="form-control mb-2 mr-sm-2" name="hodnota" placeholder="hodnota" required>
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="zMeny">Prevod z meny</label>		
		<select id="zMeny" name="zMeny" class="form-control mb-2 mr-sm-2" required>	
			<option value="">Prevod z meny</option>
	<?php

	?>
		</select>
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="doMeny">Prevod do meny</label>
		<select id="doMeny" name="doMeny" class="form-control mb-2 mr-sm-2" required>
			<option value="">Prevod do meny</option>
	<?php

	?>
		</select>
	</div>
	<div class="col-auto">
		<button type="submit" class="btn btn-primary mb-2 mr-sm-2" name="vypis">></button> 
	</div>
	<div class="col-auto">
	<?php

	?>
	</div>
</div>  

</form>

<?php
include "indexFoot.php";
?>