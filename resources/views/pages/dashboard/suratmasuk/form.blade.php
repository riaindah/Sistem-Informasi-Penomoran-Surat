<?php
$getError = '';
if($errors->has('kategori_id'))
    $getError = 'is-invalid';
?>
<div class="row">
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
             {!! Form::select('kategori_id',$kategori,null,["class"=>"form-control", "required",]   ) !!}
<div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('klafikasinaskah') }}</li>
                </ul>
            </div>
        </div>
    </div>

   <?php
    if($errors->has('tanggalregistrasi'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">
              {!! Form::label('tanggalregistrasi','Tgl Reg') !!}

             {!! Form::date('tanggalregistrasi', null, ['class' => "form-control", 'required', 'autofocus']); !!}

           <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('tanggalregistrasi') }}</li>
                </ul>
            </div>
        </div>
    </div>


    <?php
    if($errors->has('tanggalnaskah'))
        $getError = 'is-invalid';
    else
        $getError = '';
    ?>
    <div class="col-md-4">
        <hr class="d-md-none">
        <div class="form-group">

              {!! Form::label('tanggalnaskah','Tgl Reg') !!}

            {!! Form::date('tanggalnaskah', null, ['class' => "form-control", 'required', 'autofocus']); !!}
 <div class="invalid-feedback">
                <ul class="list-unstyled">
                    <li>{{ $errors->first('tanggalregistrasi') }}</li>
                </ul>
            </div>
        </div>
    </div>

 <div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('asalnaskah','Asal Naskah') !!}
            {!! Form::text('asalnaskah',null,['class' => 'form-control ',
                'id' => 'asalnaskah','name' => 'asalnaskah' , 'rows' => '5']) !!}
        </div>
    </div>

<div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('nomornaskah','NO naskah') !!}
            {!! Form::text('nomornaskah',null,['class' => 'form-control ',
                'id' => 'nomornaskah','name' => 'nomornaskah' , 'rows' => '5']) !!}
        </div>
    </div>


<div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('perihalnaskah','Perihal Naskah') !!}
            {!! Form::text('perihalnaskah',null,['class' => 'form-control ',
                'id' => 'perihalnaskah','name' => 'perihalnaskah' , 'rows' => '5']) !!}
        </div>
    </div>


<div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('namakegiatan',' Nama Kegiatan') !!}
            {!! Form::text('namakegiatan',null,['class' => 'form-control ',
                'id' => 'namakegiatan','name' => 'namakegiatan' , 'rows' => '5']) !!}
        </div>
    </div>

<div class="col-md-4">
        <hr>

        <div class="form-group">

              {!! Form::label('tanggalawal','Tgl Reg') !!}

            {!! Form::date('tanggalawal', null, ['class' => "form-control", 'required', 'autofocus']); !!}
         </div>
    </div>

<div class="col-md-4">
        <hr>

        <div class="form-group">

              {!! Form::label('tanggalakhir','Tgl Reg') !!}

           {!! Form::date('tanggalakhir', null, ['class' => "form-control", 'required', 'autofocus']); !!}

                    </div>
    </div>



<div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('tempatkegiatan',' Tempat Kegiatan') !!}
            {!! Form::text('tempatkegiatan',null,['class' => 'form-control ',
                'id' => 'tempatkegiatan','name' => 'tempatkegiatan' , 'rows' => '5']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <hr>

        <div class="form-group">
            {!! Form::label('arahan','Arahan') !!}
            {!! Form::textarea('arahan',null,['class' => 'form-control ',
                'id' => 'arahan','name' => 'arahan' , 'rows' => '5']) !!}
        </div>
    </div>


     <div class="col-md-4">
        <hr>

        <div class="form-group">
           {!! Form::select('disposisi_id',$disposisi,null,["class"=>"form-control", "required",]   ) !!}


            @if ($errors->has('disposisi'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('disposisi') }}</li>
                </ul>
            @endif
        </div>
    </div>

     <div class="col-md-4">
        <hr>

        <div class="form-group">
           {!! Form::select('kepada_id',$kepada,null,["class"=>"form-control", "required",]   ) !!}

            @if ($errors->has('kepada'))
                <ul class="parsley-errors-list filled" id="parsley-id-4">
                    <li class="parsley-required">{{ $errors->first('kepada') }}</li>
                </ul>
            @endif
        </div>
    </div>


{!! Form::hidden('users_id', Auth::id() ); !!}

     
    <div class="col-md-4">
        <hr>

        <button class="btn btn-primary btn-bold">Submit</button>
        <a class="btn btn-danger btn-bold" href="{{route('suratmasuk.index')}}">Kembali</a>
    </div>
</div>