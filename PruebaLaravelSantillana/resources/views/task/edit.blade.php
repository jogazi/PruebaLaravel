@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"> idTask {{ $taskData->idTask }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" taskData="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::model($taskData, ['route' => ['updateTask', $taskData->idTask],
                    'method' => 'PUT']) !!}

                        @include('task.partial.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection