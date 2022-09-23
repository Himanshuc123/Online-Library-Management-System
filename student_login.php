<?php
 include "connection.php";
 session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Student Login</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <div class="log_img">
        <br> <br><br>
    <center>
            <h1 style="text-align: center; font-size:35px; font-family: lucida Console;color: white;">
            Library Management System</h1><br>
            <h1 style="text-align: center; font-size:25px;color: white;">User Login Form</h1><br>

            <form name="login" action="" method="POST">
                <br><br>
                <div class="login">
                <input class="form-control" type="text" name="username" placeholder="Username" required="" style="width:250px; height:45px"><br>
                <input class="form-control" type="password" name="password" placeholder="Password" required=""style="width:250px; height:45px"><br>
        <input class="btn btn-detault" type="submit" name="submit" value="Login" style="color:black; width:70px; height:35px">
                </div>
            </form>
    </center>
            <p>
                <br><br> <br><br>
                <a style="color:white;" href="">Forgot Password?</a> &nbsp &nbsp
                New to this website?<a style="color:white;" href="registration.php">Sign up</a>
            </p> 
       </div>
    </section>

    <?php
   if(isset($_POST['submit']))
   {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <!--
        <script type="text/javascript">
            alert=("The username and password doesn't match.");
        </script>
        -->
        <div>
        <div class="alert alert-warning" style="width:700px; text-align:center; background-color:#de1313; color:white;">
        <strong>The username and password doesn't match</strong>
    </div>
    </div>
        <?php    
    }
    else
    {
        $_SESSION['login_user'] =$_POST['username'];
        ?>
        <script type="text/javascript">
            window.location="index.php"
            </script>
<?php
    }

   }
       ?>


</body>
</html>