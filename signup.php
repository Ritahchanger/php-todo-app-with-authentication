<?php 
include("header.php");

if(isset($_POST["signup"])){
  $fname=$_POST["fname"];
  $sname=$_POST["sname"];
  $idno=$_POST["idno"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  include("dbconnect.php");

  $result=mysqli_query($conn,"SELECT email FROM `tasks` WHERE email='$email'");
}

?>
    <div class="container" style="max-width:1000px;margin-top:2rem;">
    <form action="signup.php" method="POST" class="sign_up_form" id="sign_up_form" autocapitalize="off" novalidate>
      <a href="#" class="form_title">SIGN UP</a>
      <hr>
      <div class="row" style="margin-top:1rem;">
        <div class="input_form">
            <input type="text" name="fname" placeholder="Enter your firstname"id="fname">
            <span class="error" id="fname_error">Fill this field</span>
        </div>
        <div class="input_form">
            <input type="text" name="sname" placeholder="Enter your secondname" id="sname">
            <span class="error" id="sname_error">Fill this field</span>
        </div>
      </div>
      <div class="input_form">
        <input type="text" name="idno" placeholder="Enter your id no"id="idno">
        <span class="error" id="idno_error">Fill this field</span>
      </div>
      <div class="input_form">
        <input type="email" name="email" placeholder="Enter your email"id="email">
        <span class="error" id="email_error">Fill this field</span>
      </div>
      <div class="input_form">
        <input type="password" name="password" placeholder="Enter your password"id="password">
        <span class="error" id="password_error">Fill this field</span>
      </div>
      <div class="input_form">
        <input type="password" name="conpassword" placeholder="Confirm your password" id="conpasswd">
        <span class="error" id="confirm_password_error">Fill this field</span>
      </div>
      <input type="submit" value="SIGNUP" name="signup">
      <span><a href="#">Have account</a>-<a href="login.php">Login</a></span>
    </form>
    </div>
<script src="main.js"></script>
<?php include("footer.php") ?>
