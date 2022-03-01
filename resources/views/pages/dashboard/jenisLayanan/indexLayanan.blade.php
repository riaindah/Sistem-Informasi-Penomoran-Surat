@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Jenis Layanan - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Jenis Layanan</h4>
            <div class="card-body">

                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('jl.tambah')}}" class="btn btn-outline btn-success">Tambah Data</a>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/jenisLayanan/tampil">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>ID</th>
                        <th>Jenis Layanan</th>
                        <th>Kode</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($_GET['search']))
                        <?php
                            $searchJl = \Illuminate\Support\Facades\DB::table('jenisLayanan')
                            ->where('nama_jenis_layanan','like','%'.$_GET['search'].'%')
                            ->get();
                        ?>
                        @foreach($searchJl as $jl)
                            <tr class="bg-secondary">
                                <th scope="row">{{$jl->id}}</th>
                                <td>{{$jl->nama_jenis_layanan}}</td>
                                <td>{{$jl->kode}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['jl.destroy', $jl->id] ]) !!}
                                    <a href="{{route('jl.edit',$jl->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <button id="delete"
                                            onclick="return confirm('Lanjutkan Menghapus?')"
                                            type="submit"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($jenisLayanan as $jl)
                            <tr class="bg-secondary">
                                <th scope="row">{{$jl->id}}</th>
                                <td>{{$jl->nama_jenis_layanan}}</td>
                                <td>{{$jl->kode}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['jl.destroy', $jl->id] ]) !!}
                                    <a href="{{route('jl.edit',$jl->id)}}" class="btn btn-primary btn-sm">Update</a>
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
                    @if($searchJl->count() < 1)
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