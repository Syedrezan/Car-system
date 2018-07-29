<!DOCTYPE html>
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
   background-image:url("image/acc.jpg");
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
<h1>Bank Information</h1>
<h2>Card Number:</h2><input type="number" name="cn" placeholder="Card Number">
<h1>Or</h1>
<h3>Bkash Number:</h3><input type="number" name="bkn" placeholder="Bkash Number"><br><br>
<input type="submit" name="submit">
</form>
<hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if(empty($_POST['cn']) && empty($_POST['bkn'])){
        echo "please enter your card number or bkash number";
     }else{
          echo"Successfully payment!";
     }
}


?>
</div>
</body>
</html> 

