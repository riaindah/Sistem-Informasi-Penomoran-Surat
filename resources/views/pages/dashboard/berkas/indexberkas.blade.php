@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Tampilkan Data Berkas - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Pencatatan Berkas</h4>
            <div class="card-body">
                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('berkas.add')}}" class="btn btn-outline btn-success">Tambah Data</a>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/berkas/tampil">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>Nama Peserta</th>
                        <th>Notas</th>
                        <th>Tanggal</th>
                        <th>Jenis Layanan</th>
                        <th>Sumber Spp</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($_GET['search']))
                        <?php
                        $searchBerkas = \Illuminate\Support\Facades\DB::table('berkas')
                            ->where('namaPeserta','like','%'.$_GET['search'].'%')
                            ->get();
                        ?>

                        @foreach($searchBerkas as $berkas)
                            <tr class="bg-secondary">
                                <td>{{$berkas->namaPeserta}}</td>
                                <td>{{$berkas->notas}}</td>
                                <td>{{\App\JenisLayanan::pluck('kode')}}</td>
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
                        @foreach($berkas as $bks)
                            <tr class="bg-secondary">
                                <td>{{$bks->namaPeserta}}</td>
                                <td>{{$bks->notas}}</td>
                                <td>{{$bks->tanggal}}</td>
                                <?php
                                    $tableRel = DB::table('jenisLayanan_berkas_relation')
                                    ->select('kode','berkas_id')
                                    ->where('berkas_id','=',$bks->id)
                                    ->leftJoin('jenisLayanan', 'jenisLayanan_berkas_relation.jenisLayanan_id', '=', 'jenisLayanan.id')
                                    ->get();
                                ?>
                                <td>
                                    @foreach($tableRel as $tr)
                                        <label class="badge badge-warning badge-pill">{{$tr->kode}}</label>
                                    @endforeach
                                </td>
                                <td>
                                    <label class="badge badge-dark badge-pill">
                                        {{\App\Spp::where('id',$bks->spp_id)->pluck('singkatan')->first()}}
                                    </label>
                                </td>
                                <td>
                                    @if($bks->keterangan == '')
                                        {{'----'}}
                                    @else
                                        {{$bks->keterangan}}
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'
                                                            =>['berkas.destroy', $bks->id] ]) !!}
                                    <a href="{{route('berkas.edit',$bks->id)}}" class="btn btn-primary btn-sm">Update</a>
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