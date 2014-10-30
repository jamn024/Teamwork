@extends('layouts.default')
@section('content')
  <h1>
    {{{ $task->title }}}
  </h1>
  {{{ $task->description }}}<br>
  {{{ $task->responsible }}}<br>
  {{{ $task->duration }}}<br>
  {{{ $task->start }}}<br>
  {{{ $task->end }}}<br>
  {{{ $task->completed }}}
@stop