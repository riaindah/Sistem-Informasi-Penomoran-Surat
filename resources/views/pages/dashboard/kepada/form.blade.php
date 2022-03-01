<?php
$getError = '';
if($errors->has('kepada'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('kepada',' Kepada') !!}
            {!! Form::text('kepada',null,['class' => 'form-control '.$getError,
                'id' => 'kepada','placeholder' => ' kepada']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('kepada') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{!! Form::hidden('users_id', Auth::id() ); !!}


<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('kepada.index')}}">Kembali</a>
        </div>
    </div>
</div>