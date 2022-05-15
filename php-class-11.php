<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php 
  //=================Alart message3 function
  function validate($message, $alartType = "danger"){
    return "<div class=\"alert alert-{$alartType} alert-dismissible fade show\" role=\"alert\">
    {$message}!
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>";

  }
  //=====================Validate email function
  function validateEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL )) {
       return true;

} else {
      return false;
    }
    
  }
  //======================Email filter for institute
  function filterEduMail($email,$allEmail){
    $email_arr = explode('@', $email, 2);
    if (in_array($email_arr[1],$allEmail )) {
      return true;
    }
    return false;
  }
//===========================validate user name
function validateUsername($username){
    if (preg_match('/^[a-zA-Z_0-9]{5,20}$/',$username)) {
        return true;
    } else {
        return false;
    }
    
}

//======================This function is for kipping the old value
function oldValue($fieldValue){
     if(isset($_POST[$fieldValue])){
         return $_POST[$fieldValue];
     }else{
         echo " ";
     }
}
//======================clear all old value after Successfully submitted
function clearFormData(){
    $_POST = '';
}


if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $email    = $_POST["email"];
  $phone    = $_POST["phone"];
  $age      = $_POST["age"];
  $gender   = '';
  if(isset($_POST["gender"])){
    $gender   = $_POST["gender"];
  }
  $password = $_POST["password"];
  $agreement = '';
  if(isset($_POST["agreement"])){
    $agreement   = $_POST["agreement"];
  }

 
 
  
  if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($age)  || empty($gender)) {
  $validationMsg = validate('All Fields are required');
  } else if( validateEmail($email) == false){
    $validationMsg = validate('Email is not valied', 'warning');
  } else if( filterEduMail($email,['du.ac.bd','bu.ac.bd', 'ju.ac.bd','ku.ac.bd','cu.ac.bd','ru.ac.bd']) == false){
    $validationMsg = validate('Email is not Eligible', 'warning');
  }else if($age <18 || $age > 60){
    $validationMsg = validate('You are not perfect for learnign PHP programing language', 'warning');
  }else if(validateUsername($username) == false){
    $validationMsg = validate('User name is not valid', 'warning');
  }else if($agreement !== 'yes'){
    $validationMsg = validate('Please agree terms and conditions', 'warning');
  }

  else {
    $validationMsg = validate('Everything is ok', 'success') ;
    clearFormData();
  }
} 


?>


<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding: 80px 80px; box-shadow:0px 0px 10px 0px #a1a1a1; margin-top:30px;">
        <h1 style="text-align:center; margin-bottom:15px;">Register Form</h1>
        <?php 
        if(isset($validationMsg)){
          echo $validationMsg;
        }
        ?>

  <!-- -------------------------form -------------------------------->
   <form method="POST" action="" >
    <div class="form-group">
    <label for="name" class="form-label">User Name:</label>
    <input type="name" class="form-control" name="username" value="<?php echo oldValue("username"); ?>" id="name">
  </div>         
  <div class="form-group">
    <label for="email" class="form-label">Email address:</label>
    <input type="text" class="form-control" name="email" value="<?php echo oldValue("email"); ?>" id="email">
  </div>
  <div class="form-group">
    <label for="phone" class="form-label">Phone:</label>
    <input type="tel" class="form-control" name="phone" value="<?php echo oldValue("phone"); ?>" id="phone">
  </div>
  <div class="form-group">
    <label for="age" class="form-label">Age:</label>
    <input type="text" class="form-control" name="age" value="<?php echo oldValue("age"); ?>" id="age">
  </div>
  <div class="form-group">
  <label for="age" class="form-label">Gender:</label><br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others" >
  <label class="form-check-label" for="inlineRadio3">Others</label>
</div>
</div>

  <div class="form-group">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="yes" name="agreement" value="agree" id="agreecheckbox">
  <label class="form-check-label" for="agreecheckbox">
    Are you agree with out Tearms & Conditions
  </label>
</div>

  <input type="submit" name="submit"  class="btn btn-primary" value="Submit" >

</form>
        </div>
        <div class="col-md-3 "></div>
    </div>
</div>

<style> 
.form-label {
    margin-top: 15px;
}
    .btn {
    margin-top: 20px;
}

</style>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>