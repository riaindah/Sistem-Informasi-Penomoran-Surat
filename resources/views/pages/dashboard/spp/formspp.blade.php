<?php
$getError = '';
if($errors->has('spp_name'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('spp_name','Nama (Sumber) SPP') !!}
            {!! Form::text('spp_name',null,['class' => 'form-control '.$getError,
                'id' => 'spp_name','placeholder' => 'Nama Spp']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('spp_name') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    if($errors->has('singkatan'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <div class="form-group">
            <label for="singkatan">Singkatan SPP</label>
            {!! Form::label('singkatan','Singkatan SPP') !!}
            {!! Form::text('singkatan',null,['class' => 'form-control '.$getError,
                'id' => 'singkatan','placeholder' => 'Singkatan (Sumber) Spp']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('singkatan') }}</li>
                </ul>
            </div>

        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('spp.tampil')}}">Kembali</a>
        </div>
    </div>
</div>