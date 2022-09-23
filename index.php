<?php
  session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Online Library Management System</title>
    </head>
    <body>
        <div class="wrapper">
          <header> 
            <div class="logo">
            
            <img src="http://localhost/library/images/logo.png" height="120px" width="120px">
        </div>

        <?php
   echo $_SESSION['login_user'];
?>
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
            <div class="sec_img">
            <br><br><br><br>
            <div class="container">
                <h1 style="text-align:center; color:white; font-size:40px; word-spacing: 5px;">Welcome to Library</h1><br><br>
                <h1 style="text-align:center; color:white; font-size:40px;">Opens at : 9:00 AM </h1><br><br>
                <h1 style="text-align:center; color:white; font-size:40px;">Closes at : 5:30 PM </h1><br><br>
            </div>    
            </div>        
           </section>

           <footer>

             <p>
<br>
               &#169;	All  Rights  Reserved
          </p>

         </footer>      
    </div>

    </body>
</html>