@include('parts.header',['title' => 'Register'])	
	<div class="flex-container" style="margin-top: 50px;">
		<img src="{{ asset('images/logo.png') }}" id="login-logo">
	</div>
	<div class="flex-container">
		<form action="{{ url('saveuser') }}" style="width: 318px;" method="post">
			@csrf
			<div class="form-box">
				<label>First Name:&nbsp; </label><br>
				<input type="text" name="firstname" class="form-input" value="{{ old('firstname') }}">
				<small class="error">{{ $errors->first('firstname') }}</small>
			</div>
			<div class="form-box">
				<label>Last Name:&nbsp; </label><br>
				<input type="text" name="lastname" class="form-input" value="{{ old('lastname') }}">
				<small class="error">{{ $errors->first('lastname') }}</small>
			</div>
			<div class="form-box">
				<label>Username:&nbsp; </label><br>
				<input type="text" name="username" class="form-input" value="{{ old('username') }}">
				<small class="error">{{ $errors->first('username') }}</small>
			</div>
			<div class="form-box">
				<label>Email:&nbsp; </label><br>
				<input type="email" name="email" class="form-input" value="{{ old('email') }}">
				<small class="error">{{ $errors->first('email') }}</small>
			</div>
			<div class="form-box">
				<label>Password:&nbsp; </label><br>
				<input type="password" name="password" class="form-input">
				<small class="error">{{ $errors->first('password') }}</small>
			</div>
			<div class="form-box">
				<small>By clicking "Register" , you agree to our <a href="#">Terms and Data Policy</a></small>
			</div>
			<input type="submit" name="submit" value="Register" id="register-btn">

		</form>
	</div>
@include('parts.footer')
