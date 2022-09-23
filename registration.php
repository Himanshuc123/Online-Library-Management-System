<?php
  include "connection.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Student Registration</title>
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

    <section>
        <div class="reg_img">
            <br> <br><br>
                <h1 style="text-align: center; font-size:35px; font-family: lucida Console;color: white;">
                Library Management System</h1><br>
                <h1 style="text-align: center; font-size:25px;color: white;">User Registration Form</h1><br>
                <form name="Registration" action="" method="POST">
                    <br><br>
                    <input type="text" name="firstname" placeholder="First Name" required=""style="width:250px; height:40px"><br><br>
                    <input type="text" name="lastname" placeholder="Last Name" required=""style="width:250px; height:40px"><br><br>
                    <input type="text" name="username" placeholder="Username"style="width:250px; height:40px"><br><br>
                    <input type="password" name="password" placeholder="Password" required=""style="width:250px; height:40px"><br><br>
                    <input type="text" name="rollno" placeholder="Rollno" required=""style="width:250px; height:40px"><br><br>
                    <input type="text" name="email" placeholder="Email" required=""style="width:250px; height:40px"><br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"></div></div>
                </form>
           </div>
        </section>

        
<?php

if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT username from `student`";
    $res=mysqli_query($db, $sql);

    while($row=mysqli_fetch_assoc($res))
    {
       if($row['username']==$_POST['username'])
       {
        $count=$count+1;
       }
    }

    if ($count==0)

    {mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]','$_POST[rollno]','$_POST[email]'); ");


?>
     <script type="text/javascript">
        alert("Registration Successful");
     </script>
<?php
}
   else
   {
       ?>
        <script type="text/javascript">
           alert("The Username already exist");
           </script>
    <?php
   }
}

?>

    </body>
    </html>   
