<?php include("header.php") ?>
    <div class="container">
      <h2 class="form_title">LOGIN</h2>
      <form autocomplete="off" novalidate>
      <div class="input-group mb-3">
        <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInputGroup1" placeholder="Enter email">
        <label for="floatingInputGroup1">Email</label>
        </div>
      </div>
      <div class="input-group mb-3">
        <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingInputGroup1" placeholder="Enter password">
        <label for="floatingInputGroup1">Password</label>
        </div>
      </div>
      <div class="input-group mb-3">
       <input type="submit" value="LOGIN" name="submit" class="login_main">
      </div>
      <span><a href="#">Forgotten password?</a>-<a href="signup.php">Sign up</a></span>
      </form>
    </div>
<?php include("footer.php") ?>
