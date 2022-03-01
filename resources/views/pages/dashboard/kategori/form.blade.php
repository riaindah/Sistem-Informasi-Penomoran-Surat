<?php
$getError = '';
if($errors->has('kategori'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('namakategori',' Kategori') !!}
            {!! Form::text('namakategori',null,['class' => 'form-control '.$getError,
                'id' => 'kategori','placeholder' => ' kategori']) !!}
            <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('kategori') }}</li>
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
            <a class="btn btn-danger" href="{{route('kategori.index')}}">Kembali</a>
        </div>
    </div>
</div>