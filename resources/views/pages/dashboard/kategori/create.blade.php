@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input</h4>

            <div class="card-body">
                 {!!Form::open(['route'=>'kategori.store','method'=>'post'])!!}
                 @include('pages.dashboard.kategori.form')
               {!!Form::close()!!}
            



            
            </div>
        </div>
    </div>
@endsection