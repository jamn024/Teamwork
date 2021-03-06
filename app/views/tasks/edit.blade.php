@extends('layouts.default')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
    } );
</script>

<h1>Edit Task</h1>
{{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }} 

{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ $errors->first('title','<small class="error">:message</small>') }}

{{ Form::label('description', 'Description') }}
{{ Form::textarea('description') }}
{{ $errors->first('description','<small class="error">:message</small>') }}

{{ Form::label('responsible', 'Responsible') }}
{{ Form::select('responsible',$members) }}
{{ $errors->first('responsible','<small class="error">:message</small>') }}

{{ Form::label('duration', 'Duration') }}
{{ Form::text('duration') }}
{{ $errors->first('duration','<small class="error">:message</small>') }}

{{ Form::label('start', 'Start') }}
{{ Form::text('start','', array('class' => 'form-control datepicker')) }}
{{ $errors->first('start','<small class="error">:message</small>') }}

{{ Form::label('end', 'End') }}
{{ Form::text('end','', array('class' => 'form-control datepicker')) }}
{{ $errors->first('end','<small class="error">:message</small>') }}

{{ Form::label('completed', 'Completed') }}
{{ Form::checkbox('completed', '1') }}

<hr>
{{ Form::submit('Publish',array('class'=>'button')) }}

{{ Form::close() }}
@stop