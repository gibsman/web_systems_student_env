<?php 
/** Fenom template '/fenom/sandbox/templates/pract/login.tpl' compiled at 2015-07-03 09:38:18 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">

      <form class="form-signin" method="POST" action="/login/reg">
        <h2 class="form-signin-heading">Login</h2>
		<?php
/* /fenom/sandbox/templates/pract/login.tpl:5: {$error} */
 echo $var["error"]; ?>
		<label for="inputNickname" class="sr-only">Nickname</label>
		<input type="Nickname" name="nick" id="inputNickname" class="form-control" placeholder="Nickname" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>

    </div> <!-- /container --><?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom/sandbox/templates/pract/login.tpl',
	'base_name' => '/fenom/sandbox/templates/pract/login.tpl',
	'time' => 1435916292,
	'depends' => array (
  0 => 
  array (
    '/fenom/sandbox/templates/pract/login.tpl' => 1435916292,
  ),
),
	'macros' => array(),

        ));
