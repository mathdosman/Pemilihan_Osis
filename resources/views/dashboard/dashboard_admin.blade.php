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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">

</head>

<body style="background-color:#e9ecef;">
    <style>
        body {
            font-size: 16px;
            min-height: 100vh;
            background: linear-gradient(135deg, #0d1b2a 0%, #1976d2 60%, #fffde4 100%);
            color: #222;
        }
        html, body {
            min-height: 100vh;
        }
        #appCapsule {
            min-height: 100vh;
        }
        .section, .todaypresence {
            padding-top: 0.5vw !important;
            padding-bottom: 0.5vw !important;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
        .card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(25, 118, 210, 0.13), 0 1.5px 0 #fff;
            border: none;
        }
        .card.candidate-card-admin {
            background: linear-gradient(120deg, #e3f0ff 60%, #fffde4 100%);
            color: #0d1b2a;
            border-radius: 22px;
            box-shadow: 0 6px 24px rgba(25,118,210,0.18), 0 1.5px 0 #fff;
            border: 2px solid #1976d2;
            margin: 32px 0 0 0; /* margin atas diperbesar lagi */
            min-width: 0;
            max-width: 100%;
            height: 220px;
            min-height: 160px;
        }
        .candidate-card-admin .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1vw 0.5vw 1vw 0.5vw; /* padding lebih kecil */
            height: 100%;
        }
        .candidate-card-admin img {
            max-width: 10vw;
            min-width: 50px;
            margin-bottom: 0.5vw;
            margin-top: 18px; /* tambahkan margin top agar foto tidak terhalang */
            border-radius: 16px;
            border: 3px solid #fffde4;
            box-shadow: 0 2px 12px rgba(25,118,210,0.13);
            background: #fff;
        }
        .candidate-card-admin h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0d1b2a;
            margin-bottom: 8px;
            margin-top: 0;
            text-align: center;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 8px rgba(25,118,210,0.10);
        }
        .candidate-card-admin .card-title.kakul {
            font-size: 2.3rem !important;
            font-weight: 800;
            color: #1976d2;
            margin: 0;
            text-align: center;
            letter-spacing: 1px;
            background: #fffde4;
            border-radius: 10px;
            padding: 6px 0;
            box-shadow: 0 1px 6px rgba(25,118,210,0.09);
        }
        .candidate-card-admin .card.border {
            margin-top: 8px;
            margin-bottom: 0;
            border-radius: 12px;
            background: #fffde4;
            border: 2px solid #1976d2;
        }
        .row.candidate-row {
            gap: 24px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: stretch;
        }
        .candidate-col {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            margin-top: 72px; /* margin top lebih besar agar nomor tidak tertutup */
        }
        .card-image {
            width: 100%;
            height: auto;
            position: relative;
            overflow: visible; /* ubah dari hidden ke visible */
        }
        h1, h2, h3, h5, span, .btn {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: clamp(0.9rem, 2vw, 1.25rem) !important;
        }
        .btn-info, .btn-info:active, .btn-info:focus {
            background: linear-gradient(90deg, #1976d2 60%, #fffde4 100%);
            border: none;
            color: #0d1b2a;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(25,118,210,0.13);
            transition: background 0.2s;
        }
        .btn-info:hover {
            background: linear-gradient(90deg, #fffde4 60%, #1976d2 100%);
            color: #1976d2;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 32px;
            background: linear-gradient(90deg, #b3d8fa 0%, #fffde4 100%);
            color: #1976d2;
            text-align: center;
            font-size: 1em;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            box-shadow: 0 -2px 12px rgba(25, 118, 210, 0.10);
        }
        .footer span {
            color: #1976d2;
            background: rgba(25,118,210,0.09);
            padding: 3px 18px;
            border-radius: 10px;
            font-size: 1em;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        @media (max-width: 900px) {
            .candidate-col {
                width: 100%;
                margin-top: 56px; /* margin top lebih besar di mobile */
            }
            .candidate-card-admin {
                max-width: 100%;
                height: 180px;
                min-height: 120px;
                margin-top: 48px; /* margin atas juga di mobile */
            }
            .candidate-card-admin img {
                max-width: 22vw;
                margin-top: 14px;
            }
        }
        @media (max-width: 600px) {
            .candidate-col {
                margin-top: 36px; /* margin top lebih besar di layar kecil */
            }
            .candidate-card-admin {
                height: 140px;
                min-height: 90px;
                margin-top: 28px; /* margin atas lebih besar di layar kecil */
            }
            .candidate-card-admin img {
                max-width: 32vw;
                min-width: 30px;
                margin-top: 10px;
            }
            .candidate-card-admin .card-title.kakul {
                font-size: 1.5rem !important;
            }
            .footer {
                font-size: 0.95em;
                height: 28px;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }
        }
        .judul {
            font-family: 'Monotype Corsiva', 'Poppins', 'Segoe UI', 'Montserrat', Arial, Helvetica, sans-serif;
            font-size: 2.5rem !important;
            font-weight: 700;
            color: #041f3a;
            letter-spacing: 1.5px;
            text-align: center;
            margin: 0.5em 0 0.5em 0;
            /* Pertebal shadow agar lebih terlihat */
            text-shadow:
                0 4px 24px #fffde4,
                0 2px 8px #d9f00e,
                0 1px 0 #fffde4,
                2px 2px 8px #0008,
                0 0 2px #fff;
            line-height: 1.1;
            font-style: italic;
        }
        .visi-misi {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-style: italic;
            color: #1565c0;
            background: #f3f7fa;
            border-left: 4px solid #1976d2;
            border-radius: 8px;
            padding: 10px 18px;
            margin: 10px auto 38px auto;
            box-shadow: 0 1px 6px rgba(25,118,210,0.06);
            display: block;
            max-width: 95%;
            line-height: 1.6;
            text-align: center;
        }
        .nomor-calon-admin {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #1976d2 60%, #fffde4 100%);
            color: #fff;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 2rem;
            font-weight: 900;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(25,118,210,0.13);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999; /* pastikan nomor di paling atas */
            border: 4px solid #fff;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
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
                    <span id="user-role">2025/2026</span>
                </div>
            </div>
        </div>
        <div class="section mt-1" id="menu-section">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center judul">HASIL PERHITUNGAN LANGSUNG</h1>
                </div>
            </div>
        </div>

        <div class="section" id="presence-section">
            <div class="todaypresence">
                <div class="row mt-2">
                    <div class="col text-center">
                        <h3 style="font-size: 3rem">CALON KETUA OSIS</h3>
                    </div>
                </div>
                <div class="row candidate-row justify-content-center mt-3">
                    <div class="col-6 candidate-col mb-3">
                        <div class="card candidate-card-admin">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail text-center card-image" style="position:relative;">
                                        <span class="nomor-calon-admin">1</span>
                                        <img src="{{asset('foto/calon1.png')}}" class="card-img-top" alt="foto_barong">
                                        <h3 class="text-center" style="font-size: 1.2rem; margin-bottom: 10px;">NAMA LENGKAP CALON 1</h3>
                                        <div class="card text-center border" style="border-radius: 5px 30px 5px 30px; display:flex">
                                            <div class="card-body">
                                                <h5 class="card-title kakul" style="font-size: 2rem;">{{$calon1}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 candidate-col mb-3">
                        <div class="card candidate-card-admin">
                            <div class="card-body">
                                <div class="presencecontent">
                                    <div class="presencedetail text-center card-image" style="position:relative;">
                                        <span class="nomor-calon-admin">2</span>
                                        <img src="{{asset('foto/calon2.png')}}" class="card-img-top" alt="foto_rangda">
                                        <h3 class="text-center" style="font-size: 1.2rem; margin-bottom: 10px;">NAMA LENGKAP CALON 2</h3>
                                        <div class="card text-center border" style="border-radius: 30px 5px 30px 5px; display:flex">
                                            <div class="card-body">
                                                <h5 class="card-title kakul" style="font-size: 2rem;">{{$calon2}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
            <h1></h1>
        </div>
        <div class="col text-center visi-misi" style="font-size: 1.3rem; color: #555; max-width: 600px; margin-bottom: 100px;">
          <span style="font-size: 1.7rem; font-weight: bold;">Visi & Misi</span><br>Insan Cerdas, Sarat Prestasi, Berkarakter, Berbudaya, Peduli Lingkungan, dan Berwawasan Global”
        </div>
                <div class="row justify-content-center" margin-bottom="20px">
                    <a href="/admin/proseslogoutadmin" class="btn btn-info btn-lg mt-2">LOG_OUT</a>
                </div>

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

    <!-- Live Vote AJAX Polling -->
    <script>
        function updateLiveVote() {
            $.ajax({
                url: '/admin/live-vote',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data && typeof data.calon1 !== 'undefined' && typeof data.calon2 !== 'undefined') {
                        $(".card-title.kakul").eq(0).text(data.calon1);
                        $(".card-title.kakul").eq(1).text(data.calon2);
                    }
                }
            });
        }
        setInterval(updateLiveVote, 3000);
        $(document).ready(function() {
            updateLiveVote();
        });
    </script>


</body>

</html>
