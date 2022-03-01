@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Jenis Transfer - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Jenis Transfer</h4>
            <div class="card-body">
                {!! Form::open(array('route' => 'jenisTransfer.store')) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.transfer.formTransfer')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection