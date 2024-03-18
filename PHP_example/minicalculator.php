<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Kalkulačka</h1>

<?php
$v='';
// Spracovanie udajov
if (isset($_POST['run']))
{
	$c1= str_replace(",",".",$_POST['c1']);
	$c2= str_replace(",",".",$_POST['c2']);
	$o= $_POST['o'];

	if(!is_numeric($c1))
	{
		echo showBox("c1 = $c1:	nie je cislo","danger");
		$c1='';
		//include "indexFoot.php";
		//exit;
	}

	if(!is_numeric($c2))
	{
		echo showBox("c2 = $c2:	nie je cislo","danger");
		$c2='';
		//include "indexFoot.php";
		//exit;
	}

	if($c1 && $c2)
	{
		if($o == '+')
			$v= $c1 + $c2;
		elseif($o == '-')
			$v= $c1 - $c2;
		elseif($o == '*')
			$v= $c1 * $c2;
		elseif($o == '/')
			$v= $c1 / $c2;
		elseif($o == '%')
			$v= $c1 % $c2;
	}
}
else{
	$c1= '';
	$c2= '';
	$o= '*';
}
?>

<form action="" method="post"><!-- ak nie je uvedeny ACTION, udaje spracovava ten isty subor -->
	<div class="row">
		<div class="col-sm-2">
			<div class="form-group">
				<input type="text" class="form-control" name="c1" id="c1" value="<?php echo $c1; ?>" placeholder="zadaj číslo" required>
			</div>
		</div>
		<div class="col-sm-1">
			<div class="form-group">
				<select class="form-control" name="o" id="o">
					<option <?php if($o== '+') echo 'selected';?>>+</option>
					<option <?php if($o== '-') echo 'selected';?>>-</option>
					<option <?php if($o== '*') echo 'selected';?>>*</option>
					<option <?php if($o== '/') echo 'selected';?>>/</option>
					<option <?php if($o== '%') echo 'selected';?>>%</option>
				</select>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="form-group">
				<input type="text" class="form-control" name="c2" id="c2" value="<?php echo $c2; ?>" placeholder="zadaj číslo" required>
			</div>		
		</div>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-success" name="run">=</button>
			<button type="submit" class="btn btn-danger" name="delete">DEL</button>
		</div>
		<div class="col-sm-3">
			<div class="form-control"><?php echo $v; ?></div>
		</div>
	</div>
</form>


<?php
include "indexFoot.php";
?>