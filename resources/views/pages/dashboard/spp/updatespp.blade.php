@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update Data SPP - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Data SPP</h4>

            <div class="card-body">
                {!! Form::model($spps, ['method' => 'PATCH', 'action' =>
                      ['SppController@update', $spps->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.spp.formspp')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection