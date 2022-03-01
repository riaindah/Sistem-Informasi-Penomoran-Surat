@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Tampilkan Data </title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Pencatatan Surat</h4>
            <div class="card-body">
                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('suratmasuk.create')}}" class="btn btn-outline btn-success">Tambah Data</a>
                         <a href="{{route('cetakpdfsuratmasuk')}}" class="btn btn-outline btn-danger">PDF </a>
                    
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/suratmasuk/index">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>Registrasi</th>
                        <th>Tanggal Naskah</th>
                        <th>Asal Naskah</th>
                        <th>Arahan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($_GET['search']))
                        <?php
                        $suratmasuk = \Illuminate\Support\Facades\DB::table('suratmasuk')
                            ->where('Klafikasinaskah','like','%'.$_GET['search'].'%')
                            ->get();
                        ?>

                        @foreach($surat as $berkas)
                            <tr class="bg-secondary">
                                <td>{{$berkas->tanggalregistrasi}}</td>
                                <td>{{$berkas->tanggalnaskah}}</td>
                                <td>{{$berkas->asalnaskah}}</td>
                                <td>{{$berkas->arahan}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['suratmasuk.destroy', $berkas->id] ]) !!}
                                    <a href="{{route('suratmasuk.edit',$sspp->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <button id="delete"
                                            onclick="return confirm('Lanjutkan Menghapus?')"
                                            type="submit"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    @else
                        @foreach($surat as $bks)
                            <tr class="bg-secondary">
                                <td>{{$bks->tanggalregistrasi}}</td>

                                <td>{{$bks->tanggalnaskah}}</td>

                                <td>{{$bks->asalnaskah}}</td>
                                

                                <td>{{$bks->arahan}}</td>
                                
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['suratmasuk.destroy', $bks->id] ]) !!}
                                    <a href="{{route('suratmasuk.edit',$bks->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    
                                    <button id="delete"
                                            onclick="return confirm('Lanjutkan Menghapus?')"
                                            type="submit"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                @if(isset($_GET['search']))
                    @if($searchSpp->count() < 1)
                        <div class="col-xl-12">
                            <div class="text-center">
                                <blockquote class="blockquote">Data Pencarian Tidak Di Temukan</blockquote>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection