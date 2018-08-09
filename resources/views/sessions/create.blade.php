@extends('layout')

@section('content')

<div class="col-sm-8">

	<h1>Sign In</h1>


	<form method="POST" accept="/login">

		{{ csrf_field()}}

		<div class="form-group">
		
			
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">

			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password">
			
			
			


			<button type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Submit">Sign In</button>



		</div>

	</form>
@include('layouts.errors')
</div>

@endsection