<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Práca s poľom</h1>
<?php    
include "data/pole.php";
//print_r($pole);
?>

<!-- Formular na vyhladavanie textu vo vsetkych polozkach pola --> 
<form action="" method="post" class="mb-5">
    <div class="row">
        <div class="col-6">
            <label class="form-label" for="hladaj">Vyhľadávanie v poli</label>
            <input type="text" class="form-control" id="hladaj" name="hladaj">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3 mb-3">Vyhľadaj</button>
</form>

<?php
// isset($_POST['hladaj']) - bol definovany udaj na vyladavanie?
// Ak ano, v $hladaj je vyhladavany text
// Ak nie, v $hladaj je nic
//print_r($_POST);
if(isset($_POST['hladaj'])){
    $hladaj=$_POST['hladaj'];
}
else{
    $hladaj="";
}

// Zistenie poctu riadkov v poli $pole

// Zaciatok tabulky - vykreslenie
echo '<table class="table table-striped">';
// Prvy riadok tabulky - hlavicka - vykreslenie
echo "<thead>";
echo "<tr>";
echo "<th>#</th>";
foreach ($pole[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";
echo "</thead>";
// Ostatne riadky tabulky - body - vykreslenie
echo "<tbody>";

for($r = 0; $r < count($pole); $r++) 
{
    if(vyhladaj($hladaj,$r))
    {
    echo "<tr>";

        echo "<th>" . ($r+1) . "</th>";
        foreach($pole[$r] as $hodnota)
        {
            echo "<td>$hodnota</td>";
        }


    echo "</tr>";
    }
}


echo "</tbody>";
echo "</table>";
?>
</div>

<?php
include "indexFoot.php";
?>