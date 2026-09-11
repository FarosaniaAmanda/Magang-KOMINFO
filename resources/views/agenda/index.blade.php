
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F7F9F8] text-[#17211B]">

    <!-- =========================
         NAVBAR
    ========================== -->
    <nav class="bg-white/95 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center">

            <a href="/" class="flex items-center gap-3">

                <!-- LOGO -->
                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl overflow-hidden flex-shrink-0">

                    <img
                        src="{{ asset('images/logo.jpeg') }}"
                        alt="Logo E-Government"
                        class="w-full h-full object-contain"
                    >

                </div>


                <!-- IDENTITAS -->
                <div>

                    <h1 class="font-bold text-lg sm:text-xl text-slate-800 tracking-tight">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-[10px] sm:text-xs text-slate-500">
                        Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
                    </p>

                </div>

            </a>

        </div>

    </nav>


    <!-- =========================
         TOMBOL KEMBALI

    ========================== -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-5 sm:pt-6">

        <a href="/"
           class="group inline-flex items-center gap-2
                  px-4 py-2.5
                  bg-[#008C45] 
                  border border-slate-200
                  rounded-lg
                  shadow-sm
                  text-white
                  hover:bg-[#C9A227]
                  hover:text-white
                  hover:border-[#C9A227]
                  hover:shadow-md
                  font-semibold text-sm
                  transition-all duration-200
                  focus:outline-none
                  focus:ring-2
                  focus:ring-[#C9A227]
                  focus:ring-offset-2">

            <!-- ICON -->
            <span class="flex items-center justify-center
                         w-6 h-6
                         rounded-full
                         bg-[#008C45]/10
                         text-white
                         group-hover:bg-white/20
                         group-hover:text-white
                         transition-all duration-200">

                ←

            </span>


            <!-- TEXT -->
            <span>
                Kembali ke Beranda
            </span>

        </a>

    </div>


    <!-- =========================
         AGENDA
    ========================== -->

    <main class="min-h-[70vh] py-10 sm:py-12">

        <div class="max-w-5xl mx-auto px-4 sm:px-6">


            <!-- =========================
                 JUDUL
            ========================== -->

            <div class="text-center mb-8 sm:mb-10">

                <!-- ICON -->
                <div class="mx-auto mb-4
                            w-16 h-16
                            rounded-2xl
                            bg-green-50
                            flex items-center justify-center
                            text-4xl
                            shadow-sm">

                    📅

                </div>


                <!-- JUDUL -->
                <h1 class="text-3xl sm:text-4xl
                           font-bold
                           text-[#005C3B]
                           tracking-tight">

                    Agenda E-Government

                </h1>


                <!-- SUBJUDUL -->
                <p class="text-sm sm:text-base
                          text-slate-600
                          mt-2
                          max-w-xl
                          mx-auto">

                    Agenda kegiatan E-Government Kota Pasuruan

                </p>

            </div>


            <!-- =========================
                 KALENDER
            ========================== -->

            <div class="bg-white
                        rounded-2xl sm:rounded-3xl
                        border border-slate-100
                        shadow-lg
                        p-4 sm:p-6">


                <!-- =========================
                     NAVIGASI BULAN
                ========================== -->

                <div class="flex items-center justify-between mb-6">

                    <!-- BULAN SEBELUMNYA -->
                    <button
                        onclick="ubahBulan(-1)"
                        aria-label="Bulan sebelumnya"
                        class="w-10 h-10
                               rounded-full
                               bg-[#E8F5EE]
                               text-[#008C45]
                               font-bold
                               hover:bg-[#008C45]
                               hover:text-white
                               hover:shadow-md
                               transition-all duration-200">

                        ←

                    </button>


                    <!-- BULAN & TAHUN -->
                    <h2
                        id="bulanTahun"
                        class="text-base sm:text-xl
                               font-bold
                               text-[#005C3B]
                               text-center">

                        Memuat...

                    </h2>


                    <!-- BULAN BERIKUTNYA -->
                    <button
                        onclick="ubahBulan(1)"
                        aria-label="Bulan berikutnya"
                        class="w-10 h-10
                               rounded-full
                               bg-[#E8F5EE]
                               text-[#008C45]
                               font-bold
                               hover:bg-[#008C45]
                               hover:text-white
                               hover:shadow-md
                               transition-all duration-200">

                        →

                    </button>

                </div>


                <!-- =========================
                     NAMA HARI
                ========================== -->

                <div class="grid grid-cols-7
                            text-center
                            font-semibold
                            text-xs sm:text-sm
                            mb-3
                            text-slate-600">

                    <div class="text-red-500">Min</div>
                    <div>Sen</div>
                    <div>Sel</div>
                    <div>Rab</div>
                    <div>Kam</div>
                    <div>Jum</div>
                    <div>Sab</div>

                </div>


                <!-- =========================
                     TANGGAL
                ========================== -->

                <div
                    id="kalender"
                    class="grid grid-cols-7 gap-1.5 sm:gap-2">

                </div>


                <!-- =========================
                     KETERANGAN
                ========================== -->

                <div class="flex flex-wrap
                            justify-center
                            gap-4 sm:gap-5
                            mt-7
                            text-xs sm:text-sm
                            text-slate-600">


                    <!-- HARI INI -->
                    <div class="flex items-center gap-2">

                        <span class="w-3.5 h-3.5 sm:w-4 sm:h-4
                                     rounded-full
                                     bg-green-500">
                        </span>

                        Hari ini

                    </div>


                    <!-- ADA AGENDA -->
                    <div class="flex items-center gap-2">

                        <span class="w-3.5 h-3.5 sm:w-4 sm:h-4
                                     rounded-full
                                     bg-yellow-400">
                        </span>

                        Ada agenda

                    </div>


                    <!-- SELESAI -->
                    <div class="flex items-center gap-2">

                        <span class="w-3.5 h-3.5 sm:w-4 sm:h-4
                                     rounded-full
                                     bg-orange-400">
                        </span>

                        Agenda selesai

                    </div>

                </div>

            </div>


            <!-- =========================
                 DETAIL AGENDA
            ========================== -->

            <div
                id="detailAgenda"
                class="mt-8">

            </div>

        </div>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer class="bg-gradient-to-br
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8 text-center">

            <p class="text-xs sm:text-sm text-white/80">

                © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.

            </p>

        </div>

    </footer>


    <!-- =========================
         JAVASCRIPT AGENDA
    ========================== -->

    <script>

        let tanggalSekarang = new Date();


        const namaBulan = [

            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"

        ];


        /*
        |--------------------------------------------------------------------------
        | LOAD AGENDA DARI API
        |--------------------------------------------------------------------------
        */

        async function loadAgenda() {

            const bulan = tanggalSekarang.getMonth() + 1;
            const tahun = tanggalSekarang.getFullYear();

            const kalender = document.getElementById("kalender");


            kalender.innerHTML = `

                <div class="col-span-7 text-center py-8 text-slate-500">

                    Memuat agenda...

                </div>

            `;


            try {

                const response = await fetch(
                    `/api/agenda/calendar?bulan=${bulan}&tahun=${tahun}`
                );


                if (!response.ok) {

                    throw new Error("API tidak dapat diakses");

                }


                const data = await response.json();


                tampilkanKalender(data.agenda);


            } catch (error) {

                console.error(error);


                kalender.innerHTML = `

                    <div class="col-span-7
                                text-center
                                py-8
                                text-red-500">

                        Gagal memuat agenda.

                    </div>

                `;

            }

        }


        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN KALENDER
        |--------------------------------------------------------------------------
        */

        function tampilkanKalender(agenda) {

            const kalender = document.getElementById("kalender");

            kalender.innerHTML = "";


            const tahun = tanggalSekarang.getFullYear();

            const bulan = tanggalSekarang.getMonth();


            document.getElementById("bulanTahun").innerText =
                `${namaBulan[bulan]} ${tahun}`;


            // Hari pertama bulan

            const hariPertama =
                new Date(tahun, bulan, 1).getDay();


            // Jumlah hari dalam bulan

            const jumlahHari =
                new Date(tahun, bulan + 1, 0).getDate();


            // Kolom kosong sebelum tanggal 1

            for (let i = 0; i < hariPertama; i++) {

                kalender.innerHTML += `

                    <div></div>

                `;

            }


            // Buat tanggal

            for (let tanggal = 1; tanggal <= jumlahHari; tanggal++) {


                const tanggalString =
                    `${tahun}-${String(bulan + 1).padStart(2, "0")}-${String(tanggal).padStart(2, "0")}`;


                // Agenda pada tanggal tersebut

                const agendaHariIni = agenda.filter(item =>

                    item.tanggal.substring(0, 10) === tanggalString

                );


                const tanggalObj =
                    new Date(tahun, bulan, tanggal);


                const hari =
                    tanggalObj.getDay();


                // Hari ini

                const sekarang = new Date();


                const isToday =
                    tanggal === sekarang.getDate() &&
                    bulan === sekarang.getMonth() &&
                    tahun === sekarang.getFullYear();


                let warna =
                    "bg-slate-50 text-slate-700";


                /*
                |--------------------------------------------------------------------------
                | WARNA AGENDA
                |--------------------------------------------------------------------------
                */

                if (agendaHariIni.length > 0) {

                    const semuaSelesai =
                        agendaHariIni.every(item =>

                            item.status === "selesai"

                        );


                    warna = semuaSelesai

                        ? "bg-orange-400 text-white"

                        : "bg-yellow-400 text-slate-900";

                }


                // Hari ini selalu hijau

                if (isToday) {

                    warna = "bg-green-500 text-white";

                }


                // Minggu

                const warnaMinggu =
                    hari === 0 && !isToday

                        ? "text-red-500"

                        : "";


                kalender.innerHTML += `

                    <button

                        onclick="lihatAgenda('${tanggalString}')"

                        class="
                            h-11 sm:h-14
                            rounded-lg sm:rounded-xl
                            ${warna}
                            ${warnaMinggu}
                            font-semibold
                            text-sm sm:text-base
                            hover:scale-105
                            hover:shadow-sm
                            transition-all duration-200
                            relative
                        "

                    >

                        ${tanggal}


                        ${
                            agendaHariIni.length > 0

                            ? `

                                <span

                                    class="
                                        absolute
                                        bottom-1
                                        left-1/2
                                        -translate-x-1/2
                                        w-1.5
                                        h-1.5
                                        rounded-full
                                        bg-white
                                    "

                                >

                                </span>

                            `

                            : ""

                        }

                    </button>

                `;

            }

        }


        /*
        |--------------------------------------------------------------------------
        | LIHAT DETAIL AGENDA
        |--------------------------------------------------------------------------
        */

        async function lihatAgenda(tanggal) {

            const detail =
                document.getElementById("detailAgenda");


            detail.innerHTML = `

                <div class="
                    bg-white
                    rounded-2xl
                    shadow
                    border border-slate-100
                    p-6
                    text-center
                    text-slate-500
                ">

                    Memuat agenda...

                </div>

            `;


            try {

                const response =
                    await fetch(`/api/agenda/tanggal/${tanggal}`);


                if (!response.ok) {

                    throw new Error("Gagal mengambil agenda");

                }


                const data =
                    await response.json();


                if (data.agenda.length === 0) {

                    detail.innerHTML = `

                        <div class="
                            bg-white
                            rounded-2xl
                            shadow-sm
                            border border-slate-100
                            p-6
                            text-center
                        ">

                            <p class="text-slate-500">

                                Tidak ada agenda pada tanggal

                                <strong class="text-[#005C3B]">

                                    ${formatTanggal(tanggal)}

                                </strong>.

                            </p>

                        </div>

                    `;


                    return;

                }


                detail.innerHTML = `

                    <div class="
                        bg-white
                        rounded-2xl sm:rounded-3xl
                        border border-slate-100
                        shadow-lg
                        p-5 sm:p-6
                    ">


                        <!-- JUDUL DETAIL -->

                        <div class="
                            flex items-center gap-3
                            mb-5
                            pb-4
                            border-b border-slate-100
                        ">

                            <div class="
                                w-11 h-11
                                rounded-xl
                                bg-green-50
                                flex items-center justify-center
                                text-2xl
                            ">

                                📅

                            </div>


                            <h2 class="
                                text-xl sm:text-2xl
                                font-bold
                                text-[#005C3B]
                            ">

                                Agenda ${formatTanggal(tanggal)}

                            </h2>

                        </div>


                        <!-- DAFTAR AGENDA -->

                        <div class="space-y-4">

                            ${data.agenda.map(item => `

                                <div class="
                                    border-l-4
                                    border-[#008C45]
                                    bg-[#F5FAF7]
                                    p-4 sm:p-5
                                    rounded-r-xl
                                    hover:shadow-sm
                                    transition
                                ">


                                    <!-- JUDUL + STATUS -->

                                    <div class="
                                        flex flex-col sm:flex-row
                                        sm:items-start
                                        sm:justify-between
                                        gap-3
                                    ">


                                        <h3 class="
                                            text-lg sm:text-xl
                                            font-bold
                                            text-slate-800
                                        ">

                                            ${escapeHtml(item.judul)}

                                        </h3>


                                        <span class="
                                            self-start
                                            text-xs
                                            font-semibold
                                            px-3
                                            py-1
                                            rounded-full

                                            ${
                                                item.status === "selesai"

                                                    ? "bg-orange-100 text-orange-700"

                                                    : "bg-green-100 text-green-700"
                                            }

                                        ">

                                            ${
                                                item.status === "selesai"

                                                    ? "Selesai"

                                                    : "Akan Datang"
                                            }

                                        </span>

                                    </div>


                                    ${
                                        item.deskripsi

                                            ? `

                                                <p class="
                                                    text-sm sm:text-base
                                                    text-slate-600
                                                    mt-3
                                                    leading-relaxed
                                                ">

                                                    ${escapeHtml(item.deskripsi)}

                                                </p>

                                            `

                                            : ""

                                    }


                                    <!-- INFORMASI -->

                                    <div class="
                                        mt-4
                                        space-y-2
                                        text-sm
                                        text-slate-600
                                    ">


                                        ${
                                            item.waktu_mulai

                                                ? `

                                                    <div class="
                                                        flex items-start gap-2
                                                    ">

                                                        <span>
                                                            🕐
                                                        </span>

                                                        <span>

                                                            ${item.waktu_mulai.substring(0,5)}

                                                            ${
                                                                item.waktu_selesai

                                                                    ? ` - ${item.waktu_selesai.substring(0,5)}`

                                                                    : ""
                                                            }

                                                        </span>

                                                    </div>

                                                `

                                                : ""

                                        }


                                        ${
                                            item.lokasi

                                                ? `

                                                    <div class="
                                                        flex items-start gap-2
                                                    ">

                                                        <span>
                                                            📍
                                                        </span>

                                                        <span>
                                                            ${escapeHtml(item.lokasi)}
                                                        </span>

                                                    </div>

                                                `

                                                : ""

                                        }


                                        ${
                                            item.penyelenggara

                                                ? `

                                                    <div class="
                                                        flex items-start gap-2
                                                    ">

                                                        <span>
                                                            👤
                                                        </span>

                                                        <span>
                                                            ${escapeHtml(item.penyelenggara)}
                                                        </span>

                                                    </div>

                                                `

                                                : ""

                                        }

                                    </div>

                                </div>

                            `).join("")}

                        </div>

                    </div>

                `;


                // Scroll otomatis ke detail

                detail.scrollIntoView({

                    behavior: "smooth",

                    block: "start"

                });


            } catch (error) {

                console.error(error);


                detail.innerHTML = `

                    <div class="
                        bg-white
                        rounded-2xl
                        shadow-sm
                        border border-red-100
                        p-6
                        text-center
                        text-red-500
                    ">

                        Gagal mengambil data agenda.

                    </div>

                `;

            }

        }


        /*
        |--------------------------------------------------------------------------
        | FORMAT TANGGAL
        |--------------------------------------------------------------------------
        */

        function formatTanggal(tanggal) {

            const date =
                new Date(tanggal + "T00:00:00");


            return `

                ${date.getDate()}
                ${namaBulan[date.getMonth()]}
                ${date.getFullYear()}

            `;

        }


        /*
        |--------------------------------------------------------------------------
        | PINDAH BULAN
        |--------------------------------------------------------------------------
        */

        function ubahBulan(offset) {

            tanggalSekarang.setMonth(

                tanggalSekarang.getMonth() + offset

            );


            document.getElementById("detailAgenda").innerHTML = "";


            loadAgenda();

        }


        /*
        |--------------------------------------------------------------------------
        | KEAMANAN OUTPUT
        |--------------------------------------------------------------------------
        */

        function escapeHtml(text) {

            if (!text) return "";


            return text

                .replace(/&/g, "&amp;")

                .replace(/</g, "&lt;")

                .replace(/>/g, "&gt;")

                .replace(/"/g, "&quot;")

                .replace(/'/g, "&#039;");

        }


        /*
        |--------------------------------------------------------------------------
        | JALANKAN
        |--------------------------------------------------------------------------
        */

        loadAgenda();

    </script>

</body>

</html>

