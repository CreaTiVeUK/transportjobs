@extends('layouts.app')
@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h1>Add New Job</h1>
<hr>
  
  {!! Form::open(['action' => 'JobController@store']) !!}
   @include('jobs.form', ['submitButtonText' => 'Add Job'])
  {!! Form::close() !!}
 </div>
@stop