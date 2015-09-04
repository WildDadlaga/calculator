<html>
<head> Calculator </head>
<body>


<form name="calculator" action="calculator.php" method="POST">
<input type="number"  name="value1">

<select name="action">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/"selected>/</option>
</select>

<input type="number"  name="value2">
<input type="submit" value="click">
</form>
<?php
    if(isset($_POST['value1']) && isset($_POST['value1']) && isset($_POST['value1'])){
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $action = $_POST['action'];
    
    
        if($action=="+"){
            echo "Answer=";
            echo $value1 + $value2;
        }
        if($action=="-"){
            echo "Answer=";
            echo $value1 - $value2;
        }
        if($action=="*"){
            echo "Answer=";
            echo $value1 * $value2;
        }
        if($action=="/"){
            echo "Answer=";
            echo $value1 / $value2;
        }
    }
    ?>
</body>
</html>