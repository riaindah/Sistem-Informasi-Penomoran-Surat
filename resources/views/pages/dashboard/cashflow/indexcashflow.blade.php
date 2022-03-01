@extends('pages.dashboard.layouts.main')

@section('title')
    <title>Tampilkan Data Cashflow - PT. Taspen(persero)</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="card">
            <h4 class="card-title">Data Cashflow</h4>
            <div class="card-body">
                <div class="row gap-y">
                    <div class="col-xl-6">
                        <a href="{{route('cashflow.tambah')}}" class="btn btn-outline btn-success">Tambah Data</a>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-right">
                            <!-- Default -->
                            <form class="lookup lookup-right" action="/cashflow/tampil">
                                <input type="text" id="search" name="search" placeholder="Cari...">
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table table-lg table-separated">
                    <thead>
                    <tr class="bg bg-primary">
                        <th>Jenis Pensiun</th>
                        <th>Kode SPP</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Transfer</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cashflow as $bks)
                        <tr class="bg-secondary">
                            <td>{{$bks->jenisSpp}}</td>
                            <td>{{$bks->kodeSpp}}</td>
                            <td>{{$bks->jumlah}}</td>
                            <td>{{$bks->tanggal}}</td>
                            <td>{{$bks->transfer}}</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection