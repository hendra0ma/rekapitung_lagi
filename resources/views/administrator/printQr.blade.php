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
                    <h1 class="mt-2 text-danger text-uppercase" style="font-size: 40px;">bukti kecurangan rekapitung
                    </h1>
                    <h3 class="mt-1 mb-1">
                        Fraud Barcode Report (FBR)
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
                     PILLPRES 2024
                    </h3>
                </center>
            </div>
        </div>

    </div>

    <div class="row">
        <?php $i  = 1;  ?>
        @foreach ($qrcode as $item)
        <?php $i++  ?>

        <div class="col-4 qr">

            <div class="card ml-1 mb-1 mr-1" style="margin-top:{{($i % 14 == 0 || $i % 15 == 0||$i % 16 == 0)?'200px':'30px'}}">
                <div class="card-body">
                    <?php $scan_url = "" . url('') . "/scanning/" . Crypt::encrypt($item->id) . ""; ?>
                    {!! QrCode::size(150)->generate($scan_url); !!}
                </div>
            </div>
        </div>
        @endforeach
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