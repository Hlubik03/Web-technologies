<?php
include "indexHead.php";
// file - nacita udaje do pola, t.j. riadok == prvok pola
// file_get_contents - nacita udaje do jedneho retazca
?>

<h1 class="mt-5 mb-4">Importy</h1>

<ul>
	<li><a href="#c1">Data 1</a> [import.csv]</li>
	<li><a href="#c2">Data 2</a> [Import.txt]</li>
	<li><a href="#c3">Cenník NBS</a> [cennik_nbs_1.txt]</li>
</ul>	

<h3 class="mt-4 mb-2" id="c1">Data 1 [import.csv] - funkcia file_get_contents()</h3>
<?php
$data1= file_get_contents('data/import.csv');
$riadky=explode(PHP_EOL,$data1);
echo'<table class="table table-striped">';
for($i=0; $i < count($riadky); $i++) 
{
	$bunky=explode(';',$riadky[$i]);
	echo '<tr>';
	for($j=0; $j < count($bunky); $j++)
		if($i)
			echo "<td>$bunky[$j]</td>"; 
		else
			echo "<th>$bunky[$j]</th>";
	echo '</tr>';
}
echo '</table>';
?>

<h3 class="mt-4 mb-2" id="c2">Data 2 [Import.txt] - funkcia file()</h3>
<?php
$riadky= file('data/import.txt');
echo'<table class="table table-striped">';
for($i=0; $i < count($riadky); $i++) 
{
	$bunky=explode("\t",$riadky[$i]);
	echo '<tr>';
	for($j=0; $j < count($bunky); $j++)
		if($i)
			echo "<td>$bunky[$j]</td>"; 
		else
			echo "<th>$bunky[$j]</th>";
	echo '</tr>';
}
echo '</table>';
?>

<h3 class="mt-4 mb-2" id="c3">Cenník NBS [cennik_nbs_1.txt] - funkcia file()</h3>
<?php
$riadky= file('data/cennik_nbs_1.txt');
echo'<table class="table table-striped">';
for($i=0; $i < count($riadky); $i++) 
{
	echo "<tr>";
	$data=$riadky[$i];
	$stat=substr($data,2,16);
	$mena=substr($data,19,10);
	echo "<td>$stat</td>";
	echo "<td>$mena</td>";

	echo "</tr>";
}
echo '</table>';
?>

<?php
include "indexFoot.php";
?>