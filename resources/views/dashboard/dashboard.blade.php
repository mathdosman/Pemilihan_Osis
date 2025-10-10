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
    <!-- Tambahkan baris berikut agar bisa diakses dari device lain di jaringan lokal -->
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <!-- /tambahan -->
    <style>
        body {
            /* background-color: #e9ecef; */
            font-size: 16px;
            min-height: 100vh;
            background: linear-gradient(135deg, #e3f0ff 0%, #f8fafc 40%, #fffde4 100%);
            /* Tambahan efek overlay untuk kesan elegan */
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: -1;
            background: radial-gradient(circle at 80% 10%, #b3e5fc 0%, transparent 60%),
                        radial-gradient(circle at 20% 90%, #fffde4 0%, transparent 70%);
            opacity: 0.7;
            pointer-events: none;
        }
        .section {
            padding: 0;
            margin: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .todaypresence {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -8px;
            margin-left: -8px;
            width: 100%;
            box-sizing: border-box;
            justify-content: center; /* tambahkan ini agar konten row rata tengah */
        }
        .col-12.col-md-6.mx-auto {
            display: flex;
            justify-content: center;
        }
        .col, .col-12, .col-md-6, .col-md-8, .col-md-8, .col-lg-6 {
            flex: 1 1 0;
            padding-right: 8px;
            padding-left: 8px;
            box-sizing: border-box;
            min-width: 0;
        }
        .col-12 { flex-basis: 100%; max-width: 100%; }
        .col-md-6 { flex-basis: 50%; max-width: 50%; }
        .col-md-8 { flex-basis: 66.6667%; max-width: 66.6667%; }
        .col-lg-6 { flex-basis: 50%; max-width: 50%; }
        .text-center { text-align: center; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mt-2 { margin-top: 0.75rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        /* Card identitas pemilih elegan biru muda ke kuning */
        .card.identitas-pemilih {
            background: linear-gradient(120deg, #b3e5fc 60%, #fffde4 100%);
            border-radius: 22px;
            box-shadow: 0 6px 24px rgba(33,150,243,0.13), 0 1.5px 0 #fff;
            border: 2px solid #1976d2; /* border biru */
            padding: 28px 28px 18px 28px;
            margin-bottom: 3px
            transition: box-shadow 0.2s, border 0.2s;
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 420px;
            min-width: 320px;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
        }
        .card.identitas-pemilih::before {
            content: "";
            position: absolute;
            top: -40px;
            right: -40px;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, #1976d2 0%, #fffde4 80%);
            opacity: 0.12;
            border-radius: 50%;
            z-index: 0;
        }
        .card.identitas-pemilih h3 {
            font-size: 1.6rem;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-weight: 700;
            color: #1565c0;
            margin-bottom: 0px;
            letter-spacing: 0.03em;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .card.identitas-pemilih h4 {
            font-weight: 600;
            color: #01579b;
            letter-spacing: 0.01em;
            font-size: 1.08rem;
            display: flex;
            align-items: center;
            background: rgba(255,255,255,0.8);
            border-radius: 8px;
            padding: 7px 16px;
            position: relative;
            z-index: 1;
            box-shadow: 0 2px 8px rgba(25,118,210,0.04);
        }
        .card.identitas-pemilih h4 .label {
            min-width: 60px;
            max-width: 120px;
            width: fit-content;
            display: inline-block;
            font-weight: 600;
            color: #1976d2;
            letter-spacing: 0.02em;
            word-break: break-word;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .card.identitas-pemilih h4 .colon {
            min-width: 18px;
            display: inline-block;
            text-align: right;
            margin-right: 6px;
            color: #1976d2;
        }
        .card.identitas-pemilih h4 .value {
            flex: 1;
            display: inline-block;
            color: #333;
            font-weight: 500;
        }
        .candidate-row {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: stretch;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .candidate-col {
            flex: 0 0 auto;
            min-width: 140px;
            max-width: 340px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            margin: 3px; /* jarak antar card diubah menjadi 3px */
        }
        .nomor-calon {
            position: absolute;
            top: -22px;
            left: 50%;
            transform: translateX(-50%);
            width: 54px;
            height: 54px;
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
            z-index: 99;
            border: 4px solid #fff;
            letter-spacing: 0.5px;
            margin-bottom: 8px; /* jarak bawah nomor ke foto */
        }
        .candidate-card {
            position: relative;
            background: linear-gradient(135deg, #e3f2fd 70%, #fffde4 100%);
            border-radius: 14px;
            box-shadow: 0 2px 8px rgba(33,150,243,0.08);
            border: 1px solid #e3e8ee;
            transition: box-shadow 0.2s, border 0.2s, transform 0.2s;
            margin: 32px 0 0 0; /* tambahkan margin-top agar nomor tidak terpotong */
            padding: 10px 8px 8px 8px;
            min-width: 140px;
            max-width: 340px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            overflow: visible; /* pastikan overflow visible agar nomor tidak terpotong */
        }
        .candidate-card:hover {
            box-shadow: 0 6px 18px rgba(9,44,159,0.13);
            transform: translateY(-3px) scale(1.03);
            border-color: #1976d2;
        }
        .candidate-img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 8px;
            max-width: 150px;
            max-height: 150px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.10);
            border: 3px solid #fff;
            background: #f8f9fa;
            transition: box-shadow 0.3s, transform 0.3s;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 38px;
            background: linear-gradient(90deg, #1976d2 0%, #64b5f6 60%, #fffde4 100%);
            color: #fff;
            text-align: center;
            font-size: 1.08em;
            letter-spacing: 0.7px;
            box-shadow: 0 -2px 12px rgba(25, 118, 210, 0.10);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-weight: 500;
            z-index: 100;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            transition: background 0.3s;
        }
        .footer span {
            color: #0d47a1;
            background: rgba(255,255,255,0.7);
            padding: 3px 18px;
            border-radius: 10px;
            font-size: 1em;
            font-weight: 600;
            box-shadow: 0 1px 4px rgba(25,118,210,0.06);
            letter-spacing: 0.5px;
        }
        .judul-calon {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: #0d47a1;
            letter-spacing: 1.5px;
            text-align: center;
            margin-bottom: 0; /* hilangkan jarak bawah */
            margin-top: 0.5rem;
            text-shadow: 0 2px 16px rgba(13,71,161,0.28), 0 1px 0 #fff;
            border-radius: 10px;
            padding: 8px 0 8px 0;
            box-shadow: 0 2px 12px rgba(25,118,210,0.08);
            position: relative;
            z-index: 2;
        }
        .nama-calon {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 1.18rem;
            font-weight: 700;
            color: #0d47a1;
            /* background: linear-gradient(90deg, #23272f 0%, #0d47a1 60%, #1a237e 100%); */
            letter-spacing: 0.7px;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 0;
            text-shadow: 0 2px 8px rgba(13,71,161,0.18), 0 1px 0 #fff;
            border-radius: 6px;
            padding: 2px 0 2px 0;
            position: relative;
            z-index: 2;
        }
        /* Responsive */
        @media (max-width: 1200px) {
            .card.identitas-pemilih, .candidate-card {
                max-width: 90vw;
            }
        }
        @media (max-width: 900px) {
            .identitas-row {
                gap: 10px;
                margin: 0;
            }
            .identitas-col {
                max-width: 98vw;
                min-width: 0;
                flex: 1 1 180px;
                margin: 0;
            }
            .candidate-col {
                min-width: 120px;
                max-width: 45vw;
            }
            .candidate-card {
                max-width: 45vw;
            }
            .candidate-img {
                max-width: 28vw;
                max-height: 28vw;
                min-width: 90px;
                min-height: 90px;
            }
            .card.identitas-pemilih {
                padding: 18px 10vw 12px 10vw;
            }
            .identitas-row {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: stretch;
                gap: 10px;
                margin-bottom: 16px;
            }
            .identitas-col {
                max-width: 98vw;
                min-width: 0;
                flex: 1 1 220px;
            }
        }
        @media (max-width: 700px) {
            .identitas-row {
                gap: 6px;
                margin: 0;
            }
            .identitas-col {
                max-width: 100vw;
                min-width: 0;
                flex: 1 1 100px;
                padding: 0 1vw;
                margin: 0;
            }
            .card.identitas-pemilih,
            .keterangan-atas {
                max-width: 100%;
                min-width: 0;
                padding-left: 1vw;
                padding-right: 1vw;
                margin: 0 !important;
            }
        }
        @media (max-width: 500px) {
            .identitas-row {
                gap: 2vw;
                margin: 0;
            }
            .identitas-col {
                flex: 1 1 0;
                min-width: 0;
                padding: 0 0.5vw;
                margin: 0;
            }
            .card.identitas-pemilih,
            .keterangan-atas {
                padding-left: 0.5vw;
                padding-right: 0.5vw;
                margin: 0 !important;
            }
        }
        .keterangan-voting {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 1rem;
            color: #374151;
            background: #f1f5fb;
            border-radius: 10px;
            padding: 10px 18px;
            margin: 10px auto 18px auto;
            box-shadow: 0 2px 8px rgba(33,150,243,0.07);
            display: inline-block;
            max-width: 95%;
            line-height: 1.5;
        }
        .visi-misi {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 1.08rem;
            font-style: italic;
            color: #1565c0;
            background: #f3f7fa;
            border-left: 4px solid #1976d2;
            border-radius: 8px;
            padding: 10px 18px;
            margin: 10px auto 18px auto;
            box-shadow: 0 1px 6px rgba(25,118,210,0.06);
            display: block;
            max-width: 95%;
            line-height: 1.6;
        }
        .keterangan-atas {
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            font-size: 0.93rem;
            color: #1976d2;
            background: linear-gradient(90deg, #e3f0ff 60%, #fffde4 100%);
            border-radius: 10px;
            border: 2px solid #1976d2; /* border biru */
            padding: 13px 18px;
            margin: 10px auto 18px auto;
            box-shadow: 0 2px 8px rgba(33,150,243,0.06);
            display: block;
            max-width: 95%;
            line-height: 1.5;
            font-weight: 400;
            letter-spacing: 0.2px;
            text-align: left;
        }
        .keterangan-atas ol {
            margin: 0 0 0 1.2em;
            padding: 0;
            color: #1976d2;
            text-align: left;
        }
        .keterangan-atas li {
            margin-bottom: 4px;
            font-size: 0.93rem;
            color: #374151;
            font-weight: 400;
            text-align: left;
        }
    </style>
</head>

<body>
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

        <div class="identitas-row">
            <div class="identitas-col">
                <div class="card identitas-pemilih" style="margin-bottom: 0;">
                    @if (Auth::guard('siswa')->user()->kelas == "guru")
                        <h3>IDENTITAS PEMILIH</h3>
                        <h4><span class="label">Nama</span><span class="colon">:</span><span class="value">{{Auth::guard('siswa')->user()->nama}}</span></h4>
                        <h4><span class="label">Jabatan</span><span class="colon">:</span><span class="value">{{Auth::guard('siswa')->user()->kelas}}</span></h4>
                    @else
                        <h3>IDENTITAS PEMILIH</h3>
                        <h4><span class="label">Nama</span><span class="colon">:</span><span class="value">{{Auth::guard('siswa')->user()->nama}}</span></h4>
                        <h4><span class="label">NISN</span><span class="colon">:</span><span class="value">{{Auth::guard('siswa')->user()->nisn}}</span></h4>
                        <h4><span class="label">Kelas</span><span class="colon">:</span><span class="value">{{Auth::guard('siswa')->user()->kelas}}</span></h4>
                    @endif
                </div>
            </div>
            <div class="identitas-col">
                <div class="keterangan-atas" style="margin-bottom: 0;">
                    <ol>
                        <li>Silakan memilih pasangan calon Ketua OSIS dengan cermat dan penuh tanggung jawab.</li>
                        <li>Pastikan pilihan Anda sudah benar sebelum melakukan voting.</li>
                        <li>Setelah memilih, Anda tidak dapat mengubah pilihan.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h2 class="judul-calon">Calon Ketua OSIS <br> SMAN 1 GIANYAR </h2>
            </div>
        </div>
        <div class="candidate-row">
            <div class="candidate-col">
                <div class="card candidate-card">
                    <span class="nomor-calon">1</span>
                    <div class="card-body text-center">
                        <a href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                            <img src="{{asset('foto/calon1.png')}}" alt="foto_calon1" class="candidate-img calon-vote" data-href="/2y$10$3VyqbLw48PWw4Oq7cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a" data-nama="Nama Lengkap Pasangan Calon 1">
                        </a>
                        <h4 class="mt-2 nama-calon">Nama Lengkap Pasangan Calon 01</h4>
                    </div>
                </div>
            </div>
            <div class="candidate-col">
                <div class="card candidate-card">
                    <span class="nomor-calon">2</span>
                    <div class="card-body text-center">
                        <a href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a">
                            <img src="{{asset('foto/calon2.png')}}" alt="foto_calon2" class="candidate-img calon-vote" data-href="/2y$10$3VyqbLw48PWw4Oq8cSkqFu5nOGgbMnks4PY7XDD8tVcxyza0Kh62a" data-nama="Nama Lengkap Pasangan Calon 2">
                        </a>
                        <h4 class="mt-2 nama-calon">Nama Lengkap Pasangan Calon 02</h4>
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
        <div class="row"></div>
            <div class="col text-center mt-1 keterangan-voting" style="max-width: 600px; margin: 0 auto;">
                <span style="font-size: 0.95rem; color: #555;">Pastikan Anda telah memilih dengan benar sebelum mengklik foto calon.</span>
            </div>
        </div>
        <div class="row">
            <h1>Visi & Misi</h1>
        </div>
        <div class="col text-center visi-misi" style="font-size: 0.95rem; color: #555; max-width: 600px; margin-bottom: 100px;">
            “Insan Cerdas, Sarat Prestasi, Berkarakter, Berbudaya, Peduli Lingkungan, dan Berwawasan Global”
        </div>
        <div class="footer">
            <div class="col">
                <span>SMAN 1 GIANYAR | &copy; @darmaputra</span>
                <a href="/proseslogout" class="btn btn-danger btn-sm" style="margin-left:18px; border-radius:7px; font-weight:500; font-size:1em; padding:4px 18px 4px 18px;">LOG OUT</a>
            </div>
        </div>
    </div>
{{-- </div> --}}

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

    </script>
    <script src="{{asset('assets/js/base.js')}}"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
