<?php
$getError = '';
if($errors->has('namaPeserta'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
            {!! Form::label('namaPeserta','Nama Peserta') !!}
            {!! Form::text('namaPeserta',null,['class' => 'form-control '.$getError,
                'id' => 'namaPeserta','placeholder' => 'Nama Peserta']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('namaPeserta') }}</li>
                </ul>
            </div>
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
            {!! Form::label('notas','Notas') !!}
            {!! Form::text('notas',null,['class' => 'form-control '.$getError,
                'id' => 'notas','placeholder' => '12345xxxx']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('notas') }}</li>
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
        <hr class="d-md-none">
        <div class="form-group">
            {!! Form::label('tanggal','Tanggal') !!}
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
            {!! Form::label('spp_id','Sumber Spp') !!}
            {!! Form::select('spp_id', \App\Spp::pluck('singkatan', 'id'), null,
                 ['class' => 'form-control', 'data-provide' => 'selectpicker', 'name' => 'spp_id']) !!}
            @if ($errors->has('spp_id'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('spp_id') }}</li>
                </ul>
            @endif
        </div>
    </div>

    <?php
    $getError = '';
    if($errors->has('jenisLayanan'))
        $getError = 'parsley-error';
    ?>
    <div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('jenisLayanan','Jenis Layanan') !!}
            {!! Form::select('jenisLayanan', \App\JenisLayanan::pluck('kode', 'id'), null,
                ['class' => 'form-control', 'multiple' => 'multiple',
                'data-provide' => 'selectpicker',
                'name' => 'jenisLayanan[]', 'multiple']) !!}

            @if ($errors->has('jenisLayanan'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('jenisLayanan') }}</li>
                </ul>
            @endif
        </div>
    </div>

    <div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('keterangan','Keterangan') !!}
            {!! Form::textarea('keterangan',null,['class' => 'form-control ',
                'id' => 'keterangan','name' => 'keterangan' , 'rows' => '5']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <hr>

        <button class="btn btn-primary btn-bold">Submit</button>
        <a class="btn btn-danger btn-bold" href="{{route('berkas.tampil')}}">Kembali</a>
    </div>
</div>