@extends('layouts.app')
@section('content')
 <h1>{{ $job->name }}</h1>
<div class='body'>
  <pre>{{ $job }}</pre>
 </div>
@stop