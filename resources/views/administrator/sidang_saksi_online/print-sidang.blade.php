<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/brand/favicon.ico" />
    <!-- TITLE -->
    <title>Rekapitung</title>

    <!-- BOOTSTRAP CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../../assets/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="../../assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">

    <!--C3 CHARTS CSS -->
    <link href="../../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="../../assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../../assets/css/icons.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- SELECT2 CSS -->
    <link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="../../assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/colors/color1.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <link href="../../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

    @livewireStyles
    <style>
        /* Style the tab */

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
            /* Remove scrollbar space */
            background: transparent;
            /* Optional: just make scrollbar invisible */
        }

        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }

        .tab {
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-right: none;
            border-left: none;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: rgba(0, 0, 0, 0.25)
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            margin-top: 25px;
        }
    </style>

    <script src="../../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://raw.githack.com/thdoan/magnify/master/dist/css/magnify.css">

    <!-- GALLERY CSS -->
    <link href="../../assets/plugins/gallery/gallery.css" rel="stylesheet">

</head>

<body class="app sidebar-mini">
    
<div class="card">
    <div class="card-header mx-auto text-center">
        <div class="row">
            <div class="col-md-12 mb-2">
                <img style="width: 175px" src="{{url('/')}}/assets/images/brand/logo-2.png" alt="">
            </div>
            <div class="col-md-12">
                <h5>{{$kota['name']}}, </h5>
            </div>
            <div class="col-md-12">
                <h5>KECAMATAN {{$kecamatan['name']}}, KELURAHAN</h5>
            </div>
            <div class="col-md-12">
                <h5>{{$kelurahan['name']}}</h5>
            </div>
            <div class="col-md-12">
                <h3 class="text-danger">TPS {{$data_tps->number}}</h3>
            </div>
            <div class="col-md-12">
                <p>No. Dokumen: {{$qrcode_hukum['nomor_berkas']}}</p>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Petugas Saksi</td>
                        <td>Petugas Verifikator</td>
                        <td>Petugas Validasi Kecurangan</td>
                    </tr>
                    <tr>
                        <td>{{$qrcode_hukum['name']}}</td>
                        <td>{{$verifikator_id['name']}}</td>
                        <td>{{$hukum_id['name']}}</td>
                    </tr>
                    <tr>
                        <td>{{$qrcode_hukum['no_hp']}}</td>
                        <td>{{$verifikator_id['no_hp']}}</td>
                        <td>{{$hukum_id['no_hp']}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md">
                <h1 class="mb-0">Laporan Kecurangan</h1>
                <hr style="border: 1px solid black">
                <ul class="list-style-1">  
                        @foreach ($list as $item)
                        <li>{{$item['text']}}</li>
                        @endforeach
                    </ul>
                    
                    
                    <div id="carouselFotoKecurangan" class="carousel slide mt-2 mb-2" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <?php $i = 1; ?>
                  @foreach ($bukti_foto as $item)
                    <div class="carousel-item {{($i == 1)?'active':""}}">
                  <?php $i++; ?>
                           <img class="d-block w-100" alt="" src="{{asset('storage')}}/{{ $item->url }}" data-bs-holder-rendered="true">
                    </div>
                @endforeach
                  
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselFotoKecurangan" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselFotoKecurangan" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>  
                    
                    
            

                @foreach ($bukti_vidio as $item)
                <div class="mt-2 mb-2" id="video" role="tabpanel" aria-labelledby="pills-home-tab">
                    <video style="width: 100%; height: auto;" controls>
                        <source src="{{asset('storage/'.$item->url)}}" type=video/ogg>
                        <source src="{{asset('storage/'.$item->url)}}" type=video/mp4>
                    </video>
                </div>
                @endforeach
             
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12s">
                <h1 class="mb-0 text-center">Surat Pernyataan</h1>
                <hr style="border: 1px solid black">
                <b>Yang bertanda tangan dibawah ini:</b>
                <table class="table mt-2">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{$qrcode_hukum['nik']}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$qrcode_hukum['name']}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$qrcode_hukum['address']}}</td>
                    </tr>
                    <tr>
                        <td>No. Hp</td>
                        <td>:</td>
                        <td>{{$qrcode_hukum['no_hp']}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$qrcode_hukum['email']}}</td>
                    </tr>
                    <tr>
                        <td>TPS</td>
                        <td>:</td>
                        <td>{{$data_tps->number}}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>:</td>
                        <td>{{$kelurahan['name']}}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td>{{$kecamatan['name']}}</td>
                    </tr>
                    <tr>
                        <td>Kota/Kab</td>
                        <td>:</td>
                        <td>{{$kota['name']}}</td>
                    </tr>
                </table>
                {!! html_entity_decode($qrcode_hukum['deskripsi']) !!}
            </div>
            <div class="col-md-8 text-center py-3 mt-3" style="border: 1px solid #45aaf2; background: #45aaf236;">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h4 class="card-title mb-1">Mengesahkan</h4>
                        <p class="mb-0">Data Laporan Kecurangan</p>
                        <p class="mb-0">Tanggal, 14 Februari 2024</p>
                        <p class="mb-5">Dalam Rangka Gugatan Pemilu Presiden Tahun 2024</p>
                        <p class="mb-0">{{$verifikator_id['name']}}</p>
                        <p class="mb-0">Validator Kecurangan</p>
                    </div>
                    <div class="col-md">
                        <img style="width: 150px" src="{{url('/')}}/assets/stamp.png" alt="">
                    </div>
                </div>
            </div>
        </div>
                
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!--- TABS JS -->
    <script src="../../assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
    <script src="../../assets/plugins/tabs/tab-content.js"></script>
           
            <!-- JQUERY JS -->
        <script src="../../assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SPARKLINE JS-->
        <script src="../../assets/js/jquery.sparkline.min.js"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="../../assets/js/circle-progress.min.js"></script>

        <!-- CHARTJS CHART JS-->
        <script src="../../assets/plugins/chart/Chart.bundle.js"></script>
        <script src="../../assets/plugins/chart/utils.js"></script>

        <!-- PIETY CHART JS-->
        <script src="../../assets/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="../../assets/plugins/peitychart/peitychart.init.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="../../assets/plugins/select2/select2.full.min.js"></script>
        <script src="../../assets/plugins/sweet-alert/sweetalert.min.js"></script>
        <!-- DATA TABLE JS-->
        <script src="../../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="../../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="../../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
        <script src="../../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
        <script src="../../assets/plugins/datatable/js/jszip.min.js"></script>
        <script src="../../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="../../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="../../assets/plugins/datatable/js/buttons.html5.min.js"></script>
        <script src="../../assets/plugins/datatable/js/buttons.print.min.js"></script>
        <script src="../../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
        <script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="../../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
        <script src="../../assets/js/table-data.js"></script>

        <!-- ECHART JS-->
        <script src="../../assets/plugins/echarts/echarts.js"></script>

        <!-- SIDE-MENU JS-->
        <script src="../../assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- SIDEBAR JS -->
        <script src="../../assets/plugins/sidebar/sidebar.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="../../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="../../assets/plugins/p-scroll/pscroll.js"></script>
        <script src="../../assets/plugins/p-scroll/pscroll-1.js"></script>

        <!-- APEXCHART JS -->
        <script src="../../assets/js/apexcharts.js"></script>

        <!-- INDEX JS -->
        <script src="../../assets/js/index1.js"></script>

        <!-- CUSTOM JS -->
        <script src="../../assets/js/custom.js"></script>

        <!-- C3 CHART JS -->
        <script src="../../assets/plugins/charts-c3/d3.v5.min.js"></script>
        <script src="../../assets/plugins/charts-c3/c3-chart.js"></script>

        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

        <!-- CHART-CIRCLE JS-->
        <script src="../../assets/js/circle-progress.min.js"></script>
        <script src="../../assets/js/chat.js"></script>

        <!-- GALLERY JS -->
        <script src="../../assets/plugins/gallery/picturefill.js"></script>
        <script src="../../assets/plugins/gallery/lightgallery.js"></script>
        <script src="../../assets/plugins/gallery/lightgallery-1.js"></script>
        <script src="../../assets/plugins/gallery/lg-pager.js"></script>
        <script src="../../assets/plugins/gallery/lg-autoplay.js"></script>
        <script src="../../assets/plugins/gallery/lg-fullscreen.js"></script>
        <script src="../../assets/plugins/gallery/lg-zoom.js"></script>
        <script src="../../assets/plugins/gallery/lg-hash.js"></script>
        <script src="../../assets/plugins/gallery/lg-share.js"></script>
        @include('layouts.templateCommander.script-command')

         <script>
        // setTimeout(function() {
        window.print();
        window.onafterprint = back;

        function back() {
            window.close()
        }



        // },300)
    </script>
        <!-- Internal Chat js-->