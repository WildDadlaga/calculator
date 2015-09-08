<?php


function createUser($x , $y){
		
		include "function.php";		
		$sql = "INSERT INTO usertable VALUE( NULL , \"".$x."\" , \"".$y."\")";
			if ($conn->query($sql) === TRUE) {
			    return login($x ,$y);
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
}    // Input oruulaad id butsaana.
		

function loginDB($x , $y){
		include "function.php";
		$sql = "SELECT id, username,password FROM usertable WHERE username= \"".$x."\" ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
			    while($row = $result->fetch_assoc()) {
						     if($y == $row["password"]){
						     	return $row["id"];
						     }
						     else{
						     	return 0;
						     }
			       
			    }
		} 	else {
		    echo "0 results";
		    return 0;
		}
				$conn->close();

			return 0;
	}    // Login zuv bol id butsaana.



?>