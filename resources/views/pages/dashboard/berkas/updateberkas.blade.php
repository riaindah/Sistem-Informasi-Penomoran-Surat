@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Data Berkas - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update Data Berkas</h4>

            <div class="card-body">

                {!! Form::model($berkas, ['method' => 'PATCH', 'action' =>
                      ['BerkasController@update', $berkas->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.berkas.formBerkas')
                {!! Form::close() !!}
            </div>

        </div>
    </div>
    </div><!--/.main-content -->
@endsection