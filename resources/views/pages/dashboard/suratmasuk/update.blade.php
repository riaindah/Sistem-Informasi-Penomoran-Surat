@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Input Data Berkas - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Update Data</h4>

            <div class="card-body">

{!!Form::model($suratmasuk, ['route' => ['suratmasuk.update', $suratmasuk->id], 'method' =>'patch'])!!}
                  @include('pages.dashboard.suratmasuk.form')
              {!!Form::close() !!}
                

            </div>

        </div>
    </div>
    </div><!--/.main-content -->
@endsection
