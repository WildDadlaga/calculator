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
		$A=$P*$r*$tmp/($tmp-1);  //$A -> neg sard tuluh tulbur  $A=$huugiin+$undsen
		
		
		for($undsenuldegdel=$P,$time=0;$time<$l;$time++){
			$huugiin=$undsenuldegdel*$r;
			$undsenuldegdel-=$huugiin;
			echo "huugiin" . $huugiin. "  ";
			echo "undsen" . $undsenuldegdel;
			?>
			<br>
			<?php 
			
		}
	}
	
	?>



</body>
</html>