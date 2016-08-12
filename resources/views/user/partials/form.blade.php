
@if(isset($update))
	<form method="POST" action="{{ url('/user') }}/{{$user['id']}}">
	@else 
	<form method="POST" action="{{ url('/user') }}">
@endif
	{!! csrf_field() !!}

	@if(isset($update))
		<input type="hidden" name="_method" value="PATCH">
	@endif
	
    <!--Name, Surname, Address, City, Postcode, Telno, Mobile, email, Website, Twitter, LinkedIn, Facebook, username, password-->
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" id="name" required name="name" value="{{$user['name']}}">
	</div>
	<div class="form-group">
		<label for="surname">Surname:</label>
		<input type="text" class="form-control" id="surname" required name="surname" value="{{$user['surname']}}">
	</div>
	<div class="form-group">
		<label for="address">Address:</label>
		<input type="text" class="form-control" id="address" name="address" value="{{$user['address']}}">
	</div>
	<div class="form-group">
		<label for="city">City:</label>
		<input type="text" class="form-control" id="city" name="city" value="{{$user['city']}}">
	</div>
	<div class="form-group">
		<label for="postcode">Postcode:</label>
		<input type="text" class="form-control" id="postcode" name="postcode" value="{{$user['postcode']}}">
	</div>
	<div class="form-group">
		<label for="tel_no">Telno:</label>
		<input type="text" class="form-control" id="tel_no" required name="tel_no" value="{{$user['tel_no']}}">
	</div>
	<div class="form-group">
		<label for="mobile">Mobile:</label>
		<input type="text" class="form-control" id="mobile" required name="mobile" value="{{$user['mobile']}}">
	</div>
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="text" class="form-control" id="email" required name="email" value="{{$user['email']}}">
	</div>
	<div class="form-group">
		<label for="website">Website:</label>
		<input type="text" class="form-control" id="website" name="website" value="{{$user['website']}}">
	</div>
	<div class="form-group">
		<label for="twitter">Twitter:</label>
		<input type="text" class="form-control" id="twitter" name="twitter" value="{{$user['twitter']}}">
	</div>
	<div class="form-group">
		<label for="linkedin">LinkedIn:</label>
		<input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$user['linkedin']}}">
	</div>
	<div class="form-group">
		<label for="facebook">Facebook:</label>
		<input type="text" class="form-control" id="facebook" name="facebook" value="{{$user['facebook']}}">
	</div>
	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" id="username" required name="username" value="{{$user['username']}}">
	</div>
	<div class="form-group">
		<label for="Password">Password:</label>
		<input type="password" class="form-control" id="Password" required name="password" value="{{$user['password']}}">
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>