@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Products</h2>

            <div class="card">
                <div class="card-header">List of Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Games</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="{{ url('/product/games/the-last-of-us-part-II') }}">The Last Of Us Part II</a>
                        </li>
                        
                        <li class="item">
                            <a href="{{ url('/product/games/uncharted') }}">Uncharted</a>
                        </li>

                        <li class="item">
                            <a href="{{ url('/product/games/sekiro') }}">Sekiro</a>
                        </li>

                        <li class="item">
                            <a href="{{ url('/product/games/marvel-spiderman-2') }}">Marvel Spiderman 2</a>
                        </li>
                    </ul>

                    <h2>Films</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="{{ url('/product/films/tangled') }}">Tangled</a>
                        </li>

                        <li class="item">
                            <a href="{{ url('/product/films/wreck-it-ralph') }}">Wreck It Ralph</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
