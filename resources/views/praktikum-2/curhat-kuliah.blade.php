@extends('praktikum-2.layouts.main')

@section('content')

<div class="row justify-content-center mt-5">
    <!-- /.col -->
    <div class="col-md-6">
        <div class="card">
          <div class="card-header p-2">
            Curhatan Kuliahku
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('img/me.jpg') }}" alt="user image">
                    <span class="username">
                      <a href="#">Silva Tria Alfares</a>
                    </span>
                    <span class="description">Shared publicly - 0:00 AM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Nasi deket Sipil is The Best uyy. kualitas dapet, kuantitas dapet.
                  </p>
                </div>
                <!-- /.post -->
        </div>
    </div>
</div>

@endsection