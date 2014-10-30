@extends('layouts.default')
@section('content')
  <h1>Recent Tasks</h1>

  {{ HTML::linkAction('tasks.create','New task',[],['class'=>'button']) }}

  @foreach($tasks as $task)
    <div class="row">

      <div class="columns large-11">
        {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br><li>
        <small>{{ $task->responsible }}</small><li>
        <small>{{ $task->duration }}</small><li>
        <small>{{ $task->start }}</small><li>
        <small>{{ $task->end }}</small><li>
        <small>{{ $task->completed }}</small>
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