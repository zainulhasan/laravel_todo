@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/create') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="todo" id="todo" placeholder="Enter Todo">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>


            </div>
    </div>
    </div>



@endsection
