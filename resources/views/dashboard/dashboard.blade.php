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
    <meta name="description" content="pemilihan osis">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">
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
        .profile-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 25px 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .profile-card h4 {
            margin: 8px 0;
            font-weight: 600;
        }
        .candidate-card {
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: transform 0.2s;
            margin-bottom: 20px;
        }
        .candidate-card:hover {
            transform: translateY(-5px) scale(1.03);
        }
        .candidate-img {
            border-radius: 10px;
            margin-bottom: 10px;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .logout-btn {
            margin-top: 20px;
            width: 100%;
        }
        @media (max-width: 767px) {
            .candidate-img {
                height: 150px;
            }
        }
    </style>
</head>

<body style="background-color:#e9ecef;">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <!-- Header -->
        <div class="section" id="user-section">
            <div id="user-detail" class="d-flex align-items-center justify-content-center flex-column">
                <div class="avatar mb-2">
                    <img src="{{asset('assets/img/icon/android-chrome-512x512.png')}}" alt="avatar" class="imaged w64">
                </div>
                <div id="user-info">
                    <h2 id="user-name" class="mb-0">PEMILIHAN OSIS SMAN 1 GIANYAR</h2>
                    <span id="user-role" style="font-size:1.1em;">Tahun Ajaran 2024/2025</span>
                </div>
            </div>
        </div>
        <!-- Profile Card -->
        <div class="section mt-1" id="menu-section">
            <div class="profile-card">
                <h4>Nama&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nama_siswa}}</h4>
                <h4>NISN&nbsp;&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nisn}}</h4>
                <h4>Kelas&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->kode_kelas}}</h4>
            </div>
        </div>

        <div class="section" id="presence-section">
            <div class="todaypresence">
                <div class="row">
                    <div class="col text-center">
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
                @if($datavotting == null)
                <div class="row mt-2">
                    <div class="col text-center">
                        <h2 class="mb-4">Calon Ketua OSIS</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card candidate-card">
                            <div class="card-body text-center">
                                <a href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                    <img src="{{asset('foto/calon1.png')}}" alt="foto_calon1" class="candidate-img">
                                </a>
                                <h4 class="mt-2">Nama Lengkap Pasangan Calon 1</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card candidate-card">
                            <div class="card-body text-center">
                                <a href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                    <img src="{{asset('foto/calon2.png')}}" alt="foto_calon2" class="candidate-img">
                                </a>
                                <h4 class="mt-2">Nama Lengkap Pasangan Calon 2</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-danger mb-3">Anda sudah melakukan Pemilihan Ketua OSIS!</h3>
                        <a href="/proseslogout" class="btn btn-danger btn-lg logout-btn">LOG OUT</a>
                    </div>
                </div>
                @endif
                <div class="footer">
                    <div class="col">
                        <span>SMAN 1 GIANYAR | &copy; @darmaputra</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///////////// Js Files ////////////////////  -->
    <script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{asset('assets/js/base.js')}}"></script>
</body>
</html>
