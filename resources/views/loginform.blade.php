@include('parts.header',['title' => 'Login'])	
	<div class="flex-container" style="margin-top: 50px;">
		<img src="images/logo.png" id="login-logo">
	</div>
	@if($errors->first('loginerr'))
	<div class="flex-container">
		<p class="error">{{ $errors->first('loginerr') }}</p>
	</div>
	@endif
	<div class="flex-container">
		<form action="{{ url('authenticate') }}" style="width: 318px;" method="post">
			@csrf
			<div class="form-box">
				<label>Username:&nbsp; </label><br>
				<input type="text" name="username" class="form-input" value="{{ old('username') }}">
			</div>
			<div class="form-box">
				<label>Password:&nbsp;</label><br>
				<input type="password" name="password"  class="form-input">
			</div>
			<!-- <div class="form-box">
				<input type="checkbox" name="remember">
				<label>Remember Me</label>
			</div> -->
			<input type="submit" name="submit" value="Login" id="login-btn">
		</form>
	</div>
	<div class="flex-container">
		<p>No account? <a href="{{ url('register') }}" target="_blank">Click here to Register</a></p>
	</div>
</body>
</html>	