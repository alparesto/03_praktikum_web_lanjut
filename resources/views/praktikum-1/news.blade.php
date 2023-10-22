@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>News</h2>

            <div class="card">
                <div class="card-header">Something New</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Daftar Berita</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="{{ url('/news/teknologi') }}">Technology</a>
                        </li>

                        <li class="item">
                            <a href="{{ url('/news/kontruksi') }}">Kontruksi</a>
                        </li>

                        <li class="item">
                            <a href="{{ url('/news/politik') }}">Politik</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
