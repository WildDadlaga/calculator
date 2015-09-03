<html>

<title>Тооны машаан</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body>

<form action="engine.php" method="POST">
Тооны машин<br />
<input type="number" name="var1" />

<SELECT name="Uildel">
<OPTION value="1">+</OPTION>
<OPTION value="2" selected>-</OPTION>
<OPTION value="3">*</OPTION>
<OPTION value="4">/</OPTION>
</SELECT>

<input type="number" name="var2" />

<input type="submit" value="=" />
</form>
<br>


<?php 
	if(isset($_POST["var1"])&&isset($_POST["var2"])&&isset($_REQUEST["Uildel"])){
		
		$a=$_POST{"var1"};
		$b=$_POST{"var2"};
		$uildel=$_REQUEST["Uildel"];
		
		switch($uildel){
			case(1): 		//nemeh
				$hariu=$a+$b; 
				break;
			case(2):		//hasah
				$hariu=$a-$b;
				break;
			case(3):		//urjih
				$hariu=$a*$b;
				break;
			case(4):		//huvaah
				$hariu=$a/$b;
				break;
			default:
				echo "error on case";
				break;
		}
		
		echo $hariu;
	}
?>


</body>
</html>