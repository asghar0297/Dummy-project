@extends('layouts.master')
@section('content')
@include('flash_msgs')
{!! Form::open([
'route' => 'Category.store'
]) !!}

	<!-- Main content -->
	<section class="content" style="padding-top: 2%">
		<div class="row">
			
			<div class="col-md-12">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Category</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fas fa-minus"></i></button>
						</div>
					</div>
					<div class="card-body">
						
						<div class="form-group">

							<div class="form-group">
{!! Form::label("id", "Id:", ["class" => "control-label"]) !!}
{!! Form::text("id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("name", "Name:", ["class" => "control-label"]) !!}
{!! Form::text("name", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_by", "Created_by:", ["class" => "control-label"]) !!}
{!! Form::text("created_by", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("user_of", "User_of:", ["class" => "control-label"]) !!}
{!! Form::text("user_of", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_at", "Created_at:", ["class" => "control-label"]) !!}
{!! Form::text("created_at", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("update_at", "Update_at:", ["class" => "control-label"]) !!}
{!! Form::text("update_at", null, ["class" => "form-control"]) !!}</div>
<div class='form-group'>{!! Form::submit('Create New Category', ['class' => 'btn btn-primary']) !!}</div>
						</div>
						
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
	</section>
	<!-- /.content -->
	{!! Form::close() !!}
	@endsection