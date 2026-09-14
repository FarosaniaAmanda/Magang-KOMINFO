<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Karyawan Diskominfo Kota Pasuruan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f8f5;
            color: #173b2d;
        }

        /* =========================
           TOMBOL KEMBALI
        ========================= */

        .back-home {
            position: absolute;
            top: 25px;
            left: 25px;
            z-index: 10;
        }

        .back-home a {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 11px 18px;
            background: rgba(255, 255, 255, 0.95);
            color: #006b3c;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
        }

        .back-home a:hover {
            background: #f4b400;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.16);
        }

        .back-icon {
            font-size: 18px;
            line-height: 1;
        }

        /* =========================
           HEADER
        ========================= */

        .hero {
            background:
                linear-gradient(135deg, #005c3b, #007a43, #008c45);
            color: white;
            padding: 65px 20px 75px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(255, 193, 7, 0.12);
            top: -130px;
            left: -100px;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            right: -150px;
            bottom: -200px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: auto;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 193, 7, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #ffe082;
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: clamp(28px, 5vw, 48px);
            line-height: 1.2;
            margin-bottom: 14px;
        }

        .hero p {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.7;
        }

        /* =========================
           CONTENT
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 55px 20px 80px;
        }

        .bidang-section {
            margin-bottom: 65px;
        }

        .bidang-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .bidang-label {
            display: inline-block;
            color: #008c45;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .bidang-title h2 {
            font-size: 30px;
            color: #174d37;
            margin-bottom: 12px;
        }

        .title-line {
            width: 65px;
            height: 4px;
            border-radius: 10px;
            background: #f4b400;
            margin: auto;
        }

        /* =========================
           SLIDER
        ========================= */

        .slider-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 15px 0 25px;
        }

        .slider-wrapper::before,
        .slider-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 90px;
            z-index: 5;
            pointer-events: none;
        }

        .slider-wrapper::before {
            left: 0;
            background: linear-gradient(
                to right,
                #f4f8f5,
                rgba(244, 248, 245, 0)
            );
        }

        .slider-wrapper::after {
            right: 0;
            background: linear-gradient(
                to left,
                #f4f8f5,
                rgba(244, 248, 245, 0)
            );
        }

        .slider-track {
            display: flex;
            width: max-content;
            animation: berjalan 24s linear infinite;
        }

        .slider-track:hover {
            animation-play-state: paused;
        }

        .employee-card {
            width: 250px;
            flex-shrink: 0;
            margin: 0 18px;
            text-align: center;
        }

        .photo-wrapper {
            width: 175px;
            height: 175px;
            margin: auto;
            padding: 6px;
            border-radius: 50%;
            background: linear-gradient(
                135deg,
                #007a43,
                #f4b400
            );
            box-shadow:
                0 12px 30px rgba(0, 92, 59, 0.15);
        }

        .photo {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            background: #e8eee9;
            border: 5px solid white;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .employee-name {
            margin-top: 18px;
            font-size: 17px;
            font-weight: bold;
            color: #174d37;
            line-height: 1.4;
        }

        .employee-position {
            margin-top: 6px;
            font-size: 13px;
            color: #6b7d73;
            line-height: 1.5;
        }

        /* =========================
           EMPTY DATA
        ========================= */

        .empty {
            text-align: center;
            background: white;
            border-radius: 20px;
            padding: 50px 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .empty h3 {
            color: #174d37;
            margin-bottom: 8px;
        }

        .empty p {
            color: #718078;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #004d32;
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        footer p {
            font-size: 13px;
            opacity: 0.8;
            line-height: 1.7;
        }

        /* =========================
           ANIMATION
        ========================= */

        @keyframes berjalan {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .back-home {
                top: 18px;
                left: 18px;
            }

            .back-home a {
                padding: 9px 13px;
                font-size: 13px;
            }

            .hero {
                padding: 75px 20px 60px;
            }

            .container {
                padding: 40px 10px 60px;
            }

            .bidang-title h2 {
                font-size: 25px;
            }

            .employee-card {
                width: 210px;
                margin: 0 12px;
            }

            .photo-wrapper {
                width: 145px;
                height: 145px;
            }

            .slider-track {
                animation-duration: 20s;
            }
        }

        @media (max-width: 480px) {

            .back-home {
                top: 15px;
                left: 15px;
            }

            .back-home a {
                padding: 8px 11px;
                font-size: 12px;
            }

            .back-icon {
                font-size: 16px;
            }

            .employee-card {
                width: 190px;
                margin: 0 10px;
            }

            .photo-wrapper {
                width: 130px;
                height: 130px;
            }

            .employee-name {
                font-size: 15px;
            }

            .employee-position {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    {{-- =========================
         SUCCESS NOTIFICATION
    ========================== --}}
    @if(session('success'))
        <div id="success-notification" style="
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 18px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 35px rgba(16, 185, 129, 0.4);
            max-width: 400px;
            z-index: 9999;
            animation: slideIn 0.4s ease-out;
        ">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="
                    width: 24px;
                    height: 24px;
                    background: rgba(255,255,255,0.3);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 16px;
                ">✓</div>
                <div>
                    <p style="font-weight: bold; margin-bottom: 4px;">Sukses! ✓</p>
                    <p style="font-size: 14px; opacity: 0.95;">{{ session('success') }}</p>
                </div>
            </div>
        </div>

        <style>
            @keyframes slideIn {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOut {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(400px);
                    opacity: 0;
                }
            }
        </style>

        <script>
            setTimeout(function() {
                const notif = document.getElementById('success-notification');
                if (notif) {
                    notif.style.animation = 'slideOut 0.4s ease-out forwards';
                    setTimeout(() => notif.remove(), 400);
                }
            }, 4000);
        </script>
    @endif

    {{-- =========================
         HEADER
    ========================== --}}

    <header class="hero">

        {{-- TOMBOL KEMBALI KE BERANDA --}}
        <div class="back-home">
            <a href="{{ url('/') }}">
                <span class="back-icon">←</span>
                Kembali ke Beranda
            </a>
        </div>

        <div class="hero-content">

            <div class="hero-badge">
                PROFIL PEGAWAI
            </div>

            <h1>
                Profil Karyawan
            </h1>

            <p>
                Dinas Komunikasi, Informatika, Statistik dan Persandian
                Kota Pasuruan
            </p>

        </div>

    </header>


    {{-- =========================
         CONTENT
    ========================== --}}

    <main class="container">

        @forelse($karyawans as $bidang => $employees)

            <section class="bidang-section">

                <div class="bidang-title">

                    <div class="bidang-label">
                        Bidang
                    </div>

                    <h2>
                        {{ $bidang }}
                    </h2>

                    <div class="title-line"></div>

                </div>


                @if($employees->count() > 0)

                    <div class="slider-wrapper">

                        <div class="slider-track">

                            {{-- DATA ASLI --}}

                            @foreach($employees as $karyawan)

                                <div class="employee-card">

                                    <div class="photo-wrapper">

                                        <div class="photo">

                                            @if($karyawan->foto)

                                                <img
                                                    src="{{ asset('storage/' . $karyawan->foto) }}"
                                                    alt="{{ $karyawan->nama }}"
                                                >

                                            @else

                                                <img
                                                    src="{{ asset('images/karyawan/default.jpg') }}"
                                                    alt="{{ $karyawan->nama }}"
                                                >

                                            @endif

                                        </div>

                                    </div>

                                    <div class="employee-name">
                                        {{ $karyawan->nama }}
                                    </div>

                                    @if($karyawan->jabatan)

                                        <div class="employee-position">
                                            {{ $karyawan->jabatan }}
                                        </div>

                                    @endif

                                </div>

                            @endforeach


                            {{-- DUPLIKASI UNTUK LOOPING SEAMLESS --}}

                            @foreach($employees as $karyawan)

                                <div class="employee-card">

                                    <div class="photo-wrapper">

                                        <div class="photo">

                                            @if($karyawan->foto)

                                                <img
                                                    src="{{ asset('storage/' . $karyawan->foto) }}"
                                                    alt="{{ $karyawan->nama }}"
                                                >

                                            @else

                                                <img
                                                    src="{{ asset('images/karyawan/default.jpg') }}"
                                                    alt="{{ $karyawan->nama }}"
                                                >

                                            @endif

                                        </div>

                                    </div>

                                    <div class="employee-name">
                                        {{ $karyawan->nama }}
                                    </div>

                                    @if($karyawan->jabatan)

                                        <div class="employee-position">
                                            {{ $karyawan->jabatan }}
                                        </div>

                                    @endif

                                </div>

                            @endforeach

                        </div>

                    </div>

                @endif

            </section>

        @empty

            <div class="empty">

                <h3>
                    Data Karyawan Belum Tersedia
                </h3>

                <p>
                    Data karyawan akan ditampilkan setelah ditambahkan melalui halaman admin.
                </p>

            </div>

        @endforelse

    </main>


    {{-- =========================
         FOOTER
    ========================== --}}

    <footer>

        <p>
            © {{ date('Y') }} Dinas Komunikasi, Informatika, Statistik
            dan Persandian Kota Pasuruan
        </p>

    </footer>

</body>

</html>