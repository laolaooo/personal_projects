<?php include 'Header.php'; ?>

<!-- Login Form -->
<div class="container my-5" style="padding-top: 124px;">
  <h1 class="text-center"><span class="accent">Login</span></h1>
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <form action="login_process.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="forgot_password.php" class="btn btn-link">Forgot Password?</a>
      </form>
    </div>
  </div>
</div><!-- End Login Form -->

