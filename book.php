<?php
    $conn = mysqli_connect("localhost", "root", "", "bistro");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$uname = $_REQUEST['uname'];
		$phonenumber = $_REQUEST['phonenumber'];
		$email = $_REQUEST['email'];
		$extramembers = $_REQUEST['extramembers'];
		$bookdate = $_REQUEST['bookdate'];
		
		// Performing insert query execution
		// here our table name is book_tbl
		$sql = "INSERT INTO book_tbl VALUES ('$uname','$phonenumber','$email','$extramembers','$bookdate')";
		
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$uname\n $phonenumber\n "
				. "$email\n $extramembers\n $bookdate");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		// Close connection
		mysqli_close($conn);
?>