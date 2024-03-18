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

<h1 class="mt-5 mb-4">Kurzový lístok</h1>

<form action="" method="post" class="row gy-2 gx-3 align-items-center">
	<div class="col-auto">
		<label class="visually-hidden" for="den">Deň</label>
		<input type="number" min="1" max="31" id="den" value="" name="den" class="form-control" required placeholder="Deň">
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="mesiac">Mesiac</label>
		<input type="number" min="1" max="12" id="mesiac" value="" name="mesiac" class="form-control" required placeholder="Mesiac">
	</div>
	<div class="col-auto">
		<label class="visually-hidden" for="rok">Rok</label>	
		<input type="number" min="2000" max="" value="" name="rok" class="form-control" required placeholder="Rok">
	</div>
	<div class="col-auto">	
		<button type="submit" class="btn btn-primary" name="zobraz">Zobraz</button>
	</div>
	<div class="col-auto">	
		<a href="?today=1" class="btn btn-success" name="zobraz">Dnešný</a>
	</div>	
</form>
<?php
if(isset($url))
{
	$riadky= file($url);
	echo"<h2 class='my-4'>$riadky[0]</h2>";
	#echo"<pre>";
	#print_r($riadky);
	echo'<table class="table table-striped">';
	for($i=1; $i < count($riadky); $i++)
	{
		$bunky=explode("|",$riadky[$i]);
		#print_r($bunky[3]);
	echo '<tr>';
	$flag=strtolower($bunky[3]);
	if(file_exists("flags/$flag.png"))
		echo"<td><img src='flags/$flag.png' alt='aud'></td>";
	else
		echo"<td></td>";
	for($j=0; $j < count($bunky); $j++)
		if($i > 1)
			echo "<td>$bunky[$j]</td>"; 
		else
			echo "<th>$bunky[$j]</th>";
	echo '</tr>';
	}
    echo '</table>';
}



?>

<?php
include "indexFoot.php";
?>