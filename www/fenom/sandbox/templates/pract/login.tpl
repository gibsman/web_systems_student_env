<div class="container">

      <form class="form-signin" method="POST" action="/login/reg">
        <h2 class="form-signin-heading">Login</h2>
		{$error}
		<label for="inputNickname" class="sr-only">Nickname</label>
		<input type="Nickname" name="nick" id="inputNickname" class="form-control" placeholder="Nickname" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>

    </div> <!-- /container -->