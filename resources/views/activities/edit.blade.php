@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Activity</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('activity.index') }}"> Back</a>
        </div>
    </div>
</div>
<hr>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('activity.update',$activity->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" value="{{ $activity->description }}" class="form-control" placeholder="Description">
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 text-right">
            <div class="form-group">
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

</form>
@endsection