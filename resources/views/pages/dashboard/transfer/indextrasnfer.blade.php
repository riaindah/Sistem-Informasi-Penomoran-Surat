@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Tampilkan Jenis Transfer - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Jenis Transfer</h4>
            <div class="card-body">
                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('jenisTransfer.tambah')}}" class="btn btn-outline btn-success">Tambah Data</a>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/jenisTransfer/tampil">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>ID</th>
                        <th>Jenis Transfer</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($_GET['search']))
                        <?php
                        $searchJenisT = \Illuminate\Support\Facades\DB::table('jenisTransferPrioritas')
                            ->where('jenisTransfer','like','%'.$_GET['search'].'%')
                            ->get();
                        ?>

                        @foreach($searchJenisT as $sspp)
                            <tr class="bg-secondary">
                                <th scope="row">{{$sspp->id}}</th>
                                <td>{{$sspp->jenisTransfer}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['jenisTransfer.destroy', $sspp->id] ]) !!}
                                    <a href="{{route('jenisTransfer.edit',$sspp->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <button id="delete"
                                            onclick="return confirm('Lanjutkan Menghapus?')"
                                            type="submit"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    @else
                        @foreach($jenisTransfer as $spp)
                            <tr class="bg-secondary">
                                <th scope="row">{{$spp->id}}</th>
                                <td>{{$spp->jenisTransfer}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['jenisTransfer.destroy', $spp->id] ]) !!}
                                    <a href="{{route('jenisTransfer.edit',$spp->id)}}" class="btn btn-primary btn-sm">Update</a>
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
                    @if($searchJenisT->count() < 1)
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