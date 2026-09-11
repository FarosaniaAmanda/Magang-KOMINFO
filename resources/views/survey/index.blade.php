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
        }

        /* ================================
           INPUT
        ================================= */

        .form-input {
            width: 100%;
            border: 1.5px solid #d5dfd9;
            border-radius: 13px;
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
            box-shadow: 0 0 0 4px rgba(0, 140, 69, .10);
        }

        textarea.form-input {
            resize: vertical;
        }


        /* ================================
           SECTION CARD
        ================================= */

        .section-card {
            background: #ffffff;
            border: 1px solid #e4ece7;
            border-radius: 16px;
            padding: 19px;
            transition: all .2s ease;
        }

        .section-card:hover {
            border-color: #b9d8c5;
            box-shadow: 0 5px 16px rgba(0, 92, 59, .04);
        }


        /* ================================
           NUMBER
        ================================= */

        .section-number {
            width: 34px;
            height: 34px;
            min-width: 34px;
            border-radius: 10px;
            background: #e9f7ef;
            color: #006b43;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 800;
        }


        /* ================================
           RATING BOX
        ================================= */

        .rating-box {
            background: linear-gradient(
                145deg,
                #fffdf1,
                #fff8d4
            );

            border: 1px solid #f0d873;
            border-radius: 17px;
            padding: 24px 15px;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3px;
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
            transform: translateY(-4px) scale(1.1);
            color: #f4c430;
        }

        .star.active {
            color: #f4c430 !important;
            text-shadow: 0 3px 10px rgba(244, 196, 48, .3);
        }


        /* ================================
           BUTTON SURVEY
        ================================= */

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
            border-radius: 13px;

            padding: 15px 20px;

            font-size: 16px;
            font-weight: 700;

            cursor: pointer;
            text-decoration: none !important;

            box-shadow: 0 8px 20px rgba(0, 92, 59, .20);

            transition: all .25s ease;
        }

        .btn-survey:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #00482f,
                #00753a
            ) !important;

            box-shadow: 0 12px 25px rgba(0, 92, 59, .27);
        }

        .btn-survey:active {
            transform: translateY(0);
        }


        /* ================================
           HOME BUTTON
        ================================= */

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

            box-shadow: 0 8px 20px rgba(0, 92, 59, .2);

            transition: all .2s ease;
        }

        .btn-home:hover {
            transform: translateY(-2px);
        }


        /* ================================
           SUCCESS
        ================================= */

        .success-icon {
            width: 80px;
            height: 80px;

            border-radius: 50%;

            background: #dcfce7;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 22px;

            box-shadow: 0 8px 20px rgba(22, 163, 74, .12);
        }


        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 640px) {

            .section-card {
                padding: 16px;
            }

            .rating-box {
                padding: 22px 10px;
            }

            .star {
                font-size: 42px !important;
            }

        }
    </style>
</head>


