@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-right">
					<a class="btn btn-default" href="{{url('user')}}">Back</a> &nbsp;
					<a class="btn btn-default" href="{{url('user')}}/{{$user['id']}}/edit">Edit</a>
				</p>
				<table class="table table-striped">
					<tr>
						<td class="col-md-6">Name</td>
						<td class="col-md-6">{{$user['name']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Surname</td>
						<td class="col-md-6">{{$user['surname']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Address</td>
						<td class="col-md-6">{{$user['address']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">City</td>
						<td class="col-md-6">{{$user['city']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Postcode</td>
						<td class="col-md-6">{{$user['postcode']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Tel No.</td>
						<td class="col-md-6">{{$user['tel_no']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Mobile</td>
						<td class="col-md-6">{{$user['mobile']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Email</td>
						<td class="col-md-6">{{$user['email']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Website</td>
						<td class="col-md-6">{{$user['website']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Twitter</td>
						<td class="col-md-6">{{$user['twitter']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">LinkedIn</td>
						<td class="col-md-6">{{$user['linkedin']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Facebook</td>
						<td class="col-md-6">{{$user['facebook']}}</td>
					</tr>
					<tr>
						<td class="col-md-6">Username</td>
						<td class="col-md-6">{{$user['username']}}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection