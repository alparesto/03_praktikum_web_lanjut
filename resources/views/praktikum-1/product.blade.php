@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $category }}</h2>

            <div class="card">
                <div class="card-header">Detail</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{ $name }}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam numquam tenetur non culpa natus tempore perspiciatis, animi perferendis doloremque corporis tempora sapiente debitis aut, dolore, iste labore commodi? Quisquam, aspernatur!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
