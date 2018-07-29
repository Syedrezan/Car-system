<html>
<head>

<script>
function Submit(){
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{6})$/;
    var uname = document.form.name.value,
        gender = document.form.gender.value,
        email = document.form.email.value,
        phone = document.form.phone.value,
        address = document.form.address.value,
        city = document.form.city.value,
        district = document.form.district.value,
        password = document.form.pass.value,
        cpassword = document.form.cpass.value;
    if( uname == "" )
   {
     document.form.name.focus() ;
     document.getElementById("errorBox").innerHTML = "enter the first name";
     return false;
   }
    if(document.form.gender[0].checked == false && document.form.gender[1].checked == false){
    document.getElementById("errorBox").innerHTML = "select your gender";
    return false;
   }
   
   if (email == "" )
    {
        document.form.email.focus();
        document.getElementById("errorBox").innerHTML = "enter the email";
        return false;
     }else if(!emailRegex.test(email)){
        document.form.email.focus();
        document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
        return false;
     }
     
       if (phone == "" )
    {
        document.form.phone.focus();
        document.getElementById("errorBox").innerHTML = "enter the phone number!";
        return false;
     }else if(!phoneno.test(phone)){
        document.form.phone.select();
        document.getElementById("errorBox").innerHTML = "Re-enter the valid phone number!";
        return false;
     }
    
     if (address == "") {
        document.form.address.focus();
        document.getElementById("errorBox").innerHTML = "select the Address!";
        return false;
     }
     if (city == "") {
        document.form.city.focus();
        document.getElementById("errorBox").innerHTML = "select the City!";
        return false;
     }
     if (district == "") {
        document.form.district .focus();
        document.getElementById("errorBox").innerHTML = "select the District!";
        return false;
     }
     
     
    if(password == "")
     {
         document.form.pass.focus();
         document.getElementById("errorBox").innerHTML = "enter the password";
         return false;
     }
        
         
    if(cpassword == "")
     {
         document.form.cpass.focus();
         document.getElementById("errorBox").innerHTML = "enter the confrim password";
         return false;
     }
    if(cpassword !=  password){
        document.form.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Password  are not matching, re-enter again";
        return false;
     }
   
    if(uname != '' && gender != '' && email != '' && phone != '' &&  address != '' && city != '' && district != '' && password != '' && cpassword != ''){
            document.getElementById("errorBox").innerHTML =  "  suceessfully submitted";
            }
    
          
}

</script>

 <style>
 .login
    {
     color: white;
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
 
 .input
    {
     width:250px;
     height:30px;
    }
 #sign_user{
 font-size:20px;
 color:#FFF;
 text-align:center;
 background-color:#3B5998;
 padding:10px;
 margin-top:10px;
 cursor: pointer;
 }
#errorBox{
 color:#F00;
 }

</style></head>
<center>

<body>

   <div class="login">
      <form action="registerdb.php" method="post" name="form">
         <fieldset  style="color:   #00bfff;">Registration form</fieldset>
         <br>
         <div id="errorBox"></div>
         <div>
         <input  placeholder="Username" name="name" type="text">  
        </div>
        <br>
        <div>
           <input name="gender" type="radio" value="male" checked><label>male</label>
           <input name="gender" type="radio" value="female"><label>female</label>  
        </div>
        <br>
        <div>
           <input placeholder="E-mail" name="email" type="email" autofocus>  
        </div>   
            <br>
         <div>
            <input  placeholder="Phone" name="phone" type="text" autofocus>  
         </div>      
        <br>
          <div>
              <input  placeholder="Address" name="address" type="text" autofocus>  
               </div>
                  <br>
             <div>
                <select name="city" size="1" style="width:154px;">
                    <option value="" selected>City</option>
                    <option value="dhanmondi">Dhanmondi</option>
                    <option value="khilgoan">khilgoan</option>  
                    <option value="gulshan">gulshan</option>    
                    <option value="bashundhara">bashundhara</option>    
                    <option value="baridhara">baridhara</option>    
                    <option value="uttara">uttara</option>
                    <option value="banshkhali">banshkhali</option>
                    <option value="agrabad">agrabad</option>    
                    <option value="sitakunda">sitakunda</option>  
                    <option value="hathazari">hathazari</option>   
                    <option value="Phultala">Phultala</option>         
                    <option value="Paikgachha">Paikgachha</option>  
                    <option value="Batiaghata">Batiaghata</option>  
                    <option value="Rupsa">Rupsa</option> 
                    <option value="Godagari">Godagari</option>   
                    <option value="Charghat">Charghat</option>         
                    <option value="Durgapur">Durgapur</option>  
                    <option value="Baghmara">Baghmara</option>  
                    <option value="Mohanpur">Mohanpur</option>  
                </select>
            </div>
            <br>
            <div>
             <select name="district" style="width:154px;">
                 <option value="" selected>District</option>
                     <option value="Dhaka">Dhaka</option>
                     <option value="Chittagoan">Chittagoan</option>  
                     <option value="Khulna">Khulna</option>  
                     <option value="Rajshahi">Rajshahi</option>  
            </select>
        </div>
           <br>
        <div>
        <input  placeholder="Password" name="pass" type="password">  
        </div>    
        <br>
        <div>
            <input placeholder="Confirm Password" name="cpass" type="password" value="">  
        </div>
       <div> 
        <hr>                            
            <button id="sign_user" onClick="Submit()">Sign Up </button>  
        </div> 
    </form>  
        <center>
                <b>Already registered ?</b> 
            <br>
            <a href="users.php">Login here</a>
        </center><!--for centered text-->  

</div>  
</body>
</html> 





