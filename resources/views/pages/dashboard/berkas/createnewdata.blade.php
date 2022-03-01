@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Data Berkas - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Data Berkas</h4>

            <div class="card-body">

                {!! Form::open(array('route' => 'berkas.store')) !!}
                {{ csrf_field() }}
                    @include('pages.dashboard.berkas.formBerkas')
                {!! Form::close() !!}
            </div>

            </div>
        </div>
    </div><!--/.main-content -->
@endsection