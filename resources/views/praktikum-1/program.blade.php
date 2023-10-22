@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Program</h2>

            <div class="card">
                <div class="card-header">penyesuaian gaya belajar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bootcamp</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="{{ url('/program/bootcamp/jakarta-bootcamp') }}">Jakarta Bootcamp</a>
                        </li>
                        <li class="item">
                            <a href="{{ url('/program/bootcamp/bandung-bootcamp') }}">Bandung Bootcamp</a>
                        </li>
                    </ul>

                    <h2>Materi</h2>
                    <ul class="list-item">
                        <li class="item">
                            <a href="{{ url('/program/materi/expert-java') }}">Expert Java</a>
                        </li>
                        <li class="item">
                            <a href="{{ url('/program/materi/expert-js') }}">Expert JS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
