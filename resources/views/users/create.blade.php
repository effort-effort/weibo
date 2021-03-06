@extends('layouts.default')
@section('title', '注册')
@section('content')
	<div class="offset-md-2 col-md-8">
		<div class="card">
			<div class="card-header">
				<h5>注册</h5>
			</div>
			<div class="card-body">
				@include('shared._errors')
				<form method="POST" action="{{ route('users.store') }}">
					{{csrf_field()}}
					<fieldset class="form-group">
						<label for="formGroupExampleInput1">名称：</label>
						<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="" value="{{old('name')}}" name="name">
					</fieldset ><fieldset class="form-group">
						<label for="formGroupExampleInput2">邮箱：</label>
						<input type="email" class="form-control" id="formGroupExampleInput2" placeholder="" value="{{old('email')}}" name="email">
					</fieldset ><fieldset class="form-group">
						<label for="formGroupExampleInput3">密码：</label>
						<input type="password" class="form-control" id="formGroupExampleInput3" placeholder="" value="{{old('password')}}" name="password">
					</fieldset ><fieldset class="form-group">
						<label for="formGroupExampleInput4">确认密码：</label>
						<input type="password" class="form-control" id="formGroupExampleInput4" placeholder="" value="{{old('password')}}" name="password_confirmation">
					</fieldset >
					<button type="submit" class="btn btn-primary">注册</button>
				</form>
			</div>
		</div>
	</div>
@stop
