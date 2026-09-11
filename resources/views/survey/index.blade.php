<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Survey Kepuasan Masyarakat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            background: #f6faf7;
            color: #1f2937;
        }

        /* =====================================================
           INPUT
        ====================================================== */

        .form-input {
            width: 100%;
            border: 1.5px solid #d5dfd9;
            border-radius: 12px;
            padding: 13px 15px;
            outline: none;
            transition: all .2s ease;
            background: #fff;
            color: #1f2937;
            font-size: 15px;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .form-input:hover {
            border-color: #8fc3a5;
        }

        .form-input:focus {
            border-color: #008c45;
            box-shadow: 0 0 0 4px rgba(0, 140, 69, .08);
        }

        textarea.form-input {
            resize: vertical;
            min-height: 110px;
        }


        /* =====================================================
           SECTION CARD
        ====================================================== */

        .section-card {
            background: #ffffff;
            border: 1px solid #e4ece7;
            border-radius: 14px;
            padding: 18px;
            transition: all .2s ease;
        }

        .section-card:hover {
            border-color: #b9d8c5;
            box-shadow: 0 5px 18px rgba(0, 92, 59, .05);
        }


        /* =====================================================
           NUMBER SECTION
        ====================================================== */

        .section-number {
            width: 35px;
            height: 35px;
            min-width: 35px;
            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #e7f6ed,
                #f7f1cf
            );

            color: #005c3b;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            font-weight: 800;

            border: 1px solid #d7e8dc;
        }


        /* =====================================================
           RATING BOX
        ====================================================== */

        .rating-box {
            background: linear-gradient(
                145deg,
                #fffef6,
                #fff9dc
            );

            border: 1px solid #ead47a;
            border-radius: 16px;

            padding: 23px 16px;

            box-shadow:
                0 8px 22px rgba(190, 154, 25, .06);
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }

        .star {
            transition: all .2s ease;
            color: #cbd5e1;
            cursor: pointer;
            line-height: 1;
            border: none;
            background: transparent;
            padding: 3px;
            outline: none;
        }

        .star:hover {
            transform: translateY(-3px) scale(1.08);
            color: #d9a900;
        }

        .star.active {
            color: #d9a900 !important;

            text-shadow:
                0 3px 10px rgba(217, 169, 0, .25);
        }


        /* =====================================================
           BUTTON KIRIM
        ====================================================== */

        .btn-survey {
            display: flex !important;
            align-items: center;
            justify-content: center;
            gap: 9px;

            width: 100%;

            background: linear-gradient(
                135deg,
                #005c3b,
                #008c45
            ) !important;

            color: #ffffff !important;

            border: none !important;
            border-radius: 12px;

            padding: 14px 20px;

            font-size: 15px;
            font-weight: 700;

            cursor: pointer;
            text-decoration: none !important;

            box-shadow:
                0 7px 18px rgba(0, 92, 59, .18);

            transition: all .25s ease;
        }

        .btn-survey:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #00482f,
                #00753a
            ) !important;

            box-shadow:
                0 11px 23px rgba(0, 92, 59, .24);
        }

        .btn-survey:active {
            transform: translateY(0);
        }


        /* =====================================================
           BUTTON BATAL
        ====================================================== */

        .btn-cancel {
            display: flex !important;
            align-items: center;
            justify-content: center;
            gap: 8px;

            width: 100%;

            background: linear-gradient(
                135deg,
                #f4c430,
                #dca900
            ) !important;

            color: #4a3a00 !important;

            border: none !important;
            border-radius: 12px;

            padding: 14px 20px;

            font-size: 15px;
            font-weight: 700;

            cursor: pointer;
            text-decoration: none !important;

            box-shadow:
                0 7px 18px rgba(217, 169, 0, .18);

            transition: all .25s ease;
        }

        .btn-cancel:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #e5b500,
                #c99700
            ) !important;

            color: #3d3000 !important;

            box-shadow:
                0 11px 23px rgba(217, 169, 0, .24);
        }

        .btn-cancel:active {
            transform: translateY(0);
        }


        /* =====================================================
           HOME BUTTON
        ====================================================== */

        .btn-home {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #005c3b,
                #008c45
            ) !important;

            color: white !important;

            border-radius: 12px;

            padding: 13px 23px;

            font-size: 15px;
            font-weight: 700;

            text-decoration: none !important;

            box-shadow:
                0 8px 20px rgba(0, 92, 59, .2);

            transition: all .2s ease;
        }

        .btn-home:hover {
            transform: translateY(-2px);
        }


        /* =====================================================
           SUCCESS ICON
        ====================================================== */

        .success-icon {
            width: 78px;
            height: 78px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #dcfce7,
                #fff4c2
            );

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 22px;

            box-shadow:
                0 8px 20px rgba(22, 163, 74, .10);
        }


        /* =====================================================
           HEADER DECORATION
        ====================================================== */

        .header-line {
            width: 55px;
            height: 4px;
            border-radius: 999px;
            background: #f4c430;
            margin-top: 15px;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .footer-text {
            color: #64748b;
        }

        .footer-brand {
            color: #005c3b;
            font-weight: 700;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 640px) {

            .section-card {
                padding: 16px;
            }

            .rating-box {
                padding: 21px 10px;
            }

            .star {
                font-size: 42px !important;
            }

            .btn-cancel,
            .btn-survey {
                padding: 14px 18px;
            }
        }
    </style>
</head>


<body class="min-h-screen">


    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <header
        class="relative overflow-hidden
               bg-gradient-to-r
               from-[#005C3B]
               via-[#007A43]
               to-[#008C45]
               text-white">

        {{-- Dekorasi background --}}

        <div
            class="absolute
                   -right-16
                   -top-20
                   w-56
                   h-56
                   rounded-full
                   bg-white/5">
        </div>

        <div
            class="absolute
                   -left-20
                   -bottom-24
                   w-60
                   h-60
                   rounded-full
                   bg-[#F4C430]/10">
        </div>


        <div class="relative max-w-3xl mx-auto px-5 md:px-6 py-7 md:py-8">

            <p
                class="text-xs md:text-sm
                       font-semibold
                       tracking-[0.16em]
                       uppercase
                       text-[#FFE36E]">

                E-Government Kota Pasuruan

            </p>


            <h1
                class="text-2xl
                       md:text-3xl
                       font-bold
                       mt-2
                       tracking-tight">

                Survey Kepuasan Masyarakat

            </h1>


            <p
                class="mt-2
                       text-sm
                       md:text-base
                       text-white/80
                       max-w-2xl
                       leading-relaxed">

                Bantu kami meningkatkan kualitas pelayanan
                dan informasi pada website E-Government
                Kota Pasuruan.

            </p>


            <div class="header-line"></div>

        </div>

    </header>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main
        class="max-w-3xl
               mx-auto
               px-4
               sm:px-6
               py-6
               md:py-8">


        {{-- =================================================
             SUCCESS
        ================================================== --}}

        @if(session('success'))

            <div
                class="bg-white
                       rounded-3xl
                       shadow-[0_12px_40px_rgba(0,92,59,0.08)]
                       border border-green-100
                       p-7
                       md:p-12
                       text-center">

                <div class="success-icon">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 text-green-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7" />

                    </svg>

                </div>


                <h2
                    class="text-2xl
                           md:text-3xl
                           font-bold
                           text-slate-900">

                    Terima Kasih!

                </h2>


                <p
                    class="text-slate-500
                           mt-4
                           leading-relaxed">

                    Terima kasih sudah mengisi
                    survey kepuasan masyarakat.

                    <br>

                    Jawaban Anda telah berhasil dikirim
                    dan akan membantu kami meningkatkan
                    kualitas pelayanan.

                </p>


                <a
                    href="{{ url('/') }}"
                    class="btn-home mt-8">

                    ←&nbsp; Kembali ke Beranda

                </a>

            </div>


        @else


            {{-- =================================================
                 ERROR
            ================================================== --}}

            @if($errors->any())

                <div
                    class="mb-6
                           rounded-2xl
                           bg-red-50
                           border border-red-200
                           text-red-700
                           px-5 py-4">

                    <p class="font-semibold mb-2">

                        Mohon periksa kembali data Anda.

                    </p>


                    <ul
                        class="list-disc
                               list-inside
                               text-sm
                               space-y-1">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            {{-- =================================================
                 SURVEY CARD
            ================================================== --}}

            <div
                class="bg-white
                       rounded-3xl
                       shadow-[0_14px_45px_rgba(0,92,59,0.08)]
                       border border-slate-100
                       overflow-hidden">


                {{-- =================================================
                     CARD HEADER
                ================================================== --}}

                <div
                    class="px-6
                           md:px-9
                           pt-7
                           md:pt-8
                           pb-6
                           border-b
                           border-slate-100">

                    <div
                        class="flex
                               items-center
                               gap-4">

                        <div
                            class="w-12
                                   h-12
                                   md:w-14
                                   md:h-14
                                   rounded-2xl
                                   bg-gradient-to-br
                                   from-[#eaf7ef]
                                   to-[#fff6c9]
                                   flex
                                   items-center
                                   justify-center
                                   text-2xl
                                   md:text-3xl
                                   shadow-sm">

                            💬

                        </div>


                        <div>

                            <h2
                                class="text-xl
                                       md:text-2xl
                                       font-bold
                                       text-slate-900">

                                Bagikan Pendapat Anda

                            </h2>


                            <p
                                class="text-sm
                                       text-slate-500
                                       mt-1">

                                Pendapat Anda sangat berarti bagi kami.

                            </p>

                        </div>

                    </div>


                    <div
                        class="mt-5
                               h-1
                               w-16
                               rounded-full
                               bg-[#F4C430]">
                    </div>

                </div>



                {{-- =================================================
                     FORM
                ================================================== --}}

                <form
                    action="{{ route('survey.store') }}"
                    method="POST"
                    class="px-6
                           md:px-9
                           py-6
                           md:py-8">

                    @csrf



                    {{-- =================================================
                         1. DATA DIRI
                    ================================================== --}}

                    <div>

                        <div
                            class="flex
                                   items-center
                                   gap-3
                                   mb-4">

                            <span class="section-number">
                                1
                            </span>


                            <div>

                                <h3
                                    class="font-bold
                                           text-slate-900">

                                    Data Diri

                                </h3>


                                <p
                                    class="text-xs
                                           text-slate-500">

                                    Lengkapi informasi berikut

                                </p>

                            </div>

                        </div>



                        {{-- NAMA --}}

                        <div class="section-card mb-4">

                            <label
                                class="block
                                       font-semibold
                                       mb-2
                                       text-slate-700">

                                Nama Lengkap

                                <span class="text-red-500">
                                    *
                                </span>

                            </label>


                            <input
                                type="text"
                                name="nama"
                                value="{{ old('nama') }}"
                                placeholder="Masukkan nama lengkap Anda"
                                required
                                class="form-input">

                        </div>



                        {{-- WHATSAPP --}}

                        <div class="section-card mb-4">

                            <label
                                class="block
                                       font-semibold
                                       mb-2
                                       text-slate-700">

                                Nomor WhatsApp

                                <span
                                    class="text-slate-400
                                           font-normal
                                           text-sm">

                                    (Opsional)

                                </span>

                            </label>


                            <input
                                type="text"
                                name="no_wa"
                                value="{{ old('no_wa') }}"
                                placeholder="Contoh: 081234567890"
                                class="form-input">

                        </div>



                        {{-- ALAMAT --}}

                        <div class="section-card">

                            <label
                                class="block
                                       font-semibold
                                       mb-2
                                       text-slate-700">

                                Alamat / Domisili

                                <span class="text-red-500">
                                    *
                                </span>

                            </label>


                            <textarea
                                name="alamat"
                                rows="3"
                                required
                                placeholder="Masukkan alamat atau domisili Anda"
                                class="form-input">{{ old('alamat') }}</textarea>

                        </div>

                    </div>



                    {{-- =================================================
                         2. SARAN DAN MASUKAN
                    ================================================== --}}

                    <div class="mt-8">

                        <div
                            class="flex
                                   items-center
                                   gap-3
                                   mb-4">

                            <span class="section-number">
                                2
                            </span>


                            <div>

                                <h3
                                    class="font-bold
                                           text-slate-900">

                                    Saran dan Masukan

                                </h3>


                                <p
                                    class="text-xs
                                           text-slate-500">

                                    Ceritakan pengalaman Anda

                                </p>

                            </div>

                        </div>


                        <div class="section-card">

                            <label
                                class="block
                                       font-semibold
                                       mb-2
                                       text-slate-700">

                                Saran dan Masukan

                                <span class="text-red-500">
                                    *
                                </span>

                            </label>


                            <textarea
                                name="pesan"
                                rows="5"
                                required
                                placeholder="Tuliskan kritik, saran, atau pendapat Anda..."
                                class="form-input">{{ old('pesan') }}</textarea>


                            <p
                                class="text-xs
                                       text-slate-400
                                       mt-2
                                       leading-relaxed">

                                💡 Sampaikan pendapat Anda secara
                                jujur agar kami dapat memberikan
                                pelayanan yang lebih baik.

                            </p>

                        </div>

                    </div>



                    {{-- =================================================
                         3. RATING
                    ================================================== --}}

                    <div class="mt-8">

                        <div
                            class="flex
                                   items-center
                                   gap-3
                                   mb-4">

                            <span class="section-number">
                                3
                            </span>


                            <div>

                                <h3
                                    class="font-bold
                                           text-slate-900">

                                    Penilaian Anda

                                </h3>


                                <p
                                    class="text-xs
                                           text-slate-500">

                                    Berikan penilaian terhadap website

                                </p>

                            </div>

                        </div>



                        <div class="rating-box">

                            <label
                                class="block
                                       text-center
                                       font-bold
                                       text-slate-800">

                                Seberapa puas Anda dengan website ini?

                                <span class="text-red-500">
                                    *
                                </span>

                            </label>


                            <p
                                class="text-center
                                       text-sm
                                       text-slate-500
                                       mt-1
                                       mb-4">

                                Pilih jumlah bintang sesuai
                                pengalaman Anda

                            </p>


                            {{-- STARS --}}

                            <div class="rating-stars">

                                @for($i = 1; $i <= 5; $i++)

                                    <button
                                        type="button"
                                        class="star text-5xl md:text-6xl"
                                        data-rating="{{ $i }}"
                                        aria-label="Rating {{ $i }}">

                                        ☆

                                    </button>

                                @endfor

                            </div>


                            {{-- HIDDEN RATING --}}

                            <input
                                type="hidden"
                                name="rating"
                                id="rating"
                                value="{{ old('rating') }}"
                                required>


                            {{-- RATING TEXT --}}

                            <p
                                id="ratingText"
                                class="text-center
                                       text-sm
                                       font-semibold
                                       text-slate-500
                                       mt-3">

                                Silakan pilih rating

                            </p>

                        </div>

                    </div>



                    {{-- =================================================
                         4. KIRIM SURVEY
                    ================================================== --}}

                    <div
                        class="mt-8
                               pt-6
                               border-t
                               border-slate-100">

                        <div
                            class="flex
                                   flex-col
                                   sm:flex-row
                                   gap-3">

                            {{-- TOMBOL BATAL --}}

                            <a
                                href="{{ route('home') }}"
                                class="btn-cancel">

                                <span>
                                    ←
                                </span>

                                <span>
                                    Batal
                                </span>

                            </a>


                            {{-- TOMBOL KIRIM --}}

                            <button
                                type="submit"
                                class="btn-survey">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />

                                </svg>


                                <span>
                                    Kirim Survey
                                </span>

                            </button>

                        </div>


                        <p
                            class="text-center
                                   text-xs
                                   text-slate-400
                                   mt-3">

                            Terima kasih telah meluangkan waktu
                            untuk memberikan penilaian.

                        </p>

                    </div>


                </form>

            </div>


        @endif

    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer
        class="border-t
               border-slate-200
               bg-white">

        <div
            class="max-w-3xl
                   mx-auto
                   px-6
                   py-5
                   text-center
                   text-sm
                   footer-text">

            <span class="footer-brand">

                E-Government Kota Pasuruan

            </span>

            <span class="mx-1">
                •
            </span>

            © {{ date('Y') }}

        </div>

    </footer>



    {{-- =====================================================
         STAR RATING JAVASCRIPT
    ====================================================== --}}

    <script>

        const stars =
            document.querySelectorAll('.star');

        const ratingInput =
            document.getElementById('rating');

        const ratingText =
            document.getElementById('ratingText');


        const ratingLabels = {

            1: 'Sangat Tidak Puas',
            2: 'Tidak Puas',
            3: 'Cukup',
            4: 'Puas',
            5: 'Sangat Puas'

        };


        function updateRating(rating) {

            if (!rating) {
                return;
            }


            stars.forEach((star) => {

                const itemRating =
                    parseInt(star.dataset.rating);


                if (itemRating <= rating) {

                    star.classList.add('active');

                    star.textContent = '★';

                } else {

                    star.classList.remove('active');

                    star.textContent = '☆';

                }

            });


            ratingText.textContent =
                ratingLabels[rating];


            ratingText.classList.remove(
                'text-slate-500'
            );


            ratingText.classList.add(
                'text-yellow-600'
            );

        }


        stars.forEach((star) => {

            star.addEventListener('click', function () {

                const rating =
                    parseInt(this.dataset.rating);


                ratingInput.value =
                    rating;


                updateRating(rating);

            });

        });


        // Menampilkan rating lama
        // jika validasi form gagal

        const oldRating =
            parseInt(ratingInput?.value);


        if (oldRating) {

            updateRating(oldRating);

        }

    </script>


</body>

</html>