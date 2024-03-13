<?php
    $conn = mysqli_connect("localhost", "root", "", "bistro");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

        $cardname = $_REQUEST['cardname'];
		$cardnumber = $_REQUEST['cardnumber'];
		$expyear = $_REQUEST['expyear'];

        $sql = "INSERT INTO cart_detail VALUES ('$cardname','$cardnumber','$expyear')";

        if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

        	echo nl2br("\n$cardname\n $cardnumber\n "
				. "$expyear");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		// Close connection
		mysqli_close($conn);

?>

