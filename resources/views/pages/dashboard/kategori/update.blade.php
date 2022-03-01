@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update </title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update</h4>

            <div class="card-body">
                {!! Form::model($kategori, ['method' => 'PATCH', 'action' =>
                      ['KategoriController@update', $kategori->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.kategori.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection