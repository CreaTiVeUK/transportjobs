@extends('layouts.app')
@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h1>Edit Job</h1>
<hr>  
  {!! Form::model($job, ['method' => 'PATCH', 'action' => ['JobController@update',$job->id]]) !!}
   @include('jobs.form', ['submitButtonText' => 'Edit Job'])
  {!! Form::close() !!}
 </div>
@stop