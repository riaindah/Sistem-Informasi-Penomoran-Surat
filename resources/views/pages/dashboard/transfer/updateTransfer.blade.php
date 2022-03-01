@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Update Jenis Transfer - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Input Data SPP</h4>

            <div class="card-body">
                {!! Form::model($jenisTransfer, ['method' => 'PATCH', 'action' =>
                      ['JenisTransferController@update', $jenisTransfer->id]]) !!}
                {{ csrf_field() }}
                @include('pages.dashboard.transfer.formTransfer')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection