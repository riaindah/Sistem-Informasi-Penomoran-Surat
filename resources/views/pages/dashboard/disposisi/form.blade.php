<?php
$getError = '';
if($errors->has('kategori'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('disposisi',' Disposisi') !!}
            {!! Form::text('disposisi',null,['class' => 'form-control '.$getError,
                'id' => 'kategori','placeholder' => ' disposisi']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('disposisi') }}</li>
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
            <a class="btn btn-danger" href="{{route('disposisi.index')}}">Kembali</a>
        </div>
    </div>
</div>