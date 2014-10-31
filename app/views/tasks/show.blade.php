@extends('layouts.default')
@section('content')
  <h1>
    {{{ $task->title }}}
  </h1>
  Description: {{{ $task->description }}}<br>
  Responsible: {{{ $task->responsible }}}<br>
  Duration: {{{ $task->duration }}}<br>
  Start: {{{ $task->start }}}<br>
  End: {{{ $task->end }}}<br>
  completed: {{{ $task->completed }}}


@stop

