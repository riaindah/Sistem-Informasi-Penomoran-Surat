@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Jenis Spp - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Data SPP</h4>

            <div class="card-body">
                {!! Form::open(array('route' => 'jenisSpp.store')) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.jenisSpp.formJenisSpp')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection