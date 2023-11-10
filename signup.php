<?php include("header.php") ?>
    <div class="container" style="max-width:1000px;">
    <form action="signup.php" method="POST">
      <a href="#" class="form_title">SIGN UP</a>
      <hr>
      <div class="row" style="margin-top:1rem;">
        <div class="input_form">
            <input type="text" name="fname" placeholder="Enter your firstname">
        </div>
        <div class="input_form">
            <input type="text" name="email" placeholder="Enter your secondname">
        </div>
      </div>
      <div class="input_form">
        <input type="text" name="idno" placeholder="Enter your id no">
      </div>
      <div class="input_form">
        <input type="email" name="email" placeholder="Enter your firstname">
      </div>
      <div class="input_form">
        <input type="email" name="email" placeholder="Enter your password">
      </div>
      <div class="input_form">
        <input type="password" name="conpassword" placeholder="Confirm your password">
      </div>
      <input type="submit" value="SIGNUP" name="name">
      <span><a href="#">Have account</a>-<a href="login.php">Login</a></span>
    </form>
    </div>
<script src="main.js"></script>
<?php include("footer.php") ?>
