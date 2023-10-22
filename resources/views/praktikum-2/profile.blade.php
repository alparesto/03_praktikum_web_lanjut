@extends('praktikum-2.layouts.main')

@section('content')
   <div class="row justify-content-center m-5">
        <div class="col-md-6">
             <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('img/me.jpg') }}"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Silva Tria A.</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Jurusan</b> <a class="float-right">Teknologi Informasi</a>
                    </li>
                    <li class="list-group-item">
                    <b>Prodi</b> <a class="float-right">PPLSB</a>
                    </li>
                    <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right">1A</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Github</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
   </div>
@endsection