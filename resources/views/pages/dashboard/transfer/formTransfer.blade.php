<?php
$getError = '';
if($errors->has('jenisTransfer'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('jenisTransfer','Jenis Transfer') !!}
            {!! Form::text('jenisTransfer',null,['class' => 'form-control '.$getError,
                'id' => 'jenisTransfer','placeholder' => 'Jenis Transfer']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('jenisTransfer') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('jenisTransfer.tampil')}}">Kembali</a>
        </div>
    </div>
</div>