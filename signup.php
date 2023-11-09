<?php include("header.php") ?>
    <div class="container">
    <h2 class="form_title">SIGN UP</h2>
      <form action="#" autocomplete="off" novalidate>

      <div class="row" style="display:flex;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Firstname" name="fname">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Lastname" name="lname">
            </div>
      </div>
      <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm password" name="conpassword">
      </div>

      <input type="submit" value="LOGIN" name="submit" class="login_main">
      <span><a href="todo_home.php">Have account?</a>-<a href="login.php">Login</a></span>
      </form>
    </div>
<?php include("footer.php") ?>
