
  if(isset($_POST['name']) &&  isset($_POST['gender'])&& isset($_POST['email']) &&   isset($_POST['phone'])&&  isset($_POST['address'])&&  isset($_POST['city'])&&isset($_POST['district']) && isset($_POST['pass'])&& $_POST['cpass']);
  {

       echo "ok";
    $uname = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $phone = test_input($_POST['phone']);
    $address = test_input($_POST['address']);
    $city = test_input($_POST['city']);
    $district = test_input($_POST['district']);
    $pass = test_input($_POST['pass']);
    $cpass = test_input($_POST['cpass']);

   // $slq = "insert into registration(username,gender,email,phone,address,city,district,password,confirmpassword)VALUES ('$uname','$gender','$email','$phone',
//'$address','$city','$district','$pass','cpass')";

    //$insert = $connect->query($slq);
    //if ($insert){
      //  echo 'done';
    //}


if($_POST['name']==''){
    echo '<script>alert("please enter the name first");</script>';
}
session_start();
$_SESSION['login_user']= $uname;

