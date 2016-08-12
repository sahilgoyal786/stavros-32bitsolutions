@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-right">
					<a class="btn btn-default" href="{{url('user')}}">Back</a> &nbsp;
				</p>
				@include('user/partials/form')
			</div>
		</div>
	</div>
@endsection