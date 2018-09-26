@extends('layouts.app')
@section('content')
<h1>Messages</h1>
@if(count($messages)>0)
@foreach($messages as $message)
<ul class="list-group">
   <div class="list-group-item">
    <li class="list-group-item">
       Name: {{$message->name}} 
    </li>
    <li class="list-group-item">
       Email: {{$message->email}} 
    </li>
    <li class="list-group-item">
       Message: {{$message->message}} 
    </li>
    </div>
</ul>
@endforeach
@endif

@endsection


@section('sidebar')
<p>This is appended to the sidebar</p>
@endsection