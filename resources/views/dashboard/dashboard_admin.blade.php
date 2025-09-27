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
        .candidate-card-admin {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-width: 0;
            max-width: 100%;
            margin: 0;
            border-radius: 20px;
            box-shadow: 0 4px 18px rgba(25,118,210,0.10);
            background: #fff;
        }
        .candidate-card-admin .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2vw 1vw 1.5vw 1vw;
        }
        /* CSS untuk foto candidate dihapus */
        .candidate-card-admin h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1976d2;
            margin-bottom: 8px;
            margin-top: 0;
            text-align: center;
        }
        .candidate-card-admin .card-title.kakul {
            font-size: 2.2rem !important;
            font-weight: 700;
            color: #222;
            margin: 0;
            text-align: center;
        }
        .candidate-card-admin .card.border {
            margin-top: 8px;
            margin-bottom: 0;
            border-radius: 12px;
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
        .row.candidate-row {
            gap: 2px;
        }
        .candidate-card-admin {
            min-width: 0;
            max-width: 100%;
            width: 100%;
            border-radius: 12px;
        }
        .candidate-card-admin .card-body {
            padding: 1vw 1vw 1vw 1vw;
        }
        .candidate-card-admin img {
            max-width: 10vw;
            min-width: 50px;
            margin-bottom: 1vw;
        }
        h1, h2, h3, h5, span, .btn {
            font-size: clamp(0.8rem, 2vw, 1.2rem) !important;
        }
        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 25px;
        }
        .row.candidate-row {
            display: flex;
            flex-wrap: nowrap;
            gap: 2px;
        }
        .candidate-col {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .candidate-card-admin {
            width: 100%;
            min-width: 0;
            max-width: 100%;
            margin: 0;
            border-radius: 20px;
            box-shadow: 0 4px 18px rgba(25,118,210,0.10);
        }
        .candidate-card-admin .card-body {
            padding: 3vw 2vw 2vw 2vw;
        }
        .candidate-card-admin img {
            max-width: 18vw;
            min-width: 70px;
            margin-bottom: 2vw;
        }
        @media (max-width: 900px) {
            .row.candidate-row {
                flex-direction: column;
                gap: 18px 0;
            }
            .candidate-col {
                width: 100%;
            }
            .candidate-card-admin {
                width: 100%;
                max-width: 100%;
            }
            .candidate-card-admin img {
                max-width: 30vw;
            }
        }
        @media (max-width: 900px) {
            .row.candidate-row {
                flex-direction: column;
                gap: 18px 0;
            }
            .candidate-col {
                width: 100%;
            }
        }
        .card-image {
        width: 50%;
        height: auto;
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
                    <span id="user-role">2025/2026</span>
                </div>
            </div>
        </div>
        <div class="section mt-1" id="menu-section">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">HASIL PERHITUNGAN LANGSUNG</h1>
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
                                    <div class="presencedetail text-center card-image">
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
                                    <div class="presencedetail text-center card-image">
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
