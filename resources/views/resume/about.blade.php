@extends('layouts.app')

@section('content')
	<div class='container'>
<div class="panel panel-default">
	<div class="panel-heading">About</div>
	@if($errors->any())
		@foreach($errors->all() AS $error)
		<div class='alert alert-danger'> {{$error}}</div>
		@endforeach
	@endif
	<div class="panel-body">
		<form method = 'POST' class="form-horizontal" action="{{ route('save_about') }}" enctype='multipart/form-data'>
		{{csrf_field()}}
			<div class='form-group'>
				<label class="col-md-4 control-label">First Name</label>
				<div class="col-md-6">
					<input type='text' name="first_name" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Middle Name</label>
				<div class="col-md-6">
					<input type='text' name="middle_name" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Last Name</label>
				<div class="col-md-6">
					<input type='text' name="last_name" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Address</label>
				<div class="col-md-6">
					<textarea name="address" class='form-control'></textarea>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Email</label>
				<div class="col-md-6">
					<input type='email' name="email" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Telephone</label>
				<div class="col-md-6">
					<input type='number' name="telephone" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Website</label>
				<div class="col-md-6">
					<input type='text' name="website" class='form-control'>
				</div>
			</div>
			<div class='form-group'>
				<label class="col-md-4 control-label">Profile Pic</label>
				<div class="col-md-6">
					<input type='file' name="profile_pic" class='form-control'>
				</div>
			</div>
			<div class="form-group">
            	<div class="col-md-6 col-md-offset-4">
                	<button type="submit" class="btn btn-primary">
                    	Register
                	</button>
            	</div>
        	</div>
		</form>
	</div>

</div>
	
	</div>

@endSection


{{-- 

first name
middle name
last name
address
email
telephone
website
profile photo

 --}}
