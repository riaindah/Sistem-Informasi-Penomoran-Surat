@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update Jenis SPP - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update Jenis SPP</h4>

            <div class="card-body">
                {!! Form::model($jenisSpp, ['method' => 'PATCH', 'action' =>
                      ['JenisSppController@update', $jenisSpp->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.jenisSpp.formJenisSpp')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection