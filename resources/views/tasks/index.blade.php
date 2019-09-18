@extends('layouts.app', ['title' => __('Tarefas')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Lista de tarefas'),
        'description' => __('Este é a sua lista de tarefas'),
        'class' => 'col-lg-7'
    ])  

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>Todas as Tarefas</h2>
                </div>
                @foreach($tasks as $task)
                <div class="card">
                    <div class="card-header">{{$task->title}}</div>

                    <div class="card-body">
                        {{$task->description}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection