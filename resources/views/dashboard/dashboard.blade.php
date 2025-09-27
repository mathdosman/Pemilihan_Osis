
<!doctype html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
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
        #user-section {
            margin-top: 10px !important;
            padding-top: 10px !important;
        }
        #user-detail {
            margin-top: 0 !important;
            padding-top: 8px !important;
        }
        #appCapsule {
            margin-bottom: 40px;
        }
        .todaypresence {
            margin-top: clamp(30px, 7vw, 60px);
        }
        .candidate-row {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            gap: clamp(6px, 2vw, 18px);
            overflow-x: auto;
        }
        .candidate-col {
            flex: 0 0 clamp(180px, 40vw, 340px);
            max-width: clamp(180px, 45vw, 340px);
            min-width: 140px;
        }
        .card, .profile-card, .candidate-card {
            background: rgba(255,255,255,0.97) !important;
            box-shadow: 0 4px 24px rgba(0,0,0,0.13) !important;
            border-radius: clamp(10px, 2vw, 18px) !important;
        }
        #user-name, #user-role, h2, h3, h4, .alert, .footer {
            text-shadow: 0 2px 8px rgba(0,0,0,0.10), 0 1px 0 #fff;
        }
        .candidate-card {
            border: 2px solid #e0e0e0;
            position: relative;
            z-index: 1010;
            background: #fff;
            margin-bottom: 0;
            margin-top: 0;
            min-width: 140px;
        }
        .candidate-card:hover {
            transform: translateY(-5px) scale(1.03);
        }
        .candidate-img {
            border-radius: 15px;
            margin-bottom: 10px;
            object-fit: cover;
            width: 100%;
            aspect-ratio: 1/1;
            max-width: clamp(90px, 30vw, 220px);
            max-height: clamp(90px, 30vw, 220px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            border: 4px solid #fff;
            background: #f8f9fa;
            transition: box-shadow 0.3s, transform 0.3s;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .logout-btn {
            margin-top: 20px;
            width: 100%;
            font-size: clamp(1rem, 2vw, 1.2rem);
            padding: 10px 0;
        }
        @media (max-width: 800px) {
            .candidate-row {
                flex-wrap: wrap;
                gap: clamp(4px, 2vw, 12px);
            }
            .candidate-col {
                flex: 1 1 90vw;
                max-width: 98vw;
            }
            .candidate-img {
                max-width: clamp(70px, 40vw, 120px);
                max-height: clamp(70px, 40vw, 120px);
            }
        }
        @media (max-width: 500px) {
            .candidate-row {
                display: none !important;
            }
            .profile-card {
                padding: 10px 4vw 8px 4vw;
            }
            .profile-card h3 {
                font-size: clamp(1.1rem, 5vw, 1.5rem);
            }
            .profile-card h4 {
                font-size: clamp(0.9rem, 4vw, 1.1rem);
            }
        }
        #user-name, #user-role {
            color: #0d47a1;
            text-align: center;
            display: block;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
        }
        #user-name {
            font-size: clamp(1.5rem, 5vw, 2.8rem);
            font-weight: 700;
            letter-spacing: 0.03em;
            text-shadow: 0 2px 12px rgba(13,71,161,0.08);
        }
        #user-role {
            font-size: clamp(1.1rem, 2.8vw, 1.7rem);
            font-weight: 500;
            color: #1976d2;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            letter-spacing: 0.01em;
        }
        #user-section {
            position: relative;
            z-index: 1002;
        }
        #user-detail {
            background: rgba(255,255,255,0.92);
            border-radius: 16px;
            padding: 18px 10px 10px 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            z-index: 1003;
            position: relative;
        }
        #user-name, #user-role {
            position: relative;
            z-index: 1004;
        }
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
            background: linear-gradient(135deg, #f8fafc 70%, #e0e7ef 100%) !important;
            border-radius: 18px !important;
            box-shadow: 0 4px 18px rgba(0,0,0,0.10) !important;
            border: 1.5px solid #e3e8ee;
            padding: 22px 24px 14px 24px;
            margin-bottom: 8px;
            margin-top: 8px;
            text-align: left;
            transition: box-shadow 0.2s, border 0.2s;
        }
        .profile-card h4 {
            margin: 3px 0;
            font-weight: 600;
            color: #1a237e;
            letter-spacing: 0.01em;
        }
        .profile-card h3 {
            font-size: 2rem;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 10px;
            letter-spacing: 0.02em;
            text-align: center;
        }
        .candidate-card {
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: transform 0.2s;
            margin-bottom: 0;
            margin-top: 0;
        }
        .candidate-card:hover {
            transform: translateY(-5px) scale(1.03);
        }
        .candidate-img {
            border-radius: 15px;
            margin-bottom: 10px;
            object-fit: cover;
            width: 100%;
            aspect-ratio: 1/1;
            max-width: 250px;
            max-height: 250px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            border: 4px solid #fff;
            background: #f8f9fa;
            transition: box-shadow 0.3s, transform 0.3s;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .candidate-img:hover {
            box-shadow: 0 8px 32px rgba(9,44,159,0.18);
            transform: scale(1.04);
        }
        .logout-btn {
            margin-top: 20px;
            width: 100%;
        }
        @media (max-width: 767px) {
            .candidate-img {
                max-width: 150px;
                max-height: 150px;
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
                    <span id="user-role" style="font-size:1.1em;">Tahun Ajaran 2025/2026</span>
                </div>
            </div>
        </div>
        <!-- Profile Card -->
        <!-- <div class="section mt-1" id="menu-section">
            <div class="profile-card">
                <h4>Nama&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nama_siswa}}</h4>
                <h4>NISN&nbsp;&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nisn}}</h4>
                <h4>Kelas&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->kode_kelas}}</h4>
            </div>
        </div> -->

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

                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="card profile-card">
                            <h3>Identitas Pemilih</h3>
                            <h4>Nama&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nama}}</h4>
                            <h4>NISN&nbsp;&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->nisn}}</h4>
                            <h4>Kelas&nbsp;&nbsp;: {{Auth::guard('siswa')->user()->kelas}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col text-center">
                        <h2 class="mb-4">Calon Ketua OSIS</h2>
                    </div>
                </div>
                <div class="candidate-row">
                    <div class="candidate-col">
                        <div class="card candidate-card">
                            <div class="card-body text-center">
                                <a href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                    <img src="{{asset('foto/calon1.png')}}" alt="foto_calon1" class="candidate-img calon-vote" data-href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a" data-nama="Nama Lengkap Pasangan Calon 1">
                                </a>
                                <h4 class="mt-2">Nama Lengkap Pasangan Calon 1</h4>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-col">
                        <div class="card candidate-card">
                            <div class="card-body text-center">
                                <a href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                                    <img src="{{asset('foto/calon2.png')}}" alt="foto_calon2" class="candidate-img calon-vote" data-href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a" data-nama="Nama Lengkap Pasangan Calon 2">
                                </a>
                                <h4 class="mt-2">Nama Lengkap Pasangan Calon 2</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card shadow-sm border-0 p-4 text-center" style="background: linear-gradient(120deg, #f8fafc 80%, #e3e8ee 100%); border-radius: 18px;">
                            <div style="font-size: 3rem; color: #43a047; margin-bottom: 10px;">
                                <ion-icon name="checkmark-circle-outline"></ion-icon>
                            </div>
                            <h3 class="mb-2" style="color: #1a237e; font-family: 'Poppins', Arial, sans-serif; font-weight: 700;">Voting Berhasil!</h3>
                            <p style="font-size: 1.1rem; color: #333; margin-bottom: 22px;">Anda sudah melakukan Pemilihan Ketua OSIS.<br>Terima kasih atas partisipasi Anda.</p>
                            <a href="/proseslogout" class="btn btn-danger btn-lg logout-btn" style="border-radius: 8px; font-weight: 600; letter-spacing: 0.5px;">LOG OUT</a>
                        </div>
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.calon-vote').forEach(function(img) {
            img.addEventListener('click', function(e) {
                e.preventDefault();
                const href = img.getAttribute('data-href');
                const nama = img.getAttribute('data-nama') || 'pasangan ini';
                Swal.fire({
                    title: 'Yakin memilih ' + nama + '?',
                    text: 'Pilihan Anda tidak dapat diubah setelah ini!',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Pilih!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = href;
                    }
                });
            });
        });
    });
    </script>
    <script src="{{asset('assets/js/base.js')}}"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
