<?php
$getError = '';
if($errors->has('jenisSpp'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('jenisSpp','Jenis SPP') !!}
            {!! Form::text('jenisSpp',null,['class' => 'form-control '.$getError,
                'id' => 'jenisSpp','placeholder' => 'Jenis Spp']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('jenisSpp') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('jenisSpp.tampil')}}">Kembali</a>
        </div>
    </div>
</div>