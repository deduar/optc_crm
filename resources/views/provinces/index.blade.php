@extends('provinces.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Oportunicar_CRM / Provinces - oportunicar.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('province.create') }}"> Create New Provonce</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>CP</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($provinces as $province)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $province->name }}</td>
            <td>{{ $province->cp }}</td>
            <td>
                <form action="{{ route('province.destroy',$province->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('province.show',$province->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('province.edit',$province->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $provinces->links() !!}
      
@endsection