<body class="min-h-screen bg-[#F6FAF7] text-slate-800">


    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <header class="bg-gradient-to-r from-[#005C3B] via-[#007A43] to-[#008C45] text-white">

        <div class="max-w-3xl mx-auto px-5 md:px-6 py-6">

            {{-- KEMBALI --}}

            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2
                      text-sm text-white/80
                      hover:text-white transition mb-5">

                ← Kembali ke Beranda

            </a>


            <p class="text-xs md:text-sm font-semibold
                      tracking-[0.16em] uppercase
                      text-[#FFE36E]">

                E-Government Kota Pasuruan

            </p>


            <h1 class="text-2xl md:text-3xl
                       font-bold mt-1">

                Survey Kepuasan Masyarakat

            </h1>


            <p class="mt-2 text-sm md:text-base
                      text-white/80">

                Bantu kami meningkatkan kualitas pelayanan
                dan informasi pada website E-Government
                Kota Pasuruan.

            </p>

        </div>

    </header>



    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="max-w-3xl mx-auto px-4 sm:px-6 py-5 md:py-6">


        {{-- =================================================
             SUCCESS
        ================================================== --}}

        @if(session('success'))

            <div class="bg-white rounded-3xl
                        shadow-xl
                        border border-green-100
                        p-7 md:p-12 text-center">

                <div class="success-icon">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-10 h-10 text-green-600"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="2">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M5 13l4 4L19 7"/>

                    </svg>

                </div>


                <h2 class="text-2xl md:text-3xl
                           font-bold text-slate-900">

                    Terima Kasih!

                </h2>


                <p class="text-slate-500 mt-4
                          leading-relaxed">

                    Terima kasih sudah mengisi
                    survey kepuasan masyarakat.

                    <br>

                    Jawaban Anda telah berhasil dikirim
                    dan akan membantu kami meningkatkan
                    kualitas pelayanan.

                </p>


                <a href="{{ url('/') }}"
                   class="btn-home mt-8">

                    ←&nbsp; Kembali ke Beranda

                </a>

            </div>


        @else


            {{-- =================================================
                 ERROR
            ================================================== --}}

            @if($errors->any())

                <div class="mb-5 rounded-2xl
                            bg-red-50
                            border border-red-200
                            text-red-700
                            px-5 py-4">

                    <p class="font-semibold mb-2">

                        Mohon periksa kembali data Anda.

                    </p>


                    <ul class="list-disc
                               list-inside
                               text-sm space-y-1">

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

            <div class="bg-white
                        rounded-3xl
                        shadow-[0_12px_40px_rgba(0,92,59,0.08)]
                        border border-slate-100
                        overflow-hidden">


                {{-- =================================================
                     CARD HEADER
                ================================================== --}}

                <div class="px-6 md:px-9
                            pt-6 md:pt-7
                            pb-5
                            border-b border-slate-100">

                    <div class="flex items-center gap-4">

                        <div class="w-13 h-13 md:w-14 md:h-14
                                    rounded-2xl
                                    bg-gradient-to-br
                                    from-[#eaf7ef]
                                    to-[#fff6c9]
                                    flex items-center
                                    justify-center
                                    text-3xl">

                            💬

                        </div>


                        <div>

                            <h2 class="text-xl md:text-2xl
                                       font-bold text-slate-900">

                                Bagikan Pendapat Anda

                            </h2>


                            <p class="text-sm
                                      text-slate-500 mt-1">

                                Pendapat Anda sangat berarti bagi kami.

                            </p>

                        </div>

                    </div>


                    <div class="mt-5 h-1
                                w-16
                                rounded-full
                                bg-[#F4C430]">
                    </div>

                </div>



                {{-- =================================================
                     FORM
                ================================================== --}}

                <form action="{{ route('survey.store') }}"
                      method="POST"
                      class="px-6 md:px-9 py-6 md:py-7">

                    @csrf



                    {{-- =================================================
                         1. DATA DIRI
                    ================================================== --}}

                    <div>

                        <div class="flex items-center gap-3 mb-4">

                            <span class="section-number">
                                1
                            </span>


                            <div>

                                <h3 class="font-bold
                                           text-slate-900">

                                    Data Diri

                                </h3>


                                <p class="text-xs
                                          text-slate-500">

                                    Lengkapi informasi berikut

                                </p>

                            </div>

                        </div>



                        {{-- NAMA --}}

                        <div class="section-card mb-4">

                            <label class="block
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

                            <label class="block
                                          font-semibold
                                          mb-2
                                          text-slate-700">

                                Nomor WhatsApp

                                <span class="text-slate-400
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

                            <label class="block
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

                    <div class="mt-7">

                        <div class="flex items-center gap-3 mb-4">

                            <span class="section-number">
                                2
                            </span>


                            <div>

                                <h3 class="font-bold
                                           text-slate-900">

                                    Saran dan Masukan

                                </h3>


                                <p class="text-xs
                                          text-slate-500">

                                    Ceritakan pengalaman Anda

                                </p>

                            </div>

                        </div>


                        <div class="section-card">

                            <label class="block
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


                            <p class="text-xs
                                      text-slate-400
                                      mt-2">

                                💡 Sampaikan pendapat Anda secara
                                jujur agar kami dapat memberikan
                                pelayanan yang lebih baik.

                            </p>

                        </div>

                    </div>



                    {{-- =================================================
                         3. RATING
                    ================================================== --}}

                    <div class="mt-7">

                        <div class="flex items-center gap-3 mb-4">

                            <span class="section-number">
                                3
                            </span>


                            <div>

                                <h3 class="font-bold
                                           text-slate-900">

                                    Penilaian Anda

                                </h3>


                                <p class="text-xs
                                          text-slate-500">

                                    Berikan penilaian terhadap website

                                </p>

                            </div>

                        </div>



                        <div class="rating-box">

                            <label class="block
                                          text-center
                                          font-bold
                                          text-slate-800">

                                Seberapa puas Anda dengan website ini?

                                <span class="text-red-500">
                                    *
                                </span>

                            </label>


                            <p class="text-center
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

                            <p id="ratingText"
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

                    <div class="mt-7
                                pt-5
                                border-t
                                border-slate-100">

                        <button
                            type="submit"
                            class="btn-survey">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-5 h-5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 stroke-width="2">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>

                            </svg>


                            <span>
                                Kirim Survey
                            </span>

                        </button>


                        <p class="text-center
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

    <footer class="border-t
                   border-slate-200
                   bg-white">

        <div class="max-w-3xl
                    mx-auto
                    px-6
                    py-5
                    text-center
                    text-sm
                    text-slate-500">

            <span class="text-[#005C3B] font-semibold">
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