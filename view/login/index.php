
	<div class='container'>
		<h1>User Login</h1>
	</div>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Login Form -->
    <form action="<?php echo constant('URL'); ?>login/login" method="POST">
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="login" required="true">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password" required="true">
      <p><?php echo $this->message; ?></p>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>



