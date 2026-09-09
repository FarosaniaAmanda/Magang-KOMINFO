<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7] text-[#17211B]">

    <!-- NAVBAR -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            <a href="/" class="flex items-center gap-3">

                <div class="w-14 h-16 rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('images/logo.jpeg') }}"
                        alt="Logo E-Government"
                        class="w-full h-full object-cover"
                    >
                </div>

                <div>
                    <h1 class="font-bold text-xl text-slate-800">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-xs text-slate-500">
                        Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
                    </p>
                </div>

            </a>

            <a
                href="/"
                class="text-[#008C45] font-semibold hover:text-[#006F38] transition"
            >
                ← Kembali
            </a>

        </div>

    </nav>


    <!-- AGENDA -->

    <main class="min-h-[70vh] py-12">

        <div class="max-w-5xl mx-auto px-6">

            <!-- JUDUL -->

            <div class="text-center mb-8">

                <div class="text-5xl mb-4">
                    📅
                </div>

                <h1 class="text-4xl font-bold text-[#005C3B]">
                    Agenda E-Government
                </h1>

                <p class="text-slate-600 mt-2">
                    Agenda kegiatan E-Government Kota Pasuruan
                </p>

            </div>


            <!-- KALENDER -->

            <div class="bg-white rounded-3xl shadow-lg p-6">

                <!-- NAVIGASI BULAN -->

                <div class="flex items-center justify-between mb-6">

                    <button
                        onclick="ubahBulan(-1)"
                        class="w-10 h-10 rounded-full bg-[#E8F5EE] text-[#008C45] font-bold hover:bg-[#008C45] hover:text-white transition"
                    >
                        ←
                    </button>

                    <h2
                        id="bulanTahun"
                        class="text-xl font-bold text-[#005C3B]"
                    >
                        Memuat...
                    </h2>

                    <button
                        onclick="ubahBulan(1)"
                        class="w-10 h-10 rounded-full bg-[#E8F5EE] text-[#008C45] font-bold hover:bg-[#008C45] hover:text-white transition"
                    >
                        →
                    </button>

                </div>


                <!-- HARI -->

                <div class="grid grid-cols-7 text-center font-semibold text-sm mb-3">

                    <div class="text-red-500">Min</div>
                    <div>Sen</div>
                    <div>Sel</div>
                    <div>Rab</div>
                    <div>Kam</div>
                    <div>Jum</div>
                    <div>Sab</div>

                </div>


                <!-- TANGGAL -->

                <div
                    id="kalender"
                    class="grid grid-cols-7 gap-2"
                >
                </div>


                <!-- KETERANGAN -->

                <div class="flex flex-wrap justify-center gap-5 mt-7 text-sm">

                    <div class="flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-green-500"></span>
                        Hari ini
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-yellow-400"></span>
                        Ada agenda
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-orange-400"></span>
                        Agenda selesai
                    </div>

                </div>

            </div>


            <!-- DETAIL -->

            <div
                id="detailAgenda"
                class="mt-8"
            >
            </div>

        </div>

    </main>


    <!-- FOOTER -->

    <footer class="bg-gradient-to-br from-[#075E4A] to-[#087F5B] text-white">

        <div class="max-w-7xl mx-auto px-6 py-8 text-center">

            <p class="text-sm text-white/80">
                © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.
            </p>

        </div>

    </footer>


    <!-- JAVASCRIPT AGENDA -->

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
                    <div class="col-span-7 text-center py-8 text-red-500">
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
                            h-14
                            rounded-xl
                            ${warna}
                            ${warnaMinggu}
                            font-semibold
                            hover:scale-105
                            transition
                            relative
                        "
                    >

                        ${tanggal}

                        ${
                            agendaHariIni.length > 0
                            ? `
                                <span
                                    class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1.5 h-1.5 rounded-full bg-white">
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
                <div class="bg-white rounded-2xl shadow p-6 text-center text-slate-500">
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

                        <div class="bg-white rounded-2xl shadow p-6 text-center">

                            <p class="text-slate-500">
                                Tidak ada agenda pada tanggal
                                <strong>${formatTanggal(tanggal)}</strong>.
                            </p>

                        </div>

                    `;

                    return;

                }


                detail.innerHTML = `

                    <div class="bg-white rounded-3xl shadow-lg p-6">

                        <h2 class="text-2xl font-bold text-[#005C3B] mb-5">
                            Agenda ${formatTanggal(tanggal)}
                        </h2>

                        <div class="space-y-4">

                            ${data.agenda.map(item => `

                                <div class="border-l-4 border-[#008C45] bg-[#F5FAF7] p-5 rounded-r-xl">

                                    <div class="flex items-start justify-between gap-4">

                                        <h3 class="text-xl font-bold text-slate-800">
                                            ${escapeHtml(item.judul)}
                                        </h3>

                                        <span class="
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
                                            <p class="text-slate-600 mt-3 leading-relaxed">
                                                ${escapeHtml(item.deskripsi)}
                                            </p>
                                        `
                                        : ""
                                    }


                                    <div class="mt-4 space-y-2 text-sm text-slate-600">

                                        ${
                                            item.waktu_mulai
                                            ? `
                                                <div>
                                                    🕐
                                                    ${item.waktu_mulai.substring(0,5)}

                                                    ${
                                                        item.waktu_selesai
                                                        ? ` - ${item.waktu_selesai.substring(0,5)}`
                                                        : ""
                                                    }
                                                </div>
                                            `
                                            : ""
                                        }


                                        ${
                                            item.lokasi
                                            ? `
                                                <div>
                                                    📍 ${escapeHtml(item.lokasi)}
                                                </div>
                                            `
                                            : ""
                                        }


                                        ${
                                            item.penyelenggara
                                            ? `
                                                <div>
                                                    👤 ${escapeHtml(item.penyelenggara)}
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

                    <div class="bg-white rounded-2xl shadow p-6 text-center text-red-500">

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