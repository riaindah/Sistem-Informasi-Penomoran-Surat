@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Dinas Perpustakaan Kota Samarinda - Dashboard</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary">
                    <h4 class="card-title"><strong> Kategori </strong></h4>

                    <div class="card-body">
                        <a class="btn btn-success" href="{{route('kategori.index')}}">Data</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-success">
                    <h4 class="card-title"><strong> KEPADA</strong></h4>

                    <div class="card-body">
                         <a class="btn btn-primary" href="{{route('kepada.index')}}">Data</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong> DISPOSISI</strong></h4>

                    <div class="card-body">
                         <a class="btn btn-success" href="{{route('disposisi.index')}}">Data</a>

                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong> SURAT MASUK</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-success" href="{{route('suratmasuk.index')}}">Data</a>

                    </div>
                </div>
            </div>
        </div>
       

    </div><!--/.main-content -->
@endsection