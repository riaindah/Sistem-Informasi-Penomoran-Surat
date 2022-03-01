<?php
$getError = '';
if($errors->has('jenisSpp'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
            {!! Form::label('jenisSpp','Jenis Spp') !!}
            {!! Form::select('jenisSpp', \App\JenisSpp::pluck('jenisSpp', 'id'), null,
                 ['class' => 'form-control', 'data-provide' => 'selectpicker', 'name' => 'jenisSpp']) !!}
            @if ($errors->has('jenisSpp'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('jenisSpp') }}</li>
                </ul>
            @endif
        </div>
    </div>

    <?php
    if($errors->has('notas'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
            {!! Form::label('kodeSpp','Kode Spp') !!}
            {!! Form::select('kodeSpp', \App\JenisLayanan::pluck('kode', 'id'), null,
                 ['class' => 'form-control', 'data-provide' => 'selectpicker', 'name' => 'kodeSpp']) !!}
            @if ($errors->has('kodeSpp'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('kodeSpp') }}</li>
                </ul>
            @endif
        </div>
    </div>

    <?php
    if($errors->has('jumlah'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
            {!! Form::label('jumlah','Jumlah') !!}
            {!! Form::text('jumlah',null,['class' => 'form-control '.$getError,
                'id' => 'jumlah','placeholder' => '12345xxxx']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('jumlah') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    if($errors->has('tanggal'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr >
        <div class="form-group">
            {!! Form::label('tanggal','Tanggal Transfer') !!}
            {!! Form::text('tanggal',null,['class' => 'form-control '.$getError,
                'id' => 'tanggal','data-provide' => 'datepicker',
                'data-date-today-highlight' => 'true','readonly',
                'value' => '07/07/2017']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('tanggal') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    if($errors->has('spp_id'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('transfer','Jenis Transfer') !!}
            {!! Form::select('transfer', \App\JenisTransfer::pluck('jenisTransfer', 'id'), null,
                 ['class' => 'form-control', 'data-provide' => 'selectpicker', 'name' => 'transfer']) !!}
            @if ($errors->has('transfer'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('transfer') }}</li>
                </ul>
            @endif
        </div>
    </div>

    <div class="col-md-4">

        <div class="form-group">

        </div>
    </div>

    <div class="col-md-4">
        <hr>

        <button class="btn btn-primary btn-bold">Submit</button>
        <a class="btn btn-danger btn-bold" href="{{route('berkas.tampil')}}">Kembali</a>
    </div>
</div>