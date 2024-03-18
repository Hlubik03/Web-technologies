<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Formuláre (Forms)</h1>

<div class="row">
	<div class="col-sm-6">
<?php

?>
<!-- zaciatok formulara -->
<form action="form_show.php" method="post">

<div class="row mb-3">
	<div class="col-6">
		<label class="form-label" for="login">Login</label>
		<input type="text" class="form-control" id="login" name="login" value="" required>
	</div>
	<div class="col-6">
		<label class="form-label" for="heslo">Heslo</label>
		<input type="password" class="form-control" id="heslo" name="heslo">
	</div>
</div>

<div class="mb-3">
	<label class="form-label" for="email">Emailová adresa</label>
	<input type="email" class="form-control" id="email" name="email" value="" required>
</div>

<div class="row mb-3">
	<div class="col-6">
		<label class="form-label" for="email">Pohlavie</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" value="Muž" id="pohlavie1" name="pohlavie">
			<label class="form-check-label" for="pohlavie1">Muž</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" value="Žena" id="pohlavie2" name="pohlavie" checked>
			<label class="form-check-label" for="pohlavie2">Žena</label>
		</div>
	</div>
	<div class="col-6">
		<label class="form-label" for="email">Koníčky</label>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="Hudba" id="konicky1" name="konicky1">
			<label class="form-check-label" for="konicky1">Hudba</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="Šport" id="konicky2" name="konicky2" checked>
			<label class="form-check-label" for="konicky2">Šport</label>
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-6">
		<label class="form-label" for="stat">Štát</label>
		<select class="form-select" id="stat" name="stat">
			<option>Slovak republic</option>
<?php

$countries = file('data/country.txt');
for($i; $i < count($countries); $i++) 
    echo "<option>$countries[$i]</option>";{

}

?>
		</select>
	</div>
	<div class="col-6">
		<label class="form-label" for="farba">Farba</label>
		<input type="color" class="form-control form-control-color" id="farba" name="farba" value="">
	</div>
</div>

<div class="mb-3">
	<label class="form-label" for="opis">Opis</label>
	<textarea class="form-control" id="opis" name="opis" rows="6" placeholder="Sem vložte text"></textarea>
</div>

<div class="mb-3">
    <button type="button" class="btn btn-primary" name="button">Nič nerobím</button>
    <button type="submit" class="btn btn-success" name="submit">Odosielam</button>
    <button type="reset" class="btn btn-secondary" name="reset">Resetujem</button>
</div>

</form>
<!-- koniec formulara -->
	</div>	
</div>	

<?php

?>

<?php
include "indexFoot.php";
?>