<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Spracovanie textu</h1>

<h3 class="mt-5 mb-4">Práca s textom</h3>
<?php
$text = 'Ahoj Peter, ako sa máš?';
echo '<h5>Počet znakov v reťazci "Ahoj Peter, ako sa máš?"</h5>';
echo mb_strlen($text);

echo '<h5>Počet slov v reťazci "Ahoj Peter, ako sa máš?"</h5>';
echo str_word_count($text);

echo '<h5>Pozícia slova "ako" v reťazci "Ahoj Peter, ako sa máš?"</h5>';
echo mb_strpos($text, 'ako');

echo '<h5>Nahradenie slova "Peter" za "Ján" v reťazci "Ahoj Peter, ako sa máš?"</h5>';
echo str_replace('Peter','Jan',$text);

echo '<h5>Výber textu od pozície 5 po pozíciu 10 v reťazci "Ahoj Peter, ako sa máš?"</h5>';
echo substr($text,5,5);

echo '<h5>Rozloženie slov v reťazci "Ahoj Peter, ako sa máš?" do poľa</h5>';
$pole=explode(" ",$text);
echo "<pre>";
print_r($pole);
echo "</pre>";
echo '<h5>Spojenie slov do jedného textu - oddeľovač je /</h5>';
echo implode('/',$pole);

echo '<h5>Nachádza sa v reťazci "Ahoj Peter, ako sa máš?" slovo "Ahoj"?</h5>';

if (strpos($text, 'Ahoj') !== false) {
    echo "Ano ";
} else {
    echo "Nie ";
}
echo (strpos($text, 'Ahoj') !== false) ? "yes" : "no";
?>


<h3 class="mt-5 mb-4">Práca s časom</h3>
<?php
$birthDate = mktime(7,30,0,3,7,2003);
echo '<h5>Dátum narodenia - stroj</h5>';
echo $birthDate;
echo '<h5>Dátum narodenia - človek</h5>';
echo date("d.m.Y",$birthDate);
echo "<hr>";
echo date('l',$birthDate);
echo '<h5>Faktúra - vystavenie (aktuálny dátum)</h5>';
echo date("d.m.Y");
echo '<h5>Faktúra - splatnosť (+14 dní)</h5>';
echo date("d.m.Y",strtotime("+14 days"));
echo "<hr>";
echo date("d.m.Y",time() + 14*24*60*60);
echo '<h5>Iný formát dátumu - xth of Month 20XX hour:min:sec am/pm</h5>';
echo date("jS \o\f F Y h:i:s a");

echo '<h5>Výpis poľa z funkcie getdate()</h5>';
echo '<pre>';
$datum= getdate();
print_r(getdate());
echo '</pre>';
echo "<div>Today is ". $datum['weekday']."</div>";
?>

<?php
include "indexFoot.php";
?>