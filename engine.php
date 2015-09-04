<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tooni mashin</title>
<body>


<form action="engine.php" method="POST">
Tooni mashin
<br />
<br>
<input type="number" name="loanamount" />
<br><br>
<input type="number" name="interestrate" />
<br><br>
<input type="number" name="length" />
<br><br>
<input type="submit" value="Tootsooloh" />
</form>

<br>
<?php 
	if(isset($_POST["loanamount"])&&isset($_POST["interestrate"])&&isset($_POST["length"])){
		
		$P=$_POST{"loanamount"};
		$r=$_POST{"interestrate"}/100/12;	//neg sarin huu (butarhai toogoor)
		$l=$_POST["length"];
		
		$tmp=pow(1+$r,$l);
		$A=$P*$r*$tmp/($tmp-1);  //$P -> zeelin hemje  $A -> neg sard tuluh tulbur  $A=$huugiin+$undsen
		echo "sariin tulbur " . number_format($A,2) ."<br>";
		
		for($etssiinuldegdel=floatval($P),$time=0;$time<$l;$time++){
			$huugiin=$etssiinuldegdel*$r;
			$sariinuldegdel=$A-$huugiin;
			$etssiinuldegdel-=$sariinuldegdel;
			
			echo "undsen " . number_format($sariinuldegdel,2) . "    ";
			echo "huugiin " . number_format($huugiin,2). "    ";
			echo "niit uldegdel " . number_format($etssiinuldegdel); 
			echo "<br>";						
		}
	}
	
	?>



</body>
</html>