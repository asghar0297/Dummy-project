@extends('admin.master')
@section('content')

 @include('Category._search')
<div class='ajax_content'>
@foreach($models as $model)
<p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->id}}</a>
    				 </p><p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->name}}</a>
    				 </p><p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->created_by}}</a>
    				 </p><p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->user_of}}</a>
    				 </p><p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->created_at}}</a>
    				 </p><p>
       						<a href="{{ route('Category.edit', $model->id) }}" class="btn btn-primary">{{$model->update_at}}</a>
    				 </p><hr>
    <hr>
@endforeach
{{ $models->appends($_GET)->links() }}
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->



 @include('ajax_pagination')
@endsection