@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Data Berkas - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Data SPP</h4>

            <div class="card-body">
                {!! Form::open(array('route' => 'jl.store')) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.jenisLayanan.formJenisLayanan')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection