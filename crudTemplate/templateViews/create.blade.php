@extends('layouts.master')
@section('content')
@include('flash_msgs')
{!! Form::open([
'route' => '{modelName}.store'
]) !!}
<section class="content" style="padding-top: 2%">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">{modelName}</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
					</div>
				</div>
				<div class="card-body">
					{searchForm}
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