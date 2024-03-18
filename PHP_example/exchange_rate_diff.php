<?php
include "indexHead.php";
?>

<?php
if(isset($_GET['today']))
{
	$date=date("d.m.Y");
	$url='https://www.cnb.cz/cs/financni_trhy/devizovy_trh/kurzy_devizoveho_trhu/denni_kurz.txt?date=' . $date;
}

if(isset($_POST['den']))
{
	$date=$_POST['den'] . '.' . $_POST['mesiac'] . '.' . $_POST['rok'];
	echo $date;
	$url='https://www.cnb.cz/cs/financni_trhy/devizovy_trh/kurzy_devizoveho_trhu/denni_kurz.txt?date=' . $date;
}
?>

<h1 class="mt-5 mb-4">Kurzový lístok - porovananie s</h1>


<form action="" method="post">
	<button type="submit" class="btn btn-secondary" name="vlozit">Vložiť dátumy</button> <b>Dátum 1</b>: <?php  ?> - rýchle vyplnenie formulára 
</form>

<hr>

<form action="" method="post" class="row gy-2 gx-3 align-items-center">
	<div class="row">
		<div class="col-auto">
			<div class="mb-1"><b>Dátum 1</b></div>
			<div class="row">
				<div class="col-auto">
					<label class="visually-hidden" for="den1">Deň</label>
					<input type="number" min="1" max="31" id="den1" value="" name="den1" class="form-control" required placeholder="Deň">
				</div>
				<div class="col-auto">
					<label class="visually-hidden" for="mesiac1">Mesiac</label>
					<input type="number" min="1" max="12" id="mesiac1" value="" name="mesiac1" class="form-control" required placeholder="Mesiac">
				</div>
				<div class="col-auto">
					<label class="visually-hidden" for="rok1">Rok</label>	
					<input type="number" min="2000" max="<?php echo date('Y'); ?>" value="" name="rok1" class="form-control" required placeholder="Rok">
				</div>
			</div>
		</div>
		<div class="col-auto">
			<div class="mb-1"><b>Dátum 2</b></div>
			<div class="row">
				<div class="col-auto">
					<label class="visually-hidden" for="den2">Deň</label>
					<input type="number" min="1" max="31" id="den2" value="" name="den2" class="form-control" required placeholder="Deň">
				</div>
				<div class="col-auto">
					<label class="visually-hidden" for="mesiac2">Mesiac</label>
					<input type="number" min="1" max="12" id="mesiac2" value="" name="mesiac2" class="form-control" required placeholder="Mesiac">
				</div>
				<div class="col-auto">
					<label class="visually-hidden" for="rok2">Rok</label>	
					<input type="number" min="2000" max="<?php echo date('Y'); ?>" value="" name="rok2" class="form-control" required placeholder="Rok">
				</div>
			</div>
		</div>
	</div>
	<div class="row my-4">
		<div class="col-auto">	
			<button type="submit" class="btn btn-primary" name="zobraz">Zobraz</button>
		</div>
	</div>
</form>
<?php

?>

<?php
include "indexFoot.php";
?>