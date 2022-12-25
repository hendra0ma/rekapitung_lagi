@extends('layouts.auth')

@section('content')
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="../../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <img src="../../assets/images/brand/logo.png" class="img-fluid" style="width:100px;height:auto;"
                        alt="">
                </div>
            </div>
            <div class="container-login100 d-flex">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                            <span class="login100-form-title">
                                Login
                            </span>
                            <div class="alert alert-success" id="kodeAlert" style="display:none">
                                Berhasil Generate kode akses, Silahkan cek Email Anda.
                            </div>

                            <x-jet-validation-errors class="mb-4" />
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="email"
                                    placeholder="Masukkan No. KTP/No. Hp/Email" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                <input class="input100" type="password" name="password" placeholder="Password" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <center>




                                <div class="wrap-input100 validate-input">
                                    <div class="otp-input-wrapper">
                                        <input type="text" maxlength="4" pattern="[0-9]*" autocomplete="off"
                                            name="acakey" required>
                                        <svg viewBox="0 0 240 1" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="0" y1="0" x2="240" y2="0" stroke="#3e3e3e" stroke-width="2"
                                                stroke-dasharray="44,22" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <p class="containerTime text-danger text-center">

                                    </p>

                                    <button class="badge bg-primary text-white p-2" id="pengajuan">
                                        <img src="<?= asset('')  ?>assets/aca3.png" class="img-thumbnail"
                                            style="height:auto;width:30px">
                                        Get Kode ACA
                                    </button>
                                </div>
                            </center>

                            <div class="text-end pt-1">
                                <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot
                                        Password?</a></p>
                            </div>

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="register-admin"
                                        class="text-primary ms-1">Create an Account</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center my-3">
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="social-login  text-center me-4">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="social-login  text-center">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <section class="bg-light" style="height: 10px;">
        <div class="container">
            <img style="display: block; margin-left: auto; margin-right: auto;"
                src="{{asset('/')}}assets/images/acakey_new.png" width="250px" class="pt-5 mb-5">
            <div class="text-center pb-5" style="font-size: 13px;">
                © PT.Mahadaya Swara Teknologi <br />
                All Right Reserved 2021
            </div>
        </div>
    </section>
    <!-- End PAGE -->

</div>
<script>
    var x = document.getElementById("demo");
    $(window).on('load', function () {
        getLocation()

    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;

    }


    $("#pengajuan").on("click", function () {
        let email = $("form").find('input[name="email"]');
        if (email.val() == "") {
            alert("untuk melakukan pengajuan kode,email wajib di isi");
        } else {
            $(this).attr("disabled", true);
            $(this).html(`
    <lord-icon
      src="https://cdn.lordicon.com/ymrqtsej.json"
      trigger="loop"
      colors="primary:#121331"
      style="width:40px;height:40px">
    </lord-icon>  Sedang Meminta Kode
    `);
            let Containertime = $("p.containerTime");

            $.ajax({
                url: "{{route('getAca')}}",
                type: "get",
                data: {
                    email: email.val(),
                    _token: "{{csrf_token()}}"
                },
                dataType: "json",
                success: function (res) {
                    if (res.success != null) {
                        $("div#kodeAlert")
                            .removeClass("alert-danger")
                            .addClass("alert-success");
                        $("div#kodeAlert").html(res.success);
                        $("#pengajuan").html(`<img src="<?= asset('')  ?>assets/aca3.png" class="img-fluid img-thumbnail" style="height:auto;width:30px">
                        Get Kode ACA`);
                        let time = 60;
                        $("#pengajuan").attr("disabled", true);
                        let timeOut = setInterval(function () {
                            Containertime.html(
                                `Kamu dapat mengajukan Kode Lagi <br> setelah ${time--} detik.`
                            );
                        }, 1000);
                        setTimeout(function () {
                            $("#pengajuan").attr("disabled", false);
                            $(
                                "#pengajuan"
                            ).html(`<img src="<?= asset('')  ?>assets/aca3.png" class="img-fluid img-thumbnail" style="height:auto;width:30px">
                            Get Kode ACA`);
                            clearInterval(timeOut);
                            Containertime.html("");
                        }, time * 1000 + 2000);
                    } else {
                        $("div#kodeAlert")
                            .removeClass("alert-success")
                            .addClass("alert-danger");
                        $("#pengajuan").attr("disabled", false);
                        $("#pengajuan").html(`<img src="<?= asset('')  ?>assets/aca3.png" class="img-thumbnail" style="height:auto;width:30px">
                                        Get Kode ACA`);
                        $("div#kodeAlert").html(res.error);
                    }

                    $("div#kodeAlert").show(100, function () {
                        setTimeout(function () {
                            $("div#kodeAlert").hide(200);
                        }, 10000);
                    });
                },
            });
        }
    });

</script>

@endsection
