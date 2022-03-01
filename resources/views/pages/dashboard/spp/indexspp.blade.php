@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Tampilkan Data SPP - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Data (Sumber) SPP</h4>
            <div class="card-body">
                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('spp.add')}}" class="btn btn-outline btn-success">Tambah Data</a>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/spp/tampil">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>ID</th>
                        <th>Sumber SPP</th>
                        <th>Kode</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($_GET['search']))
                            <?php
                                $searchSpp = \Illuminate\Support\Facades\DB::table('spp')
                                    ->where('spp_name','like','%'.$_GET['search'].'%')
                                    ->get();
                            ?>

                            @foreach($searchSpp as $sspp)
                                <tr class="bg-secondary">
                                    <th scope="row">{{$sspp->id}}</th>
                                    <td>{{$sspp->spp_name}}</td>
                                    <td>{{$sspp->singkatan}}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route'
                                                                =>['spp.destroy', $sspp->id] ]) !!}
                                        <a href="{{route('spp.edit',$sspp->id)}}" class="btn btn-primary btn-sm">Update</a>
                                        <button id="delete"
                                                onclick="return confirm('Lanjutkan Menghapus?')"
                                                type="submit"
                                                class="btn btn-danger btn-sm">Hapus</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            @foreach($spps as $spp)
                                <tr class="bg-secondary">
                                    <th scope="row">{{$spp->id}}</th>
                                    <td>{{$spp->spp_name}}</td>
                                    <td>{{$spp->singkatan}}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route'
                                                                =>['spp.destroy', $spp->id] ]) !!}
                                        <a href="{{route('spp.edit',$spp->id)}}" class="btn btn-primary btn-sm">Update</a>
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