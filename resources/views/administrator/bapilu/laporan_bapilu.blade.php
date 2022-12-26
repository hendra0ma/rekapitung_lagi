@include('layouts.partials.head')
@include('layouts.partials.sidebar-bawaslu')
<?php
$solution = \App\Models\SolutionFraud::get();
?>

@include('layouts.partials.header')

<div class="row mt-3">
    <div class="col-lg-4">
        <h1 class="page-title fs-1 mt-2">Dashboard Rekapitung
            <!-- Kota -->
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bawaslu
                <!-- Kota -->
            </li>
        </ol>
        <h4 class="fs-4 mt-2 fw-bold">Akun Bawaslu</h4>
    </div>

    <div class="col-lg-4 text-center">
        <h4><img style="width: 150px"
                src="data:image/png;base64,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" alt="">
        </h4>
    </div>

    <div class="col-lg-4">
        <div class="row justify-content-end">
            <div class="col-4">
                <a href="{{url('')}}/administrator/print-index-tsm" target="_blank"
                    class="btn btn-block btn-dark ml-2 mr-2 w-100"> Print &nbsp;&nbsp;<i class="fa fa-print"></i></a>
            </div>

        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <h2 class="fw-bold text-center mx-auto" style="margin-bottom: 5px;">Laporan Kecurangan dan Pelanggaran Pemilu
        </h2>
    </div>
    <div class="col-md-12">
        <h2 class="fw-bold text-center mx-auto"> Pilkada Kota Tangerang Selatan Tahun 2020</h2>
    </div>
</div>

<hr>
<h2 class="fw-bold mb-0 tugel" data-bs-toggle="collapse" href="#collapse1" role="button"
    aria-expanded="false" aria-controls="multiCollapseExample1">
    <div class="row">
        <div class="col-6">
            Data 1
        </div>
        <div class="col-6 text-end">
            <i class="fa-solid fa-chevron-down"></i>
            <i class="fa-solid fa-chevron-right" style="display: none"></i>
        </div>
    </div>
</h2>
<hr>

