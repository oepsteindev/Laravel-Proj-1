

@extends('layout')

@section('content')

<div class="col-sm-8">

	<h1>Register</h1>

	<form method="POST" accept="/register">

		{{ csrf_field()}}

		<div class="form-group">
			<label for="name">Name</label>
			
			<input type="text" class="form-control" id="name" name="name">
			
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">

			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password">
			
			<label for="password_confirmation">Password Confirmation</label>
			<input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation ">
			


			<button type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Submit">Register</button>



		</div>

	</form>


		@include('layouts.errors')
 

</div>

@endsection