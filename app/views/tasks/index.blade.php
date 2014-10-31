@extends('layouts.default')
@section('content')
  <h1>Recent Tasks</h1>

  {{ HTML::linkAction('tasks.create','New task',[],['class'=>'button']) }}
<h2 align="center"><u>Pending</u></h2>
  @foreach($pending as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>Responsible: {{ $task->member->name . ' ' . $task->member->lastname }}</small><li>
        <small>Duration: {{ $task->duration }} hours</small><li>
        <small>Start: {{ $task->start }}</small><li>
        <small>End: {{ $task->end }}</small>        
      </div>
      <div class="columns large-1">
        {{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
        {{ Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
        {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
        {{ Form::close() }}       
      </div>

    </div>
    <hr>
  @endforeach

<h2 align="center"><u>Finished</u></h2>
  @foreach($finished as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>Responsible:{{ $task->member->name . ' ' . $task->member->lastname  }}</small><li>
        <small>Duration:{{ $task->duration }} hours</small><li>
        <small>Start:{{ $task->start }}</small><li>
        <small>End:{{ $task->end }}</small>
      </div>
      <div class="columns large-1">
        {{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
        {{ Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
        {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
        {{ Form::close() }}       
      </div>

    </div>
    <hr>
  @endforeach
@stop