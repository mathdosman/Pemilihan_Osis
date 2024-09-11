
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Dashboard</title>
    <meta name="description" content="dosman">
    <meta name="description" content="pemilihan osis">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">
</head>

<body style="background-color:#e9ecef;">
    <style>
        .card-image {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        }

        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          height: 25px;
          background-color: #092c9f;
          color: white;
          text-align: center;
        }
    </style>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->



    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section" id="user-section">
            <div id="user-detail">
                <div class="avatar">
                    <img src="{{asset('assets/img/icon/android-chrome-512x512.png')}}" alt="avatar" class="imaged w64">
                </div>
                <div id="user-info">
                    <h2 id="user-name">PEMILIHAN OSIS SMAN 1 GIANYAR</h2>
                    <span id="user-role">2024/2025</span>
                </div>
            </div>
        </div>
        <div class="section mt-1" id="menu-section">
            <div class="card">
                <div class="card-body " style="margin-left: 100px">
                            <h4>Nama    : {{Auth::guard('siswa')->user()->nama_siswa}}</h4>
                            <h4>NISN    : {{Auth::guard('siswa')->user()->nisn}}</h4>
                            <h4>Kelas   : {{Auth::guard('siswa')->user()->kode_kelas}}</h4>
                </div>
            </div>
        </div>

        <div class="section" id="presence-section">
            <div class="todaypresence">
                <div class="row" style="margin-top: 90px">
                    <div class="col text-center">
                        <div class="col mt-3">
                            @php
                                $messagesuccess=Session::get('success');
                                $messageerror=Session::get('warning');
                            @endphp
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{$messagesuccess}}
                                </div>
                            @endif
                            @if(Session::get('warning'))
                                <div class="alert alert-danger">
                                    {{$messageerror}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if($datavotting == null)
                <div class="row mt-2">
                    <div class="col text-center">
                        <h2>CALON KETUA OSIS</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-6 mb-3">
                        <div class="card" style="height: 1000px">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail text-center card-image">
                                        <a href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                            <img src="{{asset('foto/calon1.png')}}" alt="foto_calon1" width="100%" height="100%">
                                        </a>
                                        {{-- <h3 class="text-center">Calon 01 <br> CALON KETUA OSIS</h3> --}}
                                        <h3 class="text-center">A.A. Gede Agung Adinata Prabawa</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail text-center card-image">
                                        <a href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                            <img src="{{asset('foto/calon2.png')}}" alt="foto_calon2" width="100%" height="100%">
                                        </a>
                                        {{-- <h3 class="text-center">Calon 02 </h3> --}}
                                        <h3 class="text-center">Kadek Rangga Cahyadi </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center">
                    <h3 class="text-danger">Anda sudah melakukan Pemilihan Ketua OSIS!</h3>
                </div>
                <div class="row justify-content-center">
                    <a href="/proseslogout" class="btn btn-info btn-lg mt-2">LOG_OUT</a>
                </div>
                    @endif
                <div class="footer">
                    <div class="col">
                        <span>SMAN 1 GIANYAR | @darmaputra</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Base Js File -->
    <script src="{{asset('assets/js/base.js')}}"></script>


</body>

</html>
