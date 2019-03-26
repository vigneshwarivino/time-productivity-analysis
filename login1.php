
<form action="action_page.php">
 <center><h1>LOGIN FORM</h1></center>
 <center><p><a href="register.php">SignUp</a> | <a href="login.php">Login</a></p></center>
  <div class="container">
    <center><label for="uname"><b>Username</b></label></center>
    <center><input type="text" placeholder="Enter Username" name="uname" required></center><br>

    <center><label for="psw"><b>Password</b></label>
    <center><input type="password" placeholder="Enter Password" name="psw" required></center><br>

    <center><button type="submit">Login</button></center>
    <center><label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></center>
  </div>
<br>
  <center><div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div></center>
</form>
