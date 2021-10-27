@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Oportunicar_CRM / Activities - oportunicar.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('activity.create') }}"> Create New Activity</a>
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
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($activities as $activity)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $activity->description }}</td>
            <td>
                <form action="{{ route('activity.destroy',$activity->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('activity.show',$activity->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('activity.edit',$activity->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $activities->links() !!}
      
@endsection