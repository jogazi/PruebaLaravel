@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center">
                    <h1> Task List </h1>
                    </div>
                    <div  style="text-align: center">
                        <a href="{{ route('createTask') }}" class="btn btn-primary"><i class="far fa-file"></i> New Task</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($taskList->count())
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"> IdTask </th>
                                    <th scope="col"> priority </th>
                                    <th scope="col"> expirationDate </th>
                                    <th scope="col"> idUser</th>
                                    <th scope="col">  </th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($taskList as $item)
                            <tr>
                                <td> {{ $item->idTask }} </td>
                                <td> {{ $item->priority }} </td>
                                <td> {{ $item->expirationDate }} </td>
                                <td> {{ $item->idUser }} </td>
                                <td>
                                     <a class="btn btn-info" href="{{ route('editTask',$item->idTask) }}"><i class="far fa-edit"></i> Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['destroyTask', $item->idTask],'id' => "deletefile$item->idTask", 
                                    'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger delete-confirm">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{ $taskList->render() }}
                    @else
                      <p> No records found </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection