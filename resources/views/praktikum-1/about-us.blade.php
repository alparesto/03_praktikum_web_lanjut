@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>About Us</h2>

            <div class="card">
                <div class="card-header">informasi lebih lanjut</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2></h2>
                    <ul class="list-item">
                        <li class="item">- Minat di bidang IT</li>
                        <li class="item">- Menekuni bagian website</li>
                        <li class="item">- Error adalah bagian dari kehidupan</li>
                        <li class="item">- Itu saja</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
