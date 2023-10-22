@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>List Of Artikel</h2>

            <div class="card">
                <div class="card-header">Seputar {{ $judul }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{ $judul }}</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="">Berita 1</a>
                        </li>

                        <li class="item">
                            <a href="">Berita 2</a>
                        </li>

                        <li class="item">
                            <a href="">Berita 3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
