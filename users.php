<?php  
session_start();
include 'login.php';
if(isset($_SESSION['login_user'])){
header("location:admin.php");
}
?>
 <html>
 <style>
 .login
    {
   color: blue;
   max-width: 300px;
   margin:auto;
   border: 2px solid black;
   padding:20px 30px;
   background: rgba(0,0,0,0.5);
  
     position: absolute;
     top:15%;
     left:40%;
   border-radius:5px;
  }
  
 h1
    {
   font-size: 150%;
     color:white;
  }

 h2
    {
   font-size: 100%;
     color:white;
  }

 h3
    {
   font-size: 100%;
     color:white;
  }
h4
    {
   font-size: 150%;
     color:white;
  } 
a
    {
   color:white;
  }
  
 body
    {
   background-image:url("image/ford1.jpg");
   background-position:right-top;
   background-repeat:no-repeat;
   background-size:cover;
   background-attachment:fixed;
   color: #e7e7e7;   
    }
 
 input
    {
     width:250px;
     height:30px;
  }
 input[type="submit"]
    {
     background: #3399ff;
     border: 0;
     width: 250px;
     height: 40px;
     border-radius: 3px;
     color: white;
    }
    button{
      background-color: black;

    }

  
</style><center>

<body>

<div class="login">

<form  action="" method="post"> 
<h1>LOGIN FORM</h1>
<h2>Name:</h2><input type="text" name="name" placeholder="Name">
<h3>Password:</h3><input type="password" name="password" placeholder="Password">
<input type="hidden" name="cityid" ><br><br>
<input type="hidden" name="admin" >
<input type="submit" name="submit">
</form>
<center><b style="color: aliceblue;">Don't have an account ?</b> <br><a href="registration.php">Registration here</center><!--for centere text-->  
  <span><?php echo $error; ?></span>
</div>
</body>
</html> 