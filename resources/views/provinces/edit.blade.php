@extends('provinces.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Province</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('province.index') }}"> Back</a>
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

<form action="{{ route('province.update',$province->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $province->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>CP:</strong>
                <input type="text" name="cp" value="{{ $province->cp }}" class="form-control" placeholder="Postal code">            </div>
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