<?php

     include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
      <link rel="stylesheet" href="styles.css"> 
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<header> 
            <div class="logo">
            <img src="http://localhost/library/images/logo.png" height="120px" width="120px">
        </div>
            <nav>
                 <ul> <br>
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="books.php">Books</a></li> 
                    <li><a href="student_login.php">Student_Login</a></li>
                    <li><a href="registration.php">Registration</a></li> 
                    <li><a href="feedback.php">Feedback</a></li>
                 </ul> 
            </nav>
           </header>
<h2>List Of Books</h2>
<?php

		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>"
;	?>
</body>
</html>