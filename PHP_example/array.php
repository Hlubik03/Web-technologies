<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Polia (Array)</h1>

<h3 class="mt-3 mb-2">Indexové pole</h3>
<?php
$pole1 = array(2,'ahoj','Peter',3.14);
$pole1[]=10;//4 poz
$pole1[]='text';//5 poz
$pole1[50]=20;
$pole1[]=10;


echo '<hr>';
echo '<h5>Výpis poľa cez print_r</h5>';
print_r($pole1);
echo '<hr>';
echo '<h5>Výpis poľa cez var_dump</h5>';
var_dump($pole1);
echo '<hr>';
echo '<h5>Výpis jedného prvku poľa</h5>';
echo $pole1[2];
echo '<hr>';
echo '<h5>Výpis pomocou implode</h5>';
echo implode(', ',$pole1);
echo '<hr>';
?>
<h3 class="mt-3 mb-2">Asociatívne pole</h3>
<?php
$day = array(
            'Mon' => 'Pondelok', 
            'Tue' => 'Utorok', 
            'Wed' => 'Streda',
            'Thu' => 'stvrtok', 
            'Fri' => 'Piatok', 
            'Sat' => 'Sobota', 
            'Sun' => 'Nedela' //Index je Sun a hodnota je Nedela
            );

echo '<hr>';
echo '<h5>Výpis prvku MON</h5>';
echo $day['Mon'];
echo '<h5>Aktuálny deň &ndash; 3 angl. písmená</h5>';
echo date('D');
echo '<h5>Aktuálny deň &ndash; slovenský názov</h5>';
echo $day[date('D')];
echo '<hr>';
echo '<h5>Výpis pomocou implode &ndash; anglické názvy </h5>';
echo '<hr>';
echo '<h5>Výpis pomocou implode &ndash; slovenské názvy</h5>';
echo implode(', ',$day);

echo '<hr>';
?>
<h3 class="mt-3 mb-2">Dvojrozmerné pole</h3>
<?php
echo '<hr>';
$days['sk']['Mon'] = 'Pondelok'; 
$days['sk']['Tue'] = 'Utorok';
$days['sk']['Wed'] = 'Streda';
$days['sk']['Thu'] = 'stvrtok'; 
$days['sk']['Fri'] = 'Piatok';
$days['sk']['Sat'] = 'Sobota';
$days['sk']['Sun'] = 'Nedela';

$days['en']['Mon']	= 'Monday'; 

echo 'Aktuálny deň v SK a EN jazyku:<br>';
echo $days['sk'][date('D')];
echo '<hr>';
echo '<h5>Výpis pomocou implode</h5>';
echo implode('; ',$days['sk']);

echo '<br>';

echo '<hr>';
?>
<h3 class="mt-3 mb-2">Využitie cyklov for, foreach a while pri práci s poľami</h3>
<?php
echo '<pre>';
print_r($pole1);
echo '</pre>';

echo '<hr>';
echo '<h5>Výpis pomocou for</h5>';
for($i=0; $i<=51; $i++)
{
    if(isset($pole1[$i]))
    {
        echo $pole1[$i].'<br>';
    }
}
echo '<hr>';
echo '<h5>Výpis pomocou foreach</h5>';
foreach($pole1 as $key=>$value)
{
    echo $value.'<br>';
}
echo '<hr>';
echo '<h5>Výpis pomocou while</h5>';
$i=0;
while($i < count($pole1))
    {
        if(isset($pole1[$i]))
        {
            echo $pole1[$i].'<br>';
        }
        $i++;
    }
echo '<hr>';
echo '<h5>Výpis dvojrozmerného poľa pomocou foreach</h5>';

?>
<div class="mb-5"></div>


<?php
include "indexFoot.php";
?>