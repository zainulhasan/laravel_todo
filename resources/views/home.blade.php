@extends('layouts.app')

@section('content')
<div class="container">



    @if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('message') }}
            </div>

        </div>
    </div>
    @endif


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Todos</h1>
            <hr>
        </div>
    </div>


    @foreach ($todos as $todo)
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <a  href="{{route('delete',['id' =>$todo->id])}}" class="close"><span aria-hidden="true">&times;</span></a>
                {{$todo->title}}<br/>
                <span class="small">
                    {{$todo->created_at->diffForHumans()}}
            </span>
            </div>

        </div>
    </div>

    @endforeach
</div>
@endsection
