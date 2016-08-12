@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-right">
					<a class="btn btn-default" href="{{url('user/create')}}">Add New</a>
				</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Username</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user['username']}}</td>
							<td>{{$user['name']}}</td>
							<td>{{$user['surname']}}</td>
							<td>{{$user['email']}}</td>
							<td>{{$user['mobile']}}</td>
							<td>
								<a href='user/{{$user['id']}}'>View</a>
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<a href='user/{{$user['id']}}/edit'>Edit</a>
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<form method="post" action="{{ url('/user') }}/{{$user['id']}}" id="delete_{{$user['id']}}">
									{!! csrf_field() !!}
									<input type="hidden" name="_method" value="DELETE">
									<a href='javascript:void(0)' onclick="document.getElementById('delete_{{$user['id']}}').submit()">Delete</a>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection