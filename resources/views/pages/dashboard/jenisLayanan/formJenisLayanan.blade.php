<?php
$getError = '';
if($errors->has('nama_jenis_layanan'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('nama_jenis_layanan','Jenis Layanan') !!}
            {!! Form::text('nama_jenis_layanan',null,['class' => 'form-control '.$getError,
                'id' => 'nama_jenis_layanan','placeholder' => 'Jenis Layanan']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('nama_jenis_layanan') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    if($errors->has('kode'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('kode','Kode') !!}
            {!! Form::text('kode',null,['class' => 'form-control '.$getError,
                'id' => 'kode','placeholder' => 'Kode']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('kode') }}</li>
                </ul>
            </div>

        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('jl.tampil')}}">Kembali</a>
        </div>
    </div>
</div>