<!-- PAGE-HEADER END -->
<div class="row mt-3 collapse multi-collapse show chevron-logic" id="collapse1">

    <h2 class="fw-bold">Index TSM Pemilu</h2>
    <div class="col-lg-6">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4 class="mx-auto">
                                PELANGGARAN ADMINISTRASI PEMILU
                            </h4>
                        </center>
                    </div>
                    <div class="card-body">

                        <center>
                            <div id="chart-pie"></div>
                        </center>
                        <table
                            class="table table-bordered text-nowrap border-bottom dataTable no-footer table-striped table-hover"
                            id="basic-datatable" role="grid" aria-describedby="basic-datatable_info">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="text-white">No</th>
                                    <th class="text-white">Kode</th>
                                    <th class="text-white">Persentase</th>
                                    <th class="text-white">Kecurangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($index_tsm as $item)
                                <?php if ($item->jenis != 0) {
                                            continue;
                                        } ?>
                                <tr>
                                    <?php


                                            $totalKec =  App\Models\Bukti_deskripsi_curang::join('list_kecurangan', 'list_kecurangan.id', '=', 'bukti_deskripsi_curang.list_kecurangan_id')
                                                ->join('saksi', 'saksi.tps_id', '=', 'bukti_deskripsi_curang.tps_id')
                                                ->where('saksi.status_kecurangan', "terverifikasi")
                                                ->where('bukti_deskripsi_curang.list_kecurangan_id', $item->id)
                                                ->where('list_kecurangan.jenis', 0)
                                                ->count();
                                            $jumlahSaksi =        App\Models\Saksi::whereNull('pending')->count();
                                            $persen = ($totalKec / $jumlahSaksi) * 100;

                                            ?>

                                    <td>{{ $i++ }}</td>
                                    <td>{{$item->kode}}</td>
                                    <td>{{substr($persen,0,4)}}%</td>
                                    <td>{{ $item['kecurangan'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-6">
      <div class="row justify-content-center">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">
                      <center>
                          <h4 class="mx-auto">
                              PELANGGARAN TINDAK PIDANA
                          </h4>
                      </center>
                  </div>
                  <div class="card-body">

                      <center>
                          <div id="chart-donut"></div>
                      </center>

                      <div class="table-responsive">
                          <table
                              class="table table-bordered text-nowrap border-bottom dataTable no-footer table-striped table-hover datable"
                              role="grid" id="responsive-datatable_info">
                              <thead class="bg-dark">
                                  <tr>
                                      <th class="text-white">No</th>
                                      <th class="text-white">Kode</th>
                                      <th class="text-white">Persentase</th>
                                      <th class="text-white">Kecurangan</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $i = 1 ?>
                                  @foreach ($index_tsm as $item)
                                  <?php if ($item->jenis != 1) {
                                              continue;
                                          } ?>
                                  <tr>
                                      <?php

                                              $totalKec =  App\Models\Bukti_deskripsi_curang::join('list_kecurangan', 'list_kecurangan.id', '=', 'bukti_deskripsi_curang.list_kecurangan_id')
                                                   ->join('saksi', 'saksi.tps_id', '=', 'bukti_deskripsi_curang.tps_id')
                                                   ->where('saksi.status_kecurangan', "terverifikasi")
                                                  ->where('bukti_deskripsi_curang.list_kecurangan_id', $item->id)
                                                  ->where('list_kecurangan.jenis', 1)
                                                  ->count();
                                             $jumlahSaksi =        App\Models\Saksi::whereNull('pending')->count();
                                              $persen = ($totalKec / $jumlahSaksi) * 100;
                                              ?>
                                      <td>{{ $i++ }}</td>
                                      <td>{{$item->kode}}</td>
                                      <td>{{substr($persen,0,4)}}%</td>
                                      <td>{{ $item['kecurangan'] }}</td>
                                  </tr>
                                  @endforeach

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4 class="mx-auto">
                                PELANGGARAN KODE ETIK
                            </h4>
                        </center>
                    </div>
                    <div class="card-body">

                        <center>
                            <div id="chart-donut-et"></div>
                        </center>

                        <div class="table-responsive">
                            <table
                                class="table table-bordered text-nowrap border-bottom dataTable no-footer table-striped table-hover datable"
                                role="grid" id="responsive-datatable_info">
                                <thead class="bg-dark">
                                    <tr>
                                        <th class="text-white">No</th>
                                        <th class="text-white">Kode</th>
                                        <th class="text-white">Persentase</th>
                                        <th class="text-white">Kecurangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($index_tsm as $item)
                                    <?php if ($item->jenis != 2) {
                                                continue;
                                            } ?>
                                    <tr>
                                        <?php

                                                $totalKec =  App\Models\Bukti_deskripsi_curang::join('list_kecurangan', 'list_kecurangan.id', '=', 'bukti_deskripsi_curang.list_kecurangan_id')
                                                     ->join('saksi', 'saksi.tps_id', '=', 'bukti_deskripsi_curang.tps_id')
                                                     ->where('saksi.status_kecurangan', "terverifikasi")
                                                    ->where('bukti_deskripsi_curang.list_kecurangan_id', $item->id)
                                                    ->where('list_kecurangan.jenis', 1)
                                                    ->count();
                                               $jumlahSaksi =        App\Models\Saksi::whereNull('pending')->count();
                                                $persen = ($totalKec / $jumlahSaksi) * 100;
                                                ?>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$item->kode}}</td>
                                        <td>{{substr($persen,0,4)}}%</td>
                                        <td>{{ $item['kecurangan'] }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Keterangan Kode</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered w-100">
                      <?php 
                      $kodeF = DB::table('solution_frauds')->get();
                      ?>
                       <tr>
                          @foreach($kodeF as $kod)
                         
                          <td><b class="text-danger">{{$kod->kode}}</b> ({{$kod->solution}})</td>
                        
                          @endforeach
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<h2 class="fw-bold mb-0 tugel" data-bs-toggle="collapse" href="#collapse2" role="button"
    aria-expanded="false" aria-controls="multiCollapseExample2">
    <div class="row">
        <div class="col-6">
            Data 2
        </div>
        <div class="col-6 text-end">
            <i class="fa-solid fa-chevron-down" style="display: none"></i>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
</h2>
<hr>

<div class="row collapse multi-collapse chevron-logic" id="collapse2">
    <h2 class="fw-bold">
        Rekomendasi Tindakan
    </h2>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Rekomendasi</div>
            </div>
            <div class="card-body">
                <div class="row">

                    @foreach($solution as $solut)
                    <?php $jmlh_kecurangan =  \App\Models\Tps::join('saksi', 'saksi.tps_id', '=', 'tps.id')
                                                ->join('users', 'users.tps_id', '=', 'tps.id')
                                                ->join('bukti_deskripsi_curang', 'bukti_deskripsi_curang.tps_id', '=', 'tps.id')
                                                ->join('list_kecurangan', 'list_kecurangan.id', '=', 'bukti_deskripsi_curang.list_kecurangan_id')
                                                ->where('list_kecurangan.solution_fraud_id',$solut->id)
                                                ->where('saksi.kecurangan', 'yes')
                                                ->where('saksi.status_kecurangan', 'terverifikasi')
                                                ->select('saksi.*', 'saksi.created_at as date', 'tps.*', 'users.*')
                                                ->get();
                                                
                                                
                                                ?>


                    <div class="col-lg justify-content-end">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <div class="card-title text-white">{{$solut->solution}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <b class="fs-4 mx-auto target-container<?=$solut->id?>"> </b>
                                        <script>
                                            data = [@foreach($jmlh_kecurangan as $jmlh)
                                                '{{$jmlh->tps_id}}', @endforeach
                                            ];
                                            uniqueArray = data.filter(function (item, pos) {
                                                return data.indexOf(item) == pos;
                                            });
                                            document.querySelector('b.target-container<?=$solut->id?>').innerHTML =
                                                uniqueArray.length

                                        </script>
                                    </div>
                                    <div class="col my-auto text-end">
                                        <a href="{{route('superadmin.solution',encrypt($solut->id))}}"
                                            class="my-auto">Lihat <i class="mdi mdi-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<h2 class="fw-bold mb-0 tugel" data-bs-toggle="collapse" href="#collapse3" role="button"
    aria-expanded="false" aria-controls="multiCollapseExample2">
    <div class="row">
        <div class="col-6">
            Data 3
        </div>
        <div class="col-6 text-end">
            <i class="fa-solid fa-chevron-down" style="display: none"></i>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
</h2>
<hr>

<div class="row collapse multi-collapse chevron-logic" id="collapse3">
    <h2 class="fw-bold">
        Fraud Barcode Report (FBR)
    </h2>
    <div class="col-lg-12">
        <div class="card mt-5">
            <div class="card-header">
                <h4 class="card-title text-center mx-auto">Fraud Barcode Report (FBR)</h4>

            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($qrcode as $item)
                    <?php $scan_url = "" . url('/') . "/scanning/" . Crypt::encrypt($item['nomor_berkas']) . ""; ?>
                    <div class="col-md-3">
                        <center>
                            <div class="card" style="background-color:white">
                                <div class="card-body">
                                    <a href="{{url('/') . "/scanning/" . Crypt::encrypt($item['nomor_berkas'])}}"
                                        target="_blank" rel="noopener noreferrer">
                                        {!! QrCode::size(200)->generate($scan_url); !!}
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    <hr>
<h2 class="fw-bold mb-0 tugel" data-bs-toggle="collapse" href="#collapse4" role="button"
    aria-expanded="false" aria-controls="multiCollapseExample2">
    <div class="row">
        <div class="col-6">
            Data 4
        </div>
        <div class="col-6 text-end">
            <i class="fa-solid fa-chevron-down" style="display: none"></i>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
</h2>
<hr>

<div class="row collapse multi-collapse chevron-logic" id="collapse4">
    <h2 class="fw-bold">
        Fraud Data Print (FDP)
    </h2>
    <div class="col-lg-12">
        <div class="row">
            @foreach($list_suara as $ls)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-white">DATA SAKSI</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                @if ($ls->profile_photo_path == NULL)
                                <img class="" style="width: 250px;"
                                    src="https://ui-avatars.com/api/?name={{ $ls->name }}&color=7F9CF5&background=EBF4FF"
                                    alt="img">
                                @else
                                <img class="" style="width: 250px;"
                                    src="{{url("/storage/profile-photos/".$ls->profile_photo_path) }}">
                                @endif
                            </div>
                            <div class="col-md">
                                <div class="row mb-2">
                                    <div class="col-md-4 fw-bold">NIK</div>
                                    <div class="col-md">{{$ls->nik}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 fw-bold">Nama</div>
                                    <div class="col-md">{{$ls->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 fw-bold">No Wa</div>
                                    <div class="col-md">{{$ls->no_hp}}</div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-4 fw-bold">Date</div>
                                    <div class="col-md">{{$ls->date}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md fw-bold">
                                        <a href="fotomasalah"
                                            class="btn btn-secondary w-90 fotoKecuranganterverifikasi mt-2 rounded-0"
                                            id="Cek" data-bs-toggle="modal" id=""
                                            data-bs-target="#fotoKecuranganterverifikasi" data-id="{{$ls->tps_id}}">
                                            Arsip Kecurangan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>



<div id="fotoKecuranganterverifikasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bukti</h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="container-hukum-verifikasi"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $('h2.tugel').on('click', function () {
        let koleps = $(this).attr('href');
        let down = $(this).find('i.fa-chevron-down')
        let right = $(this).find('i.fa-chevron-right')
        setTimeout(() => {
            if ($(koleps).hasClass('show')) {
                $(down).show();
                $(right).hide();
               
            } else {
                $(down).hide();
                $(right).show();
            }
        }, 10);
    });

</script>



<script>
    $('a.fotoKecuranganterverifikasi').on('click', function () {
        let id = $(this).data('id');
        $.ajax({
            url: `{{route('superadmin.ajaxKecuranganTerverifikasi')}}`,
            type: "GET",
            data: {
                id
            },
            success: function (response) {
                if (response) {
                    $('#container-hukum-verifikasi').html(response);
                }
            }
        });
    });

</script>


<script>
    $(document).ready(function () {
        $('#responsive-datatable_info').dataTable({
            "pageLength": 50
        });
    });

</script>
@include('layouts.partials.footer')
@include('layouts.partials.scripts-bapilu')
