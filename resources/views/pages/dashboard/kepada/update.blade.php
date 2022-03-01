@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update </title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update</h4>

            <div class="card-body">
                {!! Form::model($kepada, ['method' => 'PATCH', 'action' =>
                      ['KepadaController@update', $kepada->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.kepada.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection