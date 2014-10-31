@extends('layouts.default')
@section('content')
  <h1>
    {{{ $task->title }}}
  </h1>
  Description: {{{ $task->description }}}<br>
  Responsible: {{{ $task->member->name . ' ' . $task->member->lastname  }}}<br>
  Duration: {{{ $task->duration }}} hours<br>
  Start: {{{ $task->start }}}<br>
  End: {{{ $task->end }}}<br>
  completed: {{{ $task->completed }}}


@stop

