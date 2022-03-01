@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input</h4>

            <div class="card-body">
                 {!!Form::open(['route'=>'kepada.store','method'=>'post'])!!}
                 @include('pages.dashboard.kepada.form')
               {!!Form::close()!!}
            



            
            </div>
        </div>
    </div>
@endsection