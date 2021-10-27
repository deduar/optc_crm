@extends('provinces.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Province</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('province.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $province->name }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>CP:</strong>
                {{ $province->cp }}
            </div>
        </div>
    </div>
@endsection