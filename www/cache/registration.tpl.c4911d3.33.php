<?php 
/** Fenom template '/fenom/sandbox/templates/pract/registration.tpl' compiled at 2015-07-03 09:16:57 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">

      <form class="form-signin" method="POST" action="/user/reg">
        <h2 class="form-signin-heading">Registration</h2>
		<?php
/* /fenom/sandbox/templates/pract/registration.tpl:5: {$error} */
 echo $var["error"]; ?>
		<label for="inputNickname" class="sr-only">Nickname</label>
		<input type="Nickname" name="nick" id="inputNickname" class="form-control" placeholder="Nickname" required autofocus>
        <label for="inputEmail" class="sr-only">E-mail address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" name="password1"  id="inputPassword" class="form-control" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
	
	<?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom/sandbox/templates/pract/registration.tpl',
	'base_name' => '/fenom/sandbox/templates/pract/registration.tpl',
	'time' => 1435915014,
	'depends' => array (
  0 => 
  array (
    '/fenom/sandbox/templates/pract/registration.tpl' => 1435915014,
  ),
),
	'macros' => array(),

        ));
