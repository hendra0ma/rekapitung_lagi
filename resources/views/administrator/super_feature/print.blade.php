<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fraud Barcode Report</title>
    <style>
        .pages {
            position: relative;
            width: 100%;
            height: 100%;
            page-break-before: auto;
            page-break-after: auto;
            page-break-inside: avoid;
        }
        
        @media screen {
            div.divFooter {
                display: none;
            }
            body {
                display: none;
            }
        }
        
        @media print {
            div.divFooter {
                position: fixed;
                bottom: 0;
            }
            .stamp {
                position: relative;
               margin-top: 40px;
               margin-left: 75%;
                
            }
        }
    </style>
</head>

<body>


    <div class="asdf" style="position: relative;width:100%;height:700px;page-break-before: auto;page-break-after: always;page-break-inside: avoid;">

        <div class="row">
            <div class="col-12">
                <center>
                    <h1 class="mt-2 text-danger text-uppercase" style="font-size: 40px;">ANALISA REALISASI DPT KPU
                    </h1>
                    <h3 class="mt-1 mb-1">
                       PILPRES {{$kota->name}}
                    </h3>

                    <img style="width: 350px; height: auto; margin-top:75px" src="{{url('')}}/assets/images/brand/logo.png" alt="">

                    <center>
            </div>
        </div>
        <hr>

        <div class="row justify-content-center border border-dark border-3" style="align-items:center;margin-top:75px">
            <div class="col-6 text-center mt-2 mb-2">
                <img src="{{url('')}}/storage/{{$config->regencies_logo}}" alt="" class="img-fluid" style="height: 150px;">
            </div>

            <div class="col-6 mt-2 mb-2">
                <h3 class="text-right">
                    {{$kota->name }}
                </h3>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                
    <img src="{{asset('')}}assets/stamp.png"class="img-flluid stamp"style="width:150px;height:auto" alt="">
                <center>
                    <h3 class="fixed-bottom text-uppercase">
                     PILPRES 2024
                    </h3>
                </center>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-hover">
              <thead class="bg-primary">
                  <tr>
                  <tr>
                      <td class="text-center align-middle">Kecamatan</td>
                      <td class="text-center align-middle">Total Dpt KPU</td>
                      <td class="text-center align-middle">Total Pengguna Hak Pilih</td>
                      <td class="text-center align-middle">Selisih</td>
                      <td class="text-center align-middle">GAP</td>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($kecamatan as $item)
                  <?php $pengguna_hak = App\Models\SaksiData::where('district_id',$item['id'])->sum('voice'); ?>
                  <?php $persen = ($item['dpt'] - $pengguna_hak) / $item['dpt'] * 100; ?>
                  <tr>
                      <td>{{$item['name']}}</td>
                      <td>{{$item['dpt']}}</td>
                      <td>{{$pengguna_hak}}</td>
                      <td>{{$item['dpt'] - $pengguna_hak}}</td>
                      <td>@if ($pengguna_hak == 0)
                          0%
                          @else
                          {{ floor($persen) }}%
                          @endif</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Keterangan Indikator</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered w-100">
                       <tr>
                          <td><b class="text-warning">1% - 50%</b> <br> Rendah</td>
                          <td><b class="text-success">51% - 70%</b> <br> Normal</td>
                          <td><b class="text-secondary">71% - 80%</b> <br> Tinggi</td>
                          <td><b class="text-danger">81% - 90%</b> <br> Indikasi Kecurangan</td>
                          <td><b class="text-dark">91% - 100%</b> <br> Manipulasi</td>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        // setTimeout(function() {
        window.print();
        window.onafterprint = back;

        function back() {
            window.close()
        }



        // },300)
    </script>
</body>

</html>