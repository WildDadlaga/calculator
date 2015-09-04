<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tooni mashin</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="Generator" content="Cocoa HTML Writer">
        <meta name="CocoaVersion" content="1347.57">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
            <style type="text/css">
            </style>
    </head>
<body>



<div class="row">
<div class="col-md-7"  align="center" >
<img class="pic" src="ARD.jpg" align="left">
</div>
<div class="col-md-5"  align="center" >
<table class="table" flames="void" rules="none">
<tr><td><div class="h3" align="center">About us</td>
<td><div class="h3" align="center">Information</td>
<td><div class="h3" align="center">Contact</td>
<td><div class="h3" align="center"></td>
<td><div class="h3" align="center"></td>
<td><div class="h3" align="center"></td>
</tr>
</table>
</div>
</div>

<div class="row">
<div class="col-md-3"  >







<div id="main">
<div class="container">
<div class="row">
<div class="col-sm-3 sidebar">
<div class="subscribe">
<h1 class="title"><i class="fa fa-calculator"></i>Зээлийн <br>тооцоолуур</h1>
<form action="engine.php" method="POST">

<span>Зээлийн хэмжээ:</span>
<input type="number" name="loanamount"  class="form-control" placeholder="Зээлийн хэмжээ"     />
<br>
<span>Зээлийн хүү (%):</span>
<input type="number" name="interestrate" class="form-control" placeholder="Жилийн хүү(%)"  />
<br>
<span>Хугацаа:</span>
<input type="number" name="length" class="form-control" placeholder="Сараар"/>
<br>
<input type="submit" value="Тооцоолох" class="btn btn-lg"  placeholder="Зээл төлөлтийн хугацаа (сараар)"/>
</form>
</div>
</div>

<br>
<div class="col-md-9"  >
<br>
<br>
<br>
<br>


<table border="1" width="100%">

<?php
    

    if(isset($_POST["loanamount"])&&isset($_POST["interestrate"])&&isset($_POST["length"])){
        
        $P=$_POST{"loanamount"};
        $r=$_POST{"interestrate"}/100/12;	//neg sarin huu (butarhai toogoor)
        $l=$_POST["length"];
        
        $tmp=pow(1+$r,$l);
        $A=$P*$r*$tmp/($tmp-1);  //$P -> zeelin hemje  $A -> neg sard tuluh tulbur  $A=$huugiin+$undsen
       
        

        
        echo "<tr><th>Сар</th>";
        echo "<th>Y3T</th>";
        echo "<th>XT</th>";
        echo "<th>TT</th>";
        echo "<th>Үндсэн зээлийн үлдэгдэл</th></tr>";
        
        for($etssiinuldegdel=floatval($P),$time=0;$time<$l;$time++){
            $huugiin=$etssiinuldegdel*$r;
            $sariinuldegdel=$A-$huugiin;
            $etssiinuldegdel-=$sariinuldegdel;
            $Aladin=$time+1;
            
            
            echo "<tr><td>".$Aladin."</td>";
            echo "<td>" .number_format($sariinuldegdel,2)."</td>";
            echo "<td>" .number_format($huugiin,2)."</td>";
            echo "<td>" .number_format($A,2). "</td>";
            echo "<td>" .number_format($etssiinuldegdel,2)."</td></tr>";
            
        }
    }
    ?>
</table>
</div>



</body>
</html>