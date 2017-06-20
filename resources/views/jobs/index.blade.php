@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Jobs</h1>
    <a href="{{ route('jobs.create') }}" class="btn btn-success">Add job</a><br><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Job Status</th>
          <th>Number of Vehicles</th>
          <th>Driven Price</th>
          <th>Transported Price</th>
          <th>CollectionD ate</th>
          <th>Delivery Date</th>
          <th>Service Type</th>
          <th>Request Date</th>
          <th colspan="2" style="text-align:center">Actions</th>
          </tr>
      </thead>
      <div>
      @forelse($jobs as $job)
      <tr>
      <div class='body'>
        <td>{{ $job->id }}</td>
        <td>{{ $job->JobStatus }}</td>
        <td>{{ $job->NoOfVehicles }}</td>
        <td>{{ $job->DrivenPrice }}</td>
        <td>{{ $job->TransportedPrice }}</td>
        <td>{{ $job->CollectionDate }}</td>
        <td>{{ $job->DeliveryDate  }}</td>
        <td>{{ $job->ServiceType }}</td> 
        <td>{{ $job->RequestDate  }}</td>
        <td><a href = "{{ route('jobs.edit', $job->id) }}" class="btn btn-info">Edit</a></td>
        <td>  {!! Form::open(['method'=>'delete', 'route' =>['job.destroy', $job->id]]) !!}
              {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Do you want to delete this record?")']) !!}
              {!! Form::close() !!}
    </form></td>  
      </div>
      </tr>         
      @empty
        <p>There are no jobs to display!</p>
      @endforelse
      </div>
    </table>
@stop



     