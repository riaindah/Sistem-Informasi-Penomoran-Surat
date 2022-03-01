{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<meta name="viewport"--}}
{{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css ')}}">--}}
{{--<!-- Font Awesome -->--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}} ">--}}
{{--<!-- Ionicons -->--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css')}} ">--}}

{{--<title> Exports All PDF</title>--}}
{{--</head>--}}
{{--<body>--}}

   <table align="center" class="kop">
        <tr>
            <td><img src="{{ asset(asset('assets/img/kota.jpeg') ) }}" alt="" style="width: 90px; height: 110px;"></td>
            <td align="center">
                <font size="4">PEMERINTAH KOTA SAMARINDA</font><br>
               
                <font size="6"><b>DINAS PERPUSTAKAAN</b></font><br>
                <font size="2">Alamat : Jl.KesumaBangsa  No.5 Telp/Fax(0541)412777 Email:dinpus.kotasamarinda@gmail.com</font><br>
                <font size="3">SAMARINDA(KALIMANTAN TIMUR)KODE POS:75123</font>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr style="border: 2px solid"></td>
        </tr>
    </table>
    
  
 <style>
        body{
            padding: 1em;
            line-height: 1.5;
        }
        .kop{
            line-height: 1;
        }
        .tengah{
            padding-left: 37px;
            padding-right: 90px;

           
        }
        #tabel td, #tabel th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tabel tr:nth-child(even){background-color: #f2f2f2;}

    #ptabel tr:hover {background-color: #ddd;}

    #tabel th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    .kiri{
    padding-left: 200px;
}
.kirii{
    padding-left: 200px;
}

.kanan{
    padding-left: 200px;
    padding-top: 40px;
}

.kanant{
    padding-left: 200px;
    padding-bottom: 50px;
}


    </style>

<table id="categories" width="100%">
    <thead>
    <tr>
        
       <table  class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                <td align="center">No</td>
                <td align="center">Klafikasi Naskah</td>
                <td align="center">Tanggal Registrasi</td>
                <td align="center">Tanggal Naskah</td>
                <td align="center">Asal Naskah</td>
                <td align="center"> No Naskah</td>
                <td align="center">Perihal Naskah</td>
                <td align="center">Nama Kegiatan</td>
                <td align="center">Tgl Awal Kegiatan</td>
                <td align="center">Tgl Akhir Kegiatan</td>
                <td align="center">Tempat Kegiatan</td>
                <td align="center"> Kepada </td>
                <td align="center">Disposisi </td>
                <td align="center">Arahan </td>
               
               
                </tr>

                @foreach($list as $item)

                <tr>
               <td>{!!$item->id!!}</td>
               <td>{!!$item->kategori->namakategori!!}</td>
                <td>{!!$item->tanggalregistrasi!!}</td>
                <td>{!!$item->tanggalnaskah!!}</td>
                <td>{!!$item->asalnaskah!!}</td>
                <td>{!!$item->nomornaskah!!}</td>
                <td>{!!$item->perihalnaskah!!}</td>
                <td>{!!$item->namakegiatan!!}</td>
                <td>{!!$item->tanggalawal!!}</td>
                <td>{!!$item->tanggalakhir!!}</td>
                <td>{!!$item->tempatkegiatan!!}</td>
                <td>{!!$item->kepada->kepada!!}</td>
                <td>{!!$item->disposisi->disposisi!!}</td>
                <td>{!!$item->arahan!!}</td>


                
                
              
                <td>
                    @endforeach

</table>
<table>
    <tr>
        <td></td>
        <td class="kanan"></td>
        <td class="kanan"> Mengetahui</td>
        
    </tr>
    <tr>
        <td></td>
        <td class="kanant"></td>
        <td class="kanant" style="font-weight: bold;">NAMA PEGAWAI  </td>
    </tr>
</table>

<table>
    <tr>
        <td></td>
        <td class="kiri"></td>
        <td class="kiri" style="font-weight: bold; text-decoration: underline; font-size: 11">ANTUNG FATAHILLAH,S. PdI</td>
    </tr>
    <tr>
        <td></td>
        <td class="kirii"></td>
        <td class="kirii" style="padding-top: -5">NIP : 19660426198903 1 015</td>
    </tr>
</table>

<script type="text/javascript">
    window.print();
</script>

{{--<!-- jQuery 3 -->--}}
{{--<script src="{{  asset('assets/bower_components/jquery/dist/jquery.min.js') }} "></script>--}}
{{--<!-- Bootstrap 3.3.7 -->--}}
{{--<script src="{{  asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{  asset('assets/dist/js/adminlte.min.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
    

