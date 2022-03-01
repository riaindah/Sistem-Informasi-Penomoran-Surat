@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update Jenis Layanan - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update Jenis Layanan</h4>

            <div class="card-body">
                {!! Form::model($jenisLayanan, ['method' => 'PATCH', 'action' =>
                      ['JenisLayananController@update', $jenisLayanan->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.jenisLayanan.formJenisLayanan')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection