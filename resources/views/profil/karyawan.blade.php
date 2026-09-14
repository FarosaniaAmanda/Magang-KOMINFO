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
            z-index: 20;
        }

        .back-home a {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 11px 18px;
            background: rgba(255, 255, 255, 0.94);
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
        }

        .back-icon {
            font-size: 18px;
            line-height: 1;
        }

        /* =========================
           HERO FOTO KOMINFO
        ========================= */

        .hero {
            position: relative;
            min-height: 620px;
            background-image:
                linear-gradient(
                    135deg,
                    rgba(0, 77, 50, 0.92),
                    rgba(0, 107, 63, 0.78),
                    rgba(0, 140, 69, 0.62)
                ),
                url('{{ asset('images/kominfo.png') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    to bottom,
                    rgba(0, 50, 32, 0.10),
                    rgba(0, 77, 50, 0.22)
                );
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.12);
            right: -150px;
            bottom: -220px;
        }

        .hero-content {
            position: relative;
            z-index: 5;
            max-width: 950px;
            margin: auto;
            padding: 175px 20px 145px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: rgba(0, 50, 32, 0.35);
            border: 1px solid rgba(244, 180, 0, 0.55);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            color: #ffe082;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 22px;
        }

        .hero-badge::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #f4b400;
        }

        .hero h1 {
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1.15;
            margin-bottom: 18px;
            text-shadow: 0 4px 18px rgba(0, 0, 0, 0.22);
        }

        .hero p {
            max-width: 850px;
            margin: auto;
            font-size: 17px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.92);
            text-shadow: 0 3px 12px rgba(0, 0, 0, 0.18);
        }

        .hero-line {
            width: 90px;
            height: 4px;
            border-radius: 10px;
            background: linear-gradient(
                90deg,
                #f4b400,
                #ffd35a,
                #f4b400
            );
            margin: 30px auto 0;
        }

        /* =========================
           CONTENT
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 60px 20px 80px;
        }

        .bidang-section {
            margin-bottom: 70px;
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
           RUNNING CAROUSEL
        ========================= */

        .slider-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 15px 0 30px;
        }

        .slider-wrapper::before,
        .slider-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            z-index: 5;
            pointer-events: none;
        }

        .slider-wrapper::before {
            left: 0;
            background: linear-gradient(
                to right,
                #f4f8f5 5%,
                rgba(244, 248, 245, 0)
            );
        }

        .slider-wrapper::after {
            right: 0;
            background: linear-gradient(
                to left,
                #f4f8f5 5%,
                rgba(244, 248, 245, 0)
            );
        }

        .slider-track {
            display: flex;
            gap: 36px;
            width: max-content;
            transform: translateX(0);
            will-change: transform;
        }

        .employee-card {
            width: 250px;
            flex: 0 0 250px;
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
                min-height: 560px;
                background-position: center center;
            }

            .hero-content {
                padding: 150px 20px 110px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 15px;
            }

            .container {
                padding: 45px 10px 60px;
            }

            .bidang-title h2 {
                font-size: 25px;
            }

            .employee-card {
                width: 210px;
                flex-basis: 210px;
            }

            .photo-wrapper {
                width: 145px;
                height: 145px;
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

            .hero {
                min-height: 520px;
            }

            .hero-content {
                padding: 135px 18px 95px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 14px;
            }

            .hero-badge {
                font-size: 11px;
                padding: 8px 15px;
            }

            .employee-card {
                width: 190px;
                flex-basis: 190px;
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
         HERO
    ========================== --}}

    <header class="hero">

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
                Mengenal jajaran pegawai pada Dinas Komunikasi,
                Informatika, Statistik dan Persandian Kota Pasuruan.
            </p>

            <div class="hero-line"></div>

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

                        <div class="slider-track js-slider">

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


    {{-- =========================
         RUNNING SLIDER
    ========================== --}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.querySelectorAll(".js-slider").forEach(function (track) {

                const wrapper = track.parentElement;

                let position = 0;
                let speed = 0.45;
                let paused = false;

                function getFirstCardWidth() {

                    const firstCard =
                        track.querySelector(".employee-card");

                    if (!firstCard) {
                        return 0;
                    }

                    const trackStyle =
                        window.getComputedStyle(track);

                    const gap =
                        parseFloat(
                            trackStyle.columnGap ||
                            trackStyle.gap ||
                            0
                        );

                    return firstCard.offsetWidth + gap;
                }

                function moveSlider() {

                    if (!paused) {

                        position += speed;

                        const firstCardWidth =
                            getFirstCardWidth();

                        if (
                            firstCardWidth > 0 &&
                            position >= firstCardWidth
                        ) {

                            const firstCard =
                                track.firstElementChild;

                            track.appendChild(firstCard);

                            position -= firstCardWidth;
                        }

                        track.style.transform =
                            "translate3d(-" +
                            position +
                            "px, 0, 0)";
                    }

                    requestAnimationFrame(moveSlider);
                }

                wrapper.addEventListener(
                    "mouseenter",
                    function () {
                        paused = true;
                    }
                );

                wrapper.addEventListener(
                    "mouseleave",
                    function () {
                        paused = false;
                    }
                );

                wrapper.addEventListener(
                    "touchstart",
                    function () {
                        paused = true;
                    },
                    {
                        passive: true
                    }
                );

                wrapper.addEventListener(
                    "touchend",
                    function () {

                        setTimeout(function () {
                            paused = false;
                        }, 1000);

                    },
                    {
                        passive: true
                    }
                );

                moveSlider();

            });

        });
    </script>

</body>

</html>