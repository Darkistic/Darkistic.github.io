<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<style type="text/css">
body{
  background-color:#aaaabb;}
table.table{
  font-size:1.5em;
  text-align:center;
  width:60%;
  margin-left:auto;
  margin-right:auto;
  border-style:outset;
  border-width:0.3em;
  border-color:#6666dd;}
th.head{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#44bbbb;}
td.cell1{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#8888ff;}
td.cell2{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#88ff88;
}
td:hover{
  background-color:#ffbbff;}

</style>
<title>Workshop 3</title>
</head>

<body>

<table class="table">
<?php

$NumRows=10;
 if(isset($_REQUEST['Submit'])) {
	//get the tableSize and name values from the query string and store them in variables      
	$inputDimension = $_REQUEST['tableSize'];
	$name = $_REQUEST['username'];

	// greeting to the person, e.g. Hello, $name ! 
	echo 'Hello '.$name.'<br />';



	// check the tableSize is_numeric and between [1,10]. If OK, reset $NumRows to it. 
	// otherwise echo an error message
	if(is_numeric($inputDimension) && $inputDimension <= 10 && $inputDimension > 0) {
		$NumRows = $inputDimension;
	}
	else {
		echo "Oops - You didn't enter a valid integer value: ".$inputDimension;
	}
}
echo '<br />';



for($i=1;$i<=$NumRows;$i=$i+1){
	echo '<tr>';
	for($j=1; $j <= $NumRows; $j++) {
		if($i ==1 || $j ==1) {
    		echo '<td class="cell1">'.$i*$j.'</td>';
		}
		else {
			echo '<td class="cell2">'.$i*$j.'</td>';
		}
	}
	echo '</tr>';
}
?>
</table>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
   <p>Please type the size of the table to be generated: 
   <!-- generate input element of type="number", specify name & value range [0,25] -->
	<input type="number" name="tableSize" value="10" min="0" max="25">
   <br /> and your name :
   <!-- generate a text field  -->
   <input type="text" name="username" value="Fred Smith" size="15">
   <br /> and click : 
   <!-- generate a submit button -->
   <input type="submit" name="Submit" value="Submit">
   </p>
</form>

</body>
</html>